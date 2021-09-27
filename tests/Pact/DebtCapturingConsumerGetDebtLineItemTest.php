<?php

namespace Pact;

use Datenkraft\Backbone\Client\BaseApi\ClientFactory;
use Datenkraft\Backbone\Client\BaseApi\Exceptions\AuthException;
use Datenkraft\Backbone\Client\BaseApi\Exceptions\ConfigException;
use Datenkraft\Backbone\Client\DebtCapturingApi\Client;
use DateTime;
use DateTimeInterface;
use Exception;
use Psr\Http\Message\ResponseInterface;

/**
 * Class SKUUsageConsumerGetTaskTest
 * @package Pact
 */
class DebtCapturingConsumerGetDebtLineItemTest extends DebtCapturingConsumerTest
{
    protected string $projectId;
    protected string $dateFrom;
    protected string $dateTo;
    protected string $debtLineItemId;

    /**
     * @throws Exception
     */
    protected function setUp(): void
    {
        parent::setUp();

        $this->method = 'GET';

        $this->requestHeaders = [
            'Authorization' => 'Bearer ' . $this->token,
        ];
        $this->responseHeaders = [
            'Content-Type' => 'application/json',
        ];

        $this->debtLineItemId = '8388e0c9-080c-449c-af8c-0de620268f33';

        $this->requestData = [];
        $this->responseData = [
            'debtLineItemId' => $this->debtLineItemId,
            'skuCode' => $this->skuCode,
            'quantity' => 1,
            'projectId' => $this->projectId,
            'usageStart' => $this->matcher->like((new DateTime())->format(DateTimeInterface::ATOM)),
            'usageEnd' => $this->matcher->like((new DateTime())->format(DateTimeInterface::ATOM)),
            'priceTotalMinor' => 1000,
            'priceCurrency' => 'EUR',
            'invoiceNumber' => null,
            ];

        $this->path = '/debt-line-item/' . $this->debtLineItemId;
    }

    public function testGetDebtLineItemSuccess(): void
    {
        $this->expectedStatusCode = '200';

        $this->builder
            ->given('The request is valid, the token is valid and has a valid scope')
            ->uponReceiving('Successful GET request to /debt-line-item/{debtLineItemId}');

        $this->beginTest();
    }

    public function testGetDebtLineItemUnauthorized(): void
    {
        $this->token = 'invalid_token';
        $this->requestHeaders['Authorization'] = 'Bearer ' . $this->token;

        $this->expectedStatusCode = '401';
        $this->errorResponse['errors'][0]['code'] = strval($this->expectedStatusCode);

        $this->builder
            ->given('The token is invalid')
            ->uponReceiving('Unauthorized GET request to /debt-line-item/{debtLineItemId}');

        $this->responseData = $this->errorResponse;
        $this->beginTest();
    }

    public function testGetDebtLineItemForbidden(): void
    {
        $this->token = getenv('CONTRACT_TEST_CLIENT_WITHOUT_PERMISSIONS_TOKEN');
        $this->requestHeaders['Authorization'] = 'Bearer ' . $this->token;

        $this->expectedStatusCode = '403';
        $this->errorResponse['errors'][0]['code'] = strval($this->expectedStatusCode);

        $this->builder
            ->given('The token is valid with an invalid scope')
            ->uponReceiving('Forbidden GET request to /debt-line-item/{debtLineItemId}');

        $this->responseData = $this->errorResponse;
        $this->beginTest();
    }

    public function testGetDebtLineItemNotFound(): void
    {
        // Path with debtLineItemId for non existent debtLineItem
        $this->debtLineItemId = $this->debtLineItemIdNotFound;
        $this->path = '/debt-line-item/' . $this->debtLineItemId;

        // Error code in response is 404
        $this->expectedStatusCode = '404';
        $this->errorResponse['errors'][0]['code'] = strval($this->expectedStatusCode);

        $this->builder
            ->given('A debtLineItem with debtLineItemId does not exist')
            ->uponReceiving('Not Found GET request to /debt-line-item/{debtLineItemId}');

        $this->responseData = $this->errorResponse;
        $this->beginTest();
    }

    public function testGetDebtLineItemBadRequest(): void
    {
        // invalid uuid debtLineItemId
        $this->debtLineItemId = 'invalid_uuid';
        $this->path = '/debt-line-item/' . $this->debtLineItemId;

        // Error code in response is 400
        $this->expectedStatusCode = '400';
        $this->errorResponse['errors'][0]['code'] = strval($this->expectedStatusCode);

        $this->builder
            ->given('The request query is invalid')
            ->uponReceiving('Bad GET request to /debt-line-item/{debtLineItemId}');

        $this->responseData = $this->errorResponse;
        $this->beginTest();
    }

    /**
     * @throws AuthException
     * @throws ConfigException
     */
    protected function doClientRequest(): ResponseInterface
    {
        $factory = new ClientFactory(
            ['clientId' => 'test', 'clientSecret' => 'test', 'oAuthTokenUrl' => 'test', 'oAuthScopes' => ['test']]
        );
        $factory->setToken($this->token);
        $client = Client::createWithFactory($factory, $this->config->getBaseUri());

        return $client->getDebtLineItem($this->debtLineItemId, Client::FETCH_RESPONSE);
    }
}

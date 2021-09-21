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
class DebtCapturingConsumerGetDebtLineItemCollectionTest extends DebtCapturingConsumerTest
{
    /**
     * @throws Exception
     */
    protected function setUp(): void
    {
        parent::setUp();

        $this->method = 'GET';

        $this->token = getenv('VALID_TOKEN_DEBT_LINE_ITEM_GET');

        $this->requestHeaders = [
            'Authorization' => 'Bearer ' . $this->token,
        ];
        $this->responseHeaders = [
            'Content-Type' => 'application/json',
        ];

        $this->requestData = [];
        $this->responseData = [
            [
                'debtLineItemId' => $this->matcher->uuid(),
                'skuCode' => $this->skuCode,
                'quantity' => 1,
                'projectId' => $this->projectId,
                'usageStart' => $this->matcher->like((new DateTime())->format(DateTimeInterface::ATOM)),
                'usageEnd' => $this->matcher->like((new DateTime())->format(DateTimeInterface::ATOM)),
                'priceTotalMinor' => 1000,
                'priceCurrency' => 'EUR',
                'invoiceNumber' => null,
            ],
            [
                'debtLineItemId' => $this->matcher->uuid(),
                'skuCode' => $this->skuCode,
                'quantity' => 2,
                'projectId' => $this->projectId,
                'usageStart' => $this->matcher->like((new DateTime())->format(DateTimeInterface::ATOM)),
                'usageEnd' => $this->matcher->like((new DateTime())->format(DateTimeInterface::ATOM)),
                'priceTotalMinor' => 2000,
                'priceCurrency' => 'EUR',
                'invoiceNumber' => null,
            ],
        ];

        $this->queryParams = [
            'filter[projectId]' => $this->projectId,
            'filter[dateFrom]' => $this->dateFrom,
            'filter[dateTo]' => $this->dateTo,
        ];

        $this->path = '/debt-line-item';
    }

    public function testGetDebtLineItemCollectionSuccess(): void
    {
        $this->expectedStatusCode = '200';

        $this->builder
            ->given('The request is valid, the token is valid and has a valid scope')
            ->uponReceiving('Successful GET request to /debt-line-item');

        $this->beginTest();
    }

    public function testGetDebtLineItemCollectionUnauthorized(): void
    {
        $this->token = 'invalid_token';
        $this->requestHeaders['Authorization'] = 'Bearer ' . $this->token;

        $this->expectedStatusCode = '401';
        $this->errorResponse['errors'][0]['code'] = strval($this->expectedStatusCode);

        $this->builder
            ->given('The token is invalid')
            ->uponReceiving('Unauthorized GET request to /debt-line-item');

        $this->responseData = $this->errorResponse;
        $this->beginTest();
    }

    public function testGetDebtLineItemCollectionForbidden(): void
    {
        $this->token = getenv('VALID_TOKEN_SKU_USAGE_POST');
        $this->requestHeaders['Authorization'] = 'Bearer ' . $this->token;

        $this->expectedStatusCode = '403';
        $this->errorResponse['errors'][0]['code'] = strval($this->expectedStatusCode);

        $this->builder
            ->given('The token is valid with an invalid scope')
            ->uponReceiving('Forbidden GET request to /debt-line-item');

        $this->responseData = $this->errorResponse;
        $this->beginTest();
    }

    public function testGetDebtLineItemCollectionBadRequest(): void
    {
        // invalid uuid query param projectId
        $this->queryParams['filter[projectId]'] = 'invalid_uuid';

        // Error code in response is 400
        $this->expectedStatusCode = '400';
        $this->errorResponse['errors'][0]['code'] = strval($this->expectedStatusCode);

        $this->builder
            ->given('The request query is invalid or missing')
            ->uponReceiving('Bad GET request to /debt-line-item');

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

        return $client->getDebtLineItemCollection($this->queryParams, Client::FETCH_RESPONSE);
    }
}

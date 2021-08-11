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
class DebtCapturingConsumerGetDebtLineItemCsvTest extends DebtCapturingConsumerTest
{
    /** @var string[] */
    protected $responseHeadersSuccess;
    /** @var string */
    protected $projectId;
    /** @var string */
    protected $dateFrom;
    /** @var string */
    protected $dateTo;

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
        $this->responseHeadersSuccess = [
            'Content-Type' => 'text/csv',
        ];

        $this->projectId = '52e84eca-2857-467e-9aa2-70182e34f8e1'; // labelhair
        $this->dateFrom = (new DateTime('2021-06-01 11:11:11'))->format(DateTimeInterface::ATOM);
        $this->dateTo = (new DateTime('2021-07-01 11:11:11'))->format(DateTimeInterface::ATOM);

        $this->requestData = [];
        $this->responseData = [];

        $this->queryParams = [
            'filter[projectId]' => $this->projectId,
            'filter[dateFrom]' => $this->dateFrom,
            'filter[dateTo]' => $this->dateTo,
        ];

        $this->path = '/debt-line-item/csv';
    }

    public function testGetDebtLineItemCsvSuccess()
    {
        $this->expectedStatusCode = '200';

        $this->builder
            ->given('The request is valid, the token is valid and has a valid scope')
            ->uponReceiving('Successful GET request to /debt-line-item/csv');

        $this->beginTest();
    }

    public function testGetDebtLineItemCsvUnauthorized()
    {
        $this->token = 'invalid_token';
        $this->requestHeaders['Authorization'] = 'Bearer ' . $this->token;

        $this->expectedStatusCode = '401';
        $this->errorResponse['errors'][0]['code'] = strval($this->expectedStatusCode);

        $this->builder
            ->given('The token is invalid')
            ->uponReceiving('Unauthorized GET request to /debt-line-item/csv');

        $this->responseData = $this->errorResponse;
        $this->beginTest();
    }

    public function testGetDebtLineItemCsvForbidden()
    {
        $this->token = getenv('VALID_TOKEN_SKU_USAGE_POST');
        $this->requestHeaders['Authorization'] = 'Bearer ' . $this->token;

        $this->expectedStatusCode = '403';
        $this->errorResponse['errors'][0]['code'] = strval($this->expectedStatusCode);

        $this->builder
            ->given('The token is valid with an invalid scope')
            ->uponReceiving('Forbidden GET request to /debt-line-item/csv');

        $this->responseData = $this->errorResponse;
        $this->beginTest();
    }

    /**
     * @throws AuthException
     * @throws ConfigException
     */
    protected function doClientRequest()
    {
        $factory = new ClientFactory(
            ['clientId' => 'test', 'clientSecret' => 'test', 'oAuthTokenUrl' => 'test', 'oAuthScopes' => ['test']]
        );
        $factory->setToken($this->token);
        $client = Client::createWithFactory($factory, $this->config->getBaseUri());

        return $client->getDebtLineItemCsv($this->queryParams);
    }
}

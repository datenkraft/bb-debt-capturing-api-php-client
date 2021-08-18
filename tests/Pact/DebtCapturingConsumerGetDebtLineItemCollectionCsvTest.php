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
class DebtCapturingConsumerGetDebtLineItemCollectionCsvTest extends DebtCapturingConsumerTest
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
            'Content-Type' => 'text/csv; charset=UTF-8',
            'Content-Disposition' => $this->matcher
                ->like('attachment; filename=' . (new DateTime())->format('Y-m-d-H:i:s') . '_debtLineItems.csv'),
        ];

        $this->projectId = 'ba74c99d-d622-4dcd-a1d5-f3db80d0a1c8';
        $this->dateFrom = (new DateTime('2021-06-01 11:11:11'))->format(DateTimeInterface::ATOM);
        $this->dateTo = (new DateTime('2021-07-01 11:11:11'))->format(DateTimeInterface::ATOM);

        $this->requestData = [];
        $this->responseData = $this->matcher->like(
            "Id,Sku_Code,Quantity,Project_Id,Unit,UsageStart,UsageEnd,PriceTotalMinor,PriceCurrency\n" .
            "4c3e0218-c4b4-4123-956a-19820f33c30e,test_sku_code,1,ba74c99d-d622-4dcd-a1d5-f3db80d0a1c8,,\"2021-06-03 11:11:11\",\"2021-07-01 11:11:11\",100,EUR\n" .
            "5642739b-c556-4125-95d5-89ec24f765df,test_sku_code,1,ba74c99d-d622-4dcd-a1d5-f3db80d0a1c8,,\"2021-06-04 11:11:11\",\"2021-07-01 11:11:11\",100,EUR\n" .
            "67b33bd3-6103-47b6-aee2-6f466ca7aa17,test_sku_code,1,ba74c99d-d622-4dcd-a1d5-f3db80d0a1c8,,\"2021-06-05 11:11:11\",\"2021-07-01 11:11:11\",100,EUR\n" .
            "67c7c3de-87ff-4d40-9f4c-4b0ee20391f0,test_sku_code,1,ba74c99d-d622-4dcd-a1d5-f3db80d0a1c8,,\"2021-06-01 11:11:11\",\"2021-07-01 11:11:11\",100,EUR\n" .
            "73a3ddee-f234-4834-8a5b-349094537e5d,test_sku_code,1,ba74c99d-d622-4dcd-a1d5-f3db80d0a1c8,,\"2021-06-02 11:11:11\",\"2021-07-01 11:11:11\",100,EUR\n"
        );

        $this->queryParams = [
            'filter[projectId]' => $this->projectId,
            'filter[dateFrom]' => $this->dateFrom,
            'filter[dateTo]' => $this->dateTo,
        ];

        $this->path = '/debt-line-item/csv';
    }

    public function testGetDebtLineItemCollectionCsvSuccess(): void
    {
        $this->expectedStatusCode = '200';
        $this->responseHeaders = $this->responseHeadersSuccess;

        $this->builder
            ->given('The request is valid, the token is valid and has a valid scope')
            ->uponReceiving('Successful GET request to /debt-line-item/csv');

        $this->beginTest();
    }

    public function testGetDebtLineItemCollectionCsvUnauthorized(): void
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

    public function testGetDebtLineItemCollectionCsvForbidden(): void
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

    public function testGetDebtLineItemCollectionCsvBadRequest(): void
    {
        // invalid uuid query param projectId
        $this->queryParams['filter[projectId]'] = 'invalid_uuid';

        // Error code in response is 400
        $this->expectedStatusCode = '400';
        $this->errorResponse['errors'][0]['code'] = strval($this->expectedStatusCode);

        $this->builder
            ->given('The request query is invalid or missing')
            ->uponReceiving('Bad GET request to /debt-line-item/csv');

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

        return $client->getDebtLineItemCsv($this->queryParams, Client::FETCH_RESPONSE);
    }
}

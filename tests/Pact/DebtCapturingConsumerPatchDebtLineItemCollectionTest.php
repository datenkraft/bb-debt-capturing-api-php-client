<?php

namespace Pact;

use Datenkraft\Backbone\Client\BaseApi\ClientFactory;
use Datenkraft\Backbone\Client\BaseApi\Exceptions\ConfigException;
use Datenkraft\Backbone\Client\DebtCapturingApi\Client;
use Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model\PatchDebtLineItemResource;
use DateTime;
use DateTimeInterface;
use Exception;
use Psr\Http\Message\ResponseInterface;

/**
 * Class DebtCapturingConsumerPatchDebtLineItemCollectionTest
 * @package Pact
 */
class DebtCapturingConsumerPatchDebtLineItemCollectionTest extends DebtCapturingConsumerTest
{
    /** @var string */
    protected $debtLineItemId1;
    /** @var string */
    protected $debtLineItemId2;
    /** @var string */
    protected $debtLineItemIdUnprocessable;
    /** @var string */
    protected $debtLineItemIdInvalid;

    /**
     * @throws Exception
     */
    protected function setUp(): void
    {
        parent::setUp();

        $this->method = 'PATCH';

        $this->token = getenv('VALID_TOKEN_DEBT_LINE_ITEM_PATCH');

        $this->requestHeaders = [
            'Authorization' => 'Bearer ' . $this->token,
            'Content-Type' => 'application/json'
        ];
        $this->responseHeaders = [
            'Content-Type' => 'application/json'
        ];

        $this->debtLineItemId1 = '7b3151d3-cdee-4971-936c-a26bd853d58f';
        $this->debtLineItemId2 = '464d7292-1e3f-4dd0-b3bd-16d6f15eb020';
        $this->debtLineItemIdUnprocessable = '744226b0-7c59-4ee5-ad4f-7b4209311536';
        $this->debtLineItemIdInvalid = 'invalid_uuid';

        $invoiceNumber1 = 'invoiceNumber_test_1';
        $invoiceNumber2 = 'invoiceNumber_test_2';
        $this->requestData = [
            [
                'debtLineItemId' => $this->debtLineItemId1,
                'invoiceNumber' => $invoiceNumber1,
            ],
            [
                'debtLineItemId' => $this->debtLineItemId2,
                'invoiceNumber' => $invoiceNumber2,
            ],
        ];

        $this->responseData = [
            [
                'debtLineItemId' => $this->debtLineItemId1,
                'skuCode' => $this->skuCode,
                'quantity' => 1,
                'projectId' => $this->projectId,
                'usageStart' => $this->matcher->like((new DateTime())->format(DateTimeInterface::ATOM)),
                'usageEnd' => $this->matcher->like((new DateTime())->format(DateTimeInterface::ATOM)),
                'priceTotalMinor' => 1000,
                'priceCurrency' => 'EUR',
                'invoiceNumber' => $invoiceNumber1,
            ],
            [
                'debtLineItemId' => $this->debtLineItemId2,
                'skuCode' => $this->skuCode,
                'quantity' => 2,
                'projectId' => $this->projectId,
                'usageStart' => $this->matcher->like((new DateTime())->format(DateTimeInterface::ATOM)),
                'usageEnd' => $this->matcher->like((new DateTime())->format(DateTimeInterface::ATOM)),
                'priceTotalMinor' => 2000,
                'priceCurrency' => 'EUR',
                'invoiceNumber' => $invoiceNumber2,
            ],
        ];

        $this->path = '/debt-line-item';
    }

    public function tearDown(): void
    {
        parent::tearDown();
    }

    public function testPatchDebtLineItemCollectionSuccess()
    {
        $this->expectedStatusCode = '200';

        // Build and register the interaction
        $this->builder
            ->given(
                'The debtLineItem exists, ' .
                'the debtLineItems invoiceNumber is not yet set, ' .
                'the request is valid, the token is valid and has a valid scope'
            )
            ->uponReceiving('Successful PATCH request to /debt-line-item');

        $this->beginTest();
    }

    public function testPatchDebtLineItemCollectionUnauthorized()
    {
        // Invalid token
        $this->token = 'invalid_token';
        $this->requestHeaders['Authorization'] = 'Bearer ' . $this->token;

        // Error code in response is 401, extra is not defined
        $this->expectedStatusCode = '401';
        $this->errorResponse['errors'][0]['code'] = strval($this->expectedStatusCode);

        $this->builder
            ->given('The token is invalid')
            ->uponReceiving('Unauthorized PATCH request to /debt-line-item');

        $this->responseData = $this->errorResponse;
        $this->beginTest();
    }

    public function testPatchDebtLineItemCollectionForbidden()
    {
        // Token with invalid scope
        $this->token = getenv('VALID_TOKEN_SKU_USAGE_POST');
        $this->requestHeaders['Authorization'] = 'Bearer ' . $this->token;

        // Error code in response is 403, extra is not defined
        $this->expectedStatusCode = '403';
        $this->errorResponse['errors'][0]['code'] = strval($this->expectedStatusCode);

        $this->builder
            ->given('The token is valid with an invalid scope')
            ->uponReceiving('Forbidden PATCH request to /debt-line-item');

        $this->responseData = $this->errorResponse;
        $this->beginTest();
    }

    public function testPatchDebtLineItemCollectionNotFound(): void
    {
        // debtLineItemId for non existent debtLineItem
        $this->requestData[0]['debtLineItemId'] = $this->debtLineItemIdNotFound;
        unset($this->requestData[1]);

        // Error code in response is 404
        $this->expectedStatusCode = '404';
        $this->errorResponse['errors'][0]['code'] = strval($this->expectedStatusCode);
        $this->errorResponse['errors'][0]['extra'] = [
            'debtLineItemId' => $this->requestData[0]['debtLineItemId']
        ];

        $this->builder
            ->given('A debtLineItem with debtLineItemId does not exist')
            ->uponReceiving('Not Found PATCH request to /debt-line-item');

        $this->responseData = $this->errorResponse;
        $this->beginTest();
    }


    /**
     * @throws Exception
     */
    public function testPatchDebtLineItemCollectionUnprocessableEntity()
    {
        // the invoiceNumber of the debtLineItem is already set
        $this->requestData[0]['debtLineItemId'] = $this->debtLineItemIdUnprocessable;
        unset($this->requestData[1]);

        // Error code in response is 422
        $this->expectedStatusCode = '422';
        $this->errorResponse['errors'][0]['code'] = strval($this->expectedStatusCode);
        $this->errorResponse['errors'][0]['extra'] = [
            'debtLineItemId' => $this->requestData[0]['debtLineItemId']
        ];

        $this->builder
            ->given(
                'The debtLineItem exists, ' .
                'the debtLineItems invoiceNumber is already set, ' .
                'the request is valid, the token is valid and has a valid scope'
            )
            ->uponReceiving('Unprocessable Entity PATCH request to /debt-line-item');

        $this->responseData = $this->errorResponse;
        $this->beginTest();
    }

    /**
     * @throws Exception
     */
    public function testPatchDebtLineItemCollectionBadRequest()
    {
        // debtLineItemId is an invalid uuid
        $this->requestData[0]['debtLineItemId'] = $this->debtLineItemIdInvalid;
        unset($this->requestData[1]);

        // Error code in response is 400
        $this->expectedStatusCode = '400';
        $this->errorResponse['errors'][0]['code'] = strval($this->expectedStatusCode);

        $this->builder
            ->given('The debtLineItemId in the request is empty')
            ->uponReceiving('Bad PATCH request to /debt-line-item');

        $this->responseData = $this->errorResponse;
        $this->beginTest();
    }

    /**
     * @throws Exception
     */
    public function testPatchDebtLineItemCollectionMultipleErrors()
    {
        // debtLineItemId is an invalid uuid
        $this->requestData[0]['debtLineItemId'] = $this->debtLineItemIdInvalid;

        // Status code of the response is 400
        $this->expectedStatusCode = '400';

        // Error code of first error is 400
        $this->errorResponse['errors'][0] = [
            'code' => '400',
            'message' => $this->matcher->like('Example error message'),
        ];

        // the invoiceNumber of the debtLineItem is already set
        $this->requestData[1]['debtLineItemId'] = $this->debtLineItemIdUnprocessable;

        // Error code of second error is 422
        $this->errorResponse['errors'][1] = [
            'code' => '422',
            'message' => $this->matcher->like('Example error message'),
            'extra' => [
                'debtLineItemId' => $this->requestData[1]['debtLineItemId']
            ]
        ];

        $this->builder
            ->given(
                'No debtLineItemId is provided in the request, ' .
                'the debtLineItems invoiceNumber is already set, ' .
                'the request is valid, the token is valid and has a valid scope'
            )
            ->uponReceiving('Multiple Errors PATCH request to /debt-line-item');

        $this->responseData = $this->errorResponse;
        $this->beginTest();
    }

    /**
     * @throws ConfigException
     * @throws Exception
     */
    protected function doClientRequest(): ResponseInterface
    {
        $factory = new ClientFactory(
            ['clientId' => 'test', 'clientSecret' => 'test', 'oAuthTokenUrl' => 'test', 'oAuthScopes' => ['test']]
        );
        $factory->setToken($this->token);
        $client = Client::createWithFactory($factory, $this->config->getBaseUri());

        $debtLineItems = [];
        foreach ($this->requestData as $requestData) {
            $debtLineItems[] = (new PatchDebtLineItemResource())
                ->setDebtLineItemId($requestData['debtLineItemId'])
                ->setInvoiceNumber($requestData['invoiceNumber']);
        }

        return $client->PatchDebtLineItemCollection($debtLineItems, Client::FETCH_RESPONSE);
    }
}

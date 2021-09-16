<?php

namespace Pact;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use Psr\Http\Message\ResponseInterface;

class DebtCapturingConsumerPostPubSubSkuUsageAddedMessageTest extends DebtCapturingConsumerTest
{

    protected function setUp(): void
    {
        parent::setUp();

        $this->method = 'POST';

        $this->requestHeaders = [
            'Content-Type' => 'application/json',
        ];
        $this->responseHeaders = [
            'Content-Type' => 'application/json',
        ];

        $data = [
            'skuUsageId' => 'skuUsageId_test',
            'skuCode' => 'disco-reconsignment',
            'quantity' => 1,
            'projectId' => 'ba74c99d-d622-4dcd-a1d5-f3db80d0a1c8',
            'usageStart' => '2021-06-01T00:00:00+00:00',
            'usageEnd' => '2021-06-01T23:59:59+00:00',
            'externalId' => 'externalId_test',
            'meta' => [],
        ];
        $this->requestData = [
            'message' =>
                [
                    'data' => base64_encode(json_encode($data)),
                ],
        ];

        $this->responseData = [];

        $this->path = '/pubsub-push/sku-usage-added';
    }

    public function testPostPubSubSkuUsageAddedMessageSuccess(): void
    {
        $this->expectedStatusCode = '200';

        // Build and register the interaction
        $this->builder
            ->given(
                'the request is valid'
            )
            ->uponReceiving('Successful POST request to /pubsub-push');

        $this->beginTest();
    }

    public function testPostPubSubSkuUsageAddedMessageBadRequest(): void
    {
        // empty request body
        $this->requestData = [];

        $this->expectedStatusCode = '400';
        $this->errorResponse['errors'][0]['code'] = strval($this->expectedStatusCode);

        $this->builder
            ->given('An error occurred')
            ->uponReceiving('Bad POST request to /pubsub-push');

        $this->responseData = $this->errorResponse;
        $this->beginTest();
    }

    /**
     * @return ResponseInterface
     * @throws GuzzleException
     */
    protected function doClientRequest(): ResponseInterface
    {
        $client = new Client(['base_uri' => $this->config->getBaseUri()]);
        $options = [
            'headers' => $this->requestHeaders,
            'http_errors' => false,
            'body' => json_encode($this->requestData),
        ];

        return $client->post($this->path, $options);
    }
}

<?php

namespace Pact;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use Psr\Http\Message\ResponseInterface;

class DebtCapturingConsumerPostPubSubMessageTest extends DebtCapturingConsumerTest
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

        $data = "eyJza3VVc2FnZUlkIjoiMDc5ZDU1M2YtNjM2Zi00ODE0LWI3MzYtMTJjZGVlYzJjMWM4Iiwic2t1Q29kZSI6ImRpc2NvX3NoaXBwaW5nX2Nvc3RzLURITF9iaXNfMjBfMGtnIiwicXVhbnRpdHkiOjIsInByb2plY3RJZCI6IjUyZTg0ZWNhLTI4NTctNDY3ZS05YWEyLTcwMTgyZTM0ZjhlMSIsInVzYWdlU3RhcnQiOiIyMDIxLTA3LTAxVDAwOjAwOjAwKzAwOjAwIiwidXNhZ2VFbmQiOiIyMDIxLTA3LTAxVDIzOjU5OjU5KzAwOjAwIiwiZXh0ZXJuYWxJZCI6IkRJU0NPXzIwMjEwNzAxMDAwMDAwXzIwMjEwNzAxMjM1OTU5IiwibWV0YSI6eyJuYW1lIjoiREhMIGJpcyAyMCwwa2ciLCJjb3N0cyI6NCwiZ3JhbmRUb3RhbCI6OH19";
        $this->requestData = [
            "message" =>
                [
                    "attributes" => [
                        "key" => "value",
                    ],
                    "data" => $data,
                    "messageId" => "2070443601311540",
                    "message_id" => "2070443601311540",
                    "publishTime" => "2021-02-26T19:13:55.749Z",
                    "publish_time" => "2021-02-26T19:13:55.749Z",
                ],
            "subscription" => "projects/myproject/subscriptions/mysubscription",
        ];

        $this->responseData = [];

        $this->path = '/sku-usage';

        $this->path = '/pubsub-push';
    }

    public function testPostPubSubMessageSuccess(): void
    {
        $this->expectedStatusCode = '201';

        // Build and register the interaction
        $this->builder
            ->given(
                'the request is valid'
            )
            ->uponReceiving('Successful POST request to /pubsub-push');

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

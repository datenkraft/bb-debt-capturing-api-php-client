<?php

namespace Pact;

use Exception;
use PhpPact\Consumer\InteractionBuilder;
use PhpPact\Consumer\Matcher\Matcher;
use PhpPact\Standalone\MockService\MockServerEnvConfig;
use PHPUnit\Framework\TestCase;
use PhpPact\Consumer\Model\ConsumerRequest;
use PhpPact\Consumer\Model\ProviderResponse;

/**
 * Class DebtCapturingConsumerTest
 * @package Pact
 */
abstract class DebtCapturingConsumerTest extends TestCase
{
    protected $builder;
    protected $config;

    protected $token;

    protected $method;
    protected $path;

    protected $requestHeaders;
    protected $responseHeaders;
    protected $expectedStatusCode;

    protected $requestData;
    protected $responseData;
    protected $errorResponse;

    protected $matcher;

    protected $queryParams;

    protected $skuCode;

    /**
     * @throws Exception
     */
    protected function setUp(): void
    {
        parent::setUp();
        $this->matcher = new Matcher();
        $this->config = new MockServerEnvConfig();
        try {
            fsockopen($this->config->getHost(), $this->config->getPort());
        } catch (Exception $exception) {
            throw new Exception(
                'Mock server not running. Make sure the Testsuite was started with the PactTestListener: ' .
                $exception->getMessage()
            );
        }
        $this->builder = new InteractionBuilder($this->config);

        $this->errorResponse = [
            'errors' => [
                [
                    'code' => '0',
                    'message' => $this->matcher->like('Example error message'),
                ],
            ],
        ];

        $this->skuCode = 'skuCode_test';
    }

    protected function tearDown(): void
    {
        parent::tearDown();

        $this->builder->verify();
    }

    protected function beginTest(): void
    {
        $this->prepareTest();

        $response = $this->doClientRequest();

        $this->assertEquals($this->expectedStatusCode, $response->getStatusCode());
        if ($this->responseHeaders['Content-Type'] == 'application/json') {
            $this->assertJson($response->getBody());
        }
    }

    protected function prepareTest(): void
    {
        $consumerRequest = $this->createConsumerRequest(
            $this->method,
            $this->path,
            $this->requestHeaders,
            $this->requestData
        );
        $providerResponse = $this->createProviderResponse(
            $this->expectedStatusCode,
            $this->responseHeaders,
            $this->responseData
        );

        $this->builder->with($consumerRequest)->willRespondWith($providerResponse);
    }

    /**
     * @param string $method
     * @param string $path
     * @param array $requestHeaders
     * @param array $requestBody
     * @return ConsumerRequest
     */
    protected function createConsumerRequest(
        string $method,
        string $path,
        array $requestHeaders,
        array $requestBody = []
    ): ConsumerRequest {
        $request = new ConsumerRequest();
        $request->setMethod($method)->setPath($path);
        foreach ($requestHeaders as $header => $value) {
            $request->addHeader($header, $value);
        }
        if (is_array($this->queryParams)) {
            foreach ($this->queryParams as $queryParam => $value) {
                if (is_array($value)) {
                    $value = implode(',', $value);
                }
                $request->addQueryParameter($queryParam, urlencode($value));
            }
        }
        if (!empty($requestBody)) {
            $request->setBody($requestBody);
        }

        return $request;
    }

    /**
     * @param int $statusCode
     * @param array $responseHeaders
     * @param array|null $responseBody
     * @return ProviderResponse
     */
    protected function createProviderResponse(
        int $statusCode,
        array $responseHeaders,
        array $responseBody = null
    ): ProviderResponse {
        $response = new ProviderResponse();
        $response->setStatus($statusCode);
        foreach ($responseHeaders as $header => $value) {
            $response->addHeader($header, $value);
        }
        if ($responseBody !== null) {
            $response->setBody($responseBody);
        }

        return $response;
    }

    abstract protected function doClientRequest();

}

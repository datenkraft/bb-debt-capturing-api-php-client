<?php

namespace Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Endpoint;

class PatchInvoice extends \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Runtime\Client\BaseEndpoint implements \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Runtime\Client\Endpoint
{
    protected $invoiceId;
    /**
     * Updates some fields on an invoice. Only a limited set of fields can be updated
     *
     * @param string $invoiceId invoice id
     * @param \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model\UpdateInvoice $requestBody 
     */
    public function __construct(string $invoiceId, \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model\UpdateInvoice $requestBody)
    {
        $this->invoiceId = $invoiceId;
        $this->body = $requestBody;
    }
    use \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'PATCH';
    }
    public function getUri() : string
    {
        return str_replace(array('{invoiceId}'), array($this->invoiceId), '/invoice/{invoiceId}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model\UpdateInvoice) {
            return array(array('Content-Type' => array('application/json')), $serializer->serialize($this->body, 'json'));
        }
        return array(array(), null);
    }
    public function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Exception\PatchInvoiceBadRequestException
     * @throws \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Exception\PatchInvoiceUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Exception\PatchInvoiceForbiddenException
     * @throws \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Exception\PatchInvoiceNotFoundException
     * @throws \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Exception\PatchInvoiceConflictException
     * @throws \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Exception\PatchInvoiceInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model\Invoice|\Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model\ErrorResponse
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Datenkraft\\Backbone\\Client\\DebtCapturingApi\\Generated\\Model\\Invoice', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Exception\PatchInvoiceBadRequestException($serializer->deserialize($body, 'Datenkraft\\Backbone\\Client\\DebtCapturingApi\\Generated\\Model\\ErrorResponse', 'json'), $response);
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Exception\PatchInvoiceUnauthorizedException($serializer->deserialize($body, 'Datenkraft\\Backbone\\Client\\DebtCapturingApi\\Generated\\Model\\ErrorResponse', 'json'), $response);
        }
        if (is_null($contentType) === false && (403 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Exception\PatchInvoiceForbiddenException($serializer->deserialize($body, 'Datenkraft\\Backbone\\Client\\DebtCapturingApi\\Generated\\Model\\ErrorResponse', 'json'), $response);
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Exception\PatchInvoiceNotFoundException($serializer->deserialize($body, 'Datenkraft\\Backbone\\Client\\DebtCapturingApi\\Generated\\Model\\ErrorResponse', 'json'), $response);
        }
        if (is_null($contentType) === false && (409 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Exception\PatchInvoiceConflictException($serializer->deserialize($body, 'Datenkraft\\Backbone\\Client\\DebtCapturingApi\\Generated\\Model\\ErrorResponse', 'json'), $response);
        }
        if (is_null($contentType) === false && (500 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Exception\PatchInvoiceInternalServerErrorException($serializer->deserialize($body, 'Datenkraft\\Backbone\\Client\\DebtCapturingApi\\Generated\\Model\\ErrorResponse', 'json'), $response);
        }
        if (mb_strpos($contentType, 'application/json') !== false) {
            return $serializer->deserialize($body, 'Datenkraft\\Backbone\\Client\\DebtCapturingApi\\Generated\\Model\\ErrorResponse', 'json');
        }
        throw new \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Exception\UnexpectedStatusCodeException($status, $body);
    }
    public function getAuthenticationScopes() : array
    {
        return array('oAuthAuthorization', 'bearerAuth');
    }
}
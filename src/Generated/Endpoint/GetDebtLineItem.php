<?php

namespace Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Endpoint;

class GetDebtLineItem extends \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Runtime\Client\BaseEndpoint implements \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Runtime\Client\Endpoint
{
    protected $debtLineItemId;
    /**
     * Get a debtLineItem by debtLineItemId
     *
     * @param string $debtLineItemId debtLineItemId
     */
    public function __construct(string $debtLineItemId)
    {
        $this->debtLineItemId = $debtLineItemId;
    }
    use \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{debtLineItemId}'), array($this->debtLineItemId), '/debt-line-item/{debtLineItemId}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return array(array(), null);
    }
    public function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Exception\GetDebtLineItemBadRequestException
     * @throws \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Exception\GetDebtLineItemUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Exception\GetDebtLineItemForbiddenException
     * @throws \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Exception\GetDebtLineItemNotFoundException
     * @throws \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Exception\GetDebtLineItemInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model\DebtLineItemResource|\Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model\ErrorResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Datenkraft\\Backbone\\Client\\DebtCapturingApi\\Generated\\Model\\DebtLineItemResource', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Exception\GetDebtLineItemBadRequestException($serializer->deserialize($body, 'Datenkraft\\Backbone\\Client\\DebtCapturingApi\\Generated\\Model\\ErrorResponse', 'json'));
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Exception\GetDebtLineItemUnauthorizedException($serializer->deserialize($body, 'Datenkraft\\Backbone\\Client\\DebtCapturingApi\\Generated\\Model\\ErrorResponse', 'json'));
        }
        if (is_null($contentType) === false && (403 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Exception\GetDebtLineItemForbiddenException($serializer->deserialize($body, 'Datenkraft\\Backbone\\Client\\DebtCapturingApi\\Generated\\Model\\ErrorResponse', 'json'));
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Exception\GetDebtLineItemNotFoundException($serializer->deserialize($body, 'Datenkraft\\Backbone\\Client\\DebtCapturingApi\\Generated\\Model\\ErrorResponse', 'json'));
        }
        if (is_null($contentType) === false && (500 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Exception\GetDebtLineItemInternalServerErrorException($serializer->deserialize($body, 'Datenkraft\\Backbone\\Client\\DebtCapturingApi\\Generated\\Model\\ErrorResponse', 'json'));
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
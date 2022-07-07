<?php

namespace Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Endpoint;

class PatchDebtLineItemCollection extends \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Runtime\Client\BaseEndpoint implements \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Runtime\Client\Endpoint
{
    /**
     * Update debtLineItems by projectId and time range where the invoiceNumber is not already set
     *
     * @param \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model\DebtLineItemPatchBody $requestBody 
     * @param array $queryParameters {
     *     @var string $filter[projectId] projectId filter
     *     @var string $filter[dateFrom] dateFrom filter
     *     @var string $filter[dateTo] dateTo filter
     * }
     */
    public function __construct(\Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model\DebtLineItemPatchBody $requestBody, array $queryParameters = array())
    {
        $this->body = $requestBody;
        $this->queryParameters = $queryParameters;
    }
    use \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'PATCH';
    }
    public function getUri() : string
    {
        return '/debt-line-item';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model\DebtLineItemPatchBody) {
            return array(array('Content-Type' => array('application/json')), $serializer->serialize($this->body, 'json'));
        }
        return array(array(), null);
    }
    public function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
    }
    protected function getQueryOptionsResolver() : \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(array('filter[projectId]', 'filter[dateFrom]', 'filter[dateTo]'));
        $optionsResolver->setRequired(array('filter[projectId]', 'filter[dateFrom]', 'filter[dateTo]'));
        $optionsResolver->setDefaults(array());
        $optionsResolver->setAllowedTypes('filter[projectId]', array('string'));
        $optionsResolver->setAllowedTypes('filter[dateFrom]', array('string'));
        $optionsResolver->setAllowedTypes('filter[dateTo]', array('string'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Exception\PatchDebtLineItemCollectionBadRequestException
     * @throws \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Exception\PatchDebtLineItemCollectionUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Exception\PatchDebtLineItemCollectionForbiddenException
     * @throws \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Exception\PatchDebtLineItemCollectionConflictException
     * @throws \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Exception\PatchDebtLineItemCollectionInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model\DebtLineItemResource[]|\Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model\ErrorResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Datenkraft\\Backbone\\Client\\DebtCapturingApi\\Generated\\Model\\DebtLineItemResource[]', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Exception\PatchDebtLineItemCollectionBadRequestException($serializer->deserialize($body, 'Datenkraft\\Backbone\\Client\\DebtCapturingApi\\Generated\\Model\\ErrorResponse', 'json'));
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Exception\PatchDebtLineItemCollectionUnauthorizedException($serializer->deserialize($body, 'Datenkraft\\Backbone\\Client\\DebtCapturingApi\\Generated\\Model\\ErrorResponse', 'json'));
        }
        if (is_null($contentType) === false && (403 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Exception\PatchDebtLineItemCollectionForbiddenException($serializer->deserialize($body, 'Datenkraft\\Backbone\\Client\\DebtCapturingApi\\Generated\\Model\\ErrorResponse', 'json'));
        }
        if (is_null($contentType) === false && (409 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Exception\PatchDebtLineItemCollectionConflictException($serializer->deserialize($body, 'Datenkraft\\Backbone\\Client\\DebtCapturingApi\\Generated\\Model\\ErrorResponse', 'json'));
        }
        if (is_null($contentType) === false && (500 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Exception\PatchDebtLineItemCollectionInternalServerErrorException($serializer->deserialize($body, 'Datenkraft\\Backbone\\Client\\DebtCapturingApi\\Generated\\Model\\ErrorResponse', 'json'));
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
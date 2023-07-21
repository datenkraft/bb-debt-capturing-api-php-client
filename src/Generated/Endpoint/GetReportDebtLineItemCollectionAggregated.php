<?php

namespace Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Endpoint;

class GetReportDebtLineItemCollectionAggregated extends \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Runtime\Client\BaseEndpoint implements \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Runtime\Client\Endpoint
{
    /**
    * 
    *
    * @param array $queryParameters {
    *     @var int $page The page to read. Default is the first page.
    *     @var int $pageSize The maximum size per page is 100. Default is 20.
    *     @var string $paginationMode The paginationMode to use:
    - default: The total number of items in the collection will not be calculated.
    - totalCount: The total number of items in the collection will be calculated. This can mean loss of performance.
                   
    *     @var string $filter[projectId] Mandatory filter for the project id
    *     @var string $filter[usageStart] Start date of the usage (Y-m-d)
    *     @var string $filter[usageEnd] End date of the usage (Y-m-d)
    *     @var string $filter[invoiceNumber] Comma delimited string of invoice numbers
    *     @var string $filter[metaKey] Key of the meta field (required with metaValue)<br>This filter has usually no effect on the prices and their sum,since prices are calculated for debt line items and not single sku usages!
    *     @var string $filter[metaValue] Value of the meta field (required with metaKey)<br>This filter has usually no effect on the prices and their sum,since prices are calculated for debt line items and not single sku usages!
    * }
    */
    public function __construct(array $queryParameters = array())
    {
        $this->queryParameters = $queryParameters;
    }
    use \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return '/report/debt-line-item/aggregated';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return array(array(), null);
    }
    public function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
    }
    protected function getQueryOptionsResolver() : \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(array('page', 'pageSize', 'paginationMode', 'filter[projectId]', 'filter[usageStart]', 'filter[usageEnd]', 'filter[invoiceNumber]', 'filter[metaKey]', 'filter[metaValue]'));
        $optionsResolver->setRequired(array('filter[projectId]'));
        $optionsResolver->setDefaults(array('paginationMode' => 'default'));
        $optionsResolver->setAllowedTypes('page', array('int'));
        $optionsResolver->setAllowedTypes('pageSize', array('int'));
        $optionsResolver->setAllowedTypes('paginationMode', array('string'));
        $optionsResolver->setAllowedTypes('filter[projectId]', array('string'));
        $optionsResolver->setAllowedTypes('filter[usageStart]', array('string'));
        $optionsResolver->setAllowedTypes('filter[usageEnd]', array('string'));
        $optionsResolver->setAllowedTypes('filter[invoiceNumber]', array('string'));
        $optionsResolver->setAllowedTypes('filter[metaKey]', array('string'));
        $optionsResolver->setAllowedTypes('filter[metaValue]', array('string'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Exception\GetReportDebtLineItemCollectionAggregatedBadRequestException
     * @throws \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Exception\GetReportDebtLineItemCollectionAggregatedUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Exception\GetReportDebtLineItemCollectionAggregatedForbiddenException
     * @throws \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Exception\GetReportDebtLineItemCollectionAggregatedInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model\DebtLineItemAggregatedCollection|\Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model\ErrorResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Datenkraft\\Backbone\\Client\\DebtCapturingApi\\Generated\\Model\\DebtLineItemAggregatedCollection', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Exception\GetReportDebtLineItemCollectionAggregatedBadRequestException($serializer->deserialize($body, 'Datenkraft\\Backbone\\Client\\DebtCapturingApi\\Generated\\Model\\ErrorResponse', 'json'));
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Exception\GetReportDebtLineItemCollectionAggregatedUnauthorizedException($serializer->deserialize($body, 'Datenkraft\\Backbone\\Client\\DebtCapturingApi\\Generated\\Model\\ErrorResponse', 'json'));
        }
        if (is_null($contentType) === false && (403 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Exception\GetReportDebtLineItemCollectionAggregatedForbiddenException($serializer->deserialize($body, 'Datenkraft\\Backbone\\Client\\DebtCapturingApi\\Generated\\Model\\ErrorResponse', 'json'));
        }
        if (is_null($contentType) === false && (500 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Exception\GetReportDebtLineItemCollectionAggregatedInternalServerErrorException($serializer->deserialize($body, 'Datenkraft\\Backbone\\Client\\DebtCapturingApi\\Generated\\Model\\ErrorResponse', 'json'));
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
<?php

namespace Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Endpoint;

class GetReportDebtLineItemCollectionAggregated extends \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Runtime\Client\BaseEndpoint implements \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Runtime\Client\Endpoint
{
    /**
    * 
    *
    * @param array $queryParameters {
    *     @var int $page The page to read. Default is the first page.
    *     @var int $pageSize The maximum size per page is 100. Default is 100.
    *     @var string $paginationMode The paginationMode to use:
    - default: The total number of items in the collection will not be calculated.
    - totalCount: The total number of items in the collection will be calculated.
    This can mean loss of performance.
    *     @var string $filter[projectId] Mandatory filter for the project id
    *     @var string $filter[skuCode] Filter for the sku code (full text search)
    *     @var string $filter[note] Filter for the debt line item note (full text search)
    *     @var string $filter[search] Provide a search term to filter debt line items.
    
    The search term is matched against the following fields:
    - skuCode
    - debtLineItems.*.note
    - debtLineItems.*.skuUsages.*.meta.orderNumber (without internalReferencePrefix of the shop)
    - debtLineItems.*.skuUsages.*.meta.inboundDeliveryNumber (without internalReferencePrefix of the shop)
    
    If the search term is found in one of the fields, the resource is included in the result.
    The search is case insensitive.
    *     @var string $filter[usageStart] Start date of the usage (Y-m-d)
    *     @var string $filter[usageEnd] End date of the usage (Y-m-d)
    *     @var string $filter[invoiceIds] Comma delimited string of invoice ids
    *     @var string $filter[metaKey] Key of the skuUsage meta field (required with metaValue)
    *     @var string $filter[metaValue] Value of the skuUsage meta field (required with metaKey)
    *     @var bool $filter[invoiced] Filter for invoiced or open (= not invoiced) debt line items
    * }
    */
    public function __construct(array $queryParameters = [])
    {
        $this->queryParameters = $queryParameters;
    }
    use \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return '/report/debt-line-item/aggregated';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return [[], null];
    }
    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }
    protected function getQueryOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(['page', 'pageSize', 'paginationMode', 'filter[projectId]', 'filter[skuCode]', 'filter[note]', 'filter[search]', 'filter[usageStart]', 'filter[usageEnd]', 'filter[invoiceIds]', 'filter[metaKey]', 'filter[metaValue]', 'filter[invoiced]']);
        $optionsResolver->setRequired(['filter[projectId]']);
        $optionsResolver->setDefaults(['paginationMode' => 'default']);
        $optionsResolver->addAllowedTypes('page', ['int']);
        $optionsResolver->addAllowedTypes('pageSize', ['int']);
        $optionsResolver->addAllowedTypes('paginationMode', ['string']);
        $optionsResolver->addAllowedTypes('filter[projectId]', ['string']);
        $optionsResolver->addAllowedTypes('filter[skuCode]', ['string']);
        $optionsResolver->addAllowedTypes('filter[note]', ['string']);
        $optionsResolver->addAllowedTypes('filter[search]', ['string']);
        $optionsResolver->addAllowedTypes('filter[usageStart]', ['string']);
        $optionsResolver->addAllowedTypes('filter[usageEnd]', ['string']);
        $optionsResolver->addAllowedTypes('filter[invoiceIds]', ['string']);
        $optionsResolver->addAllowedTypes('filter[metaKey]', ['string']);
        $optionsResolver->addAllowedTypes('filter[metaValue]', ['string']);
        $optionsResolver->addAllowedTypes('filter[invoiced]', ['bool']);
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Exception\GetReportDebtLineItemCollectionAggregatedUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Exception\GetReportDebtLineItemCollectionAggregatedForbiddenException
     * @throws \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Exception\GetReportDebtLineItemCollectionAggregatedInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model\DebtLineItemAggregatedCollection|\Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model\ErrorResponse
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model\DebtLineItemAggregatedCollection', 'json');
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Exception\GetReportDebtLineItemCollectionAggregatedUnauthorizedException($serializer->deserialize($body, 'Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model\ErrorResponse', 'json'), $response);
        }
        if (is_null($contentType) === false && (403 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Exception\GetReportDebtLineItemCollectionAggregatedForbiddenException($serializer->deserialize($body, 'Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model\ErrorResponse', 'json'), $response);
        }
        if (is_null($contentType) === false && (500 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Exception\GetReportDebtLineItemCollectionAggregatedInternalServerErrorException($serializer->deserialize($body, 'Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model\ErrorResponse', 'json'), $response);
        }
        if (mb_strpos($contentType, 'application/json') !== false) {
            return $serializer->deserialize($body, 'Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model\ErrorResponse', 'json');
        }
        throw new \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Exception\UnexpectedStatusCodeException($status, $body);
    }
    public function getAuthenticationScopes(): array
    {
        return ['oAuthAuthorization', 'bearerAuth'];
    }
}
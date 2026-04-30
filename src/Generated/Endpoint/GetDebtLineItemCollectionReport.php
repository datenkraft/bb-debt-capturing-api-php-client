<?php

namespace Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Endpoint;

class GetDebtLineItemCollectionReport extends \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Runtime\Client\BaseEndpoint implements \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Runtime\Client\Endpoint
{
    protected $accept;
    /**
    * Get debtLineItems file export by projectId and time range.
    *         The file type is controlled by the accept header.
    * @param array{
    *    "filter[projectId]": string, //This filter restricts the data by the project id.
    *    "filter[dateFrom]"?: string, //This filter enables retrieval of data starting from a specified date in UTC.
                   The filters dateFrom and dateTo are required unless an invoiceId filter is given.
    *    "filter[dateTo]"?: string, //This filter enables retrieval of data ending up to a specified date in UTC.
                   The filters dateFrom and dateTo are required unless an invoiceId filter is given.
    *    "filter[invoiceId]"?: string, //This filter restricts the data by the invoice id.
    * } $queryParameters
    * @param array $accept Accept content header text/csv|application/vnd.openxmlformats-officedocument.spreadsheetml.sheet|application/json
    */
    public function __construct(array $queryParameters = [], array $accept = [])
    {
        $this->queryParameters = $queryParameters;
        $this->accept = $accept;
    }
    use \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return '/report/debt-line-item';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return [[], null];
    }
    public function getExtraHeaders(): array
    {
        if (empty($this->accept)) {
            return ['Accept' => ['text/csv', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet', 'application/json']];
        }
        return $this->accept;
    }
    protected function getQueryOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(['filter[projectId]', 'filter[dateFrom]', 'filter[dateTo]', 'filter[invoiceId]']);
        $optionsResolver->setRequired(['filter[projectId]']);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('filter[projectId]', ['string']);
        $optionsResolver->addAllowedTypes('filter[dateFrom]', ['string']);
        $optionsResolver->addAllowedTypes('filter[dateTo]', ['string']);
        $optionsResolver->addAllowedTypes('filter[invoiceId]', ['string']);
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Exception\GetDebtLineItemCollectionReportBadRequestException
     * @throws \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Exception\GetDebtLineItemCollectionReportUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Exception\GetDebtLineItemCollectionReportForbiddenException
     * @throws \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Exception\GetDebtLineItemCollectionReportNotAcceptableException
     * @throws \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Exception\GetDebtLineItemCollectionReportInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model\ErrorResponse
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Exception\GetDebtLineItemCollectionReportBadRequestException($serializer->deserialize($body, 'Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model\ErrorResponse', 'json'), $response);
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Exception\GetDebtLineItemCollectionReportUnauthorizedException($serializer->deserialize($body, 'Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model\ErrorResponse', 'json'), $response);
        }
        if (is_null($contentType) === false && (403 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Exception\GetDebtLineItemCollectionReportForbiddenException($serializer->deserialize($body, 'Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model\ErrorResponse', 'json'), $response);
        }
        if (is_null($contentType) === false && (406 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Exception\GetDebtLineItemCollectionReportNotAcceptableException($serializer->deserialize($body, 'Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model\ErrorResponse', 'json'), $response);
        }
        if (is_null($contentType) === false && (500 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Exception\GetDebtLineItemCollectionReportInternalServerErrorException($serializer->deserialize($body, 'Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model\ErrorResponse', 'json'), $response);
        }
        if (mb_strpos(strtolower($contentType), 'application/json') !== false) {
            return $serializer->deserialize($body, 'Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model\ErrorResponse', 'json');
        }
        throw new \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Exception\UnexpectedStatusCodeException($status, $body);
    }
    public function getAuthenticationScopes(): array
    {
        return ['oAuthAuthorization', 'bearerAuth'];
    }
}
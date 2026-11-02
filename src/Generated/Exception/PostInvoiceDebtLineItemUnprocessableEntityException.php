<?php

namespace Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Exception;

class PostInvoiceDebtLineItemUnprocessableEntityException extends UnprocessableEntityException
{
    public function __construct(
        /**
         * @var \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model\ErrorResponse
         */
        private readonly \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model\ErrorResponse $errorResponse,
        /**
         * @var \Symfony\Contracts\HttpClient\ResponseInterface
         */
        private readonly \Symfony\Contracts\HttpClient\ResponseInterface $response
    )
    {
        parent::__construct('Unprocessable Entity

Error codes:
- DATA_NOT_FOUND: The requested data could not be found.
- DEBT_LINE_ITEM_CURRENCY_NOT_PROCESSABLE: A provided currency can not be processed for debt line items.
- DEBT_LINE_ITEM_USAGE_DATE_INVALID: A provided usage date for debt line items is not valid.
- DEBT_LINE_ITEM_NOT_CALCULATABLE: A debt line item can not be calculated.');
    }
    public function getErrorResponse(): \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model\ErrorResponse
    {
        return $this->errorResponse;
    }
    public function getResponse(): \Symfony\Contracts\HttpClient\ResponseInterface
    {
        return $this->response;
    }
}
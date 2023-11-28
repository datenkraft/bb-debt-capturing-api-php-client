<?php

namespace Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Exception;

class PostInvoiceDebtLineItemUnprocessableEntityException extends UnprocessableEntityException
{
    /**
     * @var \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model\ErrorResponse
     */
    private $errorResponse;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model\ErrorResponse $errorResponse, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Unprocessable Entity

Error codes:
- DATA_NOT_FOUND: The requested data could not be found.
- DEBT_LINE_ITEM_CURRENCY_NOT_PROCESSABLE: A provided currency can not be processed for debt line items.
- DEBT_LINE_ITEM_USAGE_DATE_INVALID: A provided usage date for debt line items is not valid.
- DEBT_LINE_ITEM_NOT_CALCULATABLE: A debt line item can not be calculated.');
        $this->errorResponse = $errorResponse;
        $this->response = $response;
    }
    public function getErrorResponse() : \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model\ErrorResponse
    {
        return $this->errorResponse;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
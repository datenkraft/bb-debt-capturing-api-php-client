<?php

namespace Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Exception;

class GetDebtLineItemCollectionCsvUnauthorizedException extends UnauthorizedException
{
    /**
     * @var \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model\ErrorResponse
     */
    private $errorResponse;
    public function __construct(\Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model\ErrorResponse $errorResponse)
    {
        parent::__construct('Unauthorized');
        $this->errorResponse = $errorResponse;
    }
    public function getErrorResponse() : \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model\ErrorResponse
    {
        return $this->errorResponse;
    }
}
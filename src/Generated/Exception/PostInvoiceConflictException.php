<?php

namespace Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Exception;

class PostInvoiceConflictException extends ConflictException
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
        parent::__construct('Conflict

Error codes:
- DATA_ALREADY_EXISTS: A data conflict was detected.');
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
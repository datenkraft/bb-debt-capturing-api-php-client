<?php

namespace Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Exception;

class PostAuthRoleIdentityCollectionEndpointConflictException extends ConflictException
{
    private $errorResponse;
    public function __construct(\Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model\ErrorResponse $errorResponse)
    {
        parent::__construct('Conflict', 409);
        $this->errorResponse = $errorResponse;
    }
    public function getErrorResponse()
    {
        return $this->errorResponse;
    }
}
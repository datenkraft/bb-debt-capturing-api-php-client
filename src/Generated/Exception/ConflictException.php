<?php

namespace Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Exception;

abstract class ConflictException extends \RuntimeException implements ClientException, WithResponseInterface
{
    public function __construct(string $message)
    {
        parent::__construct($message, 409);
    }
}
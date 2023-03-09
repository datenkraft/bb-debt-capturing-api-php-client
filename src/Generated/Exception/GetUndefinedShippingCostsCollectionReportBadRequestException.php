<?php

namespace Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Exception;

class GetUndefinedShippingCostsCollectionReportBadRequestException extends BadRequestException
{
    public function __construct()
    {
        parent::__construct('Invalid format or timespan');
    }
}
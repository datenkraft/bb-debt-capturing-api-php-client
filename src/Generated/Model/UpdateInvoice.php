<?php

namespace Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model;

use Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Runtime\AdditionalAndPatternProperties;
use Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Runtime\AdditionalPropertiesInterface;
class UpdateInvoice implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The invoice number. Once set, not nullable anymore.
     *
     * @var string
     */
    public string $invoiceNumber;
    public function definedProperties(): array
    {
        return ['invoiceNumber' => 'invoiceNumber'];
    }
}
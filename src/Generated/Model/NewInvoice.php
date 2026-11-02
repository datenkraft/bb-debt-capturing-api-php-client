<?php

namespace Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model;

use Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Runtime\AdditionalAndPatternProperties;
use Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Runtime\AdditionalPropertiesInterface;
class NewInvoice implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Project id
     *
     * @var string
     */
    public string $projectId;
    /**
     * The invoice includes all DebtLineItems with a usageStart and usageEnd date less or equal than the cutoff date, which existed and were not already invoiced at the time of processing the invoice.
     *
     * @var \DateTime
     */
    public \DateTime $cutoffDate;
    /**
     * Optional invoice number. If null or not set, it will be auto-generated based on the cutoffDate
     * in the format "YYYY-MM: RE01-YYYY-". Even when auto-generated, the invoice number must be unique
     * for a projectId.
     *
     * @var string|null
     */
    public ?string $invoiceNumber;
    public function definedProperties(): array
    {
        return ['projectId' => 'projectId', 'cutoffDate' => 'cutoffDate', 'invoiceNumber' => 'invoiceNumber'];
    }
}
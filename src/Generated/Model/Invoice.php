<?php

namespace Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model;

use Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Runtime\AdditionalAndPatternProperties;
use Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Runtime\AdditionalPropertiesInterface;
class Invoice implements AdditionalPropertiesInterface
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
     * The invoice number.
     *
     * @var string
     */
    public string $invoiceNumber;
    /**
     * Invoice id
     *
     * @var string
     */
    public string $invoiceId;
    /**
     * The invoice status with the following possible values:
     * - processing: only initially set before the DebtLineItems have been linked with the invoice.
     * - completed: all DebtLineItems have been linked to the invoice.
     * 
     *
     * @var string
     */
    public string $invoiceStatus;
    public function definedProperties(): array
    {
        return ['projectId' => 'projectId', 'cutoffDate' => 'cutoffDate', 'invoiceNumber' => 'invoiceNumber', 'invoiceId' => 'invoiceId', 'invoiceStatus' => 'invoiceStatus'];
    }
}
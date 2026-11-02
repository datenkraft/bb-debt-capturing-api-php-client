<?php

namespace Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model;

use Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Runtime\AdditionalAndPatternProperties;
use Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Runtime\AdditionalPropertiesInterface;
class BaseInvoice implements AdditionalPropertiesInterface
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
    public function definedProperties(): array
    {
        return ['projectId' => 'projectId', 'cutoffDate' => 'cutoffDate'];
    }
}
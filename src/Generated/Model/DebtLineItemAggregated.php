<?php

namespace Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model;

use Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Runtime\AdditionalAndPatternProperties;
use Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Runtime\AdditionalPropertiesInterface;
class DebtLineItemAggregated implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Id of the debt line item
     *
     * @var string
     */
    public string $id;
    /**
     * quantity
     *
     * @var int
     */
    public int $quantity;
    /**
     * Start time of the usage
     *
     * @var \DateTime
     */
    public \DateTime $usageStart;
    /**
     * End time of the usage
     *
     * @var \DateTime
     */
    public \DateTime $usageEnd;
    /**
     * @var PriceProperty
     */
    public PriceProperty $priceTotal;
    /**
     * @var PriceProperty
     */
    public PriceProperty $pricePerUnit;
    /**
     * Id of the invoice (internal usage)
     *
     * @var string|null
     */
    public ?string $invoiceId;
    /**
     * Number of the invoice
     *
     * @var string|null
     */
    public ?string $invoiceNumber;
    /**
     * note
     *
     * @var string|null
     */
    public ?string $note;
    /**
     * @var list<DebtLineItemAggregatedSkuUsage>
     */
    public array $skuUsages;
    public function definedProperties(): array
    {
        return ['id' => 'id', 'quantity' => 'quantity', 'usageStart' => 'usageStart', 'usageEnd' => 'usageEnd', 'priceTotal' => 'priceTotal', 'pricePerUnit' => 'pricePerUnit', 'invoiceId' => 'invoiceId', 'invoiceNumber' => 'invoiceNumber', 'note' => 'note', 'skuUsages' => 'skuUsages'];
    }
}
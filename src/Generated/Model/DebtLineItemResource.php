<?php

namespace Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model;

use Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Runtime\AdditionalAndPatternProperties;
use Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Runtime\AdditionalPropertiesInterface;
class DebtLineItemResource implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * skuCode
     *
     * @var string
     */
    public string $skuCode;
    /**
     * quantity
     *
     * @var int|null
     */
    public ?int $quantity;
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
     * priceTotal
     *
     * @var NewDebtLineItemResourcePriceTotal|null
     */
    public ?NewDebtLineItemResourcePriceTotal $priceTotal;
    /**
     * Free text note, e.g. the reason for a manual correction
     *
     * @var string|null
     */
    public ?string $note;
    /**
     * debtLineItemId
     *
     * @var string
     */
    public string $debtLineItemId;
    /**
     * projectId
     *
     * @var string
     */
    public string $projectId;
    /**
     * invoiceId
     *
     * @var string|null
     */
    public ?string $invoiceId;
    /**
     * Unit
     *
     * @var string|null
     */
    public ?string $unit;
    /**
     * Price per Unit
     *
     * @var DebtLineItemResourcePricePerUnit|null
     */
    public ?DebtLineItemResourcePricePerUnit $pricePerUnit;
    public function definedProperties(): array
    {
        return ['skuCode' => 'skuCode', 'quantity' => 'quantity', 'usageStart' => 'usageStart', 'usageEnd' => 'usageEnd', 'priceTotal' => 'priceTotal', 'note' => 'note', 'debtLineItemId' => 'debtLineItemId', 'projectId' => 'projectId', 'invoiceId' => 'invoiceId', 'unit' => 'unit', 'pricePerUnit' => 'pricePerUnit'];
    }
}
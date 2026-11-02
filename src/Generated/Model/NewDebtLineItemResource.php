<?php

namespace Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model;

use Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Runtime\AdditionalAndPatternProperties;
use Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Runtime\AdditionalPropertiesInterface;
class NewDebtLineItemResource implements AdditionalPropertiesInterface
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
    public function definedProperties(): array
    {
        return ['skuCode' => 'skuCode', 'quantity' => 'quantity', 'usageStart' => 'usageStart', 'usageEnd' => 'usageEnd', 'priceTotal' => 'priceTotal', 'note' => 'note'];
    }
}
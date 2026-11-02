<?php

namespace Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model;

use Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Runtime\AdditionalAndPatternProperties;
use Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Runtime\AdditionalPropertiesInterface;
class DebtLineItemAggregatedSkuSum implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Quantity sum of sku usages
     *
     * @var int
     */
    public int $usedCount;
    /**
     * @var PriceProperty
     */
    public PriceProperty $priceTotal;
    public function definedProperties(): array
    {
        return ['usedCount' => 'usedCount', 'priceTotal' => 'priceTotal'];
    }
}
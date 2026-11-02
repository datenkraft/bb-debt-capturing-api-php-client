<?php

namespace Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model;

use Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Runtime\AdditionalAndPatternProperties;
use Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Runtime\AdditionalPropertiesInterface;
class DebtLineItemAggregatedCollectionSum implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var PriceProperty
     */
    public PriceProperty $priceTotal;
    public function definedProperties(): array
    {
        return ['priceTotal' => 'priceTotal'];
    }
}
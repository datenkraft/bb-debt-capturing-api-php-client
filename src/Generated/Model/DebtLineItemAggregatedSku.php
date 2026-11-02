<?php

namespace Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model;

use Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Runtime\AdditionalAndPatternProperties;
use Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Runtime\AdditionalPropertiesInterface;
class DebtLineItemAggregatedSku implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Sku Code
     *
     * @var string
     */
    public string $skuCode;
    /**
     * @var DebtLineItemAggregatedSkuSum
     */
    public DebtLineItemAggregatedSkuSum $sum;
    /**
     * Sku Code
     *
     * @var list<DebtLineItemAggregated>
     */
    public array $debtLineItems;
    public function definedProperties(): array
    {
        return ['skuCode' => 'skuCode', 'sum' => 'sum', 'debtLineItems' => 'debtLineItems'];
    }
}
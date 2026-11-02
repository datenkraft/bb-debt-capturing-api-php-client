<?php

namespace Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model;

use Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Runtime\AdditionalAndPatternProperties;
use Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Runtime\AdditionalPropertiesInterface;
class DebtLineItemAggregatedSkuUsage implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * sku usage id
     *
     * @var string
     */
    public string $id;
    /**
     * Quantity
     *
     * @var int
     */
    public int $quantity;
    /**
     * Meta - independent from meta filter
     *
     * @var iterable<string, mixed>|null
     */
    public ?iterable $meta;
    public function definedProperties(): array
    {
        return ['id' => 'id', 'quantity' => 'quantity', 'meta' => 'meta'];
    }
}
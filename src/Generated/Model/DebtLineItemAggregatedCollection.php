<?php

namespace Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model;

use Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Runtime\AdditionalAndPatternProperties;
use Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Runtime\AdditionalPropertiesInterface;
class DebtLineItemAggregatedCollection implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var CollectionPagination
     */
    public CollectionPagination $pagination;
    /**
     * @var list<DebtLineItemAggregatedSku>
     */
    public array $data;
    /**
     * @var DebtLineItemAggregatedCollectionSum
     */
    public DebtLineItemAggregatedCollectionSum $sum;
    public function definedProperties(): array
    {
        return ['pagination' => 'pagination', 'data' => 'data', 'sum' => 'sum'];
    }
}
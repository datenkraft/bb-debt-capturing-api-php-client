<?php

namespace Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model;

use Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Runtime\AdditionalAndPatternProperties;
use Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Runtime\AdditionalPropertiesInterface;
class SkuUsageDebtLineItemResource implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * skuUsageId
     *
     * @var string
     */
    public string $skuUsageId;
    /**
     * debtLineItemId
     *
     * @var string
     */
    public string $debtLineItemId;
    public function definedProperties(): array
    {
        return ['skuUsageId' => 'skuUsageId', 'debtLineItemId' => 'debtLineItemId'];
    }
}
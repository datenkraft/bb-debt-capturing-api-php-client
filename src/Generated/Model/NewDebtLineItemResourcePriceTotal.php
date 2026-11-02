<?php

namespace Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model;

use Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Runtime\AdditionalAndPatternProperties;
use Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Runtime\AdditionalPropertiesInterface;
class NewDebtLineItemResourcePriceTotal implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * minorMicro
     *
     * @var float|null
     */
    public ?float $minorMicro;
    /**
     * currency
     *
     * @var string|null
     */
    public ?string $currency;
    public function definedProperties(): array
    {
        return ['minorMicro' => 'minorMicro', 'currency' => 'currency'];
    }
}
<?php

namespace Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model;

class PriceProperty
{
    /**
     * minorMicro
     *
     * @var float|null
     */
    protected $minorMicro;
    /**
     * currency
     *
     * @var string|null
     */
    protected $currency;
    /**
     * minorMicro
     *
     * @return float|null
     */
    public function getMinorMicro() : ?float
    {
        return $this->minorMicro;
    }
    /**
     * minorMicro
     *
     * @param float|null $minorMicro
     *
     * @return self
     */
    public function setMinorMicro(?float $minorMicro) : self
    {
        $this->minorMicro = $minorMicro;
        return $this;
    }
    /**
     * currency
     *
     * @return string|null
     */
    public function getCurrency() : ?string
    {
        return $this->currency;
    }
    /**
     * currency
     *
     * @param string|null $currency
     *
     * @return self
     */
    public function setCurrency(?string $currency) : self
    {
        $this->currency = $currency;
        return $this;
    }
}
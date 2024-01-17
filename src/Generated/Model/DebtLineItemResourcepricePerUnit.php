<?php

namespace Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model;

class DebtLineItemResourcepricePerUnit extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = array();
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
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
        $this->initialized['minorMicro'] = true;
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
        $this->initialized['currency'] = true;
        $this->currency = $currency;
        return $this;
    }
}
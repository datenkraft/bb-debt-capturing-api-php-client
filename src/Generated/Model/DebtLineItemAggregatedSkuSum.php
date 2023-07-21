<?php

namespace Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model;

class DebtLineItemAggregatedSkuSum extends \ArrayObject
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
     * Quantity sum of sku usages
     *
     * @var int
     */
    protected $usedCount;
    /**
     * 
     *
     * @var PriceProperty
     */
    protected $priceTotal;
    /**
     * Quantity sum of sku usages
     *
     * @return int
     */
    public function getUsedCount() : int
    {
        return $this->usedCount;
    }
    /**
     * Quantity sum of sku usages
     *
     * @param int $usedCount
     *
     * @return self
     */
    public function setUsedCount(int $usedCount) : self
    {
        $this->initialized['usedCount'] = true;
        $this->usedCount = $usedCount;
        return $this;
    }
    /**
     * 
     *
     * @return PriceProperty
     */
    public function getPriceTotal() : PriceProperty
    {
        return $this->priceTotal;
    }
    /**
     * 
     *
     * @param PriceProperty $priceTotal
     *
     * @return self
     */
    public function setPriceTotal(PriceProperty $priceTotal) : self
    {
        $this->initialized['priceTotal'] = true;
        $this->priceTotal = $priceTotal;
        return $this;
    }
}
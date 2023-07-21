<?php

namespace Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model;

class DebtLineItemAggregatedCollectionsum
{
    /**
     * 
     *
     * @var PriceProperty
     */
    protected $priceTotal;
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
        $this->priceTotal = $priceTotal;
        return $this;
    }
}
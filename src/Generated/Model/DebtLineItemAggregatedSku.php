<?php

namespace Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model;

class DebtLineItemAggregatedSku
{
    /**
     * Sku Code
     *
     * @var string
     */
    protected $skuCode;
    /**
     * 
     *
     * @var DebtLineItemAggregatedSkuSum
     */
    protected $sum;
    /**
     * Sku Code
     *
     * @var DebtLineItemAggregated[]
     */
    protected $debtLineItems;
    /**
     * Sku Code
     *
     * @return string
     */
    public function getSkuCode() : string
    {
        return $this->skuCode;
    }
    /**
     * Sku Code
     *
     * @param string $skuCode
     *
     * @return self
     */
    public function setSkuCode(string $skuCode) : self
    {
        $this->skuCode = $skuCode;
        return $this;
    }
    /**
     * 
     *
     * @return DebtLineItemAggregatedSkuSum
     */
    public function getSum() : DebtLineItemAggregatedSkuSum
    {
        return $this->sum;
    }
    /**
     * 
     *
     * @param DebtLineItemAggregatedSkuSum $sum
     *
     * @return self
     */
    public function setSum(DebtLineItemAggregatedSkuSum $sum) : self
    {
        $this->sum = $sum;
        return $this;
    }
    /**
     * Sku Code
     *
     * @return DebtLineItemAggregated[]
     */
    public function getDebtLineItems() : array
    {
        return $this->debtLineItems;
    }
    /**
     * Sku Code
     *
     * @param DebtLineItemAggregated[] $debtLineItems
     *
     * @return self
     */
    public function setDebtLineItems(array $debtLineItems) : self
    {
        $this->debtLineItems = $debtLineItems;
        return $this;
    }
}
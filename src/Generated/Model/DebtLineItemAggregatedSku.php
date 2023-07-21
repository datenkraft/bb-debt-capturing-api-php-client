<?php

namespace Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model;

class DebtLineItemAggregatedSku extends \ArrayObject
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
        $this->initialized['skuCode'] = true;
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
        $this->initialized['sum'] = true;
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
        $this->initialized['debtLineItems'] = true;
        $this->debtLineItems = $debtLineItems;
        return $this;
    }
}
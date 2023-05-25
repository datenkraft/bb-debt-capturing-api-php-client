<?php

namespace Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model;

class SkuUsageDebtLineItemResource extends \ArrayObject
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
     * skuUsageId
     *
     * @var string
     */
    protected $skuUsageId;
    /**
     * debtLineItemId
     *
     * @var string
     */
    protected $debtLineItemId;
    /**
     * skuUsageId
     *
     * @return string
     */
    public function getSkuUsageId() : string
    {
        return $this->skuUsageId;
    }
    /**
     * skuUsageId
     *
     * @param string $skuUsageId
     *
     * @return self
     */
    public function setSkuUsageId(string $skuUsageId) : self
    {
        $this->initialized['skuUsageId'] = true;
        $this->skuUsageId = $skuUsageId;
        return $this;
    }
    /**
     * debtLineItemId
     *
     * @return string
     */
    public function getDebtLineItemId() : string
    {
        return $this->debtLineItemId;
    }
    /**
     * debtLineItemId
     *
     * @param string $debtLineItemId
     *
     * @return self
     */
    public function setDebtLineItemId(string $debtLineItemId) : self
    {
        $this->initialized['debtLineItemId'] = true;
        $this->debtLineItemId = $debtLineItemId;
        return $this;
    }
}
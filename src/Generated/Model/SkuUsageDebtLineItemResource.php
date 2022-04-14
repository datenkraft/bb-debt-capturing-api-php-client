<?php

namespace Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model;

class SkuUsageDebtLineItemResource
{
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
        $this->debtLineItemId = $debtLineItemId;
        return $this;
    }
}
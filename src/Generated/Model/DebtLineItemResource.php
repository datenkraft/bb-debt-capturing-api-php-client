<?php

namespace Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model;

class DebtLineItemResource
{
    /**
     * Debt Line Item ID
     *
     * @var string
     */
    protected $debtLineItemId;
    /**
     * SKU Code
     *
     * @var string
     */
    protected $skuCode;
    /**
     * Quantity
     *
     * @var int
     */
    protected $quantity;
    /**
     * Project Id
     *
     * @var string
     */
    protected $projectId;
    /**
     * Unit
     *
     * @var string
     */
    protected $unit;
    /**
     * Start time of the usage
     *
     * @var \DateTime
     */
    protected $usageStart;
    /**
     * End time of the usage
     *
     * @var \DateTime
     */
    protected $usageEnd;
    /**
     * Price in minor (cents)
     *
     * @var int
     */
    protected $priceTotalMinor;
    /**
     * Currency of the price
     *
     * @var string
     */
    protected $priceCurrency;
    /**
     * Invoice number
     *
     * @var string
     */
    protected $invoiceNumber;
    /**
     * Debt Line Item ID
     *
     * @return string
     */
    public function getDebtLineItemId() : string
    {
        return $this->debtLineItemId;
    }
    /**
     * Debt Line Item ID
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
    /**
     * SKU Code
     *
     * @return string
     */
    public function getSkuCode() : string
    {
        return $this->skuCode;
    }
    /**
     * SKU Code
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
     * Quantity
     *
     * @return int
     */
    public function getQuantity() : int
    {
        return $this->quantity;
    }
    /**
     * Quantity
     *
     * @param int $quantity
     *
     * @return self
     */
    public function setQuantity(int $quantity) : self
    {
        $this->quantity = $quantity;
        return $this;
    }
    /**
     * Project Id
     *
     * @return string
     */
    public function getProjectId() : string
    {
        return $this->projectId;
    }
    /**
     * Project Id
     *
     * @param string $projectId
     *
     * @return self
     */
    public function setProjectId(string $projectId) : self
    {
        $this->projectId = $projectId;
        return $this;
    }
    /**
     * Unit
     *
     * @return string
     */
    public function getUnit() : string
    {
        return $this->unit;
    }
    /**
     * Unit
     *
     * @param string $unit
     *
     * @return self
     */
    public function setUnit(string $unit) : self
    {
        $this->unit = $unit;
        return $this;
    }
    /**
     * Start time of the usage
     *
     * @return \DateTime
     */
    public function getUsageStart() : \DateTime
    {
        return $this->usageStart;
    }
    /**
     * Start time of the usage
     *
     * @param \DateTime $usageStart
     *
     * @return self
     */
    public function setUsageStart(\DateTime $usageStart) : self
    {
        $this->usageStart = $usageStart;
        return $this;
    }
    /**
     * End time of the usage
     *
     * @return \DateTime
     */
    public function getUsageEnd() : \DateTime
    {
        return $this->usageEnd;
    }
    /**
     * End time of the usage
     *
     * @param \DateTime $usageEnd
     *
     * @return self
     */
    public function setUsageEnd(\DateTime $usageEnd) : self
    {
        $this->usageEnd = $usageEnd;
        return $this;
    }
    /**
     * Price in minor (cents)
     *
     * @return int
     */
    public function getPriceTotalMinor() : int
    {
        return $this->priceTotalMinor;
    }
    /**
     * Price in minor (cents)
     *
     * @param int $priceTotalMinor
     *
     * @return self
     */
    public function setPriceTotalMinor(int $priceTotalMinor) : self
    {
        $this->priceTotalMinor = $priceTotalMinor;
        return $this;
    }
    /**
     * Currency of the price
     *
     * @return string
     */
    public function getPriceCurrency() : string
    {
        return $this->priceCurrency;
    }
    /**
     * Currency of the price
     *
     * @param string $priceCurrency
     *
     * @return self
     */
    public function setPriceCurrency(string $priceCurrency) : self
    {
        $this->priceCurrency = $priceCurrency;
        return $this;
    }
    /**
     * Invoice number
     *
     * @return string
     */
    public function getInvoiceNumber() : string
    {
        return $this->invoiceNumber;
    }
    /**
     * Invoice number
     *
     * @param string $invoiceNumber
     *
     * @return self
     */
    public function setInvoiceNumber(string $invoiceNumber) : self
    {
        $this->invoiceNumber = $invoiceNumber;
        return $this;
    }
}
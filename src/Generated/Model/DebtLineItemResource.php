<?php

namespace Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model;

class DebtLineItemResource
{
    /**
     * debtLineItemId
     *
     * @var string
     */
    protected $debtLineItemId;
    /**
     * skuCode
     *
     * @var string
     */
    protected $skuCode;
    /**
     * quantity
     *
     * @var int|null
     */
    protected $quantity;
    /**
     * projectId
     *
     * @var string
     */
    protected $projectId;
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
     * 
     *
     * @var PriceProperty
     */
    protected $priceTotal;
    /**
     * invoiceNumber
     *
     * @var string|null
     */
    protected $invoiceNumber;
    /**
     * Unit
     *
     * @var string|null
     */
    protected $unit;
    /**
     * 
     *
     * @var PriceProperty
     */
    protected $pricePerUnit;
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
    /**
     * skuCode
     *
     * @return string
     */
    public function getSkuCode() : string
    {
        return $this->skuCode;
    }
    /**
     * skuCode
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
     * quantity
     *
     * @return int|null
     */
    public function getQuantity() : ?int
    {
        return $this->quantity;
    }
    /**
     * quantity
     *
     * @param int|null $quantity
     *
     * @return self
     */
    public function setQuantity(?int $quantity) : self
    {
        $this->quantity = $quantity;
        return $this;
    }
    /**
     * projectId
     *
     * @return string
     */
    public function getProjectId() : string
    {
        return $this->projectId;
    }
    /**
     * projectId
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
    /**
     * invoiceNumber
     *
     * @return string|null
     */
    public function getInvoiceNumber() : ?string
    {
        return $this->invoiceNumber;
    }
    /**
     * invoiceNumber
     *
     * @param string|null $invoiceNumber
     *
     * @return self
     */
    public function setInvoiceNumber(?string $invoiceNumber) : self
    {
        $this->invoiceNumber = $invoiceNumber;
        return $this;
    }
    /**
     * Unit
     *
     * @return string|null
     */
    public function getUnit() : ?string
    {
        return $this->unit;
    }
    /**
     * Unit
     *
     * @param string|null $unit
     *
     * @return self
     */
    public function setUnit(?string $unit) : self
    {
        $this->unit = $unit;
        return $this;
    }
    /**
     * 
     *
     * @return PriceProperty
     */
    public function getPricePerUnit() : PriceProperty
    {
        return $this->pricePerUnit;
    }
    /**
     * 
     *
     * @param PriceProperty $pricePerUnit
     *
     * @return self
     */
    public function setPricePerUnit(PriceProperty $pricePerUnit) : self
    {
        $this->pricePerUnit = $pricePerUnit;
        return $this;
    }
}
<?php

namespace Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model;

class DebtLineItemAggregated
{
    /**
     * Id of the debt line item
     *
     * @var string
     */
    protected $id;
    /**
     * quantity
     *
     * @var int
     */
    protected $quantity;
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
     * 
     *
     * @var PriceProperty
     */
    protected $pricePerUnit;
    /**
     * Id of the invoice (internal usage)
     *
     * @var string|null
     */
    protected $invoiceId;
    /**
     * Number of the invoice
     *
     * @var string|null
     */
    protected $invoiceNumber;
    /**
     * 
     *
     * @var DebtLineItemAggregatedSkuUsage[]
     */
    protected $skuUsages;
    /**
     * Id of the debt line item
     *
     * @return string
     */
    public function getId() : string
    {
        return $this->id;
    }
    /**
     * Id of the debt line item
     *
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id) : self
    {
        $this->id = $id;
        return $this;
    }
    /**
     * quantity
     *
     * @return int
     */
    public function getQuantity() : int
    {
        return $this->quantity;
    }
    /**
     * quantity
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
    /**
     * Id of the invoice (internal usage)
     *
     * @return string|null
     */
    public function getInvoiceId() : ?string
    {
        return $this->invoiceId;
    }
    /**
     * Id of the invoice (internal usage)
     *
     * @param string|null $invoiceId
     *
     * @return self
     */
    public function setInvoiceId(?string $invoiceId) : self
    {
        $this->invoiceId = $invoiceId;
        return $this;
    }
    /**
     * Number of the invoice
     *
     * @return string|null
     */
    public function getInvoiceNumber() : ?string
    {
        return $this->invoiceNumber;
    }
    /**
     * Number of the invoice
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
     * 
     *
     * @return DebtLineItemAggregatedSkuUsage[]
     */
    public function getSkuUsages() : array
    {
        return $this->skuUsages;
    }
    /**
     * 
     *
     * @param DebtLineItemAggregatedSkuUsage[] $skuUsages
     *
     * @return self
     */
    public function setSkuUsages(array $skuUsages) : self
    {
        $this->skuUsages = $skuUsages;
        return $this;
    }
}
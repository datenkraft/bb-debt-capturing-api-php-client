<?php

namespace Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model;

class DebtLineItemResource extends \ArrayObject
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
     * priceTotal
     *
     * @var NewDebtLineItemResourcePriceTotal|null
     */
    protected $priceTotal;
    /**
     * debtLineItemId
     *
     * @var string
     */
    protected $debtLineItemId;
    /**
     * projectId
     *
     * @var string
     */
    protected $projectId;
    /**
     * invoiceId
     *
     * @var string|null
     */
    protected $invoiceId;
    /**
     * Unit
     *
     * @var string|null
     */
    protected $unit;
    /**
     * Price per Unit
     *
     * @var DebtLineItemResourcepricePerUnit|null
     */
    protected $pricePerUnit;
    /**
     * note
     *
     * @var string|null
     */
    protected $note;
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
        $this->initialized['skuCode'] = true;
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
        $this->initialized['quantity'] = true;
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
        $this->initialized['usageStart'] = true;
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
        $this->initialized['usageEnd'] = true;
        $this->usageEnd = $usageEnd;
        return $this;
    }
    /**
     * priceTotal
     *
     * @return NewDebtLineItemResourcePriceTotal|null
     */
    public function getPriceTotal() : ?NewDebtLineItemResourcePriceTotal
    {
        return $this->priceTotal;
    }
    /**
     * priceTotal
     *
     * @param NewDebtLineItemResourcePriceTotal|null $priceTotal
     *
     * @return self
     */
    public function setPriceTotal(?NewDebtLineItemResourcePriceTotal $priceTotal) : self
    {
        $this->initialized['priceTotal'] = true;
        $this->priceTotal = $priceTotal;
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
        $this->initialized['projectId'] = true;
        $this->projectId = $projectId;
        return $this;
    }
    /**
     * invoiceId
     *
     * @return string|null
     */
    public function getInvoiceId() : ?string
    {
        return $this->invoiceId;
    }
    /**
     * invoiceId
     *
     * @param string|null $invoiceId
     *
     * @return self
     */
    public function setInvoiceId(?string $invoiceId) : self
    {
        $this->initialized['invoiceId'] = true;
        $this->invoiceId = $invoiceId;
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
        $this->initialized['unit'] = true;
        $this->unit = $unit;
        return $this;
    }
    /**
     * Price per Unit
     *
     * @return DebtLineItemResourcepricePerUnit|null
     */
    public function getPricePerUnit() : ?DebtLineItemResourcepricePerUnit
    {
        return $this->pricePerUnit;
    }
    /**
     * Price per Unit
     *
     * @param DebtLineItemResourcepricePerUnit|null $pricePerUnit
     *
     * @return self
     */
    public function setPricePerUnit(?DebtLineItemResourcepricePerUnit $pricePerUnit) : self
    {
        $this->initialized['pricePerUnit'] = true;
        $this->pricePerUnit = $pricePerUnit;
        return $this;
    }
    /**
     * note
     *
     * @return string|null
     */
    public function getNote() : ?string
    {
        return $this->note;
    }
    /**
     * note
     *
     * @param string|null $note
     *
     * @return self
     */
    public function setNote(?string $note) : self
    {
        $this->initialized['note'] = true;
        $this->note = $note;
        return $this;
    }
}
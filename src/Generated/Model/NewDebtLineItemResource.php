<?php

namespace Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model;

class NewDebtLineItemResource extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
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
     * Free text note, e.g. the reason for a manual correction
     *
     * @var string|null
     */
    protected $note;
    /**
     * skuCode
     *
     * @return string
     */
    public function getSkuCode(): string
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
    public function setSkuCode(string $skuCode): self
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
    public function getQuantity(): ?int
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
    public function setQuantity(?int $quantity): self
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
    public function getUsageStart(): \DateTime
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
    public function setUsageStart(\DateTime $usageStart): self
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
    public function getUsageEnd(): \DateTime
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
    public function setUsageEnd(\DateTime $usageEnd): self
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
    public function getPriceTotal(): ?NewDebtLineItemResourcePriceTotal
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
    public function setPriceTotal(?NewDebtLineItemResourcePriceTotal $priceTotal): self
    {
        $this->initialized['priceTotal'] = true;
        $this->priceTotal = $priceTotal;
        return $this;
    }
    /**
     * Free text note, e.g. the reason for a manual correction
     *
     * @return string|null
     */
    public function getNote(): ?string
    {
        return $this->note;
    }
    /**
     * Free text note, e.g. the reason for a manual correction
     *
     * @param string|null $note
     *
     * @return self
     */
    public function setNote(?string $note): self
    {
        $this->initialized['note'] = true;
        $this->note = $note;
        return $this;
    }
}
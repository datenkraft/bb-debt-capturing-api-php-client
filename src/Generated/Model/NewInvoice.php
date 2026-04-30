<?php

namespace Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model;

class NewInvoice extends \ArrayObject
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
     * Project id
     *
     * @var string
     */
    protected $projectId;
    /**
     * The invoice includes all DebtLineItems with a usageStart and usageEnd date less or equal than the cutoff date, which existed and were not already invoiced at the time of processing the invoice.
     *
     * @var \DateTime
     */
    protected $cutoffDate;
    /**
     * Optional invoice number. If null or not set, it will be auto-generated based on the cutoffDate
     * in the format "YYYY-MM: RE01-YYYY-". Even when auto-generated, the invoice number must be unique
     * for a projectId.
     *
     * @var string|null
     */
    protected $invoiceNumber;
    /**
     * Project id
     *
     * @return string
     */
    public function getProjectId(): string
    {
        return $this->projectId;
    }
    /**
     * Project id
     *
     * @param string $projectId
     *
     * @return self
     */
    public function setProjectId(string $projectId): self
    {
        $this->initialized['projectId'] = true;
        $this->projectId = $projectId;
        return $this;
    }
    /**
     * The invoice includes all DebtLineItems with a usageStart and usageEnd date less or equal than the cutoff date, which existed and were not already invoiced at the time of processing the invoice.
     *
     * @return \DateTime
     */
    public function getCutoffDate(): \DateTime
    {
        return $this->cutoffDate;
    }
    /**
     * The invoice includes all DebtLineItems with a usageStart and usageEnd date less or equal than the cutoff date, which existed and were not already invoiced at the time of processing the invoice.
     *
     * @param \DateTime $cutoffDate
     *
     * @return self
     */
    public function setCutoffDate(\DateTime $cutoffDate): self
    {
        $this->initialized['cutoffDate'] = true;
        $this->cutoffDate = $cutoffDate;
        return $this;
    }
    /**
     * Optional invoice number. If null or not set, it will be auto-generated based on the cutoffDate
     * in the format "YYYY-MM: RE01-YYYY-". Even when auto-generated, the invoice number must be unique
     * for a projectId.
     *
     * @return string|null
     */
    public function getInvoiceNumber(): ?string
    {
        return $this->invoiceNumber;
    }
    /**
    * Optional invoice number. If null or not set, it will be auto-generated based on the cutoffDate
    in the format "YYYY-MM: RE01-YYYY-". Even when auto-generated, the invoice number must be unique
    for a projectId.
    *
    * @param string|null $invoiceNumber
    *
    * @return self
    */
    public function setInvoiceNumber(?string $invoiceNumber): self
    {
        $this->initialized['invoiceNumber'] = true;
        $this->invoiceNumber = $invoiceNumber;
        return $this;
    }
}
<?php

namespace Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model;

class Invoice
{
    /**
     * Project id
     *
     * @var string
     */
    protected $projectId;
    /**
     * The invoice number, may be null.
     *
     * @var string|null
     */
    protected $invoiceNumber;
    /**
     * The invoice includes all DebtLineItems with a usageStart and usageEnd date less or equal than the cutoff date, which existed and were not already invoiced at the time of processing the invoice.
     *
     * @var \DateTime
     */
    protected $cutoffDate;
    /**
     * Invoice id
     *
     * @var string
     */
    protected $invoiceId;
    /**
    * The invoice status with the following possible values:
    - processing: only initially set before the DebtLineItems have been linked with the invoice.
    - completed: all DebtLineItems have been linked to the invoice.
                       
    *
    * @var string
    */
    protected $invoiceStatus;
    /**
     * Project id
     *
     * @return string
     */
    public function getProjectId() : string
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
    public function setProjectId(string $projectId) : self
    {
        $this->projectId = $projectId;
        return $this;
    }
    /**
     * The invoice number, may be null.
     *
     * @return string|null
     */
    public function getInvoiceNumber() : ?string
    {
        return $this->invoiceNumber;
    }
    /**
     * The invoice number, may be null.
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
     * The invoice includes all DebtLineItems with a usageStart and usageEnd date less or equal than the cutoff date, which existed and were not already invoiced at the time of processing the invoice.
     *
     * @return \DateTime
     */
    public function getCutoffDate() : \DateTime
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
    public function setCutoffDate(\DateTime $cutoffDate) : self
    {
        $this->cutoffDate = $cutoffDate;
        return $this;
    }
    /**
     * Invoice id
     *
     * @return string
     */
    public function getInvoiceId() : string
    {
        return $this->invoiceId;
    }
    /**
     * Invoice id
     *
     * @param string $invoiceId
     *
     * @return self
     */
    public function setInvoiceId(string $invoiceId) : self
    {
        $this->invoiceId = $invoiceId;
        return $this;
    }
    /**
    * The invoice status with the following possible values:
    - processing: only initially set before the DebtLineItems have been linked with the invoice.
    - completed: all DebtLineItems have been linked to the invoice.
                       
    *
    * @return string
    */
    public function getInvoiceStatus() : string
    {
        return $this->invoiceStatus;
    }
    /**
    * The invoice status with the following possible values:
    - processing: only initially set before the DebtLineItems have been linked with the invoice.
    - completed: all DebtLineItems have been linked to the invoice.
                       
    *
    * @param string $invoiceStatus
    *
    * @return self
    */
    public function setInvoiceStatus(string $invoiceStatus) : self
    {
        $this->invoiceStatus = $invoiceStatus;
        return $this;
    }
}
<?php

namespace Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model;

class PatchDebtLineItemResource
{
    /**
     * Debt Line Item ID
     *
     * @var string
     */
    protected $debtLineItemId;
    /**
     * Invoice number
     *
     * @var string|null
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
     * Invoice number
     *
     * @return string|null
     */
    public function getInvoiceNumber() : ?string
    {
        return $this->invoiceNumber;
    }
    /**
     * Invoice number
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
}
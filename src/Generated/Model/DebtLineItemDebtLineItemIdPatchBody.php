<?php

namespace Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model;

class DebtLineItemDebtLineItemIdPatchBody
{
    /**
     * invoiceNumber
     *
     * @var string
     */
    protected $invoiceNumber;
    /**
     * invoiceNumber
     *
     * @return string
     */
    public function getInvoiceNumber() : string
    {
        return $this->invoiceNumber;
    }
    /**
     * invoiceNumber
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
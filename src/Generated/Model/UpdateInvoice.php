<?php

namespace Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model;

class UpdateInvoice
{
    /**
     * The invoice number. Once set, not nullable anymore.
     *
     * @var string
     */
    protected $invoiceNumber;
    /**
     * The invoice number. Once set, not nullable anymore.
     *
     * @return string
     */
    public function getInvoiceNumber() : string
    {
        return $this->invoiceNumber;
    }
    /**
     * The invoice number. Once set, not nullable anymore.
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
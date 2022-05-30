<?php

namespace Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model;

class EventSourcingReplayGetResponse200
{
    /**
     * status
     *
     * @var string
     */
    protected $status;
    /**
     * status
     *
     * @return string
     */
    public function getStatus() : string
    {
        return $this->status;
    }
    /**
     * status
     *
     * @param string $status
     *
     * @return self
     */
    public function setStatus(string $status) : self
    {
        $this->status = $status;
        return $this;
    }
}
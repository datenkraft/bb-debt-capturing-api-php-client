<?php

namespace Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model;

class EventSourcingReplayGetResponse200 extends \ArrayObject
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
        $this->initialized['status'] = true;
        $this->status = $status;
        return $this;
    }
}
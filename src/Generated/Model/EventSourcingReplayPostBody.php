<?php

namespace Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model;

class EventSourcingReplayPostBody extends \ArrayObject
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
     * Email to send info messages about the event sourcing replay to
     *
     * @var string
     */
    protected $infoMailAddress;
    /**
     * Email to send info messages about the event sourcing replay to
     *
     * @return string
     */
    public function getInfoMailAddress() : string
    {
        return $this->infoMailAddress;
    }
    /**
     * Email to send info messages about the event sourcing replay to
     *
     * @param string $infoMailAddress
     *
     * @return self
     */
    public function setInfoMailAddress(string $infoMailAddress) : self
    {
        $this->initialized['infoMailAddress'] = true;
        $this->infoMailAddress = $infoMailAddress;
        return $this;
    }
}
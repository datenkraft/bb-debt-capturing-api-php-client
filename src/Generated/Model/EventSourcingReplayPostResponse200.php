<?php

namespace Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model;

class EventSourcingReplayPostResponse200 extends \ArrayObject
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
     * date
     *
     * @var \DateTime
     */
    protected $date;
    /**
     * date
     *
     * @return \DateTime
     */
    public function getDate() : \DateTime
    {
        return $this->date;
    }
    /**
     * date
     *
     * @param \DateTime $date
     *
     * @return self
     */
    public function setDate(\DateTime $date) : self
    {
        $this->initialized['date'] = true;
        $this->date = $date;
        return $this;
    }
}
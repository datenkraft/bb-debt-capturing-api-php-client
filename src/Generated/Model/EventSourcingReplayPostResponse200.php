<?php

namespace Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model;

class EventSourcingReplayPostResponse200
{
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
        $this->date = $date;
        return $this;
    }
}
<?php

namespace Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model;

class EventSourcingReplayPostBody
{
    /**
     * Email to send info messages about the event sourcing replay to
     *
     * @var string
     */
    protected $infoMailAddress;
    /**
     * Array of projectIds specifying the projects for which the DebtLineItems should be replayed
     *
     * @var string[]
     */
    protected $projectIds;
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
        $this->infoMailAddress = $infoMailAddress;
        return $this;
    }
    /**
     * Array of projectIds specifying the projects for which the DebtLineItems should be replayed
     *
     * @return string[]
     */
    public function getProjectIds() : array
    {
        return $this->projectIds;
    }
    /**
     * Array of projectIds specifying the projects for which the DebtLineItems should be replayed
     *
     * @param string[] $projectIds
     *
     * @return self
     */
    public function setProjectIds(array $projectIds) : self
    {
        $this->projectIds = $projectIds;
        return $this;
    }
}
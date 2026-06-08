<?php

namespace Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model;

class EventSourcingReplayPostBody extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
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
     * Array of projectIds specifying the projects for which the DebtLineItems should be replayed.
     * Must not be combined with organizationId.
     *
     * @var list<string>
     */
    protected $projectIds;
    /**
     * Optional organizationId. When provided, all projects of the organization are resolved
     * automatically and used for the replay. Must not be combined with projectIds.
     *
     * @var string
     */
    protected $organizationId;
    /**
     * Email to send info messages about the event sourcing replay to
     *
     * @return string
     */
    public function getInfoMailAddress(): string
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
    public function setInfoMailAddress(string $infoMailAddress): self
    {
        $this->initialized['infoMailAddress'] = true;
        $this->infoMailAddress = $infoMailAddress;
        return $this;
    }
    /**
     * Array of projectIds specifying the projects for which the DebtLineItems should be replayed.
     * Must not be combined with organizationId.
     *
     * @return list<string>
     */
    public function getProjectIds(): array
    {
        return $this->projectIds;
    }
    /**
    * Array of projectIds specifying the projects for which the DebtLineItems should be replayed.
    Must not be combined with organizationId.
    *
    * @param list<string> $projectIds
    *
    * @return self
    */
    public function setProjectIds(array $projectIds): self
    {
        $this->initialized['projectIds'] = true;
        $this->projectIds = $projectIds;
        return $this;
    }
    /**
     * Optional organizationId. When provided, all projects of the organization are resolved
     * automatically and used for the replay. Must not be combined with projectIds.
     *
     * @return string
     */
    public function getOrganizationId(): string
    {
        return $this->organizationId;
    }
    /**
    * Optional organizationId. When provided, all projects of the organization are resolved
    automatically and used for the replay. Must not be combined with projectIds.
    *
    * @param string $organizationId
    *
    * @return self
    */
    public function setOrganizationId(string $organizationId): self
    {
        $this->initialized['organizationId'] = true;
        $this->organizationId = $organizationId;
        return $this;
    }
}
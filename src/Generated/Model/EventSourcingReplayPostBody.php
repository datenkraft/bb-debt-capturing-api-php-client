<?php

namespace Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model;

use Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Runtime\AdditionalAndPatternProperties;
use Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Runtime\AdditionalPropertiesInterface;
class EventSourcingReplayPostBody implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Email to send info messages about the event sourcing replay to
     *
     * @var string
     */
    public string $infoMailAddress;
    /**
     * Array of projectIds specifying the projects for which the DebtLineItems should be replayed.
     * Must not be combined with organizationId.
     *
     * @var list<string>
     */
    public array $projectIds;
    /**
     * Optional organizationId. When provided, all projects of the organization are resolved
     * automatically and used for the replay. Must not be combined with projectIds.
     *
     * @var string
     */
    public string $organizationId;
    public function definedProperties(): array
    {
        return ['infoMailAddress' => 'infoMailAddress', 'projectIds' => 'projectIds', 'organizationId' => 'organizationId'];
    }
}
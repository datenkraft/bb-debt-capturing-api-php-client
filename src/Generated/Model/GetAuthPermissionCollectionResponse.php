<?php

namespace Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model;

use Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Runtime\AdditionalAndPatternProperties;
use Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Runtime\AdditionalPropertiesInterface;
class GetAuthPermissionCollectionResponse implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var CollectionPagination
     */
    public CollectionPagination $pagination;
    /**
     * @var list<AuthPermissionResource>
     */
    public array $data;
    public function definedProperties(): array
    {
        return ['pagination' => 'pagination', 'data' => 'data'];
    }
}
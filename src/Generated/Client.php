<?php

namespace Datenkraft\Backbone\Client\DebtCapturingApi\Generated;

class Client extends \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Runtime\Client\Client
{
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Exception\GetAuthPermissionCollectionUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Exception\GetAuthPermissionCollectionForbiddenException
     * @throws \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Exception\GetAuthPermissionCollectionInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model\AuthPermissionResource[]|\Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getAuthPermissionCollection(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Endpoint\GetAuthPermissionCollection(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getOpenApi(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Endpoint\GetOpenApi(), $fetch);
    }
    /**
     * Get the openapi documentation in the specified format
     *
     * @param string $format Openapi file format
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getOpenApiInFormat(string $format, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Endpoint\GetOpenApiInFormat($format), $fetch);
    }
    /**
     * Get the changelog in the specified format
     *
     * @param string $format Changelog file format
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Exception\GetChangelogInFormatNotFoundException
     * @throws \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Exception\GetChangelogInFormatBadRequestException
     * @throws \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getChangelogInFormat(string $format, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Endpoint\GetChangelogInFormat($format), $fetch);
    }
    /**
     * Delete one or more role to identity assignments in this resource server
     *
     * @param null|\Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model\AuthRoleIdentityResource[] $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Exception\DeleteAuthRoleIdentityCollectionBadRequestException
     * @throws \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Exception\DeleteAuthRoleIdentityCollectionUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Exception\DeleteAuthRoleIdentityCollectionForbiddenException
     * @throws \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Exception\DeleteAuthRoleIdentityCollectionNotFoundException
     * @throws \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Exception\DeleteAuthRoleIdentityCollectionUnprocessableEntityException
     * @throws \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Exception\DeleteAuthRoleIdentityCollectionInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function deleteAuthRoleIdentityCollection(?array $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Endpoint\DeleteAuthRoleIdentityCollection($requestBody), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Exception\GetAuthRoleIdentityCollectionUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Exception\GetAuthRoleIdentityCollectionForbiddenException
     * @throws \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Exception\GetAuthRoleIdentityCollectionNotFoundException
     * @throws \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Exception\GetAuthRoleIdentityCollectionInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model\AuthRoleIdentityResource[]|\Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getAuthRoleIdentityCollection(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Endpoint\GetAuthRoleIdentityCollection(), $fetch);
    }
    /**
     * Create one or more role to identity assignments in this resource server
     *
     * @param \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model\AuthRoleIdentityResource[] $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Exception\PostAuthRoleIdentityCollectionBadRequestException
     * @throws \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Exception\PostAuthRoleIdentityCollectionUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Exception\PostAuthRoleIdentityCollectionForbiddenException
     * @throws \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Exception\PostAuthRoleIdentityCollectionConflictException
     * @throws \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Exception\PostAuthRoleIdentityCollectionUnprocessableEntityException
     * @throws \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Exception\PostAuthRoleIdentityCollectionInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model\AuthRoleIdentityResource[]|\Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postAuthRoleIdentityCollection(array $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Endpoint\PostAuthRoleIdentityCollection($requestBody), $fetch);
    }
    /**
     * Delete one or more role to permission assignments in this resource server
     *
     * @param null|\Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model\AuthPermissionRoleResource[] $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Exception\DeleteAuthPermissionRoleCollectionBadRequestException
     * @throws \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Exception\DeleteAuthPermissionRoleCollectionUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Exception\DeleteAuthPermissionRoleCollectionForbiddenException
     * @throws \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Exception\DeleteAuthPermissionRoleCollectionNotFoundException
     * @throws \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Exception\DeleteAuthPermissionRoleCollectionInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function deleteAuthPermissionRoleCollection(?array $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Endpoint\DeleteAuthPermissionRoleCollection($requestBody), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Exception\GetAuthPermissionRoleCollectionUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Exception\GetAuthPermissionRoleCollectionForbiddenException
     * @throws \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Exception\GetAuthPermissionRoleCollectionInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model\AuthPermissionRoleResource[]|\Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getAuthPermissionRoleCollection(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Endpoint\GetAuthPermissionRoleCollection(), $fetch);
    }
    /**
     * Create one or more role to permission assignments in this resource server
     *
     * @param \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model\AuthPermissionRoleResource[] $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Exception\PostAuthPermissionRoleCollectionBadRequestException
     * @throws \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Exception\PostAuthPermissionRoleCollectionUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Exception\PostAuthPermissionRoleCollectionForbiddenException
     * @throws \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Exception\PostAuthPermissionRoleCollectionConflictException
     * @throws \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Exception\PostAuthPermissionRoleCollectionInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model\AuthPermissionRoleResource[]|\Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postAuthPermissionRoleCollection(array $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Endpoint\PostAuthPermissionRoleCollection($requestBody), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Exception\GetAuthRoleCollectionUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Exception\GetAuthRoleCollectionForbiddenException
     * @throws \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Exception\GetAuthRoleCollectionInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model\AuthRoleResource[]|\Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getAuthRoleCollection(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Endpoint\GetAuthRoleCollection(), $fetch);
    }
    /**
     * Delete a role for this resource server
     *
     * @param string $roleCode Identifier for the role
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Exception\DeleteAuthRoleBadRequestException
     * @throws \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Exception\DeleteAuthRoleUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Exception\DeleteAuthRoleForbiddenException
     * @throws \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Exception\DeleteAuthRoleNotFoundException
     * @throws \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Exception\DeleteAuthRoleInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function deleteAuthRole(string $roleCode, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Endpoint\DeleteAuthRole($roleCode), $fetch);
    }
    /**
     * Get a role from this resource server by its roleCode
     *
     * @param string $roleCode Identifier for the role
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Exception\GetAuthRoleUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Exception\GetAuthRoleForbiddenException
     * @throws \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Exception\GetAuthRoleNotFoundException
     * @throws \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Exception\GetAuthRoleInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model\AuthRoleResource|\Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getAuthRole(string $roleCode, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Endpoint\GetAuthRole($roleCode), $fetch);
    }
    /**
     * Patch a role for this resource server
     *
     * @param string $roleCode Identifier for the role
     * @param \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model\NewAuthRoleResource $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Exception\PatchAuthRoleBadRequestException
     * @throws \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Exception\PatchAuthRoleUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Exception\PatchAuthRoleForbiddenException
     * @throws \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Exception\PatchAuthRoleNotFoundException
     * @throws \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Exception\PatchAuthRoleInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model\AuthRoleResource|\Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function patchAuthRole(string $roleCode, \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model\NewAuthRoleResource $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Endpoint\PatchAuthRole($roleCode, $requestBody), $fetch);
    }
    /**
     * Post a role for this resource server
     *
     * @param string $roleCode Identifier for the role
     * @param \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model\NewAuthRoleResource $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Exception\PostAuthRoleBadRequestException
     * @throws \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Exception\PostAuthRoleUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Exception\PostAuthRoleForbiddenException
     * @throws \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Exception\PostAuthRoleConflictException
     * @throws \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Exception\PostAuthRoleInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model\AuthRoleResource|\Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postAuthRole(string $roleCode, \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model\NewAuthRoleResource $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Endpoint\PostAuthRole($roleCode, $requestBody), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Exception\GetEventSourcingReplayUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Exception\GetEventSourcingReplayForbiddenException
     * @throws \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Exception\GetEventSourcingReplayInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model\EventSourcingReplayGetResponse200|\Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getEventSourcingReplay(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Endpoint\GetEventSourcingReplay(), $fetch);
    }
    /**
    * Execute event sourcing replay (recalculates all DebtLineItems).
    
    Please be aware of the effects a replay involves!
    - The replay does not affect DebtLineItems with an InvoiceNumber set.
    - Changes of the calculators/prices will affect non invoiced, past, events
    and therefore also the resulting DebtLineItems.
    - At the beginning/before the replay starts, every DebtLineItem,
    which is not invoiced yet/no InvoiceNumber set, gets deleted.
    *
    * @param null|\Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model\EventSourcingReplayPostBody $requestBody 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Exception\PostEventSourcingReplayBadRequestException
    * @throws \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Exception\PostEventSourcingReplayUnauthorizedException
    * @throws \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Exception\PostEventSourcingReplayForbiddenException
    * @throws \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Exception\PostEventSourcingReplayConflictException
    * @throws \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Exception\PostEventSourcingReplayInternalServerErrorException
    * @throws \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Exception\UnexpectedStatusCodeException
    *
    * @return null|\Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model\EventSourcingReplayPostResponse200|\Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
    */
    public function postEventSourcingReplay(?\Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model\EventSourcingReplayPostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Endpoint\PostEventSourcingReplay($requestBody), $fetch);
    }
    /**
     * Get skuUsages for debtLineItems
     *
     * @param array $queryParameters {
     *     @var string $filter[debtLineItemIds] debtLineItemIds filter
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Exception\GetSkuUsageDebtLineItemCollectionBadRequestException
     * @throws \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Exception\GetSkuUsageDebtLineItemCollectionUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Exception\GetSkuUsageDebtLineItemCollectionForbiddenException
     * @throws \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Exception\GetSkuUsageDebtLineItemCollectionInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model\SkuUsageDebtLineItemResource[]|\Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getSkuUsageDebtLineItemCollection(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Endpoint\GetSkuUsageDebtLineItemCollection($queryParameters), $fetch);
    }
    /**
     * Get debtLineItems by projectId and time range
     *
     * @param array $queryParameters {
     *     @var string $filter[projectId] projectId filter
     *     @var string $filter[dateFrom] dateFrom filter
     *     @var string $filter[dateTo] dateTo filter
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Exception\GetDebtLineItemCollectionBadRequestException
     * @throws \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Exception\GetDebtLineItemCollectionUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Exception\GetDebtLineItemCollectionForbiddenException
     * @throws \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Exception\GetDebtLineItemCollectionInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model\DebtLineItemResource[]|\Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getDebtLineItemCollection(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Endpoint\GetDebtLineItemCollection($queryParameters), $fetch);
    }
    /**
     * Update debtLineItems by projectId and time range where the invoiceNumber is not already set
     *
     * @param \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model\DebtLineItemPatchBody $requestBody 
     * @param array $queryParameters {
     *     @var string $filter[projectId] projectId filter
     *     @var string $filter[dateFrom] dateFrom filter
     *     @var string $filter[dateTo] dateTo filter
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Exception\PatchDebtLineItemCollectionBadRequestException
     * @throws \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Exception\PatchDebtLineItemCollectionUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Exception\PatchDebtLineItemCollectionForbiddenException
     * @throws \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Exception\PatchDebtLineItemCollectionConflictException
     * @throws \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Exception\PatchDebtLineItemCollectionInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model\DebtLineItemResource[]|\Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function patchDebtLineItemCollection(\Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model\DebtLineItemPatchBody $requestBody, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Endpoint\PatchDebtLineItemCollection($requestBody, $queryParameters), $fetch);
    }
    /**
     * Get a debtLineItem by debtLineItemId
     *
     * @param string $debtLineItemId debtLineItemId
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Exception\GetDebtLineItemBadRequestException
     * @throws \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Exception\GetDebtLineItemUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Exception\GetDebtLineItemForbiddenException
     * @throws \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Exception\GetDebtLineItemNotFoundException
     * @throws \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Exception\GetDebtLineItemInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model\DebtLineItemResource|\Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getDebtLineItem(string $debtLineItemId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Endpoint\GetDebtLineItem($debtLineItemId), $fetch);
    }
    /**
     * Update a debtLineItem by debtLineItemId
     *
     * @param string $debtLineItemId debtLineItemId
     * @param \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model\DebtLineItemDebtLineItemIdPatchBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Exception\PatchDebtLineItemBadRequestException
     * @throws \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Exception\PatchDebtLineItemUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Exception\PatchDebtLineItemForbiddenException
     * @throws \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Exception\PatchDebtLineItemNotFoundException
     * @throws \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Exception\PatchDebtLineItemConflictException
     * @throws \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Exception\PatchDebtLineItemInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model\DebtLineItemResource|\Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function patchDebtLineItem(string $debtLineItemId, \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model\DebtLineItemDebtLineItemIdPatchBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Endpoint\PatchDebtLineItem($debtLineItemId, $requestBody), $fetch);
    }
    /**
     * Get a list of undefined shipping costs in the specified time frame and the requested format
     *
     * @param string $format Export file format
     * @param array $queryParameters {
     *     @var string $filter[dateFrom] dateFrom filter in UTC
     *     @var string $filter[dateTo] dateTo filter in UTC
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Exception\GetUndefinedShippingCostsCollectionReportBadRequestException
     * @throws \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Exception\GetUndefinedShippingCostsCollectionReportUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Exception\GetUndefinedShippingCostsCollectionReportForbiddenException
     * @throws \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Exception\GetUndefinedShippingCostsCollectionReportInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getUndefinedShippingCostsCollectionReport(string $format, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Endpoint\GetUndefinedShippingCostsCollectionReport($format, $queryParameters), $fetch);
    }
    /**
     * Get debtLineItems file export by projectId and time range
     *
     * @param string $format Export file format
     * @param array $queryParameters {
     *     @var string $filter[projectId] projectId filter
     *     @var string $filter[dateFrom] dateFrom filter
     *     @var string $filter[dateTo] dateTo filter
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Exception\GetDebtLineItemCollectionReportBadRequestException
     * @throws \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Exception\GetDebtLineItemCollectionReportUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Exception\GetDebtLineItemCollectionReportForbiddenException
     * @throws \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Exception\GetDebtLineItemCollectionReportInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getDebtLineItemCollectionReport(string $format, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Endpoint\GetDebtLineItemCollectionReport($format, $queryParameters), $fetch);
    }
    public static function create($httpClient = null, array $additionalPlugins = array(), array $additionalNormalizers = array())
    {
        if (null === $httpClient) {
            $httpClient = \Http\Discovery\Psr18ClientDiscovery::find();
            $plugins = array();
            $uri = \Http\Discovery\Psr17FactoryDiscovery::findUrlFactory()->createUri('https://debt-capturing-api.conqore.niceshops.com/v1');
            $plugins[] = new \Http\Client\Common\Plugin\AddHostPlugin($uri);
            $plugins[] = new \Http\Client\Common\Plugin\AddPathPlugin($uri);
            if (count($additionalPlugins) > 0) {
                $plugins = array_merge($plugins, $additionalPlugins);
            }
            $httpClient = new \Http\Client\Common\PluginClient($httpClient, $plugins);
        }
        $requestFactory = \Http\Discovery\Psr17FactoryDiscovery::findRequestFactory();
        $streamFactory = \Http\Discovery\Psr17FactoryDiscovery::findStreamFactory();
        $normalizers = array(new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer(), new \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Normalizer\JaneObjectNormalizer());
        if (count($additionalNormalizers) > 0) {
            $normalizers = array_merge($normalizers, $additionalNormalizers);
        }
        $serializer = new \Symfony\Component\Serializer\Serializer($normalizers, array(new \Symfony\Component\Serializer\Encoder\JsonEncoder(new \Symfony\Component\Serializer\Encoder\JsonEncode(), new \Symfony\Component\Serializer\Encoder\JsonDecode(array('json_decode_associative' => true)))));
        return new static($httpClient, $requestFactory, $serializer, $streamFactory);
    }
}
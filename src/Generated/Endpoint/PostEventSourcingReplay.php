<?php

namespace Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Endpoint;

class PostEventSourcingReplay extends \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Runtime\Client\BaseEndpoint implements \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Runtime\Client\Endpoint
{
    use \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return '/event-sourcing/replay';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return array(array(), null);
    }
    public function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Exception\PostEventSourcingReplayUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Exception\PostEventSourcingReplayForbiddenException
     * @throws \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Exception\PostEventSourcingReplayConflictException
     * @throws \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Exception\PostEventSourcingReplayInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model\EventSourcingReplayPostResponse200|\Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model\ErrorResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Datenkraft\\Backbone\\Client\\DebtCapturingApi\\Generated\\Model\\EventSourcingReplayPostResponse200', 'json');
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Exception\PostEventSourcingReplayUnauthorizedException($serializer->deserialize($body, 'Datenkraft\\Backbone\\Client\\DebtCapturingApi\\Generated\\Model\\ErrorResponse', 'json'));
        }
        if (is_null($contentType) === false && (403 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Exception\PostEventSourcingReplayForbiddenException($serializer->deserialize($body, 'Datenkraft\\Backbone\\Client\\DebtCapturingApi\\Generated\\Model\\ErrorResponse', 'json'));
        }
        if (is_null($contentType) === false && (409 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Exception\PostEventSourcingReplayConflictException($serializer->deserialize($body, 'Datenkraft\\Backbone\\Client\\DebtCapturingApi\\Generated\\Model\\ErrorResponse', 'json'));
        }
        if (is_null($contentType) === false && (500 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Exception\PostEventSourcingReplayInternalServerErrorException($serializer->deserialize($body, 'Datenkraft\\Backbone\\Client\\DebtCapturingApi\\Generated\\Model\\ErrorResponse', 'json'));
        }
        if (mb_strpos($contentType, 'application/json') !== false) {
            return $serializer->deserialize($body, 'Datenkraft\\Backbone\\Client\\DebtCapturingApi\\Generated\\Model\\ErrorResponse', 'json');
        }
        throw new \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Exception\UnexpectedStatusCodeException($status, $body);
    }
    public function getAuthenticationScopes() : array
    {
        return array('oAuthAuthorization', 'bearerAuth');
    }
}
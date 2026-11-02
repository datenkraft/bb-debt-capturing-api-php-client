<?php

namespace Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Runtime\Normalizer\CheckArray;
use Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class EventSourcingReplayPostBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model\EventSourcingReplayPostBody::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model\EventSourcingReplayPostBody::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model\EventSourcingReplayPostBody();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('infoMailAddress', $data)) {
            $object->infoMailAddress = $data['infoMailAddress'];
            unset($data['infoMailAddress']);
        }
        if (\array_key_exists('projectIds', $data)) {
            $values = [];
            foreach ($data['projectIds'] as $value) {
                $values[] = $value;
            }
            $object->projectIds = $values;
            unset($data['projectIds']);
        }
        if (\array_key_exists('organizationId', $data)) {
            $object->organizationId = $data['organizationId'];
            unset($data['organizationId']);
        }
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_1;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('infoMailAddress', get_object_vars($data)) && null !== ($data->infoMailAddress ?? null)) {
            $dataArray['infoMailAddress'] = $data->infoMailAddress;
        }
        if (array_key_exists('projectIds', get_object_vars($data)) && null !== ($data->projectIds ?? null)) {
            $values = [];
            foreach ($data->projectIds as $value) {
                $values[] = $value;
            }
            $dataArray['projectIds'] = $values;
        }
        if (array_key_exists('organizationId', get_object_vars($data)) && null !== ($data->organizationId ?? null)) {
            $dataArray['organizationId'] = $data->organizationId;
        }
        foreach ($data->additionalPropertyEntries() as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_1;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model\EventSourcingReplayPostBody::class => false];
    }
}
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
class DebtLineItemAggregatedCollectionNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model\DebtLineItemAggregatedCollection::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model\DebtLineItemAggregatedCollection::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model\DebtLineItemAggregatedCollection();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('pagination', $data)) {
            $object->pagination = $this->denormalizer->denormalize($data['pagination'], \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model\CollectionPagination::class, 'json', $context);
            unset($data['pagination']);
        }
        if (\array_key_exists('data', $data)) {
            $values = [];
            foreach ($data['data'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model\DebtLineItemAggregatedSku::class, 'json', $context);
            }
            $object->data = $values;
            unset($data['data']);
        }
        if (\array_key_exists('sum', $data)) {
            $object->sum = $this->denormalizer->denormalize($data['sum'], \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model\DebtLineItemAggregatedCollectionSum::class, 'json', $context);
            unset($data['sum']);
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
        if (array_key_exists('pagination', get_object_vars($data)) && null !== ($data->pagination ?? null)) {
            $normalized = $this->normalizer->normalize($data->pagination, 'json', $context);
            $dataArray['pagination'] = \is_iterable($normalized) ? new \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Runtime\JsonObject($normalized) : $normalized;
        }
        $values = [];
        foreach ($data->data as $value) {
            $normalized_1 = $value === null ? null : $this->normalizer->normalize($value, 'json', $context);
            $values[] = \is_iterable($normalized_1) ? new \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Runtime\JsonObject($normalized_1) : $normalized_1;
        }
        $dataArray['data'] = $values;
        $normalized_2 = $data->sum === null ? null : $this->normalizer->normalize($data->sum, 'json', $context);
        $dataArray['sum'] = \is_iterable($normalized_2) ? new \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Runtime\JsonObject($normalized_2) : $normalized_2;
        foreach ($data->additionalPropertyEntries() as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_1;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model\DebtLineItemAggregatedCollection::class => false];
    }
}
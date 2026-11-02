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
class DebtLineItemAggregatedNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model\DebtLineItemAggregated::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model\DebtLineItemAggregated::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model\DebtLineItemAggregated();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('id', $data)) {
            $object->id = $data['id'];
            unset($data['id']);
        }
        if (\array_key_exists('quantity', $data)) {
            $object->quantity = $data['quantity'];
            unset($data['quantity']);
        }
        if (\array_key_exists('usageStart', $data)) {
            $date = \DateTime::createFromFormat('Y-m-d', $data['usageStart']);
            if (false === $date) {
                throw new \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Runtime\Normalizer\InvalidDateException($data['usageStart'], 'Y-m-d');
            }
            $object->usageStart = $date->setTime(0, 0, 0);
            unset($data['usageStart']);
        }
        if (\array_key_exists('usageEnd', $data)) {
            $date_1 = \DateTime::createFromFormat('Y-m-d', $data['usageEnd']);
            if (false === $date_1) {
                throw new \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Runtime\Normalizer\InvalidDateException($data['usageEnd'], 'Y-m-d');
            }
            $object->usageEnd = $date_1->setTime(0, 0, 0);
            unset($data['usageEnd']);
        }
        if (\array_key_exists('priceTotal', $data)) {
            $object->priceTotal = $this->denormalizer->denormalize($data['priceTotal'], \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model\PriceProperty::class, 'json', $context);
            unset($data['priceTotal']);
        }
        if (\array_key_exists('pricePerUnit', $data)) {
            $object->pricePerUnit = $this->denormalizer->denormalize($data['pricePerUnit'], \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model\PriceProperty::class, 'json', $context);
            unset($data['pricePerUnit']);
        }
        if (\array_key_exists('invoiceId', $data) && $data['invoiceId'] !== null) {
            $object->invoiceId = $data['invoiceId'];
            unset($data['invoiceId']);
        }
        elseif (\array_key_exists('invoiceId', $data)) {
            $object->invoiceId = null;
            unset($data['invoiceId']);
        }
        if (\array_key_exists('invoiceNumber', $data) && $data['invoiceNumber'] !== null) {
            $object->invoiceNumber = $data['invoiceNumber'];
            unset($data['invoiceNumber']);
        }
        elseif (\array_key_exists('invoiceNumber', $data)) {
            $object->invoiceNumber = null;
            unset($data['invoiceNumber']);
        }
        if (\array_key_exists('note', $data) && $data['note'] !== null) {
            $object->note = $data['note'];
            unset($data['note']);
        }
        elseif (\array_key_exists('note', $data)) {
            $object->note = null;
            unset($data['note']);
        }
        if (\array_key_exists('skuUsages', $data)) {
            $values = [];
            foreach ($data['skuUsages'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model\DebtLineItemAggregatedSkuUsage::class, 'json', $context);
            }
            $object->skuUsages = $values;
            unset($data['skuUsages']);
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
        $dataArray['id'] = $data->id;
        $dataArray['quantity'] = $data->quantity;
        $dataArray['usageStart'] = $data->usageStart->format('Y-m-d');
        $dataArray['usageEnd'] = $data->usageEnd->format('Y-m-d');
        $normalized = $data->priceTotal === null ? null : $this->normalizer->normalize($data->priceTotal, 'json', $context);
        $dataArray['priceTotal'] = \is_iterable($normalized) ? new \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Runtime\JsonObject($normalized) : $normalized;
        if (array_key_exists('pricePerUnit', get_object_vars($data)) && null !== ($data->pricePerUnit ?? null)) {
            $normalized_1 = $this->normalizer->normalize($data->pricePerUnit, 'json', $context);
            $dataArray['pricePerUnit'] = \is_iterable($normalized_1) ? new \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Runtime\JsonObject($normalized_1) : $normalized_1;
        }
        if (array_key_exists('invoiceId', get_object_vars($data)) && null !== ($data->invoiceId ?? null)) {
            $dataArray['invoiceId'] = $data->invoiceId;
        }
        if (array_key_exists('invoiceNumber', get_object_vars($data)) && null !== ($data->invoiceNumber ?? null)) {
            $dataArray['invoiceNumber'] = $data->invoiceNumber;
        }
        if (array_key_exists('note', get_object_vars($data)) && null !== ($data->note ?? null)) {
            $dataArray['note'] = $data->note;
        }
        if (array_key_exists('skuUsages', get_object_vars($data)) && null !== ($data->skuUsages ?? null)) {
            $values = [];
            foreach ($data->skuUsages as $value) {
                $normalized_2 = $value === null ? null : $this->normalizer->normalize($value, 'json', $context);
                $values[] = \is_iterable($normalized_2) ? new \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Runtime\JsonObject($normalized_2) : $normalized_2;
            }
            $dataArray['skuUsages'] = $values;
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
        return [\Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model\DebtLineItemAggregated::class => false];
    }
}
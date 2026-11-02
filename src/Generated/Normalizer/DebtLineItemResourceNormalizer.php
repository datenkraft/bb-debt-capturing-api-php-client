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
class DebtLineItemResourceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model\DebtLineItemResource::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model\DebtLineItemResource::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model\DebtLineItemResource();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('skuCode', $data)) {
            $object->skuCode = $data['skuCode'];
            unset($data['skuCode']);
        }
        if (\array_key_exists('quantity', $data) && $data['quantity'] !== null) {
            $object->quantity = $data['quantity'];
            unset($data['quantity']);
        }
        elseif (\array_key_exists('quantity', $data)) {
            $object->quantity = null;
            unset($data['quantity']);
        }
        if (\array_key_exists('usageStart', $data)) {
            $date = \DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['usageStart']);
            if (false === $date) {
                if (is_string($data['usageStart']) and 1 === preg_match('/^\d{4}-\d{2}-\d{2}T\d{2}:\d{2}:\d{2}(?:\.\d+)?(?:Z|[+-]\d{2}:\d{2})$/', $data['usageStart'])) {
                    try {
                        $date = new \DateTime($data['usageStart']);
                    } catch (\Exception) {
                        throw new \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Runtime\Normalizer\InvalidDateException($data['usageStart'], 'Y-m-d\TH:i:sP');
                    }
                } else {
                    throw new \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Runtime\Normalizer\InvalidDateException($data['usageStart'], 'Y-m-d\TH:i:sP');
                }
            }
            $object->usageStart = $date;
            unset($data['usageStart']);
        }
        if (\array_key_exists('usageEnd', $data)) {
            $date_1 = \DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['usageEnd']);
            if (false === $date_1) {
                if (is_string($data['usageEnd']) and 1 === preg_match('/^\d{4}-\d{2}-\d{2}T\d{2}:\d{2}:\d{2}(?:\.\d+)?(?:Z|[+-]\d{2}:\d{2})$/', $data['usageEnd'])) {
                    try {
                        $date_1 = new \DateTime($data['usageEnd']);
                    } catch (\Exception) {
                        throw new \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Runtime\Normalizer\InvalidDateException($data['usageEnd'], 'Y-m-d\TH:i:sP');
                    }
                } else {
                    throw new \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Runtime\Normalizer\InvalidDateException($data['usageEnd'], 'Y-m-d\TH:i:sP');
                }
            }
            $object->usageEnd = $date_1;
            unset($data['usageEnd']);
        }
        if (\array_key_exists('priceTotal', $data) && $data['priceTotal'] !== null) {
            $object->priceTotal = $this->denormalizer->denormalize($data['priceTotal'], \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model\NewDebtLineItemResourcePriceTotal::class, 'json', $context);
            unset($data['priceTotal']);
        }
        elseif (\array_key_exists('priceTotal', $data)) {
            $object->priceTotal = null;
            unset($data['priceTotal']);
        }
        if (\array_key_exists('note', $data) && $data['note'] !== null) {
            $object->note = $data['note'];
            unset($data['note']);
        }
        elseif (\array_key_exists('note', $data)) {
            $object->note = null;
            unset($data['note']);
        }
        if (\array_key_exists('debtLineItemId', $data)) {
            $object->debtLineItemId = $data['debtLineItemId'];
            unset($data['debtLineItemId']);
        }
        if (\array_key_exists('projectId', $data)) {
            $object->projectId = $data['projectId'];
            unset($data['projectId']);
        }
        if (\array_key_exists('invoiceId', $data) && $data['invoiceId'] !== null) {
            $object->invoiceId = $data['invoiceId'];
            unset($data['invoiceId']);
        }
        elseif (\array_key_exists('invoiceId', $data)) {
            $object->invoiceId = null;
            unset($data['invoiceId']);
        }
        if (\array_key_exists('unit', $data) && $data['unit'] !== null) {
            $object->unit = $data['unit'];
            unset($data['unit']);
        }
        elseif (\array_key_exists('unit', $data)) {
            $object->unit = null;
            unset($data['unit']);
        }
        if (\array_key_exists('pricePerUnit', $data) && $data['pricePerUnit'] !== null) {
            $object->pricePerUnit = $this->denormalizer->denormalize($data['pricePerUnit'], \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model\DebtLineItemResourcePricePerUnit::class, 'json', $context);
            unset($data['pricePerUnit']);
        }
        elseif (\array_key_exists('pricePerUnit', $data)) {
            $object->pricePerUnit = null;
            unset($data['pricePerUnit']);
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['skuCode'] = $data->skuCode;
        $dataArray['quantity'] = $data->quantity;
        $dataArray['usageStart'] = $data->usageStart->format('Y-m-d\TH:i:sP');
        $dataArray['usageEnd'] = $data->usageEnd->format('Y-m-d\TH:i:sP');
        $normalized = $data->priceTotal === null ? null : $this->normalizer->normalize($data->priceTotal, 'json', $context);
        $dataArray['priceTotal'] = \is_iterable($normalized) ? new \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Runtime\JsonObject($normalized) : $normalized;
        if (array_key_exists('note', get_object_vars($data)) && null !== ($data->note ?? null)) {
            $dataArray['note'] = $data->note;
        }
        if (array_key_exists('debtLineItemId', get_object_vars($data)) && null !== ($data->debtLineItemId ?? null)) {
            $dataArray['debtLineItemId'] = $data->debtLineItemId;
        }
        if (array_key_exists('projectId', get_object_vars($data)) && null !== ($data->projectId ?? null)) {
            $dataArray['projectId'] = $data->projectId;
        }
        if (array_key_exists('invoiceId', get_object_vars($data)) && null !== ($data->invoiceId ?? null)) {
            $dataArray['invoiceId'] = $data->invoiceId;
        }
        if (array_key_exists('unit', get_object_vars($data)) && null !== ($data->unit ?? null)) {
            $dataArray['unit'] = $data->unit;
        }
        if (array_key_exists('pricePerUnit', get_object_vars($data)) && null !== ($data->pricePerUnit ?? null)) {
            $normalized_1 = $this->normalizer->normalize($data->pricePerUnit, 'json', $context);
            $dataArray['pricePerUnit'] = \is_iterable($normalized_1) ? new \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Runtime\JsonObject($normalized_1) : $normalized_1;
        }
        foreach ($data->additionalPropertyEntries() as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model\DebtLineItemResource::class => false];
    }
}
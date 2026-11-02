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
class NewDebtLineItemResourcePriceTotalNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model\NewDebtLineItemResourcePriceTotal::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model\NewDebtLineItemResourcePriceTotal::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model\NewDebtLineItemResourcePriceTotal();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('minorMicro', $data) && \is_int($data['minorMicro'])) {
            $data['minorMicro'] = (float) $data['minorMicro'];
        }
        if (\array_key_exists('minorMicro', $data) && $data['minorMicro'] !== null) {
            $object->minorMicro = $data['minorMicro'];
            unset($data['minorMicro']);
        }
        elseif (\array_key_exists('minorMicro', $data)) {
            $object->minorMicro = null;
            unset($data['minorMicro']);
        }
        if (\array_key_exists('currency', $data) && $data['currency'] !== null) {
            $object->currency = $data['currency'];
            unset($data['currency']);
        }
        elseif (\array_key_exists('currency', $data)) {
            $object->currency = null;
            unset($data['currency']);
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
        if (array_key_exists('minorMicro', get_object_vars($data)) && null !== ($data->minorMicro ?? null)) {
            $dataArray['minorMicro'] = $data->minorMicro;
        }
        if (array_key_exists('currency', get_object_vars($data)) && null !== ($data->currency ?? null)) {
            $dataArray['currency'] = $data->currency;
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
        return [\Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model\NewDebtLineItemResourcePriceTotal::class => false];
    }
}
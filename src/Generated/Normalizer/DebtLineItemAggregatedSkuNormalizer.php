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
class DebtLineItemAggregatedSkuNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model\DebtLineItemAggregatedSku::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model\DebtLineItemAggregatedSku::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model\DebtLineItemAggregatedSku();
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
            $object->setSkuCode($data['skuCode']);
            unset($data['skuCode']);
        }
        if (\array_key_exists('sum', $data)) {
            $object->setSum($this->denormalizer->denormalize($data['sum'], \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model\DebtLineItemAggregatedSkuSum::class, 'json', $context));
            unset($data['sum']);
        }
        if (\array_key_exists('debtLineItems', $data)) {
            $values = [];
            foreach ($data['debtLineItems'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model\DebtLineItemAggregated::class, 'json', $context);
            }
            $object->setDebtLineItems($values);
            unset($data['debtLineItems']);
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
        $dataArray['skuCode'] = $data->getSkuCode();
        $dataArray['sum'] = $this->normalizer->normalize($data->getSum(), 'json', $context);
        $values = [];
        foreach ($data->getDebtLineItems() as $value) {
            $values[] = $this->normalizer->normalize($value, 'json', $context);
        }
        $dataArray['debtLineItems'] = $values;
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_1;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model\DebtLineItemAggregatedSku::class => false];
    }
}
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
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model\DebtLineItemAggregated();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
            unset($data['id']);
        }
        if (\array_key_exists('quantity', $data)) {
            $object->setQuantity($data['quantity']);
            unset($data['quantity']);
        }
        if (\array_key_exists('usageStart', $data)) {
            $object->setUsageStart(\DateTime::createFromFormat('Y-m-d', $data['usageStart'])->setTime(0, 0, 0));
            unset($data['usageStart']);
        }
        if (\array_key_exists('usageEnd', $data)) {
            $object->setUsageEnd(\DateTime::createFromFormat('Y-m-d', $data['usageEnd'])->setTime(0, 0, 0));
            unset($data['usageEnd']);
        }
        if (\array_key_exists('priceTotal', $data)) {
            $object->setPriceTotal($this->denormalizer->denormalize($data['priceTotal'], \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model\PriceProperty::class, 'json', $context));
            unset($data['priceTotal']);
        }
        if (\array_key_exists('pricePerUnit', $data)) {
            $object->setPricePerUnit($this->denormalizer->denormalize($data['pricePerUnit'], \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model\PriceProperty::class, 'json', $context));
            unset($data['pricePerUnit']);
        }
        if (\array_key_exists('invoiceId', $data) && $data['invoiceId'] !== null) {
            $object->setInvoiceId($data['invoiceId']);
            unset($data['invoiceId']);
        }
        elseif (\array_key_exists('invoiceId', $data) && $data['invoiceId'] === null) {
            $object->setInvoiceId(null);
        }
        if (\array_key_exists('invoiceNumber', $data) && $data['invoiceNumber'] !== null) {
            $object->setInvoiceNumber($data['invoiceNumber']);
            unset($data['invoiceNumber']);
        }
        elseif (\array_key_exists('invoiceNumber', $data) && $data['invoiceNumber'] === null) {
            $object->setInvoiceNumber(null);
        }
        if (\array_key_exists('note', $data) && $data['note'] !== null) {
            $object->setNote($data['note']);
            unset($data['note']);
        }
        elseif (\array_key_exists('note', $data) && $data['note'] === null) {
            $object->setNote(null);
        }
        if (\array_key_exists('skuUsages', $data)) {
            $values = [];
            foreach ($data['skuUsages'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model\DebtLineItemAggregatedSkuUsage::class, 'json', $context);
            }
            $object->setSkuUsages($values);
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
        $dataArray['id'] = $data->getId();
        $dataArray['quantity'] = $data->getQuantity();
        $dataArray['usageStart'] = $data->getUsageStart()?->format('Y-m-d');
        $dataArray['usageEnd'] = $data->getUsageEnd()?->format('Y-m-d');
        $dataArray['priceTotal'] = $this->normalizer->normalize($data->getPriceTotal(), 'json', $context);
        if ($data->isInitialized('pricePerUnit') && null !== $data->getPricePerUnit()) {
            $dataArray['pricePerUnit'] = $this->normalizer->normalize($data->getPricePerUnit(), 'json', $context);
        }
        if ($data->isInitialized('invoiceId') && null !== $data->getInvoiceId()) {
            $dataArray['invoiceId'] = $data->getInvoiceId();
        }
        if ($data->isInitialized('invoiceNumber') && null !== $data->getInvoiceNumber()) {
            $dataArray['invoiceNumber'] = $data->getInvoiceNumber();
        }
        if ($data->isInitialized('note') && null !== $data->getNote()) {
            $dataArray['note'] = $data->getNote();
        }
        if ($data->isInitialized('skuUsages') && null !== $data->getSkuUsages()) {
            $values = [];
            foreach ($data->getSkuUsages() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['skuUsages'] = $values;
        }
        foreach ($data as $key => $value_1) {
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
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
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model\DebtLineItemResource();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('skuCode', $data)) {
            $object->setSkuCode($data['skuCode']);
            unset($data['skuCode']);
        }
        if (\array_key_exists('quantity', $data) && $data['quantity'] !== null) {
            $object->setQuantity($data['quantity']);
            unset($data['quantity']);
        }
        elseif (\array_key_exists('quantity', $data) && $data['quantity'] === null) {
            $object->setQuantity(null);
        }
        if (\array_key_exists('usageStart', $data)) {
            $object->setUsageStart(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['usageStart']));
            unset($data['usageStart']);
        }
        if (\array_key_exists('usageEnd', $data)) {
            $object->setUsageEnd(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['usageEnd']));
            unset($data['usageEnd']);
        }
        if (\array_key_exists('priceTotal', $data) && $data['priceTotal'] !== null) {
            $object->setPriceTotal($this->denormalizer->denormalize($data['priceTotal'], \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model\NewDebtLineItemResourcePriceTotal::class, 'json', $context));
            unset($data['priceTotal']);
        }
        elseif (\array_key_exists('priceTotal', $data) && $data['priceTotal'] === null) {
            $object->setPriceTotal(null);
        }
        if (\array_key_exists('note', $data) && $data['note'] !== null) {
            $object->setNote($data['note']);
            unset($data['note']);
        }
        elseif (\array_key_exists('note', $data) && $data['note'] === null) {
            $object->setNote(null);
        }
        if (\array_key_exists('debtLineItemId', $data)) {
            $object->setDebtLineItemId($data['debtLineItemId']);
            unset($data['debtLineItemId']);
        }
        if (\array_key_exists('projectId', $data)) {
            $object->setProjectId($data['projectId']);
            unset($data['projectId']);
        }
        if (\array_key_exists('invoiceId', $data) && $data['invoiceId'] !== null) {
            $object->setInvoiceId($data['invoiceId']);
            unset($data['invoiceId']);
        }
        elseif (\array_key_exists('invoiceId', $data) && $data['invoiceId'] === null) {
            $object->setInvoiceId(null);
        }
        if (\array_key_exists('unit', $data) && $data['unit'] !== null) {
            $object->setUnit($data['unit']);
            unset($data['unit']);
        }
        elseif (\array_key_exists('unit', $data) && $data['unit'] === null) {
            $object->setUnit(null);
        }
        if (\array_key_exists('pricePerUnit', $data) && $data['pricePerUnit'] !== null) {
            $object->setPricePerUnit($this->denormalizer->denormalize($data['pricePerUnit'], \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model\DebtLineItemResourcepricePerUnit::class, 'json', $context));
            unset($data['pricePerUnit']);
        }
        elseif (\array_key_exists('pricePerUnit', $data) && $data['pricePerUnit'] === null) {
            $object->setPricePerUnit(null);
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
        $dataArray['skuCode'] = $data->getSkuCode();
        $dataArray['quantity'] = $data->getQuantity();
        $dataArray['usageStart'] = $data->getUsageStart()?->format('Y-m-d\TH:i:sP');
        $dataArray['usageEnd'] = $data->getUsageEnd()?->format('Y-m-d\TH:i:sP');
        $dataArray['priceTotal'] = $this->normalizer->normalize($data->getPriceTotal(), 'json', $context);
        if ($data->isInitialized('note') && null !== $data->getNote()) {
            $dataArray['note'] = $data->getNote();
        }
        if ($data->isInitialized('debtLineItemId') && null !== $data->getDebtLineItemId()) {
            $dataArray['debtLineItemId'] = $data->getDebtLineItemId();
        }
        if ($data->isInitialized('projectId') && null !== $data->getProjectId()) {
            $dataArray['projectId'] = $data->getProjectId();
        }
        if ($data->isInitialized('invoiceId') && null !== $data->getInvoiceId()) {
            $dataArray['invoiceId'] = $data->getInvoiceId();
        }
        if ($data->isInitialized('unit') && null !== $data->getUnit()) {
            $dataArray['unit'] = $data->getUnit();
        }
        if ($data->isInitialized('pricePerUnit') && null !== $data->getPricePerUnit()) {
            $dataArray['pricePerUnit'] = $this->normalizer->normalize($data->getPricePerUnit(), 'json', $context);
        }
        foreach ($data as $key => $value) {
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
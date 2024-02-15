<?php

namespace Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Runtime\Normalizer\CheckArray;
use Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
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
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'Datenkraft\\Backbone\\Client\\DebtCapturingApi\\Generated\\Model\\DebtLineItemResource';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'Datenkraft\\Backbone\\Client\\DebtCapturingApi\\Generated\\Model\\DebtLineItemResource';
    }
    /**
     * @return mixed
     */
    public function denormalize($data, $class, $format = null, array $context = array())
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
            $object->setUsageStart(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['usageStart']));
            unset($data['usageStart']);
        }
        if (\array_key_exists('usageEnd', $data)) {
            $object->setUsageEnd(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['usageEnd']));
            unset($data['usageEnd']);
        }
        if (\array_key_exists('priceTotal', $data) && $data['priceTotal'] !== null) {
            $object->setPriceTotal($this->denormalizer->denormalize($data['priceTotal'], 'Datenkraft\\Backbone\\Client\\DebtCapturingApi\\Generated\\Model\\NewDebtLineItemResourcePriceTotal', 'json', $context));
            unset($data['priceTotal']);
        }
        elseif (\array_key_exists('priceTotal', $data) && $data['priceTotal'] === null) {
            $object->setPriceTotal(null);
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
            $object->setPricePerUnit($this->denormalizer->denormalize($data['pricePerUnit'], 'Datenkraft\\Backbone\\Client\\DebtCapturingApi\\Generated\\Model\\DebtLineItemResourcepricePerUnit', 'json', $context));
            unset($data['pricePerUnit']);
        }
        elseif (\array_key_exists('pricePerUnit', $data) && $data['pricePerUnit'] === null) {
            $object->setPricePerUnit(null);
        }
        if (\array_key_exists('note', $data) && $data['note'] !== null) {
            $object->setNote($data['note']);
            unset($data['note']);
        }
        elseif (\array_key_exists('note', $data) && $data['note'] === null) {
            $object->setNote(null);
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value;
            }
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['skuCode'] = $object->getSkuCode();
        $data['quantity'] = $object->getQuantity();
        $data['usageStart'] = $object->getUsageStart()->format('Y-m-d\\TH:i:sP');
        $data['usageEnd'] = $object->getUsageEnd()->format('Y-m-d\\TH:i:sP');
        $data['priceTotal'] = $this->normalizer->normalize($object->getPriceTotal(), 'json', $context);
        if ($object->isInitialized('debtLineItemId') && null !== $object->getDebtLineItemId()) {
            $data['debtLineItemId'] = $object->getDebtLineItemId();
        }
        if ($object->isInitialized('projectId') && null !== $object->getProjectId()) {
            $data['projectId'] = $object->getProjectId();
        }
        if ($object->isInitialized('invoiceId') && null !== $object->getInvoiceId()) {
            $data['invoiceId'] = $object->getInvoiceId();
        }
        if ($object->isInitialized('unit') && null !== $object->getUnit()) {
            $data['unit'] = $object->getUnit();
        }
        if ($object->isInitialized('pricePerUnit') && null !== $object->getPricePerUnit()) {
            $data['pricePerUnit'] = $this->normalizer->normalize($object->getPricePerUnit(), 'json', $context);
        }
        if ($object->isInitialized('note') && null !== $object->getNote()) {
            $data['note'] = $object->getNote();
        }
        foreach ($object as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value;
            }
        }
        return $data;
    }
}
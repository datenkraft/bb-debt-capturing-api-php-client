<?php

namespace Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Normalizer;

use Jane\JsonSchemaRuntime\Reference;
use Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Runtime\Normalizer\CheckArray;
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
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Datenkraft\\Backbone\\Client\\DebtCapturingApi\\Generated\\Model\\DebtLineItemResource';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Datenkraft\\Backbone\\Client\\DebtCapturingApi\\Generated\\Model\\DebtLineItemResource';
    }
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
        if (\array_key_exists('debtLineItemId', $data)) {
            $object->setDebtLineItemId($data['debtLineItemId']);
        }
        if (\array_key_exists('skuCode', $data)) {
            $object->setSkuCode($data['skuCode']);
        }
        if (\array_key_exists('quantity', $data) && $data['quantity'] !== null) {
            $object->setQuantity($data['quantity']);
        }
        elseif (\array_key_exists('quantity', $data) && $data['quantity'] === null) {
            $object->setQuantity(null);
        }
        if (\array_key_exists('projectId', $data)) {
            $object->setProjectId($data['projectId']);
        }
        if (\array_key_exists('usageStart', $data)) {
            $object->setUsageStart(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['usageStart']));
        }
        if (\array_key_exists('usageEnd', $data)) {
            $object->setUsageEnd(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['usageEnd']));
        }
        if (\array_key_exists('priceTotal', $data)) {
            $object->setPriceTotal($this->denormalizer->denormalize($data['priceTotal'], 'Datenkraft\\Backbone\\Client\\DebtCapturingApi\\Generated\\Model\\PriceProperty', 'json', $context));
        }
        if (\array_key_exists('invoiceNumber', $data) && $data['invoiceNumber'] !== null) {
            $object->setInvoiceNumber($data['invoiceNumber']);
        }
        elseif (\array_key_exists('invoiceNumber', $data) && $data['invoiceNumber'] === null) {
            $object->setInvoiceNumber(null);
        }
        if (\array_key_exists('unit', $data) && $data['unit'] !== null) {
            $object->setUnit($data['unit']);
        }
        elseif (\array_key_exists('unit', $data) && $data['unit'] === null) {
            $object->setUnit(null);
        }
        if (\array_key_exists('pricePerUnit', $data)) {
            $object->setPricePerUnit($this->denormalizer->denormalize($data['pricePerUnit'], 'Datenkraft\\Backbone\\Client\\DebtCapturingApi\\Generated\\Model\\PriceProperty', 'json', $context));
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['debtLineItemId'] = $object->getDebtLineItemId();
        $data['skuCode'] = $object->getSkuCode();
        if (null !== $object->getQuantity()) {
            $data['quantity'] = $object->getQuantity();
        }
        $data['projectId'] = $object->getProjectId();
        $data['usageStart'] = $object->getUsageStart()->format('Y-m-d\\TH:i:sP');
        $data['usageEnd'] = $object->getUsageEnd()->format('Y-m-d\\TH:i:sP');
        if (null !== $object->getPriceTotal()) {
            $data['priceTotal'] = $this->normalizer->normalize($object->getPriceTotal(), 'json', $context);
        }
        if (null !== $object->getInvoiceNumber()) {
            $data['invoiceNumber'] = $object->getInvoiceNumber();
        }
        if (null !== $object->getUnit()) {
            $data['unit'] = $object->getUnit();
        }
        if (null !== $object->getPricePerUnit()) {
            $data['pricePerUnit'] = $this->normalizer->normalize($object->getPricePerUnit(), 'json', $context);
        }
        return $data;
    }
}
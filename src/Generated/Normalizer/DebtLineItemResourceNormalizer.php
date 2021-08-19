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
        if (\array_key_exists('unit', $data) && $data['unit'] !== null) {
            $object->setUnit($data['unit']);
        }
        elseif (\array_key_exists('unit', $data) && $data['unit'] === null) {
            $object->setUnit(null);
        }
        if (\array_key_exists('usageStart', $data)) {
            $object->setUsageStart(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['usageStart']));
        }
        if (\array_key_exists('usageEnd', $data)) {
            $object->setUsageEnd(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['usageEnd']));
        }
        if (\array_key_exists('priceTotalMinor', $data) && $data['priceTotalMinor'] !== null) {
            $object->setPriceTotalMinor($data['priceTotalMinor']);
        }
        elseif (\array_key_exists('priceTotalMinor', $data) && $data['priceTotalMinor'] === null) {
            $object->setPriceTotalMinor(null);
        }
        if (\array_key_exists('priceCurrency', $data) && $data['priceCurrency'] !== null) {
            $object->setPriceCurrency($data['priceCurrency']);
        }
        elseif (\array_key_exists('priceCurrency', $data) && $data['priceCurrency'] === null) {
            $object->setPriceCurrency(null);
        }
        if (\array_key_exists('invoiceNumber', $data) && $data['invoiceNumber'] !== null) {
            $object->setInvoiceNumber($data['invoiceNumber']);
        }
        elseif (\array_key_exists('invoiceNumber', $data) && $data['invoiceNumber'] === null) {
            $object->setInvoiceNumber(null);
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
        if (null !== $object->getUnit()) {
            $data['unit'] = $object->getUnit();
        }
        $data['usageStart'] = $object->getUsageStart()->format('Y-m-d\\TH:i:sP');
        $data['usageEnd'] = $object->getUsageEnd()->format('Y-m-d\\TH:i:sP');
        if (null !== $object->getPriceTotalMinor()) {
            $data['priceTotalMinor'] = $object->getPriceTotalMinor();
        }
        if (null !== $object->getPriceCurrency()) {
            $data['priceCurrency'] = $object->getPriceCurrency();
        }
        if (null !== $object->getInvoiceNumber()) {
            $data['invoiceNumber'] = $object->getInvoiceNumber();
        }
        return $data;
    }
}
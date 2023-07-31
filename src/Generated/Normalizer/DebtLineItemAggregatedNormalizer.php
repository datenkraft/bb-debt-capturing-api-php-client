<?php

namespace Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
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
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'Datenkraft\\Backbone\\Client\\DebtCapturingApi\\Generated\\Model\\DebtLineItemAggregated';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'Datenkraft\\Backbone\\Client\\DebtCapturingApi\\Generated\\Model\\DebtLineItemAggregated';
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
        $object = new \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model\DebtLineItemAggregated();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (\array_key_exists('quantity', $data)) {
            $object->setQuantity($data['quantity']);
        }
        if (\array_key_exists('usageStart', $data)) {
            $object->setUsageStart(\DateTime::createFromFormat('Y-m-d', $data['usageStart'])->setTime(0, 0, 0));
        }
        if (\array_key_exists('usageEnd', $data)) {
            $object->setUsageEnd(\DateTime::createFromFormat('Y-m-d', $data['usageEnd'])->setTime(0, 0, 0));
        }
        if (\array_key_exists('priceTotal', $data)) {
            $object->setPriceTotal($this->denormalizer->denormalize($data['priceTotal'], 'Datenkraft\\Backbone\\Client\\DebtCapturingApi\\Generated\\Model\\PriceProperty', 'json', $context));
        }
        if (\array_key_exists('pricePerUnit', $data)) {
            $object->setPricePerUnit($this->denormalizer->denormalize($data['pricePerUnit'], 'Datenkraft\\Backbone\\Client\\DebtCapturingApi\\Generated\\Model\\PriceProperty', 'json', $context));
        }
        if (\array_key_exists('invoiceId', $data) && $data['invoiceId'] !== null) {
            $object->setInvoiceId($data['invoiceId']);
        }
        elseif (\array_key_exists('invoiceId', $data) && $data['invoiceId'] === null) {
            $object->setInvoiceId(null);
        }
        if (\array_key_exists('invoiceNumber', $data) && $data['invoiceNumber'] !== null) {
            $object->setInvoiceNumber($data['invoiceNumber']);
        }
        elseif (\array_key_exists('invoiceNumber', $data) && $data['invoiceNumber'] === null) {
            $object->setInvoiceNumber(null);
        }
        if (\array_key_exists('skuUsages', $data)) {
            $values = array();
            foreach ($data['skuUsages'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Datenkraft\\Backbone\\Client\\DebtCapturingApi\\Generated\\Model\\DebtLineItemAggregatedSkuUsage', 'json', $context);
            }
            $object->setSkuUsages($values);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['id'] = $object->getId();
        $data['quantity'] = $object->getQuantity();
        $data['usageStart'] = $object->getUsageStart()->format('Y-m-d');
        $data['usageEnd'] = $object->getUsageEnd()->format('Y-m-d');
        $data['priceTotal'] = $this->normalizer->normalize($object->getPriceTotal(), 'json', $context);
        if (null !== $object->getPricePerUnit()) {
            $data['pricePerUnit'] = $this->normalizer->normalize($object->getPricePerUnit(), 'json', $context);
        }
        if (null !== $object->getInvoiceId()) {
            $data['invoiceId'] = $object->getInvoiceId();
        }
        if (null !== $object->getInvoiceNumber()) {
            $data['invoiceNumber'] = $object->getInvoiceNumber();
        }
        if (null !== $object->getSkuUsages()) {
            $values = array();
            foreach ($object->getSkuUsages() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['skuUsages'] = $values;
        }
        return $data;
    }
}
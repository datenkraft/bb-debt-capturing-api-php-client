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
class NewInvoiceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model\NewInvoice::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model\NewInvoice::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model\NewInvoice();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('projectId', $data)) {
            $object->setProjectId($data['projectId']);
            unset($data['projectId']);
        }
        if (\array_key_exists('cutoffDate', $data)) {
            $object->setCutoffDate(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['cutoffDate']));
            unset($data['cutoffDate']);
        }
        if (\array_key_exists('invoiceNumber', $data) && $data['invoiceNumber'] !== null) {
            $object->setInvoiceNumber($data['invoiceNumber']);
            unset($data['invoiceNumber']);
        }
        elseif (\array_key_exists('invoiceNumber', $data) && $data['invoiceNumber'] === null) {
            $object->setInvoiceNumber(null);
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
        if ($data->isInitialized('projectId') && null !== $data->getProjectId()) {
            $dataArray['projectId'] = $data->getProjectId();
        }
        if ($data->isInitialized('cutoffDate') && null !== $data->getCutoffDate()) {
            $dataArray['cutoffDate'] = $data->getCutoffDate()?->format('Y-m-d\TH:i:sP');
        }
        if ($data->isInitialized('invoiceNumber') && null !== $data->getInvoiceNumber()) {
            $dataArray['invoiceNumber'] = $data->getInvoiceNumber();
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
        return [\Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model\NewInvoice::class => false];
    }
}
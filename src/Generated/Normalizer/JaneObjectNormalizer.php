<?php

namespace Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Normalizer;

use Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Runtime\Normalizer\CheckArray;
use Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class JaneObjectNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    protected $normalizers = array('Datenkraft\\Backbone\\Client\\DebtCapturingApi\\Generated\\Model\\AuditLog' => 'Datenkraft\\Backbone\\Client\\DebtCapturingApi\\Generated\\Normalizer\\AuditLogNormalizer', 'Datenkraft\\Backbone\\Client\\DebtCapturingApi\\Generated\\Model\\AuditLogCollection' => 'Datenkraft\\Backbone\\Client\\DebtCapturingApi\\Generated\\Normalizer\\AuditLogCollectionNormalizer', 'Datenkraft\\Backbone\\Client\\DebtCapturingApi\\Generated\\Model\\AuthPermissionResource' => 'Datenkraft\\Backbone\\Client\\DebtCapturingApi\\Generated\\Normalizer\\AuthPermissionResourceNormalizer', 'Datenkraft\\Backbone\\Client\\DebtCapturingApi\\Generated\\Model\\AuthPermissionRoleResource' => 'Datenkraft\\Backbone\\Client\\DebtCapturingApi\\Generated\\Normalizer\\AuthPermissionRoleResourceNormalizer', 'Datenkraft\\Backbone\\Client\\DebtCapturingApi\\Generated\\Model\\AuthRoleIdentityResource' => 'Datenkraft\\Backbone\\Client\\DebtCapturingApi\\Generated\\Normalizer\\AuthRoleIdentityResourceNormalizer', 'Datenkraft\\Backbone\\Client\\DebtCapturingApi\\Generated\\Model\\AuthRoleResource' => 'Datenkraft\\Backbone\\Client\\DebtCapturingApi\\Generated\\Normalizer\\AuthRoleResourceNormalizer', 'Datenkraft\\Backbone\\Client\\DebtCapturingApi\\Generated\\Model\\BaseInvoice' => 'Datenkraft\\Backbone\\Client\\DebtCapturingApi\\Generated\\Normalizer\\BaseInvoiceNormalizer', 'Datenkraft\\Backbone\\Client\\DebtCapturingApi\\Generated\\Model\\Collection' => 'Datenkraft\\Backbone\\Client\\DebtCapturingApi\\Generated\\Normalizer\\CollectionNormalizer', 'Datenkraft\\Backbone\\Client\\DebtCapturingApi\\Generated\\Model\\CollectionPagination' => 'Datenkraft\\Backbone\\Client\\DebtCapturingApi\\Generated\\Normalizer\\CollectionPaginationNormalizer', 'Datenkraft\\Backbone\\Client\\DebtCapturingApi\\Generated\\Model\\DebtLineItemAggregated' => 'Datenkraft\\Backbone\\Client\\DebtCapturingApi\\Generated\\Normalizer\\DebtLineItemAggregatedNormalizer', 'Datenkraft\\Backbone\\Client\\DebtCapturingApi\\Generated\\Model\\DebtLineItemAggregatedCollection' => 'Datenkraft\\Backbone\\Client\\DebtCapturingApi\\Generated\\Normalizer\\DebtLineItemAggregatedCollectionNormalizer', 'Datenkraft\\Backbone\\Client\\DebtCapturingApi\\Generated\\Model\\DebtLineItemAggregatedCollectionsum' => 'Datenkraft\\Backbone\\Client\\DebtCapturingApi\\Generated\\Normalizer\\DebtLineItemAggregatedCollectionsumNormalizer', 'Datenkraft\\Backbone\\Client\\DebtCapturingApi\\Generated\\Model\\DebtLineItemAggregatedSku' => 'Datenkraft\\Backbone\\Client\\DebtCapturingApi\\Generated\\Normalizer\\DebtLineItemAggregatedSkuNormalizer', 'Datenkraft\\Backbone\\Client\\DebtCapturingApi\\Generated\\Model\\DebtLineItemAggregatedSkuSum' => 'Datenkraft\\Backbone\\Client\\DebtCapturingApi\\Generated\\Normalizer\\DebtLineItemAggregatedSkuSumNormalizer', 'Datenkraft\\Backbone\\Client\\DebtCapturingApi\\Generated\\Model\\DebtLineItemAggregatedSkuUsage' => 'Datenkraft\\Backbone\\Client\\DebtCapturingApi\\Generated\\Normalizer\\DebtLineItemAggregatedSkuUsageNormalizer', 'Datenkraft\\Backbone\\Client\\DebtCapturingApi\\Generated\\Model\\DebtLineItemResource' => 'Datenkraft\\Backbone\\Client\\DebtCapturingApi\\Generated\\Normalizer\\DebtLineItemResourceNormalizer', 'Datenkraft\\Backbone\\Client\\DebtCapturingApi\\Generated\\Model\\Error' => 'Datenkraft\\Backbone\\Client\\DebtCapturingApi\\Generated\\Normalizer\\ErrorNormalizer', 'Datenkraft\\Backbone\\Client\\DebtCapturingApi\\Generated\\Model\\ErrorResponse' => 'Datenkraft\\Backbone\\Client\\DebtCapturingApi\\Generated\\Normalizer\\ErrorResponseNormalizer', 'Datenkraft\\Backbone\\Client\\DebtCapturingApi\\Generated\\Model\\Information' => 'Datenkraft\\Backbone\\Client\\DebtCapturingApi\\Generated\\Normalizer\\InformationNormalizer', 'Datenkraft\\Backbone\\Client\\DebtCapturingApi\\Generated\\Model\\InformationResponse' => 'Datenkraft\\Backbone\\Client\\DebtCapturingApi\\Generated\\Normalizer\\InformationResponseNormalizer', 'Datenkraft\\Backbone\\Client\\DebtCapturingApi\\Generated\\Model\\Invoice' => 'Datenkraft\\Backbone\\Client\\DebtCapturingApi\\Generated\\Normalizer\\InvoiceNormalizer', 'Datenkraft\\Backbone\\Client\\DebtCapturingApi\\Generated\\Model\\InvoiceCollection' => 'Datenkraft\\Backbone\\Client\\DebtCapturingApi\\Generated\\Normalizer\\InvoiceCollectionNormalizer', 'Datenkraft\\Backbone\\Client\\DebtCapturingApi\\Generated\\Model\\NewAuthRoleResource' => 'Datenkraft\\Backbone\\Client\\DebtCapturingApi\\Generated\\Normalizer\\NewAuthRoleResourceNormalizer', 'Datenkraft\\Backbone\\Client\\DebtCapturingApi\\Generated\\Model\\NewInvoice' => 'Datenkraft\\Backbone\\Client\\DebtCapturingApi\\Generated\\Normalizer\\NewInvoiceNormalizer', 'Datenkraft\\Backbone\\Client\\DebtCapturingApi\\Generated\\Model\\PriceProperty' => 'Datenkraft\\Backbone\\Client\\DebtCapturingApi\\Generated\\Normalizer\\PricePropertyNormalizer', 'Datenkraft\\Backbone\\Client\\DebtCapturingApi\\Generated\\Model\\SkuUsageDebtLineItemResource' => 'Datenkraft\\Backbone\\Client\\DebtCapturingApi\\Generated\\Normalizer\\SkuUsageDebtLineItemResourceNormalizer', 'Datenkraft\\Backbone\\Client\\DebtCapturingApi\\Generated\\Model\\UpdateInvoice' => 'Datenkraft\\Backbone\\Client\\DebtCapturingApi\\Generated\\Normalizer\\UpdateInvoiceNormalizer', 'Datenkraft\\Backbone\\Client\\DebtCapturingApi\\Generated\\Model\\EventSourcingReplayGetResponse200' => 'Datenkraft\\Backbone\\Client\\DebtCapturingApi\\Generated\\Normalizer\\EventSourcingReplayGetResponse200Normalizer', 'Datenkraft\\Backbone\\Client\\DebtCapturingApi\\Generated\\Model\\EventSourcingReplayPostBody' => 'Datenkraft\\Backbone\\Client\\DebtCapturingApi\\Generated\\Normalizer\\EventSourcingReplayPostBodyNormalizer', 'Datenkraft\\Backbone\\Client\\DebtCapturingApi\\Generated\\Model\\EventSourcingReplayPostResponse200' => 'Datenkraft\\Backbone\\Client\\DebtCapturingApi\\Generated\\Normalizer\\EventSourcingReplayPostResponse200Normalizer', '\\Jane\\Component\\JsonSchemaRuntime\\Reference' => '\\Datenkraft\\Backbone\\Client\\DebtCapturingApi\\Generated\\Runtime\\Normalizer\\ReferenceNormalizer'), $normalizersCache = array();
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return array_key_exists($type, $this->normalizers);
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && array_key_exists(get_class($data), $this->normalizers);
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $normalizerClass = $this->normalizers[get_class($object)];
        $normalizer = $this->getNormalizer($normalizerClass);
        return $normalizer->normalize($object, $format, $context);
    }
    /**
     * @return mixed
     */
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        $denormalizerClass = $this->normalizers[$class];
        $denormalizer = $this->getNormalizer($denormalizerClass);
        return $denormalizer->denormalize($data, $class, $format, $context);
    }
    private function getNormalizer(string $normalizerClass)
    {
        return $this->normalizersCache[$normalizerClass] ?? $this->initNormalizer($normalizerClass);
    }
    private function initNormalizer(string $normalizerClass)
    {
        $normalizer = new $normalizerClass();
        $normalizer->setNormalizer($this->normalizer);
        $normalizer->setDenormalizer($this->denormalizer);
        $this->normalizersCache[$normalizerClass] = $normalizer;
        return $normalizer;
    }
}
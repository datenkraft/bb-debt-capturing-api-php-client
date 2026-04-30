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
    protected $normalizers = [
        
        \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model\AuditLog::class => \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Normalizer\AuditLogNormalizer::class,
        
        \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model\AuditLogCollection::class => \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Normalizer\AuditLogCollectionNormalizer::class,
        
        \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model\AuthPermissionResource::class => \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Normalizer\AuthPermissionResourceNormalizer::class,
        
        \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model\AuthPermissionRolePaginatedCollection::class => \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Normalizer\AuthPermissionRolePaginatedCollectionNormalizer::class,
        
        \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model\AuthPermissionRoleResource::class => \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Normalizer\AuthPermissionRoleResourceNormalizer::class,
        
        \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model\AuthRoleCollection::class => \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Normalizer\AuthRoleCollectionNormalizer::class,
        
        \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model\AuthRoleIdentityPaginatedCollection::class => \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Normalizer\AuthRoleIdentityPaginatedCollectionNormalizer::class,
        
        \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model\AuthRoleIdentityResource::class => \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Normalizer\AuthRoleIdentityResourceNormalizer::class,
        
        \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model\AuthRoleResource::class => \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Normalizer\AuthRoleResourceNormalizer::class,
        
        \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model\BaseInvoice::class => \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Normalizer\BaseInvoiceNormalizer::class,
        
        \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model\Collection::class => \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Normalizer\CollectionNormalizer::class,
        
        \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model\CollectionPagination::class => \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Normalizer\CollectionPaginationNormalizer::class,
        
        \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model\DebtLineItemAggregated::class => \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Normalizer\DebtLineItemAggregatedNormalizer::class,
        
        \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model\DebtLineItemAggregatedCollection::class => \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Normalizer\DebtLineItemAggregatedCollectionNormalizer::class,
        
        \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model\DebtLineItemAggregatedCollectionSum::class => \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Normalizer\DebtLineItemAggregatedCollectionSumNormalizer::class,
        
        \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model\DebtLineItemAggregatedSku::class => \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Normalizer\DebtLineItemAggregatedSkuNormalizer::class,
        
        \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model\DebtLineItemAggregatedSkuSum::class => \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Normalizer\DebtLineItemAggregatedSkuSumNormalizer::class,
        
        \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model\DebtLineItemAggregatedSkuUsage::class => \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Normalizer\DebtLineItemAggregatedSkuUsageNormalizer::class,
        
        \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model\DebtLineItemResource::class => \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Normalizer\DebtLineItemResourceNormalizer::class,
        
        \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model\DebtLineItemResourcePricePerUnit::class => \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Normalizer\DebtLineItemResourcePricePerUnitNormalizer::class,
        
        \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model\Error::class => \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Normalizer\ErrorNormalizer::class,
        
        \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model\ErrorReferencesItem::class => \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Normalizer\ErrorReferencesItemNormalizer::class,
        
        \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model\ErrorResponse::class => \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Normalizer\ErrorResponseNormalizer::class,
        
        \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model\GetAuthPermissionCollectionResponse::class => \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Normalizer\GetAuthPermissionCollectionResponseNormalizer::class,
        
        \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model\GetDebtLineItemCollectionResponse::class => \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Normalizer\GetDebtLineItemCollectionResponseNormalizer::class,
        
        \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model\Information::class => \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Normalizer\InformationNormalizer::class,
        
        \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model\InformationResponse::class => \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Normalizer\InformationResponseNormalizer::class,
        
        \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model\Invoice::class => \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Normalizer\InvoiceNormalizer::class,
        
        \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model\InvoiceCollection::class => \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Normalizer\InvoiceCollectionNormalizer::class,
        
        \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model\NewAuthRoleResource::class => \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Normalizer\NewAuthRoleResourceNormalizer::class,
        
        \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model\NewDebtLineItemResource::class => \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Normalizer\NewDebtLineItemResourceNormalizer::class,
        
        \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model\NewDebtLineItemResourcePriceTotal::class => \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Normalizer\NewDebtLineItemResourcePriceTotalNormalizer::class,
        
        \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model\NewInvoice::class => \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Normalizer\NewInvoiceNormalizer::class,
        
        \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model\PriceProperty::class => \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Normalizer\PricePropertyNormalizer::class,
        
        \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model\SkuUsageDebtLineItemResource::class => \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Normalizer\SkuUsageDebtLineItemResourceNormalizer::class,
        
        \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model\SkuUsageDebtLineItemResourceCollection::class => \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Normalizer\SkuUsageDebtLineItemResourceCollectionNormalizer::class,
        
        \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model\UpdateInvoice::class => \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Normalizer\UpdateInvoiceNormalizer::class,
        
        \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model\EventSourcingReplayGetResponse200::class => \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Normalizer\EventSourcingReplayGetResponse200Normalizer::class,
        
        \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model\EventSourcingReplayPostBody::class => \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Normalizer\EventSourcingReplayPostBodyNormalizer::class,
        
        \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model\EventSourcingReplayPostResponse200::class => \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Normalizer\EventSourcingReplayPostResponse200Normalizer::class,
        
        \Jane\Component\JsonSchemaRuntime\Reference::class => \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Runtime\Normalizer\ReferenceNormalizer::class,
    ], $normalizersCache = [];
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return array_key_exists($type, $this->normalizers);
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && array_key_exists(get_class($data), $this->normalizers);
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $normalizerClass = $this->normalizers[get_class($data)];
        $normalizer = $this->getNormalizer($normalizerClass);
        return $normalizer->normalize($data, $format, $context);
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $denormalizerClass = $this->normalizers[$type];
        $denormalizer = $this->getNormalizer($denormalizerClass);
        return $denormalizer->denormalize($data, $type, $format, $context);
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
    public function getSupportedTypes(?string $format = null): array
    {
        return [
            
            \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model\AuditLog::class => false,
            \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model\AuditLogCollection::class => false,
            \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model\AuthPermissionResource::class => false,
            \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model\AuthPermissionRolePaginatedCollection::class => false,
            \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model\AuthPermissionRoleResource::class => false,
            \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model\AuthRoleCollection::class => false,
            \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model\AuthRoleIdentityPaginatedCollection::class => false,
            \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model\AuthRoleIdentityResource::class => false,
            \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model\AuthRoleResource::class => false,
            \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model\BaseInvoice::class => false,
            \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model\Collection::class => false,
            \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model\CollectionPagination::class => false,
            \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model\DebtLineItemAggregated::class => false,
            \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model\DebtLineItemAggregatedCollection::class => false,
            \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model\DebtLineItemAggregatedCollectionSum::class => false,
            \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model\DebtLineItemAggregatedSku::class => false,
            \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model\DebtLineItemAggregatedSkuSum::class => false,
            \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model\DebtLineItemAggregatedSkuUsage::class => false,
            \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model\DebtLineItemResource::class => false,
            \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model\DebtLineItemResourcePricePerUnit::class => false,
            \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model\Error::class => false,
            \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model\ErrorReferencesItem::class => false,
            \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model\ErrorResponse::class => false,
            \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model\GetAuthPermissionCollectionResponse::class => false,
            \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model\GetDebtLineItemCollectionResponse::class => false,
            \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model\Information::class => false,
            \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model\InformationResponse::class => false,
            \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model\Invoice::class => false,
            \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model\InvoiceCollection::class => false,
            \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model\NewAuthRoleResource::class => false,
            \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model\NewDebtLineItemResource::class => false,
            \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model\NewDebtLineItemResourcePriceTotal::class => false,
            \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model\NewInvoice::class => false,
            \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model\PriceProperty::class => false,
            \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model\SkuUsageDebtLineItemResource::class => false,
            \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model\SkuUsageDebtLineItemResourceCollection::class => false,
            \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model\UpdateInvoice::class => false,
            \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model\EventSourcingReplayGetResponse200::class => false,
            \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model\EventSourcingReplayPostBody::class => false,
            \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model\EventSourcingReplayPostResponse200::class => false,
            \Jane\Component\JsonSchemaRuntime\Reference::class => false,
        ];
    }
}
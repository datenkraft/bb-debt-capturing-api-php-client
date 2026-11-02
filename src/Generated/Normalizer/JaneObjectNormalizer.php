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
        $normalizer = match ($normalizerClass) {
            \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Normalizer\AuditLogNormalizer::class => new \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Normalizer\AuditLogNormalizer(),
            \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Normalizer\AuditLogCollectionNormalizer::class => new \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Normalizer\AuditLogCollectionNormalizer(),
            \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Normalizer\AuthPermissionResourceNormalizer::class => new \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Normalizer\AuthPermissionResourceNormalizer(),
            \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Normalizer\AuthPermissionRolePaginatedCollectionNormalizer::class => new \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Normalizer\AuthPermissionRolePaginatedCollectionNormalizer(),
            \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Normalizer\AuthPermissionRoleResourceNormalizer::class => new \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Normalizer\AuthPermissionRoleResourceNormalizer(),
            \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Normalizer\AuthRoleCollectionNormalizer::class => new \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Normalizer\AuthRoleCollectionNormalizer(),
            \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Normalizer\AuthRoleIdentityPaginatedCollectionNormalizer::class => new \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Normalizer\AuthRoleIdentityPaginatedCollectionNormalizer(),
            \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Normalizer\AuthRoleIdentityResourceNormalizer::class => new \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Normalizer\AuthRoleIdentityResourceNormalizer(),
            \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Normalizer\AuthRoleResourceNormalizer::class => new \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Normalizer\AuthRoleResourceNormalizer(),
            \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Normalizer\BaseInvoiceNormalizer::class => new \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Normalizer\BaseInvoiceNormalizer(),
            \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Normalizer\CollectionNormalizer::class => new \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Normalizer\CollectionNormalizer(),
            \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Normalizer\CollectionPaginationNormalizer::class => new \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Normalizer\CollectionPaginationNormalizer(),
            \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Normalizer\DebtLineItemAggregatedNormalizer::class => new \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Normalizer\DebtLineItemAggregatedNormalizer(),
            \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Normalizer\DebtLineItemAggregatedCollectionNormalizer::class => new \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Normalizer\DebtLineItemAggregatedCollectionNormalizer(),
            \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Normalizer\DebtLineItemAggregatedCollectionSumNormalizer::class => new \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Normalizer\DebtLineItemAggregatedCollectionSumNormalizer(),
            \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Normalizer\DebtLineItemAggregatedSkuNormalizer::class => new \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Normalizer\DebtLineItemAggregatedSkuNormalizer(),
            \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Normalizer\DebtLineItemAggregatedSkuSumNormalizer::class => new \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Normalizer\DebtLineItemAggregatedSkuSumNormalizer(),
            \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Normalizer\DebtLineItemAggregatedSkuUsageNormalizer::class => new \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Normalizer\DebtLineItemAggregatedSkuUsageNormalizer(),
            \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Normalizer\DebtLineItemResourceNormalizer::class => new \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Normalizer\DebtLineItemResourceNormalizer(),
            \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Normalizer\DebtLineItemResourcePricePerUnitNormalizer::class => new \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Normalizer\DebtLineItemResourcePricePerUnitNormalizer(),
            \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Normalizer\ErrorNormalizer::class => new \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Normalizer\ErrorNormalizer(),
            \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Normalizer\ErrorReferencesItemNormalizer::class => new \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Normalizer\ErrorReferencesItemNormalizer(),
            \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Normalizer\ErrorResponseNormalizer::class => new \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Normalizer\ErrorResponseNormalizer(),
            \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Normalizer\GetAuthPermissionCollectionResponseNormalizer::class => new \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Normalizer\GetAuthPermissionCollectionResponseNormalizer(),
            \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Normalizer\GetDebtLineItemCollectionResponseNormalizer::class => new \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Normalizer\GetDebtLineItemCollectionResponseNormalizer(),
            \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Normalizer\InformationNormalizer::class => new \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Normalizer\InformationNormalizer(),
            \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Normalizer\InformationResponseNormalizer::class => new \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Normalizer\InformationResponseNormalizer(),
            \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Normalizer\InvoiceNormalizer::class => new \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Normalizer\InvoiceNormalizer(),
            \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Normalizer\InvoiceCollectionNormalizer::class => new \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Normalizer\InvoiceCollectionNormalizer(),
            \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Normalizer\NewAuthRoleResourceNormalizer::class => new \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Normalizer\NewAuthRoleResourceNormalizer(),
            \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Normalizer\NewDebtLineItemResourceNormalizer::class => new \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Normalizer\NewDebtLineItemResourceNormalizer(),
            \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Normalizer\NewDebtLineItemResourcePriceTotalNormalizer::class => new \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Normalizer\NewDebtLineItemResourcePriceTotalNormalizer(),
            \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Normalizer\NewInvoiceNormalizer::class => new \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Normalizer\NewInvoiceNormalizer(),
            \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Normalizer\PricePropertyNormalizer::class => new \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Normalizer\PricePropertyNormalizer(),
            \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Normalizer\SkuUsageDebtLineItemResourceNormalizer::class => new \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Normalizer\SkuUsageDebtLineItemResourceNormalizer(),
            \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Normalizer\SkuUsageDebtLineItemResourceCollectionNormalizer::class => new \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Normalizer\SkuUsageDebtLineItemResourceCollectionNormalizer(),
            \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Normalizer\UpdateInvoiceNormalizer::class => new \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Normalizer\UpdateInvoiceNormalizer(),
            \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Normalizer\EventSourcingReplayGetResponse200Normalizer::class => new \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Normalizer\EventSourcingReplayGetResponse200Normalizer(),
            \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Normalizer\EventSourcingReplayPostBodyNormalizer::class => new \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Normalizer\EventSourcingReplayPostBodyNormalizer(),
            \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Normalizer\EventSourcingReplayPostResponse200Normalizer::class => new \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Normalizer\EventSourcingReplayPostResponse200Normalizer(),
            \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Runtime\Normalizer\ReferenceNormalizer::class => new \Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Runtime\Normalizer\ReferenceNormalizer(),
            default => throw new \InvalidArgumentException('Unknown normalizer class: ' . $normalizerClass),
        };
        if ($normalizer instanceof \Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface) {
            $normalizer->setNormalizer($this->normalizer);
        }
        if ($normalizer instanceof \Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface) {
            $normalizer->setDenormalizer($this->denormalizer);
        }
        $this->normalizersCache[$normalizerClass] = $normalizer;
        return $normalizer;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return array_combine(array_keys($this->normalizers), array_fill(0, count($this->normalizers), false));
    }
}
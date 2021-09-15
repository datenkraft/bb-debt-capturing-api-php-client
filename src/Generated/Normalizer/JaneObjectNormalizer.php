<?php

namespace Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Normalizer;

use Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Runtime\Normalizer\CheckArray;
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
    protected $normalizers = array('Datenkraft\\Backbone\\Client\\DebtCapturingApi\\Generated\\Model\\ErrorResponse' => 'Datenkraft\\Backbone\\Client\\DebtCapturingApi\\Generated\\Normalizer\\ErrorResponseNormalizer', 'Datenkraft\\Backbone\\Client\\DebtCapturingApi\\Generated\\Model\\Error' => 'Datenkraft\\Backbone\\Client\\DebtCapturingApi\\Generated\\Normalizer\\ErrorNormalizer', 'Datenkraft\\Backbone\\Client\\DebtCapturingApi\\Generated\\Model\\AuthPermissionResource' => 'Datenkraft\\Backbone\\Client\\DebtCapturingApi\\Generated\\Normalizer\\AuthPermissionResourceNormalizer', 'Datenkraft\\Backbone\\Client\\DebtCapturingApi\\Generated\\Model\\AuthRoleResource' => 'Datenkraft\\Backbone\\Client\\DebtCapturingApi\\Generated\\Normalizer\\AuthRoleResourceNormalizer', 'Datenkraft\\Backbone\\Client\\DebtCapturingApi\\Generated\\Model\\AuthRoleIdentityResource' => 'Datenkraft\\Backbone\\Client\\DebtCapturingApi\\Generated\\Normalizer\\AuthRoleIdentityResourceNormalizer', 'Datenkraft\\Backbone\\Client\\DebtCapturingApi\\Generated\\Model\\DebtLineItemResource' => 'Datenkraft\\Backbone\\Client\\DebtCapturingApi\\Generated\\Normalizer\\DebtLineItemResourceNormalizer', 'Datenkraft\\Backbone\\Client\\DebtCapturingApi\\Generated\\Model\\PatchDebtLineItemResource' => 'Datenkraft\\Backbone\\Client\\DebtCapturingApi\\Generated\\Normalizer\\PatchDebtLineItemResourceNormalizer', '\\Jane\\JsonSchemaRuntime\\Reference' => '\\Datenkraft\\Backbone\\Client\\DebtCapturingApi\\Generated\\Runtime\\Normalizer\\ReferenceNormalizer'), $normalizersCache = array();
    public function supportsDenormalization($data, $type, $format = null)
    {
        return array_key_exists($type, $this->normalizers);
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && array_key_exists(get_class($data), $this->normalizers);
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $normalizerClass = $this->normalizers[get_class($object)];
        $normalizer = $this->getNormalizer($normalizerClass);
        return $normalizer->normalize($object, $format, $context);
    }
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
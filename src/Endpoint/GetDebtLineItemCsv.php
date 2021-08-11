<?php

declare(strict_types=1);

namespace Datenkraft\Backbone\Client\DebtCapturingApi\Endpoint;

use Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Endpoint\GetDebtLineItemCsv as GetDebtLineItemCsvGenerated;
use Symfony\Component\Serializer\SerializerInterface;

/**
 * Class GetDebtLineItemCsv
 * @package Datenkraft\Backbone\Client\DebtCapturingApi\Endpoint
 */
class GetDebtLineItemCsv extends GetDebtLineItemCsvGenerated
{

    /**
     * @inheritDoc
     */
    protected function transformResponseBody(
        string $body,
        int $status,
        SerializerInterface $serializer,
        ?string $contentType = null
    ) {
        if (200 === $status && mb_strpos($contentType, 'text/csv') !== false) {
            return $body;
        }

        return parent::transformResponseBody(
            $body,
            $status,
            $serializer,
            $contentType
        );
    }
}

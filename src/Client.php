<?php

declare(strict_types=1);

namespace Datenkraft\Backbone\Client\DebtCapturingApi;

use Datenkraft\Backbone\Client\BaseApi\ClientFactory;
use Datenkraft\Backbone\Client\BaseApi\Exceptions\AuthException;
use Datenkraft\Backbone\Client\DebtCapturingApi\Endpoint\GetDebtLineItemCollectionCsv;

/**
 * Class Client
 * @package Datenkraft\Backbone\Client\DebtCapturingApi
 */
class Client extends Generated\Client
{
    /**
     * @param ClientFactory $clientFactory
     * @param string|null $endpointUrl
     * @return static
     * @throws AuthException
     */
    public static function createWithFactory(ClientFactory $clientFactory, string $endpointUrl = null): self
    {
        $endpointUrl = $endpointUrl ?? getenv('X_DATENKRAFT_DEBT_CAPTURING_API_URL') ?: null;

        return $clientFactory->createClient(static::class, $endpointUrl);
    }

    /**
     * @inheritDoc
     */
    public function getDebtLineItemCsv(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GetDebtLineItemCollectionCsv($queryParameters), $fetch);
    }
}

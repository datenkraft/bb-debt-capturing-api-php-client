<?php

namespace Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model;

class DebtLineItemAggregatedCollection extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * @var CollectionPagination
     */
    protected $pagination;
    /**
     * @var list<DebtLineItemAggregatedSku>
     */
    protected $data;
    /**
     * @var DebtLineItemAggregatedCollectionSum
     */
    protected $sum;
    /**
     * @return CollectionPagination
     */
    public function getPagination(): CollectionPagination
    {
        return $this->pagination;
    }
    /**
     * @param CollectionPagination $pagination
     *
     * @return self
     */
    public function setPagination(CollectionPagination $pagination): self
    {
        $this->initialized['pagination'] = true;
        $this->pagination = $pagination;
        return $this;
    }
    /**
     * @return list<DebtLineItemAggregatedSku>
     */
    public function getData(): array
    {
        return $this->data;
    }
    /**
     * @param list<DebtLineItemAggregatedSku> $data
     *
     * @return self
     */
    public function setData(array $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;
        return $this;
    }
    /**
     * @return DebtLineItemAggregatedCollectionSum
     */
    public function getSum(): DebtLineItemAggregatedCollectionSum
    {
        return $this->sum;
    }
    /**
     * @param DebtLineItemAggregatedCollectionSum $sum
     *
     * @return self
     */
    public function setSum(DebtLineItemAggregatedCollectionSum $sum): self
    {
        $this->initialized['sum'] = true;
        $this->sum = $sum;
        return $this;
    }
}
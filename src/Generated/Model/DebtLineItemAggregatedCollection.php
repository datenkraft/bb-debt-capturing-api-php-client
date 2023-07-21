<?php

namespace Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model;

class DebtLineItemAggregatedCollection
{
    /**
     * 
     *
     * @var CollectionPagination
     */
    protected $pagination;
    /**
     * 
     *
     * @var DebtLineItemAggregatedSku[]
     */
    protected $data;
    /**
     * 
     *
     * @var DebtLineItemAggregatedCollectionsum
     */
    protected $sum;
    /**
     * 
     *
     * @return CollectionPagination
     */
    public function getPagination() : CollectionPagination
    {
        return $this->pagination;
    }
    /**
     * 
     *
     * @param CollectionPagination $pagination
     *
     * @return self
     */
    public function setPagination(CollectionPagination $pagination) : self
    {
        $this->pagination = $pagination;
        return $this;
    }
    /**
     * 
     *
     * @return DebtLineItemAggregatedSku[]
     */
    public function getData() : array
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param DebtLineItemAggregatedSku[] $data
     *
     * @return self
     */
    public function setData(array $data) : self
    {
        $this->data = $data;
        return $this;
    }
    /**
     * 
     *
     * @return DebtLineItemAggregatedCollectionsum
     */
    public function getSum() : DebtLineItemAggregatedCollectionsum
    {
        return $this->sum;
    }
    /**
     * 
     *
     * @param DebtLineItemAggregatedCollectionsum $sum
     *
     * @return self
     */
    public function setSum(DebtLineItemAggregatedCollectionsum $sum) : self
    {
        $this->sum = $sum;
        return $this;
    }
}
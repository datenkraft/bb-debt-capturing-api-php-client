<?php

namespace Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model;

class DebtLineItemAggregatedSkuUsage
{
    /**
     * sku usage id
     *
     * @var string
     */
    protected $id;
    /**
     * Quantity
     *
     * @var int
     */
    protected $quantity;
    /**
     * Meta - independent from meta filter
     *
     * @var mixed|null
     */
    protected $meta;
    /**
     * sku usage id
     *
     * @return string
     */
    public function getId() : string
    {
        return $this->id;
    }
    /**
     * sku usage id
     *
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id) : self
    {
        $this->id = $id;
        return $this;
    }
    /**
     * Quantity
     *
     * @return int
     */
    public function getQuantity() : int
    {
        return $this->quantity;
    }
    /**
     * Quantity
     *
     * @param int $quantity
     *
     * @return self
     */
    public function setQuantity(int $quantity) : self
    {
        $this->quantity = $quantity;
        return $this;
    }
    /**
     * Meta - independent from meta filter
     *
     * @return mixed
     */
    public function getMeta()
    {
        return $this->meta;
    }
    /**
     * Meta - independent from meta filter
     *
     * @param mixed $meta
     *
     * @return self
     */
    public function setMeta($meta) : self
    {
        $this->meta = $meta;
        return $this;
    }
}
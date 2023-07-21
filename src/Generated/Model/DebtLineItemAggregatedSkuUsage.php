<?php

namespace Datenkraft\Backbone\Client\DebtCapturingApi\Generated\Model;

class DebtLineItemAggregatedSkuUsage extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = array();
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
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
     * @var mixed[]|null
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
        $this->initialized['id'] = true;
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
        $this->initialized['quantity'] = true;
        $this->quantity = $quantity;
        return $this;
    }
    /**
     * Meta - independent from meta filter
     *
     * @return mixed[]|null
     */
    public function getMeta() : ?iterable
    {
        return $this->meta;
    }
    /**
     * Meta - independent from meta filter
     *
     * @param mixed[]|null $meta
     *
     * @return self
     */
    public function setMeta(?iterable $meta) : self
    {
        $this->initialized['meta'] = true;
        $this->meta = $meta;
        return $this;
    }
}
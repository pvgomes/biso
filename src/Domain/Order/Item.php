<?php

namespace Domain\Order;

class Item
{
    Const ADDITIONALS_TRACKING = "tracking";

    private $id;

    private $order;

    private $product;

    private $total;

    private $statusMarket;

    private $statusSeller;

    private $marketId;

    private $stateMarket;

    private $stateSeller;

    private $itemStatusHistory;

    private $createdAt;

    private $updatedAt;

    private $additionals;

    public function __construct()
    {
        $this->itemStatusHistory = [];
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set order
     *
     * @param Order $order
     *
     * @return Item
     */
    public function setOrder(Order $order = null)
    {
        $this->order = $order;

        return $this;
    }

    /**
     * Get order
     *
     * @return Order
     */
    public function getOrder()
    {
        return $this->order;
    }

    /**
     * Set product
     *
     * @param \AppBundle\Infrastructure\Product\Product $product
     *
     * @return Item
     */
    public function setProduct($product = null)
    {
        $this->product = $product;

        return $this;
    }

    /**
     * Get product
     *
     * @return \AppBundle\Infrastructure\Product\Product
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * Set total
     *
     * @param float $total
     *
     * @return Item
     */
    public function setTotal($total)
    {
        $this->total = $total;

        return $this;
    }

    /**
     * Get total
     *
     * @return float
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * @return ItemStatus
     */
    public function getStatusMarket()
    {
        return $this->statusMarket;
    }

    /**
     * @param ItemStatus $statusMarket
     *
     * @return Item
     */
    public function setStatusMarket($statusMarket)
    {
        $this->statusMarket = $statusMarket;

        return $this;
    }

    /**
     * @return ItemStatus
     */
    public function getStatusSeller()
    {
        return $this->statusSeller;
    }

    /**
     * @param ItemStatus $statusSeller
     *
     * @return Item
     */
    public function setStatusSeller($statusSeller)
    {
        $this->statusSeller = $statusSeller;

        return $this;
    }

    /**
     * @return String
     */
    public function getStateMarket()
    {
        if (is_null($this->stateMarket)) {
            return $this->getStatusMarket()->getKeyName();
        }

        return $this->stateMarket;
    }

    /**
     * @param String $stateMarket
     */
    public function setStateMarket($stateMarket)
    {
        $this->stateMarket = $stateMarket;
    }

    /**
     * @param String $stateSeller
     */
    public function setStateSeller($stateSeller)
    {
        $this->stateSeller = $stateSeller;
    }

    /**
     * @return String
     */
    public function getStateSeller()
    {
        if (is_null($this->stateSeller)) {
            return $this->getStatusSeller()->getKeyName();
        }

        return $this->stateSeller;
    }

    /**
     * Add ItemStatusHistory
     *
     * @param ItemStatusHistory $itemStatusHistory
     * @return Item
     */
    public function addItemStatusHistory(ItemStatusHistory $itemStatusHistory)
    {
        $this->itemStatusHistory[] = $itemStatusHistory;

        return $this;
    }

    /**
     * Remove ItemStatusHistory
     *
     * @param ItemStatusHistory $itemStatusHistory
     */
    public function removeItemStatusHistory(ItemStatusHistory $itemStatusHistory)
    {
        $this->itemStatusHistory->removeElement($itemStatusHistory);
    }

    /**
     * Get ItemStatusHistory
     *
     * @return ArrayCollection
     */
    public function getItemStatusHistory()
    {
        return $this->itemStatusHistory;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Get updatedAt
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * @return string
     */
    public function getMarketId()
    {
        return $this->marketId;
    }

    /**
     * @param string $marketId
     */
    public function setMarketId($marketId)
    {
        $this->marketId = $marketId;
    }

    /**
     * @return string
     */
    public function getAdditionals($additionalType = null)
    {
        $additionals = $this->additionals;

        if ($additionalType) {
            $additionalsArray = json_decode($this->additionals, true);
            if (array_key_exists($additionalType, $additionalsArray)) {
                $additionals = $additionalsArray[$additionalType];
            }

        }

        return $additionals;
    }

    /**
     * @param string $additionals
     */
    public function setAdditionals($additionals)
    {
        $this->additionals = $additionals;
    }

    public function addAdditionals($index, $value)
    {
        $unserializedAdditionals = [];
        $additionals = $this->getAdditionals();
        if ($additionals) {
            $unserializedAdditionals = json_decode($additionals, true);
        }
        $unserializedAdditionals[$index] = $value;

        $this->setAdditionals(json_encode($unserializedAdditionals));
    }

    /**
     * @return bool
     */
    public function isCanceled()
    {
        return ItemStatus::isCanceledItem($this);
    }

    /**
     * @return bool
     */
    public function isCanceledByMarket()
    {
        return ItemStatus::isCanceledByMarket($this);
    }

    /**
     * @return bool
     */
    public function isCanceledBySeller()
    {
        return ItemStatus::isCanceledBySeller($this);
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return Item
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     *
     * @return Item
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }
}

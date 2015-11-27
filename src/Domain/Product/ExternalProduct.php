<?php

namespace Domain\Product;


class ExternalProduct
{
    /**
     * @var int
     */
    protected $id;

    /**
     * @var \Domain\Core\Market
     */
    protected $market;

    /**
     * @var \Domain\Product\Product
     */
    protected $product;

    /**
     * @var string
     */
    protected $sku;

    /**
     * @var string
     */
    protected $json;

    /**
     * @var string
     */
    protected $status;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return \Domain\Core\Market
     */
    public function getMarket()
    {
        return $this->market;
    }

    /**
     * @param \Domain\Core\Market $market
     */
    public function setMarket($market)
    {
        $this->market = $market;
    }

    /**
     * @return Product
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * @param Product $product
     */
    public function setProduct($product)
    {
        $this->product = $product;
    }

    /**
     * @return string
     */
    public function getSku()
    {
        return $this->sku;
    }

    /**
     * @param string $sku
     */
    public function setSku($sku)
    {
        $this->sku = $sku;
    }

    /**
     * @return string
     */
    public function getJson()
    {
        return $this->json;
    }

    /**
     * @param string $json
     */
    public function setJson($json)
    {
        $this->json = $json;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param string $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }


}

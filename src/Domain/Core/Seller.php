<?php

namespace Domain\Core;

use Domain\Order\Order;

class Seller
{

    protected $id;

    private $configuration;

    protected $name;

    private $keyName;

    private $accessToken;

    private $createdAt;

    private $updatedAt;

    private $productPrefix;
    private $categoryPrefix;

    private $specification;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getConfiguration()
    {
        return $this->configuration;
    }

    /**
     * @param mixed $configuration
     */
    public function setConfiguration($configuration)
    {
        $this->configuration = $configuration;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getKeyName()
    {
        return $this->keyName;
    }

    /**
     * @param mixed $keyName
     */
    public function setKeyName($keyName)
    {
        $this->keyName = $keyName;
    }

    /**
     * @return mixed
     */
    public function getAccessToken()
    {
        return $this->accessToken;
    }

    /**
     * @param mixed $accessToken
     */
    public function setAccessToken($accessToken)
    {
        $this->accessToken = $accessToken;
    }

    /**
     * @return mixed
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @param mixed $createdAt
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
    }

    /**
     * @return mixed
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * @param mixed $updatedAt
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;
    }

    /**
     * @return mixed
     */
    public function getProductPrefix()
    {
        return $this->productPrefix;
    }

    /**
     * @param mixed $productPrefix
     */
    public function setProductPrefix($productPrefix)
    {
        $this->productPrefix = $productPrefix;
    }

    /**
     * @return mixed
     */
    public function getCategoryPrefix()
    {
        return $this->categoryPrefix;
    }

    /**
     * @param mixed $categoryPrefix
     */
    public function setCategoryPrefix($categoryPrefix)
    {
        $this->categoryPrefix = $categoryPrefix;
    }

    /**
     * @return mixed
     */
    public function getSpecification()
    {
        return $this->specification;
    }

    /**
     * @param mixed $specification
     */
    public function setSpecification($specification)
    {
        $this->specification = $specification;
    }

}

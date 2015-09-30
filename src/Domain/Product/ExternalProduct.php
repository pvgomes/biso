<?php

namespace Domain\Product;


class ExternalProduct
{
    const STATUS_NEW = 'new';
    const STATUS_ACTIVE = 'active';
    const STATUS_INACTIVE = 'inactive';

    /**
     * @var int
     */
    private $id;

    /**
     * @var \Domain\Core\Market
     */
    private $market;

    /**
     * @var string
     */
    private $sku;

    /**
     * @var string
     */
    private $json;

    /**
     * @var string
     */
    private $status;

    /**
     * @var \DateTime
     */
    private $created_at;

    /**
     * @var \DateTime
     */
    private $updated_at;


    /**
     * @return array
     */
    public static function listStatus()
    {
        return [
            self::STATUS_NEW => self::STATUS_NEW,
            self::STATUS_ACTIVE => self::STATUS_ACTIVE,
            self::STATUS_INACTIVE => self::STATUS_INACTIVE,
        ];
    }
}

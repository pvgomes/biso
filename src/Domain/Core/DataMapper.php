<?php

namespace Domain\Core;

/**
 *
 * Interface of DataMapper's. All DataMapper to be implemented should implement the Singleton pattern.
 *
 */
interface DataMapper {

    /**
     * Gets the instance of DataMapper.
     */
    public static function getInstance();

    /**
     *
     * Converts an array of infrastructure for a business object. Lean conversion converts only the basic attributes.
     *
     * @param $dataArray array of infrastructure
     */
    public function assign($dataArray);

    /**
     *
     * Converts an array of infrastructure for a business object. Complete conversion, converts all attributes of the class
     *
     * @param $dataArray array of infrastructure
     */
    public function assignFull($dataArray);

    /**
     *
     * Converts a business object to an array
     *
     * @param $object Business class object.
     */
    public function map($object);
}
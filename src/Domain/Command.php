<?php
/**
 * Created by PhpStorm.
 * User: pvgomes
 * Date: 11/9/15
 * Time: 9:56 AM
 */

namespace Domain;

interface Command {

    public function domainEntity();

    public function resourceName();
}
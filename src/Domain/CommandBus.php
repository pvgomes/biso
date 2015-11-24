<?php
/**
 * Created by PhpStorm.
 * User: pvgomes
 * Date: 11/9/15
 * Time: 9:56 AM
 */

namespace Domain;

interface CommandBus {

    public function execute(Command $command);

} 
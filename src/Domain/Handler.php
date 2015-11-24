<?php

namespace Domain;

interface Handler {

    public function handle(Command $command);
}
 
<?php

namespace Domain\Core;

interface UserRepository extends RepositoryInterface
{
    /**
     * Get User by Username
     * @param $userName
     * @return mixed
     */
    public function getByUserName($userName);
}

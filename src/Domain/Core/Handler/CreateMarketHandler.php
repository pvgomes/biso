<?php

namespace Domain\Core\Handler;

use Domain\Core\Market;
use Domain\Core\MarketRepository;
use Domain\Command\CommandInterface;

class CreateTicketHandler implements HandlerInterface {

    /**
     * @var \Domain\Core\MarketRepository
     */
    private $repository;

    public function __construct(MarketRepository $repository)
    {
        $this->repository = $repository;
    }

    public function handle(CommandInterface $command)
    {
        $this->save($command->getDomainEntity());
    }

    protected function save(Market $market)
    {
        $this->repository->add($market);
    }
} 
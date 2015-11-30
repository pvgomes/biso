<?php

namespace Domain\Core;

use Domain\Command;
use Domain\Handler;

class CreateConfigurationHandler implements Handler
{

    /**
     * @var \Domain\Core\ConfigurationRepository
     */
    private $configurationRepository;


    public function __construct(ConfigurationRepository $configurationRepository)
    {
        $this->configurationRepository = $configurationRepository;
    }

    public function handle(Command $command)
    {
        $this->save($command);
    }


    protected function save(Command $command)
    {
        $configuration = $command->domainEntity();
        if (!$configuration instanceof Configuration) {
            throw new \DomainException("Invalid Configuration");
        }

        $this->configurationRepository->add($configuration);
    }
} 
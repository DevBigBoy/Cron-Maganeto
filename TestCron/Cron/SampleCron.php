<?php

declare(strict_types=1);

namespace Bigboy\TestCron\Cron;

use Psr\Log\LoggerInterface;
use function Symfony\Component\String\s;

class SampleCron
{

    public function __construct(
        protected readonly LoggerInterface $logger,
    )
    {}

    public function execute()
    {
        $this->logger->info('Test cron executed');
        sleep(2);
        $this->logger->info('Test cron executed Has been finished');
    }
}

<?php

declare(strict_types=1);

namespace WebServCo\Configuration\Contract;

interface ConfigurationFactoryInterface
{
    public function createConfigurationGetter(): ConfigurationGetterInterface;
}

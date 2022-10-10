<?php

declare(strict_types=1);

namespace WebServCo\ConfigurationContract;

interface ConfigurationFactoryInterface
{
    public function createConfigurationGetter(): ConfigurationGetterInterface;
}

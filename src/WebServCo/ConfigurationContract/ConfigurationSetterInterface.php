<?php

declare(strict_types=1);

namespace WebServCo\ConfigurationContract;

interface ConfigurationSetterInterface extends ConfigurationServiceInterface
{
    public function set(string $key, bool|float|int|string|null $value): bool;
}

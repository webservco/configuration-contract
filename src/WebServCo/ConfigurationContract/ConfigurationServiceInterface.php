<?php

declare(strict_types=1);

namespace WebServCo\ConfigurationContract;

interface ConfigurationServiceInterface
{
    public function validateValue(mixed $value): bool;
}

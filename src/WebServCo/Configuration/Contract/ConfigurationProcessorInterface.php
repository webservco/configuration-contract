<?php

declare(strict_types=1);

namespace WebServCo\Configuration\Contract;

interface ConfigurationProcessorInterface
{
    /**
     * Process configuration data
     *
     * phpcs:disable SlevomatCodingStandard.TypeHints.DisallowMixedTypeHint.DisallowedMixedTypeHint
     * @param array<mixed> $data
     * phpcs:enable
     */
    public function process(array $data): bool;
}

<?php

declare(strict_types=1);

namespace Changelog\Formatter;

interface Formatter
{
    public function format(string $version, string $date, array $changes): string;
}

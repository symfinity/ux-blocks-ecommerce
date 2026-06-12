<?php

declare(strict_types=1);

namespace Symfinity\UxBlocksEcommerce\Css;

final class BlocksEcommerceCssProvider
{
    public function __construct(
        private readonly string $packageDir,
    ) {
    }

    public function assetPath(): string
    {
        return 'ux-blocks-ecommerce/styles/blocks-ecommerce.css';
    }

    public function stylesheet(): string
    {
        $bundle = $this->packageDir . '/assets/styles/roles/_bundle.css';
        if (!is_readable($bundle)) {
            return '';
        }

        return (string) file_get_contents($bundle);
    }
}

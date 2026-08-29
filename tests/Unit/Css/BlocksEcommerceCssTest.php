<?php

declare(strict_types=1);

namespace Symfinity\UxBlocksEcommerce\Tests\Unit\Css;

use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;

final class BlocksEcommerceCssTest extends TestCase
{
    private static function bundleCss(): string
    {
        $path = dirname(__DIR__, 3) . '/assets/styles/roles/_bundle.css';
        self::assertFileExists($path);

        return (string) file_get_contents($path);
    }

    #[Test]
    public function bundleIncludesShopRoleSelectors(): void
    {
        $css = self::bundleCss();

        foreach (['product-card', 'shopping-cart-layout', 'cart-drawer-quickview', 'price'] as $role) {
            self::assertStringContainsString('[data-ui-role="' . $role . '"]', $css, $role);
        }

        self::assertStringContainsString('z-index: var(--ui-z-modal)', $css);
    }
}

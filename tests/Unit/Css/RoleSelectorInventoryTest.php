<?php

declare(strict_types=1);

namespace Symfinity\UxBlocksEcommerce\Tests\Unit\Css;

use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;

/**
 * 120 SC-003 — primary role selector inventory for coverage measurement.
 */
final class RoleSelectorInventoryTest extends TestCase
{
    /**
     * Literal selector inventory — scanned by {@see \Symfinity\UxBlocks\DevTools\CssSelectorCoverageReporter}.
     */
    private const SELECTOR_INVENTORY = <<<'SELECTORS'
[data-ui-role="cart-drawer-quickview"]
[data-ui-role="category-filters-static"]
[data-ui-role="checkout-form-section"]
[data-ui-role="order-history"]
[data-ui-role="order-summary"]
[data-ui-role="price"]
[data-ui-role="product-card"]
[data-ui-role="product-gallery"]
[data-ui-role="product-list-section"]
[data-ui-role="product-overview"]
[data-ui-role="promo-incentives"]
[data-ui-role="shopping-cart-layout"]
SELECTORS;

    private static function bundleCss(): string
    {
        $path = dirname(__DIR__, 3) . '/assets/styles/roles/_bundle.css';
        self::assertFileExists($path);

        return (string) file_get_contents($path);
    }

    #[Test]
    public function bundleIncludesPrimaryRoleSelectors(): void
    {
        $css = self::bundleCss();

        foreach (self::inventoryRoles() as $role) {
            self::assertStringContainsString('[data-ui-role="' . $role . '"]', $css, $role);
        }
    }

    /**
     * @return list<string>
     */
    private static function inventoryRoles(): array
    {
        preg_match_all('/\[data-ui-role="([^"]+)"\]/', self::SELECTOR_INVENTORY, $matches);

        return $matches[1];
    }
}

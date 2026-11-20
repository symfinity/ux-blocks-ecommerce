<?php

declare(strict_types=1);

namespace Symfinity\UxBlocksEcommerce\Tests\Unit\Twig\Components;

use PHPUnit\Framework\Attributes\Test;

final class CartDrawerQuickviewTest extends ComponentTestCase
{
    #[Test]
    public function triggerHasAriaExpandedFalseByDefault(): void
    {
        self::bootKernel();
        $html = $this->renderComponent('CartDrawerQuickview', [
            'items' => [
                ['label' => 'Tee', 'quantity' => 1, 'unitPrice' => '$29.00'],
            ],
        ]);

        $this->assertRootAttributes($html, 'cart-drawer-quickview', 'blocks.shop.cart-drawer-quickview');
        self::assertStringContainsString('data-controller="symfinity--ux-blocks-ecommerce--cart-drawer"', $html);
        self::assertStringContainsString('aria-expanded="false"', $html);
        self::assertStringContainsString('data-symfinity--ux-blocks-ecommerce--cart-drawer-target="panel"', $html);
    }

    #[Test]
    public function cartDrawerControllerHandlesEscapeAndFocusRestore(): void
    {
        $path = \dirname(__DIR__, 4) . '/assets/controllers/cart-drawer_controller.js';
        $source = (string) file_get_contents($path);

        self::assertStringContainsString("event.key === 'Escape'", $source);
        self::assertStringContainsString('restoreFocus', $source);
        self::assertStringContainsString('trapFocus', $source);
    }
}

<?php

declare(strict_types=1);

namespace Symfinity\UxBlocksEcommerce\Tests\Unit\Twig\Components;

use PHPUnit\Framework\Attributes\Test;
use Twig\Environment;

final class ProductListSectionNestedCardTest extends ComponentTestCase
{
    #[Test]
    public function nestedProductCardInsideListSection(): void
    {
        self::bootKernel();
        $html = self::getContainer()->get(Environment::class)->render(
            '@UxBlocksEcommerceTest/nested_product_list.html.twig',
        );

        $this->assertRootAttributes($html, 'product-list-section', 'blocks.shop.product-list-section');
        self::assertStringContainsString('data-ui-role="product-card"', $html);
        self::assertStringContainsString('data-ui-fragment="blocks.shop.product-card"', $html);
    }
}

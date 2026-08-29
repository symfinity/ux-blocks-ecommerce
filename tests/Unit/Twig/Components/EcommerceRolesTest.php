<?php

declare(strict_types=1);

namespace Symfinity\UxBlocksEcommerce\Tests\Unit\Twig\Components;

use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\Attributes\Test;
use Symfinity\UxBlocks\Registry\EcommerceRoleCatalog;

final class EcommerceRolesTest extends ComponentTestCase
{
    /** @return array<string, array{0: string, 1: string}> */
    public static function natRoleProvider(): array
    {
        $cases = [];
        foreach (EcommerceRoleCatalog::roles() as $role) {
            if ($role === 'cart-drawer-quickview') {
                continue;
            }
            $cases[$role] = [$role, EcommerceRoleCatalog::twigComponentForRole($role)];
        }

        return $cases;
    }

    #[Test]
    public function productOverviewSmoke(): void
    {
        self::bootKernel();
        $html = $this->renderComponent('ProductOverview', [
            'title' => 'Classic Tee',
            'price' => '29.00',
            'images' => ['/images/tee.jpg'],
        ]);

        $this->assertRootAttributes($html, 'product-overview', 'blocks.shop.product-overview');
    }

    #[Test]
    #[DataProvider('natRoleProvider')]
    public function sectionRendersRoleAndFragment(string $role, string $component): void
    {
        self::bootKernel();
        $html = $this->renderComponent($component, $this->propsFor($role, $component));

        $this->assertRootAttributes($html, $role, 'blocks.shop.' . $role);
    }

    /** @return array<string, mixed> */
    private function propsFor(string $role, string $component): array
    {
        return match ($component) {
            'ProductOverview' => [
                'title' => 'Classic Tee',
                'price' => '29.00',
            ],
            'PromoIncentives' => ['message' => 'Free shipping over $50'],
            'ProductCard' => ['title' => 'Item', 'price' => '19.00'],
            'ProductListSection' => ['heading' => 'New arrivals'],
            'CategoryFiltersStatic' => [
                'filters' => [
                    ['label' => 'In stock', 'name' => 'stock', 'checked' => true],
                ],
            ],
            'ShoppingCartLayout' => ['items' => []],
            'CheckoutFormSection' => [
                'sections' => [['id' => 'shipping', 'title' => 'Shipping']],
            ],
            'OrderSummary' => [
                'subtotal' => '$48.00',
                'total' => '$52.00',
                'tax' => '$4.00',
            ],
            'OrderHistory' => [
                'orders' => [
                    ['id' => '1001', 'date' => '2026-05-01', 'status' => 'Shipped', 'total' => '$52.00'],
                    ['id' => '1000', 'date' => '2026-04-12', 'status' => 'Delivered', 'total' => '$24.00'],
                ],
            ],
            default => [],
        };
    }
}

<?php

declare(strict_types=1);

namespace Symfinity\UxBlocksEcommerce\Twig\Components;

use Symfony\UX\TwigComponent\Attribute\AsTwigComponent;

#[AsTwigComponent('ShoppingCartLayout', template: '@UxBlocksEcommerce/components/ShoppingCartLayout.html.twig')]
final class ShoppingCartLayout
{
    /**
     * @var list<array{label: string, quantity: int, unitPrice: string, href?: string, imageUrl?: string, lineTotal?: string}>
     */
    public array $items = [];

    public string $emptyMessage = 'Your cart is empty.';
}

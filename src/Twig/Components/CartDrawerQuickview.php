<?php

declare(strict_types=1);

namespace Symfinity\UxBlocksEcommerce\Twig\Components;

use Symfony\UX\TwigComponent\Attribute\AsTwigComponent;

#[AsTwigComponent('CartDrawerQuickview', template: '@UxBlocksEcommerce/components/CartDrawerQuickview.html.twig')]
final class CartDrawerQuickview
{
    /**
     * @var list<array{label: string, quantity: int, unitPrice: string, href?: string, imageUrl?: string, lineTotal?: string}>
     */
    public array $items = [];

    public bool $open = false;

    public string $title = 'Cart';
}

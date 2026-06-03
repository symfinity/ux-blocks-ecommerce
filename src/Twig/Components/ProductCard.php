<?php

declare(strict_types=1);

namespace Symfinity\UxBlocksEcommerce\Twig\Components;

use Symfony\UX\TwigComponent\Attribute\AsTwigComponent;

#[AsTwigComponent('ProductCard', template: '@UxBlocksEcommerce/components/ProductCard.html.twig')]
final class ProductCard
{
    public string $title = '';

    public string $price = '';

    public ?string $imageUrl = null;

    public ?string $href = null;

    public ?string $badge = null;
}

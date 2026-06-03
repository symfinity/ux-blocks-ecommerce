<?php

declare(strict_types=1);

namespace Symfinity\UxBlocksEcommerce\Twig\Components;

use Symfony\UX\TwigComponent\Attribute\AsTwigComponent;

#[AsTwigComponent('ProductOverview', template: '@UxBlocksEcommerce/components/ProductOverview.html.twig')]
final class ProductOverview
{
    public string $title = '';

    public string $description = '';

    public string $price = '';

    /** @var list<string> */
    public array $images = [];

    /** @var list<array{label: string}> */
    public array $options = [];

    public string $addToCartLabel = 'Add to cart';
}

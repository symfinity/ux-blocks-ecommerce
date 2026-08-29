<?php

declare(strict_types=1);

namespace Symfinity\UxBlocksEcommerce\Twig\Components;

use Symfony\UX\TwigComponent\Attribute\AsTwigComponent;

#[AsTwigComponent('ProductListSection', template: '@UxBlocksEcommerce/components/ProductListSection.html.twig')]
final class ProductListSection
{
    public string $heading = '';

    public int $columns = 3;
}

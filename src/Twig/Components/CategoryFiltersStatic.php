<?php

declare(strict_types=1);

namespace Symfinity\UxBlocksEcommerce\Twig\Components;

use Symfony\UX\TwigComponent\Attribute\AsTwigComponent;

#[AsTwigComponent('CategoryFiltersStatic', template: '@UxBlocksEcommerce/components/CategoryFiltersStatic.html.twig')]
final class CategoryFiltersStatic
{
    /** @var list<array{label: string, name: string, checked?: bool, type?: string}> */
    public array $filters = [];
}

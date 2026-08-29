<?php

declare(strict_types=1);

namespace Symfinity\UxBlocksEcommerce\Twig\Components;

use Symfony\UX\TwigComponent\Attribute\AsTwigComponent;

#[AsTwigComponent('CheckoutFormSection', template: '@UxBlocksEcommerce/components/CheckoutFormSection.html.twig')]
final class CheckoutFormSection
{
    /** @var list<array{id: string, title: string}> */
    public array $sections = [];

    public string $submitLabel = 'Place order';
}

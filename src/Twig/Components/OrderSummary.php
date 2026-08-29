<?php

declare(strict_types=1);

namespace Symfinity\UxBlocksEcommerce\Twig\Components;

use Symfony\UX\TwigComponent\Attribute\AsTwigComponent;

#[AsTwigComponent('OrderSummary', template: '@UxBlocksEcommerce/components/OrderSummary.html.twig')]
final class OrderSummary
{
    public string $subtotal = '';

    public string $total = '';

    public ?string $shipping = null;

    public ?string $tax = null;
}

<?php

declare(strict_types=1);

namespace Symfinity\UxBlocksEcommerce\Twig\Components;

use Symfony\UX\TwigComponent\Attribute\AsTwigComponent;

#[AsTwigComponent('OrderHistory', template: '@UxBlocksEcommerce/components/OrderHistory.html.twig')]
final class OrderHistory
{
    /**
     * @var list<array{id: string, date: string, status: string, total: string, href?: string}>
     */
    public array $orders = [];
}

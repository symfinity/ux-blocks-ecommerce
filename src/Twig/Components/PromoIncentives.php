<?php

declare(strict_types=1);

namespace Symfinity\UxBlocksEcommerce\Twig\Components;

use Symfony\UX\TwigComponent\Attribute\AsTwigComponent;

#[AsTwigComponent('PromoIncentives', template: '@UxBlocksEcommerce/components/PromoIncentives.html.twig')]
final class PromoIncentives
{
    public string $title = '';

    public string $message = '';

    public ?string $ctaHref = null;

    public ?string $ctaLabel = null;
}

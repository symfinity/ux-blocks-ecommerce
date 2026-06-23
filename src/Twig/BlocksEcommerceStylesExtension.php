<?php

declare(strict_types=1);

namespace Symfinity\UxBlocksEcommerce\Twig;

use Symfinity\UxBlocksEcommerce\Css\BlocksEcommerceCssProvider;
use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;

final class BlocksEcommerceStylesExtension extends AbstractExtension
{
    public function __construct(
        private readonly BlocksEcommerceCssProvider $cssProvider,
    ) {
    }

    public function getFunctions(): array
    {
        return [
            new TwigFunction('ux_blocks_ecommerce_stylesheet', $this->cssProvider->stylesheet(...), ['is_safe' => ['html']]),
        ];
    }
}

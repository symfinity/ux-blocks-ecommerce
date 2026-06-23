<?php

declare(strict_types=1);

namespace Symfinity\UxBlocksEcommerce;

use Symfony\Bundle\TwigBundle\DependencyInjection\Configurator\TwigConfigurator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use Symfony\Component\HttpKernel\Bundle\Bundle;

final class SymfinityUxBlocksEcommerceBundle extends Bundle
{
    public function getPath(): string
    {
        return \dirname(__DIR__);
    }

    public function getContainerExtension(): ExtensionInterface
    {
        return new DependencyInjection\SymfinityUxBlocksEcommerceExtension();
    }

    public function build(ContainerBuilder $container): void
    {
        parent::build($container);
        $container->setParameter('ux_blocks_ecommerce.package_dir', $this->getPath());
    }

    public function configureTwig(TwigConfigurator $configurator): void
    {
        $configurator->path($this->getPath() . '/templates', 'UxBlocksEcommerce');
    }
}

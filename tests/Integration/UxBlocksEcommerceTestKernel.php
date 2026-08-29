<?php

declare(strict_types=1);

namespace Symfinity\UxBlocksEcommerce\Tests\Integration;

use Symfinity\UxBlocksCore\SymfinityUxBlocksCoreBundle;
use Symfinity\UxBlocksEcommerce\SymfinityUxBlocksEcommerceBundle;
use Symfinity\UxBlocksMarketing\SymfinityUxBlocksMarketingBundle;
use Symfony\Bundle\FrameworkBundle\FrameworkBundle;
use Symfony\Bundle\FrameworkBundle\Kernel\MicroKernelTrait;
use Symfony\Bundle\TwigBundle\TwigBundle;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symfony\Component\HttpKernel\Kernel;
use Symfony\UX\StimulusBundle\StimulusBundle;
use Symfony\UX\TwigComponent\TwigComponentBundle;

final class UxBlocksEcommerceTestKernel extends Kernel
{
    use MicroKernelTrait;

    public function getProjectDir(): string
    {
        return \dirname(__DIR__, 2);
    }

    public function getCacheDir(): string
    {
        return $this->getProjectDir() . '/var/cache/' . $this->environment;
    }

    public function registerBundles(): array
    {
        return [
            new FrameworkBundle(),
            new TwigBundle(),
            new StimulusBundle(),
            new TwigComponentBundle(),
            new SymfinityUxBlocksCoreBundle(),
            new SymfinityUxBlocksMarketingBundle(),
            new SymfinityUxBlocksEcommerceBundle(),
        ];
    }

    protected function configureContainer(ContainerConfigurator $container): void
    {
        $container->extension('framework', [
            'secret' => 'test-secret',
            'test' => true,
            'router' => ['utf8' => true],
            'php_errors' => ['log' => false],
            'form' => false,
        ]);

        $container->extension('twig_component', [
            'anonymous_template_directory' => 'components',
            'defaults' => [
                'Symfinity\\UxBlocksCore\\' => [
                    'template_directory' => 'components',
                    'name_prefix' => '',
                ],
                'Symfinity\\UxBlocksMarketing\\' => [
                    'template_directory' => 'components',
                    'name_prefix' => '',
                ],
                'Symfinity\\UxBlocksEcommerce\\Twig\\Components\\' => 'components',
            ],
        ]);

        $container->extension('twig', [
            'paths' => [
                \dirname(__DIR__) . '/templates' => 'UxBlocksEcommerceTest',
            ],
        ]);
    }
}

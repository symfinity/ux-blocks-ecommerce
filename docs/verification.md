# Verification

Checks after installing **symfinity/ux-blocks-ecommerce** in a Symfony app.

## Local commands

From the package directory or monorepo path:

```bash
composer test
composer phpstan
```

From a consumer app:

```bash
php bin/console debug:container --tag=twig.component | grep -i Product
```

## Browser or WebTestCase

Render a page with shop components and confirm registry markup:

- `data-ui-role="product-overview"` (or matching role)
- `data-ui-fragment="blocks.shop.product-overview"`

For **CartDrawerQuickview**, expect a Stimulus `data-controller` attribute when the drawer is present.

## Clean-app smoke

On a fresh Symfony 7.4+ project with the symfinity/recipes Flex endpoint:

```bash
composer require symfinity/ux-blocks-core symfinity/ux-blocks-ecommerce
composer show symfinity/ux-blocks-marketing
```

Marketing **must** appear in the dependency tree without a second require line.

Add ui-kernel theme CSS to your layout, then render:

```twig
<twig:ProductOverview title="Demo" price="19.00" />
```

Load the page — expect HTTP 200 and `blocks.shop.product-overview` in the response body.

## See also

- [Quick start](quickstart.md)
- [Troubleshooting](troubleshooting.md)
- [CHANGELOG](../CHANGELOG.md)

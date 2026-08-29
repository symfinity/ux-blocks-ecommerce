# Installation

## Prerequisites

1. Add the [symfinity/recipes](https://github.com/symfinity/recipes) Flex endpoint to your project's `composer.json` (see [recipes README](https://github.com/symfinity/recipes/blob/main/README.md)).
2. Install **ux-blocks-core** (required upstream):

```bash
composer require symfinity/ux-blocks-core
```

3. For **styled** apps, install **ui-kernel** (theme CSS). The registry SDK `symfinity/ux-blocks` is pulled transitively from Packagist when you require core.

```bash
composer require symfinity/ui-kernel   # optional — themed apps only
```

## Composer

**Explicit opt-in** — add only when you ship storefront pages.

```bash
composer require symfinity/ux-blocks-ecommerce
```

This package **requires** `symfinity/ux-blocks-marketing` at `^0.1`. Composer installs marketing automatically — you do not need a second require line for cross-sell landing sections.

## Symfony Flex

The `0.1` recipe applies:

- Registers `SymfinityUxBlocksEcommerceBundle` for **all** environments
- No app config file is copied — the bundle auto-configures AssetMapper, Twig paths, and role defaults

Marketing bundle registration is handled by its own Flex recipe when pulled as a dependency.

## Manual installation

When Flex is unavailable:

1. `composer require symfinity/ux-blocks-core symfinity/ux-blocks-marketing symfinity/ux-blocks-ecommerce`
2. Register `Symfinity\UxBlocksEcommerce\SymfinityUxBlocksEcommerceBundle` in `config/bundles.php`
3. Enable AssetMapper, Stimulus, and UX Twig Component bundles

## Verify installation

```bash
php bin/console debug:container --tag=twig.component | grep -i ProductOverview
composer show symfinity/ux-blocks-marketing
```

Expect marketing listed without an explicit second require in your root `composer.json`.

## Next steps

[Quick start](quickstart.md) · [Verification](verification.md)

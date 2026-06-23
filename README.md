<div align="center">

# UX Blocks Ecommerce

### Shop section Twig components with blocks.shop fragments

[![PHP Version](https://img.shields.io/badge/PHP-8.2+-777BB4?style=flat&logo=php&logoColor=white)](composer.json)
[![Symfony](https://img.shields.io/badge/Symfony-7.4+-343434?style=flat&logo=symfony&logoColor=white)](composer.json)
<br/>
[![CI](https://github.com/symfinity/ux-blocks-ecommerce/actions/workflows/ci.yml/badge.svg)](https://github.com/symfinity/ux-blocks-ecommerce/actions/workflows/ci.yml)
<br/>
[![Release](https://img.shields.io/packagist/v/symfinity/ux-blocks-ecommerce.svg?style=flat&logo=packagist&logoColor=white)](https://packagist.org/packages/symfinity/ux-blocks-ecommerce)
[![Downloads](https://img.shields.io/packagist/dt/symfinity/ux-blocks-ecommerce.svg?style=flat&logo=packagist&logoColor=white)](https://packagist.org/packages/symfinity/ux-blocks-ecommerce)
[![License](https://img.shields.io/badge/license-MIT-blue.svg?style=flat)](LICENSE)

</div>

> [!NOTE]
> **Read-only mirror.**
> See [CONTRIBUTING.md](CONTRIBUTING.md) for how to propose changes.

## Features

- **10 shop section roles** — product cards, cart, checkout, orders, and promos
- **Native-first (`nat`)** — marketing-style sections styled with ui-kernel tokens
- **Registry-aligned** — `blocks.shop.*` fragment ids
- **Explicit opt-in tier** — never pulled in by `symfinity/ux-blocks-full`
- **Flex recipe** — bundle registration on install

## Component inventory


<!-- ux-blocks:registry:start -->
| Role | Twig | Interaction | Fragment | Status |
|------|------|-------------|----------|--------|
| product-overview | ProductOverview | nat | `blocks.shop.product-overview` | shipped |
| product-list-section | ProductListSection | nat | `blocks.shop.product-list-section` | shipped |
| product-card | ProductCard | nat | `blocks.shop.product-card` | shipped |
| shopping-cart-layout | ShoppingCartLayout | nat | `blocks.shop.shopping-cart-layout` | shipped |
| checkout-form-section | CheckoutFormSection | nat | `blocks.shop.checkout-form-section` | shipped |
| category-filters-static | CategoryFiltersStatic | nat | `blocks.shop.category-filters-static` | shipped |
| order-summary | OrderSummary | nat | `blocks.shop.order-summary` | shipped |
| order-history | OrderHistory | nat | `blocks.shop.order-history` | shipped |
| promo-incentives | PromoIncentives | nat | `blocks.shop.promo-incentives` | shipped |
| cart-drawer-quickview | CartDrawerQuickview | stl | `blocks.shop.cart-drawer-quickview` | shipped |
<!-- ux-blocks:registry:end -->

**Highlights:** composable product list and overview sections; checkout and order summary layouts; cart drawer quickview when interactive tier is present.

Handbook: [docs/components.md](docs/components.md).

## Prerequisites

Add the [symfinity/recipes](https://github.com/symfinity/recipes) Flex endpoint to your project's `composer.json` (see [recipes README](https://github.com/symfinity/recipes/blob/main/README.md)) — recipes are not in Symfony's official recipe repository yet.

## Installation

**Explicit opt-in** — add only when you ship storefront pages. See [UX Blocks install profiles](https://github.com/symfinity/ux-blocks#install-profiles).

```bash
composer require symfinity/ux-blocks-ecommerce
```

See [Installation](docs/installation.md).

## Quick Start

```twig
<twig:ProductOverview title="Classic Tee" price="29.00" />
<twig:ProductListSection title="You may also like" />
```

See [Quick start](docs/quickstart.md) for the full walkthrough.

## Documentation

- **[Quick start](docs/quickstart.md)** — minimal setup path
- **[Installation](docs/installation.md)** — Flex, dependencies, verify
- **[Configuration](docs/configuration.md)** — bundle and app options
- **[Components](docs/components.md)** — role index and examples
- **[Usage](docs/usage.md)** — day-to-day patterns
- **[Upgrade](docs/upgrade.md)** — version migrations

## Requirements

- PHP 8.2 or higher
- Symfony 7.4 or 8.x
- `symfinity/ux-blocks-core` ^0.1

## Support

- [GitHub Issues](https://github.com/symfinity/ux-blocks-ecommerce/issues)
- [Security](.github/SECURITY.md)
- [Contributing](CONTRIBUTING.md)

## License

[MIT](LICENSE)

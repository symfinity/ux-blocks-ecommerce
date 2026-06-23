<div align="center">

# Ux Blocks Ecommerce

### Symfinity UX Blocks Ecommerce — shop section catalog with blocks.shop fragments

[![PHP Version](https://img.shields.io/badge/PHP-8.2+-777BB4?style=flat&logo=php&logoColor=white)](composer.json)
[![Symfony](https://img.shields.io/badge/Symfony-7.4+-343434?style=flat&logo=symfony&logoColor=white)](composer.json)

<br/>
[![PHPUnit](https://github.com/symfinity/symfinity/actions/workflows/phpunit.yml/badge.svg)](https://github.com/symfinity/symfinity/actions/workflows/phpunit.yml)
[![Coverage](https://github.com/symfinity/symfinity/actions/workflows/coverage.yml/badge.svg)](https://github.com/symfinity/symfinity/actions/workflows/coverage.yml)
[![PHPStan](https://github.com/symfinity/symfinity/actions/workflows/phpstan.yml/badge.svg)](https://github.com/symfinity/symfinity/actions/workflows/phpstan.yml)
<br/>
[![Psalm](https://github.com/symfinity/symfinity/actions/workflows/psalm.yml/badge.svg)](https://github.com/symfinity/symfinity/actions/workflows/psalm.yml)
[![Infection](https://github.com/symfinity/symfinity/actions/workflows/infection.yml/badge.svg)](https://github.com/symfinity/symfinity/actions/workflows/infection.yml)
[![Code Style](https://img.shields.io/badge/code%20style-CS%20Fixer-5c4dbc?style=flat)](https://github.com/symfinity/symfinity/actions/workflows/php-cs-fixer.yml)
<br/>
[![Release](https://img.shields.io/packagist/v/symfinity/ux-blocks-ecommerce.svg?style=flat&logo=packagist&logoColor=white)](https://packagist.org/packages/symfinity/ux-blocks-ecommerce)
[![Downloads](https://img.shields.io/packagist/dt/symfinity/ux-blocks-ecommerce.svg?style=flat&logo=packagist&logoColor=white)](https://packagist.org/packages/symfinity/ux-blocks-ecommerce)
[![License](https://img.shields.io/badge/license-MIT-blue.svg?style=flat)](LICENSE)

</div>

---

## Documentation

| Topic | Page |
|-------|------|
| Components | [docs/components.md](docs/components.md) |
| Configuration | [docs/configuration.md](docs/configuration.md) |
| Index | [docs/index.md](docs/index.md) |
| Installation | [docs/installation.md](docs/installation.md) |
| Quickstart | [docs/quickstart.md](docs/quickstart.md) |
| Reference | [docs/reference.md](docs/reference.md) |
| Troubleshooting | [docs/troubleshooting.md](docs/troubleshooting.md) |
| Upgrade | [docs/upgrade.md](docs/upgrade.md) |
| Usage | [docs/usage.md](docs/usage.md) |
| Component: Readme | [docs/components/README.md](docs/components/README.md) |

## Requirements

- PHP 8.2+
- Symfony 7.4+ (Flex recipe when available)

## Install

**Explicit opt-in** — shop sections are **never** pulled in by `ux-blocks-full`. Add this package only when you ship storefront pages. See [UX Blocks install profiles](https://github.com/symfinity/ux-blocks#install-profiles) for the full profile table.

```bash
composer require symfinity/ux-blocks-ecommerce
```

## Maintainer Sass pipeline (120)

Shop section CSS is authored under `assets/scss/` and compiled via `bin/blocks-css-compile`. From product monorepo root:

```bash
cd src/symfinity
bin/blocks-css-compile --package=ux-blocks-ecommerce --check
bin/ux-blocks-scss-audit --package=ux-blocks-ecommerce --check
```

## Test

```bash
cd src/symfinity
./bin/php vendor/bin/phpunit packages/ux-blocks-ecommerce/tests/
```


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

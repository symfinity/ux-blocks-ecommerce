# symfinity/ux-blocks-ecommerce

Chameleon UX Blocks Ecommerce — **V0** shop section library with `blocks.shop.*` fragment prefix.

**Planning:** symfinity **027** · **Registry:** [component-inventory](../../../specs/symfinity/symfinity/27-ux-blocks-ecommerce/contracts/component-inventory.md)

## Install

```bash
composer require symfinity/ux-blocks-ecommerce
```

Requires Symfony **7.4+**, `symfinity/ux-blocks-core`, `symfony/ux-twig-component` ^2, `symfony/stimulus-bundle` (cart drawer only). Does **not** require `symfony/ux-toolkit`, Tailwind npm, or `symfinity/ui-kernel`.

Optional cross-sell:

```bash
composer require symfinity/ux-blocks-marketing  # suggest only
```

Register the bundle:

```php
// config/bundles.php
Symfinity\UxBlocksEcommerce\SymfinityUxBlocksEcommerceBundle::class => ['all' => true],
```

## Interaction profile

`symfinity/ux-blocks-ecommerce` is a **V0** shop section library. Default stories use **`nat`** (native HTML + Chameleon kernel CSS; no package Stimulus on nine roles). **`stl`** applies only to **`cart-drawer-quickview`** (slide-over cart / quick-view micro-UX). Sections **compose** `symfinity/ux-blocks-core` primitives; they do not replace them. Optional **`symfinity/ux-blocks-marketing`** is suggested for landing cross-sell, not required.

| Token | In this package |
|-------|-----------------|
| `nat` | All roles except cart drawer |
| `act` | Optional on links/buttons via **007** — not required for v0 demos |
| `stl` | `cart-drawer-quickview` only |
| `live` | **MUST NOT** in v0 atoms |
| `up` | Document only if a role later defers to `symfony/ux-*` — none in v0 |

## Component inventory

| Role | Twig | Category | Interaction | Fragment | Status | REF |
|------|------|----------|-------------|----------|--------|-----|
| `product-overview` | `ProductOverview` | Ecommerce | `nat` | `blocks.shop.product-overview` | shipped | Tailwind Ecommerce |
| `product-list-section` | `ProductListSection` | Ecommerce | `nat` | `blocks.shop.product-list-section` | shipped | Tailwind Ecommerce |
| `product-card` | `ProductCard` | Ecommerce | `nat` | `blocks.shop.product-card` | shipped | Tailwind Ecommerce |
| `shopping-cart-layout` | `ShoppingCartLayout` | Ecommerce | `nat` | `blocks.shop.shopping-cart-layout` | shipped | Tailwind Ecommerce |
| `checkout-form-section` | `CheckoutFormSection` | Ecommerce | `nat` | `blocks.shop.checkout-form-section` | shipped | Tailwind Ecommerce |
| `category-filters-static` | `CategoryFiltersStatic` | Ecommerce | `nat` | `blocks.shop.category-filters-static` | shipped | Tailwind Ecommerce |
| `order-summary` | `OrderSummary` | Ecommerce | `nat` | `blocks.shop.order-summary` | shipped | Tailwind Ecommerce |
| `order-history` | `OrderHistory` | Ecommerce | `nat` | `blocks.shop.order-history` | shipped | Tailwind Ecommerce |
| `promo-incentives` | `PromoIncentives` | Ecommerce | `nat` | `blocks.shop.promo-incentives` | shipped | Tailwind Ecommerce |
| `cart-drawer-quickview` | `CartDrawerQuickview` | Ecommerce | `stl` | `blocks.shop.cart-drawer-quickview` | shipped | Tailwind Ecommerce |

## Progressive enhancement (cart drawer)

| State | Behavior |
|-------|----------|
| JS + Stimulus active | Drawer opens over content; focus trap active; Escape closes |
| JS disabled | Use `ShoppingCartLayout` on the page; drawer trigger is a no-op without JS |

## Dogfood

`ux-blocks-demo` exposes **`GET /shop`** when this package is installed.

```bash
make dogfood-serve SLUG=ux-blocks-demo
```

## Test

```bash
cd src/symfinity
./bin/php vendor/bin/phpunit packages/ux-blocks-ecommerce/tests/
```

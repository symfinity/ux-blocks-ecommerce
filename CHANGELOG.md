# Changelog

All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.0.0/),
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## [0.1.0] - 2026-06-27

### Added

- Symfony bundle `SymfinityUxBlocksEcommerceBundle` — shop section catalog tier for UX Blocks
- Ten native-first (`nat`) and Stimulus (`stl`) shop roles with `blocks.shop.*` fragment ids:
  - **Product display** — `ProductOverview`, `ProductListSection`, `ProductCard`
  - **Cart and checkout** — `ShoppingCartLayout`, `CheckoutFormSection`, `OrderSummary`, `CartDrawerQuickview` (`stl` drawer open/close)
  - **Browse and filters** — `CategoryFiltersStatic`
  - **Orders and promos** — `OrderHistory`, `PromoIncentives`
- Role registry in `config/ux_roles.yaml` aligned with the UX Blocks fragment catalog
- Packaged role CSS (`assets/styles/blocks-ecommerce.css`) and Stimulus controller for cart drawer (`assets/controllers/cart-drawer_controller.js`)
- Ten `config/component-examples/{role}.yaml` manifests for symfinity-docs handbook SSR
- Flex recipe `0.1` — registers the bundle on all environments
- Consumer handbook under `docs/`: installation, quickstart, configuration, usage, ten component pages, verification, upgrade, and troubleshooting

### Notes

- Explicit opt-in tier — not pulled in by `symfinity/ux-blocks-full` (suggest only)
- Hard dependencies on `symfinity/ux-blocks-core` ^0.1 and `symfinity/ux-blocks-marketing` ^0.1 (marketing installs transitively)
- PHP **8.2**+; Symfony **7.4** or **8.x**
- Optional: `symfinity/ui-kernel` for themed CSS in production layouts — see handbook quickstart

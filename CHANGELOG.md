# Changelog

All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.0.0/),
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## [0.1.2] - 2026-07-05

### Added

- Handbook [verification.md](docs/verification.md) — P2 integration profile and clean-app smoke (`composer require`, shop registry markup checks; marketing transitive)
- **`integration_profile: P2` frontmatter on handbook index
- `ux_blocks_ecommerce_stylesheet()`** Twig function — inline packaged role CSS for layouts without ui-kernel theme generation
- [Configuration — styling without ui-kernel](docs/configuration.md#styling-without-ui-kernel) — core + marketing + ecommerce inline stylesheets when Chameleon theme CSS is not installed

### Changed

- **Grouped component examples** — all ten `config/component-examples/*.yaml` manifests use `groups[]` with `slot_twig` for symfinity-docs handbook SSR
- **Role CSS cascade** — committed `blocks-ecommerce.css` and `BlocksEcommerceCssProvider::stylesheet()` wrap tier output in `@layer blocks.ecommerce` via local `TierCascadeLayerWrap` (no ui-kernel runtime dependency; split mirror PHPStan clean)
- **PHPUnit bootstrap** — `tests/bootstrap.php` resolves monorepo or split-mirror Composer autoload; optional `tests/bootstrap.local.php` hook
- Handbook: quickstart documents optional ui-kernel vs inline tier CSS; verification cross-links the no-kernel styling path

### Notes

- No Twig component props or registry role ids changed — OOTB handbook and CSS cascade hygiene after **v0.1.1**
- Pair with `symfinity/ux-blocks-core` **^0.1.6** (or newer) for automatic inline tier CSS when shop fragments render
- Upgrading from **0.1.1** needs no config edits; clear Symfony cache if AssetMapper or Twig cached CSS in dev

## [0.1.1] - 2026-06-29

### Added

- **ROADMAP.md** — public milestone table for the 0.1.x → 1.0.x release line
- **SUPPORTERS.md** and Composer **`funding` metadata for [GitHub Sponsors](https://github.com/sponsors/serotoninja)
- `.github/FUNDING.yml`** — GitHub Sponsors link on the split mirror

### Changed

- **Split mirror CI** — Composer package cache and `GITHUB_TOKEN` authentication so GitHub Actions reliably resolves `symfinity/*` dependencies across the PHP × Symfony matrix; PHPStan on every cell

### Notes

- No Twig component, registry role id, or shop role CSS changes — documentation and CI maintenance patch after `v0.1.0`
- Upgrading from **0.1.0** needs no template or config edits

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

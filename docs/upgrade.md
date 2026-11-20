# Upgrade

## 0.1.3

The cart drawer uses the Stimulus name this package registers (`symfinity--ux-blocks-ecommerce--cart-drawer`). The template no longer emits `symfony--ux-blocks-ecommerce--cart-drawer`. `assets/package.json` registers that controller with AssetMapper.

```bash
composer update symfinity/ux-blocks-ecommerce
```

After upgrade, clear the Symfony cache and hard-refresh the browser so the controller script reloads. Custom scripts that still target `symfony--ux-blocks-ecommerce--cart-drawer` need the `symfinity--` name.

## 0.1.2

Patch release after [v0.1.1](https://github.com/symfinity/ux-blocks-ecommerce/releases/tag/v0.1.1). OOTB handbook verification, grouped component examples, CSS cascade layers, and inline stylesheet helper — no shop component API changes.

```bash
composer update symfinity/ux-blocks-ecommerce
```

After upgrade:

1. No config or registry migrations — existing `blocks.shop.*` fragment ids are unchanged.
2. For headless installs, you may inline tier CSS via `ux_blocks_ecommerce_stylesheet()` — see [Configuration — styling without ui-kernel](configuration.md#styling-without-ui-kernel).
3. Clear Symfony cache if AssetMapper or Twig cached CSS in dev.

## 0.1.1

Patch release after [v0.1.0](https://github.com/symfinity/ux-blocks-ecommerce/releases/tag/v0.1.0). Split-mirror CI, sponsorship metadata, and public roadmap — no shop component API changes.

```bash
composer update symfinity/ux-blocks-ecommerce
```

After upgrade:

1. No config or registry migrations — existing `blocks.shop.*` fragment ids are unchanged.
2. Clear Symfony cache only if you consume handbook routes via symfinity-docs in the same app.

## v0.1.0 — initial public release

First tagged release on Packagist. Ten shop roles; hard require on `symfinity/ux-blocks-marketing` at `^0.1`.

### From dev/path installs

Replace path repositories with Packagist constraints:

```bash
composer require symfinity/ux-blocks-ecommerce:^0.1
```

Confirm marketing resolves transitively:

```bash
composer show symfinity/ux-blocks-marketing
```

### Breaking changes

None documented for v0.1.0 — greenfield public API.

Future semver follows [Semantic Versioning](https://semver.org/) and each package [CHANGELOG](../CHANGELOG.md).

## See also

- [CHANGELOG](../CHANGELOG.md)
- [Troubleshooting](troubleshooting.md)

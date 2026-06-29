# Upgrade

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

Future semver follows [Symfinity release policy](https://github.com/symfinity/symfinity/blob/main/docs/release-and-docs-policy.md).

## See also

- [CHANGELOG](../CHANGELOG.md)
- [Troubleshooting](troubleshooting.md)

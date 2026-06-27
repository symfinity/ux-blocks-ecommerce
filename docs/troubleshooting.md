# Troubleshooting

## Flex recipe not applied

Ensure `extra.symfony.endpoint` includes the symfinity/recipes Flex index before requiring the package. See [Installation](installation.md).

## Components render unstyled

Install **ui-kernel** and include generated theme CSS in your layout. Ecommerce sections use kernel shop role rules when a theme is active.

## Marketing not found on Packagist

Ecommerce `^0.1` requires marketing `^0.1` on Packagist. Tag **ux-blocks-marketing** before **ux-blocks-ecommerce** (see dependency order in release docs).

## Cart drawer does not open

**CartDrawerQuickview** requires Stimulus. Verify AssetMapper compiled assets in dev and that `symfony/stimulus-bundle` is registered.

## debug:container shows no ProductOverview

Confirm `SymfinityUxBlocksEcommerceBundle` is in `config/bundles.php` and cache is warmed:

```bash
php bin/console cache:clear
php bin/console debug:container --tag=twig.component | grep Product
```

## See also

- [Verification](verification.md)
- [Configuration](configuration.md)

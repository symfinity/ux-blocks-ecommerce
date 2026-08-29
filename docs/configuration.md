# Configuration

## Bundle

`SymfinityUxBlocksEcommerceBundle` auto-configures:

- Twig component namespace `@UxBlocksEcommerce`
- AssetMapper paths for package CSS and Stimulus (cart drawer)
- Role registry from `config/ux_roles.yaml` (`blocks.shop.*`)

No published `config/packages/symfinity_ux_blocks_ecommerce.yaml` is required for v0.1.0.

## AssetMapper and Stimulus

Only **cart-drawer-quickview** (`stl`) ships a Stimulus controller. Other nine roles are **native** (`nat`) — CSS-only interaction.

Ensure your app enables:

- `symfony/asset-mapper`
- `symfony/stimulus-bundle`
- `symfony/ux-twig-component`

Flex recipes for core and marketing tiers register their bundles; ecommerce adds shop assets on top.

## ui-kernel (optional)

Shop section styling uses kernel tokens when **ui-kernel** is present. Headless installs render semantic markup without theme CSS.

## Styling without ui-kernel

Inline tier CSS in your layout when ui-kernel is not installed:

```twig
<style id="ux-blocks-core-css">{{ ux_blocks_core_stylesheet()|raw }}</style>
<style id="ux-blocks-marketing-css">{{ ux_blocks_marketing_stylesheet()|raw }}</style>
<style id="ux-blocks-ecommerce-css">{{ ux_blocks_ecommerce_stylesheet()|raw }}</style>
```

Marketing stylesheet comes transitively via `symfinity/ux-blocks-marketing`.

## Marketing dependency

`symfinity/ux-blocks-marketing` is a **hard require**. Bundle order and Flex registration are Composer-managed — do not duplicate marketing in `suggest`.

## See also

- [Installation](installation.md)
- [Usage](usage.md)

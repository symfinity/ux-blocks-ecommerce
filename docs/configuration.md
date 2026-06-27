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

## Marketing dependency

`symfinity/ux-blocks-marketing` is a **hard require**. Bundle order and Flex registration are Composer-managed — do not duplicate marketing in `suggest`.

## See also

- [Installation](installation.md)
- [Usage](usage.md)

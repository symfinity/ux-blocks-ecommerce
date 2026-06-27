# Quick start

Minimal storefront page with product overview and a related-products list.

## Theme CSS

For styled output, include ui-kernel generated CSS in your layout (see [Configuration](configuration.md)).

## Render components

```twig
<twig:ProductOverview
    title="Classic Tee"
    description="Soft cotton everyday shirt."
    price="29.00"
    :images="['/assets/tee-front.jpg']"
/>

<twig:ProductListSection heading="You may also like" :columns="3" />
```

Wrap list items with **ProductCard** inside the section slot or compose cards in your controller/template as needed.

## Cart drawer (optional)

**CartDrawerQuickview** uses Stimulus for open/close state. Ensure Stimulus and AssetMapper are enabled (Flex default).

```twig
<twig:CartDrawerQuickview :open="false" title="Your cart" />
```

See [Cart drawer quickview](components/cart-drawer-quickview.md) for controller wiring.

## Next steps

- [Components](components.md) — full role index
- [Usage](usage.md) — fragment prefixes and marketing cross-sell
- [Verification](verification.md) — smoke checklist

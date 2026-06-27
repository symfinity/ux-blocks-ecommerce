# Product overview

Full product detail section with gallery, title, price, options, and add-to-cart affordance.

## When to use

Use **ProductOverview** on PDP (product detail) routes when you need a single-product hero layout with optional variant options.

## Guidelines

**Do**

- Pass at least `title` and `price` for a meaningful default.
- Supply `images` as a list of URLs for the gallery slot.
- Use `options` for size/colour labels (`{ label: string }`).

**Don't**

- Use for grid listings — prefer **ProductListSection** + **ProductCard**.

## Usage

```twig
<twig:ProductOverview
    title="Classic Tee"
    description="Soft cotton everyday shirt."
    price="29.00"
    :images="['/assets/tee.jpg']"
    :options="[{ label: 'Size M' }, { label: 'Colour Navy' }]"
    addToCartLabel="Add to bag"
/>
```

Variant previews render from `config/component-examples/product-overview.yaml`.

## API Reference

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `title` | `string` | `''` | Product name |
| `description` | `string` | `''` | Short description |
| `price` | `string` | `''` | Display price |
| `images` | `list<string>` | `[]` | Gallery image URLs |
| `options` | `list<{label: string}>` | `[]` | Variant labels |
| `addToCartLabel` | `string` | `'Add to cart'` | CTA button text |

## Accessibility

- Gallery images should have meaningful `alt` text when you control asset metadata.
- Heading uses semantic `h1` when `title` is set.

## Related

- [Product card](product-card.md)
- [Product list section](product-list-section.md)

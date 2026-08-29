# Product list section

Grid section wrapper for related or featured products.

## When to use

Use **ProductListSection** for "You may also like", category grids, or search results containers.

## Guidelines

**Do**

- Set `heading` for section title.
- Tune `columns` (default `3`) for responsive grid density.

**Don't**

- Embed cart logic — keep checkout on dedicated routes.

## Usage

```twig
<twig:ProductListSection heading="Featured products" :columns="4" />
```

Compose **ProductCard** children in the section body from your template or controller.

Variant previews render from `config/component-examples/product-list-section.yaml`.

## API Reference

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `heading` | `string` | `''` | Section title |
| `columns` | `int` | `3` | Grid column count |

## Related

- [Product card](product-card.md)
- [Product overview](product-overview.md)

# Category filters (static)

Static category filter list for PLP (product listing pages).

## When to use

Use **CategoryFiltersStatic** when filters are server-rendered links or checkboxes without client-side combobox search.

## Usage

```twig
<twig:CategoryFiltersStatic
    :filters="[
        { label: 'Shirts', href: '/shop/shirts', active: true },
        { label: 'Pants', href: '/shop/pants' }
    ]"
/>
```

Variant previews render from `config/component-examples/category-filters-static.yaml`.

## API Reference

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `filters` | `array` | `[]` | Filter entries with `label`, optional `href`, `active` |

## Related

- [Product list section](product-list-section.md)

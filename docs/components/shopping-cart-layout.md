# Shopping cart layout

Full-page cart line-item layout with empty state message.

## When to use

Use **ShoppingCartLayout** on `/cart` routes when displaying basket contents before checkout.

## Usage

```twig
<twig:ShoppingCartLayout
    :items="[
        { label: 'Classic Tee', quantity: 1, unitPrice: '29.00', lineTotal: '29.00' }
    ]"
    emptyMessage="Your cart is empty."
/>
```

Variant previews render from `config/component-examples/shopping-cart-layout.yaml`.

## API Reference

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `items` | `list<line item>` | `[]` | Cart rows |
| `emptyMessage` | `string` | `'Your cart is empty.'` | Copy when no items |

Line items support `label`, `quantity`, `unitPrice`, optional `href`, `imageUrl`, `lineTotal`.

## Related

- [Order summary](order-summary.md)
- [Cart drawer quickview](cart-drawer-quickview.md)

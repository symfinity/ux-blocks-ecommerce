# Order history

Past orders list for account pages.

## When to use

Use **OrderHistory** on `/account/orders` when displaying a read-only order list.

## Usage

```twig
<twig:OrderHistory
    :orders="[
        { id: '1001', date: '2026-06-01', total: '62.50', status: 'Shipped' }
    ]"
/>
```

Variant previews render from `config/component-examples/order-history.yaml`.

## API Reference

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `orders` | `array` | `[]` | Order rows (shape defined by template) |

## Related

- [Order summary](order-summary.md)

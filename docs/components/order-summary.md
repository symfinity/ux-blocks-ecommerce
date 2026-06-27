# Order summary

Checkout sidebar with subtotal and total lines.

## When to use

Use **OrderSummary** beside **CheckoutFormSection** on checkout pages.

## Usage

```twig
<twig:OrderSummary subtotal="58.00" total="62.50" />
```

Variant previews render from `config/component-examples/order-summary.yaml`.

## API Reference

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `subtotal` | `string` | `''` | Pre-tax subtotal display |
| `total` | `string` | `''` | Grand total display |

## Related

- [Checkout form section](checkout-form-section.md)
- [Shopping cart layout](shopping-cart-layout.md)

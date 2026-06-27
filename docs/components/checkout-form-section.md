# Checkout form section

Multi-section checkout form shell with submit affordance.

## When to use

Use **CheckoutFormSection** on checkout routes to group address, shipping, and payment blocks.

## Usage

```twig
<twig:CheckoutFormSection
    :sections="[
        { title: 'Shipping', fields: ['name', 'address'] },
        { title: 'Payment', fields: ['card'] }
    ]"
    submitLabel="Place order"
/>
```

Variant previews render from `config/component-examples/checkout-form-section.yaml`.

## API Reference

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `sections` | `array` | `[]` | Checkout groups (presentational) |
| `submitLabel` | `string` | `'Place order'` | Primary submit text |

Wire real Symfony forms in your application layer — this component provides layout slots only.

## Related

- [Order summary](order-summary.md)

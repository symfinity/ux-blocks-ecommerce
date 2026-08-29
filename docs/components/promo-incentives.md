# Promo incentives

Promotional banner or incentive callout for shop pages.

## When to use

Use **PromoIncentives** for free-shipping thresholds, discount codes, or loyalty messaging above the fold on shop routes.

## Usage

```twig
<twig:PromoIncentives
    title="Free shipping"
    message="Orders over 50 EUR ship free this week."
/>
```

Variant previews render from `config/component-examples/promo-incentives.yaml`.

## API Reference

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `title` | `string` | `''` | Promo headline |
| `message` | `string` | `''` | Supporting copy |

## Related

- Marketing **CtaBand** for landing-page promos — see **ux-blocks-marketing** handbook

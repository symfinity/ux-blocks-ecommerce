# Cart drawer quickview

Slide-over cart panel with Stimulus open/close behavior.

## When to use

Use **CartDrawerQuickview** for header cart icons that reveal line items without navigating away.

## Guidelines

**Do**

- Control `open` from your Stimulus controller or LiveComponent when integrating with real cart state.
- Pass `items` with `label`, `quantity`, and `unitPrice` at minimum.

**Don't**

- Use as the only cart UI on checkout-heavy flows — provide **ShoppingCartLayout** on `/cart`.

## Usage

```twig
<twig:CartDrawerQuickview
    title="Your cart"
    :open="false"
    :items="[
        { label: 'Classic Tee', quantity: 2, unitPrice: '29.00', lineTotal: '58.00' }
    ]"
/>
```

Variant previews render from `config/component-examples/cart-drawer-quickview.yaml`.

## Stimulus

This role uses interaction `stl` — the packaged `cart-drawer` Stimulus controller opens and closes the slide-over panel, traps focus while open, dismisses on **Escape** or backdrop click, and restores focus to the trigger on close.

## API Reference

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `items` | `list<line item>` | `[]` | Cart rows |
| `open` | `bool` | `false` | Initial open state |
| `title` | `string` | `'Cart'` | Drawer heading |

## Accessibility

- Ensure a visible focus trap or return focus to the trigger when the drawer closes.
- Provide an accessible name via `title` or `aria-label` on the trigger in your layout.

## Related

- [Shopping cart layout](shopping-cart-layout.md)

# Usage

## Fragment prefix

All shop roles emit `data-ui-fragment="blocks.shop.{role}"` and `data-ui-role="{role}"`.

| Prefix | Package |
|--------|---------|
| `blocks.shop.*` | **ux-blocks-ecommerce** (this package) |
| `blocks.marketing.*` | **ux-blocks-marketing** (transitive require) |
| `blocks.core.*` | **ux-blocks-core** (transitive via marketing) |

## Composing with marketing

Use marketing sections for landing pages and ecommerce sections for shop flows on the same site:

```twig
{# marketing — installed transitively #}
<twig:Hero headline="Summer sale" primaryActionLabel="Shop now" primaryActionHref="/shop" />

{# ecommerce #}
<twig:ProductListSection heading="Featured" />
```

Handbook for marketing roles: [ux-blocks-marketing](https://docs.symfinity.dev/ux-blocks-marketing).

## Section vs atom roles

Ecommerce roles are **section-level** Twig components. They may embed core atoms (Button, Card) internally — you do not require **ux-blocks-extended** unless you use extended-only compounds in your own templates.

## Cart and checkout flows

Combine **ShoppingCartLayout**, **OrderSummary**, and **CheckoutFormSection** on dedicated routes. Pass line items and form sections from your domain layer — components are presentational.

## Registry

Authoritative role list: [Components](components.md) and package `README.md` registry table.

## See also

- [Quick start](quickstart.md)
- [Reference](reference.md)

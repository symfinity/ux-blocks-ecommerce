<?php

declare(strict_types=1);

namespace Symfinity\UxBlocksEcommerce\Model;

/**
 * Display-only cart line (v0 — no persistence).
 */
final readonly class LineItem
{
    public function __construct(
        public string $label,
        public int $quantity,
        public string $unitPrice,
        public ?string $href = null,
        public ?string $imageUrl = null,
        public ?string $lineTotal = null,
    ) {
    }

    /**
     * @param array{label: string, quantity?: int, unitPrice: string, href?: string, imageUrl?: string, lineTotal?: string} $row
     */
    public static function fromArray(array $row): self
    {
        return new self(
            label: $row['label'],
            quantity: (int) ($row['quantity'] ?? 1),
            unitPrice: $row['unitPrice'],
            href: $row['href'] ?? null,
            imageUrl: $row['imageUrl'] ?? null,
            lineTotal: $row['lineTotal'] ?? null,
        );
    }
}

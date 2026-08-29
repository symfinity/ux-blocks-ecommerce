<?php

declare(strict_types=1);

namespace Symfinity\UxBlocksEcommerce\Tests\Unit;

use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;

final class StimulusControllerTest extends TestCase
{
    #[Test]
    public function cartDrawerControllerAssetExists(): void
    {
        $path = \dirname(__DIR__, 2) . '/assets/controllers/cart-drawer_controller.js';

        self::assertFileExists($path);
        self::assertNotSame('', trim((string) file_get_contents($path)));
    }
}

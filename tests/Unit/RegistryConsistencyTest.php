<?php

declare(strict_types=1);

namespace Symfinity\UxBlocksEcommerce\Tests\Unit;

use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;
use Symfinity\UxBlocks\Registry\EcommerceRoleCatalog;
use Symfony\Component\Yaml\Yaml;

final class RegistryConsistencyTest extends TestCase
{
    /** @return array<string, array{0: string}> */
    public static function ecommerceRoleProvider(): array
    {
        $provider = [];
        foreach (EcommerceRoleCatalog::roles() as $role) {
            $provider[$role] = [$role];
        }

        return $provider;
    }

    #[Test]
    public function yamlSchemaVersionMatchesContract(): void
    {
        $registry = $this->loadRegistry();

        self::assertSame('1.1', $registry['ux_role_registry']);
        self::assertSame('blocks.shop', $registry['registry_prefix']);
    }

    #[Test]
    public function yamlContainsAllEcommerceRoles(): void
    {
        $registry = $this->loadRegistry();
        $roles = array_column($registry['roles'], 'role');

        self::assertSame(EcommerceRoleCatalog::roles(), $roles);
    }

    #[Test]
    #[DataProvider('ecommerceRoleProvider')]
    public function eachRowHasRequiredFields(string $role): void
    {
        $row = $this->findRole($role);

        self::assertSame($role, $row['role']);
        self::assertSame(EcommerceRoleCatalog::twigComponentForRole($role), $row['twig_component']);
        self::assertStringStartsWith('Symfinity\\UxBlocksEcommerce\\Twig\\Components\\', $row['php_class']);
        self::assertSame('blocks.shop.' . $role, $row['fragment_id']);
        self::assertSame('blocks.shop.' . $role . '.{n}', $row['fragment_pattern']);
        self::assertSame(EcommerceRoleCatalog::interactionForRole($role), $row['interaction']);
        self::assertSame('shipped', $row['status']);
    }

    /** @return array<string, mixed> */
    private function loadRegistry(): array
    {
        return Yaml::parseFile(\dirname(__DIR__, 2) . '/config/ux_roles.yaml');
    }

    /** @return array<string, mixed> */
    private function findRole(string $role): array
    {
        foreach ($this->loadRegistry()['roles'] as $row) {
            if (($row['role'] ?? null) === $role) {
                return $row;
            }
        }

        self::fail(sprintf('Role "%s" not found in ux_roles.yaml', $role));
    }
}

<?php
/**
 * Tests for PortaForge
 */

use PHPUnit\Framework\TestCase;
use Portaforge\Portaforge;

class PortaforgeTest extends TestCase {
    private Portaforge $instance;

    protected function setUp(): void {
        $this->instance = new Portaforge(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Portaforge::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}

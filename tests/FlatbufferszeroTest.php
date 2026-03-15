<?php
/**
 * Tests for FlatbuffersZero
 */

use PHPUnit\Framework\TestCase;
use Flatbufferszero\Flatbufferszero;

class FlatbufferszeroTest extends TestCase {
    private Flatbufferszero $instance;

    protected function setUp(): void {
        $this->instance = new Flatbufferszero(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Flatbufferszero::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}

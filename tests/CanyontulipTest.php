<?php
/**
 * Tests for CanyonTulip
 */

use PHPUnit\Framework\TestCase;
use Canyontulip\Canyontulip;

class CanyontulipTest extends TestCase {
    private Canyontulip $instance;

    protected function setUp(): void {
        $this->instance = new Canyontulip(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Canyontulip::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}

<?php
/**
 * Tests for Web3Sypheron
 */

use PHPUnit\Framework\TestCase;
use Web3sypheron\Web3sypheron;

class Web3sypheronTest extends TestCase {
    private Web3sypheron $instance;

    protected function setUp(): void {
        $this->instance = new Web3sypheron(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Web3sypheron::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}

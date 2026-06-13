<?php
/**
 * Tests for CryptoCredit
 */

use PHPUnit\Framework\TestCase;
use Cryptocredit\Cryptocredit;

class CryptocreditTest extends TestCase {
    private Cryptocredit $instance;

    protected function setUp(): void {
        $this->instance = new Cryptocredit(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Cryptocredit::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}

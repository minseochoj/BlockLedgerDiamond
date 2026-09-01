<?php
/**
 * Tests for BlockLedgerDiamond
 */

use PHPUnit\Framework\TestCase;
use Blockledgerdiamond\Blockledgerdiamond;

class BlockledgerdiamondTest extends TestCase {
    private Blockledgerdiamond $instance;

    protected function setUp(): void {
        $this->instance = new Blockledgerdiamond(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Blockledgerdiamond::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}

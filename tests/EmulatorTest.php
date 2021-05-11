<?php

namespace ExampleComposerTest\Tests;

use EmulatorLib\Emulator;
use PHPUnit\Framework\TestCase;

/**
 * Class HelloTest
 * @package ExampleComposerTest\Tests
 */
class EmulatorTest extends TestCase
{
	public function testHelloWorld()
	{
		$emulator = new Emulator();

		$this->assertEquals("Tu tabla es!", $emulator->getEmulatorTable('', 'accounts'));
	}
}
<?php

namespace ExampleComposerTest\Tests;

use ExampleComposer\Hello;
use PHPUnit\Framework\TestCase;

/**
 * Class HelloTest
 * @package ExampleComposerTest\Tests
 */
class HelloTest extends TestCase
{
	public function testHelloWorld()
	{
		$hello = new Hello();

		$this->assertEquals("Hello World!", $hello->helloWorld());
	}
}
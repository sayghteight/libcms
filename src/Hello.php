<?php

namespace ExampleComposer;

/**
 * Class Hello
 * @package ExampleComposer
 */
class Hello
{

	protected $emulators = [
		'TrinityCore' = 'TrinityCore',
	]

	/**
	 * Hello constructor.
	 */
	function __construct()
	{
		# code...
	}

	public function helloWorld()
	{
		return "Hello World!";
	}

	public function getEmulator()
	{
		$name = 'TrinityCore';

		if (array_key_exists($name, $this->emulators))
		{
			return "TrinityCore"
		}
	}
}
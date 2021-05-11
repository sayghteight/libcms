<?php 

namespace EmulatorLib;
use EmulatorLib\Emulator\ExampleEmulator;

class Emulator {

    protected $emulators = [
            "TC" => "TrinityCore",
	];

    public function __construct()
    {                   
        $example = new ExampleEmulator;
        echo $example->getTable('accounts');
    }

    public function getEmulatorTable($emulator = 'example', $table)
    {
        switch ($emulator)
        {
            case 'example': 


                break;
        }
    }



}
<?php 
namespace ManagerLib {

    use ManagerLib\Emulators\ExampleEmulator as EmulatorSample;

    class Manager {

        protected $emulators = [
            "TC" => "TrinityCore" 
        ];
    
        public function __construct()
        {                   
    
        }
    
        public function getEmulatorSample()
        {
            $example = new EmulatorSample();
            $example->getTable('account');
        }
    }
    
}
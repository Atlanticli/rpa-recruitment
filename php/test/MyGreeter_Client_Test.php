<?php
require_once __DIR__ .'/../vendor/autoload.php';
require_once __DIR__ .'/../MyGreeter/Client.php';


class MyGreeter_Client_Test extends \PHPUnit_Framework_TestCase
{


    public function setUp()
    {
        $this->greeter = new \MyGreeter\Client();
    }

    public function test_Instance()
    {
        $this->assertEquals(
            get_class($this->greeter),
            'MyGreeter\Client',
            '1234'
        );
    }

    public function test_getGreeting()
    {
        $this->assertTrue(
            strlen($this->greeter->getGreeting()) > 0
        );
    }
}

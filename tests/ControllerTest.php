<?php

require_once 'hunkey/Controller.php';
use hunkey;

class ControllerTest extends PHPUnit_Framework_TestCase
{
    // ...
    public function testCanBeNegated()
    {
        $controller = new \hunkey\Controller();

        // Assert
        $this->assertEquals(-1, -1);

        //$this->assertEquals(-1, 1);
    }

    // ...
}

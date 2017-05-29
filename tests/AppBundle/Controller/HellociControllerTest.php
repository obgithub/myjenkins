<?php

namespace Tests\AppBundle\Controller;

use AppBundle\Controller\HellociController;
use PHPUnit\Framework\TestCase;

class HellociControllerTest extends TestCase
{
    public function testAdd()
    {
        $calc = new HellociController();
        $result = $calc->add(10, 20);

        // assert that your calculator added the numbers correctly!
        $this->assertEquals(30, $result);
    }
}

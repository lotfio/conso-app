<?php

namespace Tests\Unit;


use Conso\Conso;
use Conso\Input;
use Conso\Testing\TestCase;

class ExampleTest extends TestCase
{
    /**
     * set up.
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
    }

    public function testAssertTrue()
    {
        $this->assertTrue(true);
    }
}
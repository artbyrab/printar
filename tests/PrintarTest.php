<?php

use PHPUnit\Framework\TestCase;
use artbyrab\printar\Printar;

/**
*  Printar Test
*
* To run this test class only:
*  - Navigate to: ~artbyrab/printar/
*  - Type: vendor/bin/phpunit --filter PrintarTest tests/PrintarTest.php
*
* To run a single test class in this model:
*  - Navigate to: ~artbyrab/printar/
*  - Type: vendor/bin/phpunit --filter testRender PrintarTest tests/PrintarTest.php
*
* To run all tests:
*  - Navigate to: ~artbyrab/printar/
*  - Type: $ vendor/bin/phpunit
*
*  @author artbyrab
*/
class PrintarTest extends TestCase
{
    /**
     * Test the render function.
     *
     * We will use PHP's output buffer to capture the output of Printar.
     */
    public function testRender()
    {
        $variable = 'results';

        ob_start();

        Printar::render($variable);

        $output = ob_get_contents();

        ob_end_clean();
    
        $this->assertContains('<pre style="', $output);
        $this->assertContains('background-color:lightgrey;', $output);
        $this->assertContains('Rendered by Printar', $output);
    }
}

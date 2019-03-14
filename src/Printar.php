<?php

/**
 * Printar a print_r output formatter
 *
 * @package Printar
 * @author  RAB <rab@art-by-rab.com>
 * @link    @TODO add in link
 * For copyright and license please see LICENSE and README docs contained in
 * this package.
 */

namespace Rab\Printar;

use Rab\Printar\PrintarInterface;

/**
 * Printar
 *
 * The default Printer model.
 *
 * @author RAB <rab@art-by-rab.com>
 */
class Printar implements PrintarInterface
{

    /**
     * @inheritDoc
     */
    public static function render($variable)
    {
        $css = '
            background-color:lightgrey; 
            color:black;
            font-size:13px;
            line-height:1.42;
            margin:0 0 10px;
            padding:10px;
            word-break:break-all;
            word-wrap:break-work;
        ';
        
        echo '<pre style="' . $css . '">';
        echo "Rendered by Printar\n";
        echo "-------------------\n";
        echo "\n";
        print_r($variable);
        echo "</pre>";
    }
}

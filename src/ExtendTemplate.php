<?php

/**
 * Printar a print_r output formatter
 *
 * @category Package
 * @package Printar
 * @author  artbyrab <contact@art-by-rab.com>
 * @license For copyright and license please see LICENSE and README docs contained in
 * this package.
 * @link    @TODO add in link
 */

namespace artbyrab\printar;

use artbyrab\printar\PrintarInterface;

/**
 * Extend Template
 *
 * Your description
 *
 * @author YourName <yourname@email.com>
 */
class ExtendTemplate implements PrintarInterface
{

    /**
     * {@inheritDoc}
     */
    public static function render($variable)
    {
        // @TODO edit the style here
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
        echo 'Rendered by Printar\n';
        echo '-------------------\n';
        print_r($variable);
        echo '</pre>';
    }
}

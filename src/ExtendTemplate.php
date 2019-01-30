<?php 

// @TODO edit the namespace 
namespace Rabus\Printar;

use Rabus\Printar\PrintarInterface;

/**
 * Extend Template
 * 
 * Your description
 *
 * @author YourName
 */
class ExtendTemplate implements PrintarInterface {

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
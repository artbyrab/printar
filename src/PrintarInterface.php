<?php

/**
 * Printar a print_r output formatter
 *
 * @package Printar
 * @author  artbyrab <contact@art-by-rab.com>
 * @link    @TODO add in link
 * For copyright and license please see LICENSE and README docs contained in
 * this package.
 */

namespace artbyrab\printar;

/**
 * Printar Interface
 *
 * The base interface for any Printar object. If you wish to create your own
 * Printar model, then you should extend this interface.
 *
 * @author artbyrab <contact@art-by-rab.com>
 */
interface PrintarInterface
{

    /**
     * Render
     *
     * Display the variable with pre tags and the bespoke Printar Style.
     *
     * @param mixed $variable is whatever you want wrapped in the Printar
     * render.
     */
    public static function render($variable);
}

<?php namespace Pabloroman\Opengraph\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * Class Oembed
 * 
 * @package pabloroman\Opengraph\Facades
 * @author  Pablo Roman  <pablo@thenextweb.com>
 * @license https://github.com/pabloroman/Opengraph/blob/master/LICENSE MIT
 */
class Oembed extends Facade {

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'opengraph';
    }

}
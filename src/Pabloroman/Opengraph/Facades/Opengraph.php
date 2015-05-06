<?php namespace Pabloroman\Opengraph\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * Class Opengraph
 * 
 * @package pabloroman\Opengraph\Facades
 * @author  Pablo Roman  <pablo@thenextweb.com>
 * @license https://github.com/pabloroman/Opengraph/blob/master/LICENSE MIT
 */
class Opengraph extends Facade {

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'Opengraph';
    }

}
<?php namespace Kevinjohn\L5BootCamp;

use Illuminate\Support\Facades\Facade;


/**
 * Facade for L5BootCamp class
 *
 * @package L5BootCamp
 */
class L5BootCampFacade extends Facade {

    protected static function getFacadeAccessor() {
        return 'L5BootCamp';
    }

}

<?php
/**
 * Created by PhpStorm.
 * User: kevinjohngallagher
 * Date: 04/04/15
 * Time: 18:30
 */

namespace Kevinjohn\L5BootCamp;


class AutoLoadComplete {

    public function __construction()
    {
        dump(' AutoLoadComplete ');
    }

    public static function didWeAutoLoad()
    {
        echo " Hey, we did indeed autoload ";
    }


    public static function printAwesomeness()
    {
        echo 'Awesome';
    }

}
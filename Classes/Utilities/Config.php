<?php
/**
 * Created by PhpStorm.
 * User: kay
 * Date: 22.03.15
 * Time: 01:07
 */

namespace KayStrobach\Dyncss\Utilities;

class Config {
    public static $cachePath;
}

Config::$cachePath = PATH_site .  '/typo3temp/assets/DynCss/';

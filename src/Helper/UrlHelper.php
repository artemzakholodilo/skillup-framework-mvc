<?php

namespace App\Helper;

class UrlHelper
{
    protected string $obj = 'foo';

    public static string $controller = 'home';

    public static string $action = 'index';

    protected static string $a = 'a';

    public static function getFullPath()
    {
        return self::$controller . '/' . self::$action;
    }

    public static function getControllerAndAction($path)
    {
        return explode('/', $path);
    }

    public function getClassName()
    {
        return $this->obj;
    }

    public static function getObject(): self
    {
        return new static();
    }
}

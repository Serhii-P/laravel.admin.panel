<?php


namespace App\SBlog\Core;


class Registry
{
    use TSingletone;

    protected static $properties = [];

    public function setProperty($name, $value) {
        self::$properties[$name] = $value;
    }

    public function getProperty($name) {
        if(isset(self::$properties[$name])) {
            return self::$properties[$name];
        }
        return null;
    }

    /**
     * @return array
     */
    public static function getProperties()
    {
        return self::$properties;
    }

}

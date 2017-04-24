<?php

/**
 * Created by IntelliJ IDEA.
 * User: tema_on
 * Date: 22.04.17
 * Time: 12:57
 */
class Flash
{
    protected static $prefix = 'flash_';

    public static function setMessage($key, $value){
        $key = self::$prefix . $key;
        return !!Session::setValue($key, $value);
    }

    public static function getMessage($key){
        $key = self::$prefix . $key;
        $message = Session::getValue($key);
        Session::deleteValue($key);
        return $message;
    }

}
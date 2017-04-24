<?php

/**
 * Created by IntelliJ IDEA.
 * User: tema_on
 * Date: 22.04.17
 * Time: 12:31
 */
class Session
{
    private static $session;

    private function __construct()
    {
        session_start();
    }

    static function setValue($key, $value){
        self::init();
        return $_SESSION[$key] = $value;
    }

    static function getValue($key){
        self::init();
        return array_key_exists($key, $_SESSION) ?
            $_SESSION[$key] : NULL;
    }

    static function existsKey($key){
        self::init();
        return array_key_exists($key, $_SESSION);
    }

    static function deleteValue($key){
        self::init();
        if(self::existsKey($key)){
            unset($_SESSION[$key]);
        }
    }

    public static function init(){
      if(empty(self::$session)){
          self::$session = new self();
      }
      return self::$session;
    }

}
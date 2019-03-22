<?php

  class Session {
    public static function init() {
      if(version_compare(phpversion(),'5.4.0', '<')){
        if(session_id=='') {
          session_start();
        }
      } else {
        if (session_status()==PHP_SESSION_NONE){
          session_start();
        }
      }
    }

    public static function isSet($key) {
      if(isset($_SESSION[$key])){
        return true;
      } else {
        return false;
      }
    }

    public static function set($key, $value){
      if(!self::isSet($key)){
        $_SESSION[$key] = $value;
      }
    }

    public static function get($key){
      if(self::isSet($key)){
        return $_SESSION[$key];
      } else {
        return null;
      }
    }

    public static function remove($key){
      if(self::isSet($key)){
        unset($_SESSION[$key]);
      }
    }

    public static function id() {
      return session_id();
    }
  }







?>

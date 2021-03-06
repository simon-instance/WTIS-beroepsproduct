<?php

namespace App\lib;

class SessionHandler {
    public function get($sessionVar) {
        if(!isset($_SESSION[$sessionVar])) return null;
        return $_SESSION[$sessionVar];
    }

    public function set($key, $val) {
        $_SESSION[$key] = $val;
    }
}
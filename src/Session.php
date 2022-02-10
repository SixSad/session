<?php

namespace Session;

class Session
{
    public function set($name, $value): void
    {
        $_SESSION[$name] = $value;
    }

    public function get($name)
    {
        return $_SESSION[$name] ?? null;
    }

    public function clear($name)
    {
        unset($_SESSION[$name]);
    }
}

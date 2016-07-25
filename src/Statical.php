<?php

trait Statical
{
    protected static $instance;

    protected static function getInstance()
    {
        if (!self::$instance) {
            self::$instance = (new self)->targetClassInstance();
        }

        return self::$instance;
    }

    public static function __callStatic($name, $args)
    {
        $object = self::getInstance();

        if (!method_exists($object, $name)) {
            trigger_error('Call to undefined method ' . __CLASS__ . '::' . $name . '()', E_USER_ERROR);
        }

        return call_user_func_array([$object, $name], $args);
    }

    abstract protected function targetClassInstance();
}

<?php

interface Registry
{

    public static function getInstance();
    public function set($key, $value);
    public function get($key);

}
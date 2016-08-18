<?php

class Request {
    public static function uri()
    {
        return trim($_SERVER['PATH_INFO'], '/');
    }
}

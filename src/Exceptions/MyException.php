<?php

namespace App\Exceptions;

// Errors
// Error
// Warning
// Parse
// Notice
// Deprecated

class MyException extends \Exception
{
    // 100 - wrong param
    // 101 -
    // 99
    public function __construct($message, $code = 0, \Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}
<?php

namespace Dumko23\PhpMvcCore\exception;

use Exception;

class NotFoundException extends Exception
{
    protected $code = 404;
    protected $message = "Page not found";
}
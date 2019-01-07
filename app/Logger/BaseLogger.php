<?php
/**
 * Created by PhpStorm.
 * User: nifras
 * Date: 1/7/19
 * Time: 11:17 AM
 */

namespace App\Logger;


use Monolog\Handler\StreamHandler;
use Monolog\Logger;

class BaseLogger extends Logger
{
    public function __construct()
    {
        $name = 'logger';
        parent::__construct($name);
    }

    public function init($path)
    {
        $this->pushHandler(new StreamHandler(storage_path($path)), Logger::INFO);
    }


    public function debug($message, array $context = array())
    {
        if (env('APP_DEBUG')) {
            parent::debug($message, $context);
        }
    }

}

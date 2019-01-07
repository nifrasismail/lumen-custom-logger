<?php

namespace App\Http\Controllers;

use App\Logger\BaseLogger;

class CustomController extends Controller
{
    /**
     * @var BaseLogger
     */
    private $baseLogger;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(BaseLogger $baseLogger)
    {
        $this->baseLogger = $baseLogger;
        $this->baseLogger->init('logs/custom_logs/index/hit_index' . date('Y-m-d') . '.log');
    }

    public function index()
    {
        $this->baseLogger->info('Logging from index for INFO');
        $this->baseLogger->debug('Logging from index for DEBUG');

    }


}

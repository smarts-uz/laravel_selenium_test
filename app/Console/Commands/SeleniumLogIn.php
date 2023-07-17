<?php

namespace App\Console\Commands;

use App\Services\LogIn;
use Facebook\WebDriver\Remote\DesiredCapabilities;
use Facebook\WebDriver\Remote\RemoteWebDriver;
use Illuminate\Console\Command;

class SeleniumLogIn extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'run:sign-up-service {--userName=} {--password=}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return void
     */
    public function handle() :void
    {
        

        $driver = RemoteWebDriver::create('http://localhost:4444', DesiredCapabilities::chrome());
        $driver->get('https://en.wikipedia.org/wiki/Selenium_(software)');
    }
}

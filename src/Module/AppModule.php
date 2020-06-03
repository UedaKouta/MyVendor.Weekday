<?php
namespace MyVendor\Weekday\Module;

use BEAR\Package\AbstractAppModule;
use BEAR\Package\PackageModule;
use BEAR\Package\Provide\Router\AuraRouterModule; // add this line

class AppModule extends AbstractAppModule
{
    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
        $appDir = $this->appMeta->appDir;
        $env = dirname(__DIR__) . '/env.php';
        if (file_exists($env)) {
            require_once $appDir . '/env.php';
        }
        // $env = dirname(__DIR__) . '/.env';
        // if (file_exists($env)) {
        //     (new Loader($env))->parse()->putenv(true);
        // }

        $this->install(new AuraRouterModule($appDir . '/var/conf/aura.route.php')); // add this line
        $this->install(new PackageModule);
    }
}

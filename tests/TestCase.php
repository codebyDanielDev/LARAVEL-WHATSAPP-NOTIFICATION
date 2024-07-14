<?php

namespace Danielowoow\LARAVELWHATSAPPNOTIFICATION\Tests;

use Illuminate\Database\Eloquent\Factories\Factory;
use Orchestra\Testbench\TestCase as Orchestra;
use Danielowoow\LARAVELWHATSAPPNOTIFICATION\LARAVELWHATSAPPNOTIFICATIONServiceProvider;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();

        Factory::guessFactoryNamesUsing(
            fn (string $modelName) => 'Danielowoow\\LARAVELWHATSAPPNOTIFICATION\\Database\\Factories\\'.class_basename($modelName).'Factory'
        );
    }

    protected function getPackageProviders($app)
    {
        return [
            LARAVELWHATSAPPNOTIFICATIONServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testing');

        /*
        $migration = include __DIR__.'/../database/migrations/create_laravel-whatsapp-notification_table.php.stub';
        $migration->up();
        */
    }
}

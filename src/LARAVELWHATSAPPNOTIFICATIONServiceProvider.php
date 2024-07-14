<?php

namespace Danielowoow\LARAVELWHATSAPPNOTIFICATION;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Danielowoow\LARAVELWHATSAPPNOTIFICATION\Commands\LARAVELWHATSAPPNOTIFICATIONCommand;

class LARAVELWHATSAPPNOTIFICATIONServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-whatsapp-notification')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel-whatsapp-notification_table')
            ->hasCommand(LARAVELWHATSAPPNOTIFICATIONCommand::class);
    }
}

<?php

namespace Vo1\Seat\MoonBilling;

use Seat\Services\AbstractSeatPlugin;

class MoonBillingServiceProvider extends AbstractSeatPlugin
{
    public function boot()
    {
//        $this->addRoutes();
//        $this->addViews();
//        $this->addTranslations();
//
//        $this->addMigrations();
    }

    /**
     * Include the routes.
     */
    public function addRoutes()
    {
        if (!$this->app->routesAreCached()) {
            include __DIR__ . '/Http/routes.php';
        }
    }

    public function addTranslations()
    {
        $this->loadTranslationsFrom(__DIR__ . '/resources/lang', 'moon-billing');
    }

    public function addViews()
    {
        $this->loadViewsFrom(__DIR__ . '/resources/views', 'moon-billing');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
//        $this->mergeConfigFrom(__DIR__ . '/Config/sms.config.php', 'awox.config');
//        $this->mergeConfigFrom(__DIR__ . '/Config/sms.sidebar.php', 'package.sidebar');
//        $this->registerPermissions(__DIR__ . '/Config/sms.permissions.php', 'awox');
    }

    private function addMigrations()
    {
        $this->loadMigrationsFrom(__DIR__ . '/database/migrations/');
    }

    public function getName(): string
    {
        return 'MoonBilling';
    }

    public function getPackageRepositoryUrl(): string
    {
        return 'https://github.com/vo1/seat-moon-billing';
    }

    public function getPackagistPackageName(): string
    {
        return 'vo1/seat-moon-billing';
    }

    public function getPackagistVendorName(): string
    {
        return 'vo1';
    }
}
<?php

namespace Rapidez\CheckoutTheme;

use Illuminate\Support\ServiceProvider as BaseServiceProvider;

class ServiceProvider extends BaseServiceProvider
{
    public function register()
    {
        $this
            ->registerConfig();
    }

    public function boot()
    {
        $this
            ->bootViews()
            ->bootPublishables();
    }

    public function registerConfig() : self
    {
        $this->mergeConfigFrom(__DIR__.'/../config/rapidez-checkout-theme.php', 'rapidez-checkout-theme');

        return $this;
    }

    public function bootViews() : self
    {
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'rapidez-ct');

        return $this;
    }

    public function bootPublishables() : self
    {
        $this->publishes([
            __DIR__.'/../resources/core-overwrites' => resource_path('views/vendor/rapidez'),
        ], 'core-overwrites');

        $this->publishes([
            __DIR__.'/../resources/views' => resource_path('views/vendor/rapidez-ct'),
        ], 'views');

        $this->publishes([
            __DIR__.'/../config/rapidez-checkout-theme.php' => config_path('rapidez-checkout-theme.php'),
        ], 'config');

        return $this;
    }
}

<?php

namespace DansMaCulotte\Contentful;

use Contentful\Core\Api\IntegrationInterface;
use Contentful\Delivery\Client;
use Contentful\Delivery\ClientOptions;
use Illuminate\Contracts\Support\DeferrableProvider;
use Illuminate\Foundation\Application;
use Illuminate\Support\ServiceProvider;

class ContentfulServiceProvider extends ServiceProvider implements IntegrationInterface, DeferrableProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/contentful.php', 'contentful');

        $this->publishes([
            __DIR__.'/../config/contentful.php' => config_path('contentful.php'),
        ]);
    }

    /**
     * Register the service provider.
     */
    public function register()
    {
        $this->app->singleton(Client::class, function ($app) {
            $config = config('contentful', []);

            $options = new ClientOptions();
            if (is_bool($config['preview']) && $config['preview']) {
                $options->usingPreviewApi();
            }

            $locale = app()->getLocale();
            if ($config['defaultLocale']) {
                $locale = $config['defaultLocale'];
            }
            $options->withDefaultLocale($locale);

            $client = new Client(
                $config['deliveryToken'],
                $config['space'],
                $config['environment'],
                $options
            );
            $client->useIntegration($this);

            return $client;
        });

        $this->app->alias(Client::class, 'contentful');
    }

    /**
     * Returns the name of the current integration.
     * This value must be the one that is sent as part of
     * the "X-Contentful-User-Agent" header to the API.
     *
     * @return string
     */
    public function getIntegrationName(): string
    {
        return 'laravel-contentful';
    }

    /**
     * Returns the package name of the current integration.
     * This value must be the one defined in the "composer.json" file.
     *
     * @return string
     */
    public function getIntegrationPackageName(): string
    {
        return 'dansmaculotte/laravel-contentful';
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['contentful'];
    }
}

<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class GoogleDriveServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        \Storage::extend("google", function($app, $config) {
                $googleClient = new \Google_Client;
                $googleClient->setClientId($config['clientId']);
                $googleClient->setClientSecret($config['clientSecret']);
                $googleClient->refreshToken($config['refreshToken']);

                $options = [];
                if(isset($config['teamDriveId'])) {
                    $options['teamDriveId'] = $config['teamDriveId'];
                }

                $adapter = new \Masbug\Flysystem\GoogleDriveAdapter($service, $config['folder'] ?? '/', $options);
                $driver = new \League\Flysystem\Filesystem($adapter);
                return new \Illuminate\Filesystem\FilesystemAdapter($driver, $adapter);
        });

    }
}

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
                $googleClient = new \Google_Client();
                $googleClient->setClientId($config['clientId']);
                $googleClient->setClientSecret($config['clientSecret']);
                $googleClient->refreshToken($config['refreshToken']);
                $service = new \Google_Service_Drive($googleClient);

                $adapter = new \Masbug\Flysystem\GoogleDriveAdapter($service, $config['folderId']);
                $driver = new \League\Flysystem\Filesystem($adapter);
                return new \Illuminate\Filesystem\FilesystemAdapter($driver, $adapter);
        });

    }
}

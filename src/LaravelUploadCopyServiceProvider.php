<?php

namespace Bamit\LaravelUploadCopy;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Bamit\LaravelUploadCopyServiceProvider\Commands\LaravelUploadCopyCommand;

class LaravelUploadCopyServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('upload-and-copy')
            ->hasRoute('web')
            ->hasViews()
            ->hasConfigFile();
          
    }
}

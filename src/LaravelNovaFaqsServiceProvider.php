<?php

namespace Creode\LaravelNovaFaqs;

use Laravel\Nova\Nova;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LaravelNovaFaqsServiceProvider extends PackageServiceProvider
{

    public function boot()
    {
        parent::boot();

        $this->registerResources();
    }

    public function registerResources()
    {
        Nova::resources([
            \Creode\LaravelNovaFaqs\Nova\Faq::class,
        ]);
    }

    public function configurePackage(Package $package): void
    {
        $package
            ->name('laravel-nova-faqs')
            ->hasViews()
            ->hasMigrations(
                [
                    '2023_08_16_150518_create_faqs_table',
                    '2023_08_17_135221_add_published_at_field_to_faqs_table',
                ]
            )
            ->runsMigrations();
    }
}

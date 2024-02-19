<?php

namespace Creode\LaravelNovaFaqs;

use Laravel\Nova\Nova;
use Creode\LaravelNovaFaqs\Nova\Faq;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LaravelNovaFaqsServiceProvider extends PackageServiceProvider
{
    /**
     * Bootstrap any package services.
     */
    public function boot()
    {
        parent::boot();

        $this->registerResources();
    }

    /**
     * Register Nova Resources.
     */
    public function registerResources()
    {
        Faq::$model = config('nova-faqs.faqs_model', \Creode\LaravelNovaFaqs\Entities\Faq::class);
        Faq::$trafficCop = config('nova-faqs.traffic_cop');
        Nova::resources([
            Faq::class,
        ]);
    }

    /**
     * Sets up the package.
     */
    public function configurePackage(Package $package): void
    {
        $package
            ->name('laravel-nova-faqs')
            ->hasViews()
            ->hasConfigFile()
            ->hasMigrations(
                [
                    '2023_08_16_150518_create_faqs_table',
                    '2023_08_17_135221_add_published_at_field_to_faqs_table',
                    '2024_02_19_105836_add_sort_order_column',
                ]
            )
            ->runsMigrations();
    }
}

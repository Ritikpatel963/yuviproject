<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Str;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        View::composer('components.head', function ($view) {
            $data = $view->getData();
            
            $siteName = 'NutriBuddy';
            $defaultDescription = 'Your Health Partner Store';
            $defaultKeywords = 'nutrition, wellness, health, supplements';
            
            $metaTitle = $data['meta_title'] ?? null;
            $metaDescription = $data['meta_description'] ?? $defaultDescription;
            $metaKeywords = $data['meta_keywords'] ?? $defaultKeywords;

            $view->with([
                'seoTitle' => $metaTitle ? "$metaTitle | $siteName" : $siteName,
                'seoDescription' => $metaDescription,
                'seoKeywords' => $metaKeywords,
            ]);
        });
    }
}

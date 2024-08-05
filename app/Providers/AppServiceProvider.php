<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\ProductType;

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
        $consumerCategories = ProductType::where('product_category_id', ProductType::CONSUMER_TYPE)->get();
        $professionalCategories = ProductType::where('product_category_id', ProductType::PROFESSIONAL_TYPE)->get();

        View::share('consumerCategories', $consumerCategories);
        View::share('professionalCategories', $professionalCategories);
    }
}

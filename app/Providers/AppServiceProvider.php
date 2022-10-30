<?php

namespace App\Providers;

use App\Models\Customer;
use App\Models\Location;
use App\Models\OwnerType;
use App\Models\PropertyType;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Paginator::useBootstrapFive();
        Model::preventLazyLoading(app()->isProduction());

        View::composer('app.nav', function ($view) {
            $property_types = PropertyType::withCount(['properties'])
                ->orderBy('slug')
                ->get();
            $owner_types = OwnerType::withCount(['properties'])
                ->orderBy('slug')
                ->get();
            $customers = Customer::withCount(['properties'])
                ->orderBy('slug')
                ->get();
            $locations = Location::withCount(['properties'])
                ->orderBy('slug')
                ->get();

            $view->with([
                'property_types' => $property_types,
                'owner_types' => $owner_types,
                'customers' => $customers,
                'locations' => $locations,
            ]);
        });
    }
}

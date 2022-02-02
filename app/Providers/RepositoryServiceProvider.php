<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\Interfaces\FoodInterface;
use App\Repositories\FoodRepositories;

use App\Contracts\RestaurantContract;
use App\Repositories\RestaurantRepository;

use App\Contracts\CategoryContract;
use App\Repositories\CategoryRepository;

use App\Contracts\SubcategoryContract;
use App\Repositories\SubcategoryRepository;

use App\Contracts\FoodContract;
use App\Repositories\FoodRepository;

use App\Contracts\AboutusContract;
use App\Repositories\AboutusRepository;

use App\Contracts\ServiceContract;
use App\Repositories\ServiceRepository;

use App\Contracts\CartContract;
use App\Repositories\CartRepository;

use App\Contracts\MenuContract;
use App\Repositories\MenuRepository;

use App\Contracts\OrderContract;
use App\Repositories\OrderRepository;

use App\Contracts\ForgotPasswordContract;
use App\Repositories\ForgotPasswordRepository;

use App\Contracts\ChangePasswordContract;
use App\Repositories\ChangePasswordRepository;

use App\Contracts\NewsContract;
use App\Repositories\NewsRepository;

use App\Contracts\RegisterContract;
use App\Repositories\RegisterRepository;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        // ----------------------------------Admin----------------------------------
        $this->app->bind(RestaurantContract::class, RestaurantRepository::class);
        $this->app->bind(CategoryContract::class, CategoryRepository::class);
        $this->app->bind(SubcategoryContract::class, SubcategoryRepository::class);
        $this->app->bind(FoodContract::class, FoodRepository::class);
        $this->app->bind(AboutusContract::class, AboutusRepository::class);
        $this->app->bind(ServiceContract::class, ServiceRepository::class);
        $this->app->bind(NewsContract::class, NewsRepository::class);

        // ----------------------------------Frant----------------------------------
        $this->app->bind(CartContract::class, CartRepository::class);
        $this->app->bind(MenuContract::class, MenuRepository::class);
        $this->app->bind(OrderContract::class, OrderRepository::class);
        $this->app->bind(ForgotPasswordContract::class, ForgotPasswordRepository::class);
        $this->app->bind(ChangePasswordContract::class, ChangePasswordRepository::class);
        $this->app->bind(RegisterContract::class, RegisterRepository::class);

    }
}


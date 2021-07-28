<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Property;
use App\Models\Company;
use App\Models\PageSeo;
use App\Models\PageEnum;

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
        /*view()->composer('web.pages.home.index', function($settings){
            $settings->with('config', Company::select("*")->where("id", "1")->first());
        });*/

        view()->composer('web.pages.home.index', function($view){
            $view->with('cache_pageseo', PageSeo::select("*")
                ->where("typePage", "HOME")
                ->first());
        });
        view()->composer('web.pages.proyect.index', function($view){
            $view->with('cache_pageseo', PageSeo::select("*")
                ->where("typePage", "PROYECT")
                ->first());
        });

        view()->composer('web.pages.services.index', function($view){
            $view->with('cache_pageseo', PageSeo::select("*")
                ->where("typePage", "SERVICE")
                ->first());
        });

        view()->composer('web.pages.novelties.index', function($view){
            $view->with('cache_pageseo', PageSeo::select("*")
                ->where("typePage", "NOVELTIES")
                ->first());
        });

        view()->composer('web.pages.us.index', function($view){
            $view->with('cache_pageseo', PageSeo::select("*")
                ->where("typePage", "US")
                ->first());
        });


        view()->composer('*', function($view){
            $view->with("global_page_enum", PageEnum::class);

            $view->with('cache_nav_propertys', cache()->remember('cache_nav_propertys', now()->addDay(), function () {
                return Property::select(
                        "property.name",
                        "property.slug",
                    )
                    ->where("property.status", "1")
                    ->limit(6)
                    ->get();
            }));

            $view->with('cache_company', Company::select(
                        "company.id",
                        "company.name",
                        "company.phone",
                        "company.office_latitud",
                        "company.office_longitud",
                        "company.office_address",
                        "company.facebook",
                        "company.instagram",
                        "company.tiktok",
                        "cover.name as icon_name",
                        "cover.type as icon_type",
                        "cover.rute as icon_rute",
                        "coverPage.name as logo_name",
                        "coverPage.type as logo_type",
                        "coverPage.rute as logo_rute",
                    )
                    ->join('picture as cover', 'cover.id', '=', 'company.icon')
                    ->join('picture as coverPage', 'coverPage.id', '=', 'company.logo')
                    ->where("company.id", "1")
                    ->first()
            );
            /*$view->with('cache_company', cache()->remember('cache_company', now()->addDay(), function (){
                return Company::select(
                    "company.id",
                    "company.name",
                    "company.phone",
                    "company.office_latitud",
                    "company.office_longitud",
                    "company.facebook",
                    "company.instagram",
                    "company.tiktok",
                    "cover.name as icon_name",
                    "cover.type as icon_type",
                    "cover.rute as icon_rute",
                    "coverPage.name as logo_name",
                    "coverPage.type as logo_type",
                    "coverPage.rute as logo_rute",
                )
                    ->join('picture as cover', 'cover.id', '=', 'company.icon')
                    ->join('picture as coverPage', 'coverPage.id', '=', 'company.logo')
                    ->where("company.id", "1")
                    ->first();
            }));*/

        });
    }
}

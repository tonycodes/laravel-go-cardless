<?php
namespace Ollywarren\LaravelGoCardless;

use Illuminate\Support\ServiceProvider;
use Ollywarren\LaravelGoCardless\Services\GoCardlessService;

class GoCardlessServiceProvider extends ServiceProvider
{
    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('GoCardless', GoCardlessService::class);
    }
}

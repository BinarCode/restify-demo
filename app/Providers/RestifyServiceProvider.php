<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Binaryk\LaravelRestify\RestifyApplicationServiceProvider;

class RestifyServiceProvider extends RestifyApplicationServiceProvider
{
    protected function gate(): void
    {
        Gate::define('viewRestify', function ($user = null) {
            return true;
        });
    }
}

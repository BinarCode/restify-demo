<?php

namespace App\Providers;

use App\Models\Contact;
use App\Models\Organization;
use App\Models\User;
use App\Policies\ContactPolicy;
use App\Policies\OrganizationPolicy;
use App\Policies\UserPolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    protected $policies = [
        User::class => UserPolicy::class,
        Contact::class => ContactPolicy::class,
        Organization::class => OrganizationPolicy::class,
    ];

    public function boot(): void
    {
        $this->registerPolicies();
    }
}

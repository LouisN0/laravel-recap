<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('create-testimonial', [TestimonialPolicy::class, 'create']);
        Gate::define('edit-testimonial', [TestimonialPolicy::class, 'edit']);

        Gate::define('create-service', [ServicePolicy::class, 'create']);
        Gate::define('edit-service', [ServicePolicy::class, 'edit']);

        Gate::define('edit-banner', [BannerPolicy::class, 'edit']);
    }
}

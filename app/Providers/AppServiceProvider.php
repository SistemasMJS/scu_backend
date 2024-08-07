<?php

namespace App\Providers;

<<<<<<< HEAD
use Illuminate\Auth\Notifications\ResetPassword;
=======
>>>>>>> 77f8ecb55dac272b16a950d189d87c9d4ef9b664
use Illuminate\Support\ServiceProvider;

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
<<<<<<< HEAD
        ResetPassword::createUrlUsing(function (object $notifiable, string $token) {
            return config('app.frontend_url')."/password-reset/$token?email={$notifiable->getEmailForPasswordReset()}";
        });
=======
        //
>>>>>>> 77f8ecb55dac272b16a950d189d87c9d4ef9b664
    }
}

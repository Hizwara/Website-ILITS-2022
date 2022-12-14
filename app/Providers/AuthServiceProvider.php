<?php

namespace App\Providers;

use App\Models\PesertaODL;
use App\Models\TryoutUser;
use App\Models\User;
use Illuminate\Auth\Notifications\ResetPassword;
use Illuminate\Auth\Notifications\VerifyEmail;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
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
        VerifyEmail::toMailUsing(function (User $user, string $verificationUrl) {
            return (new MailMessage)
                ->greeting('Halo peserta Try Out ILITS! 2022')
                ->subject('Verifikasi Email Anda')
                ->line('Untuk memverifikasi email anda, tekan tombol di bawah ini.')
                ->action('Verifikasi Email Saya', $verificationUrl)
                ->line('Jika anda tidak merasa mendaftarkan email anda, maka abaikan pesan ini.');
        });

        ResetPassword::toMailUsing(function (User $user, string $tokenReset) {
            return (new MailMessage)
                ->greeting('Halo peserta Try Out ILITS! 2022')
                ->subject('Reset Password')
                ->line('Untuk mereset password anda, tekan tombol di bawah ini.')
                ->action('Reset Password Saya', route('password.reset', ['token' => $tokenReset]))
                ->line('Jika anda tidak merasa melakukan tidakan ini, maka abaikan pesan ini.');
        });

        // Gate::define('isAdmin', function (User $user) {
        //     return ($user->user_type === 'App\Models\Admin');
        // });

        // Gate::define('isPeserta', function (User $user) {
        //     return ($user->user_type === 'App\Models\Peserta');
        // });

        // Gate::define('isForda', function (User $user) {
        //     return ($user->user_type === 'App\Models\Forda');
        // });

        Gate::define('admin-dashboard', function(User $user){
            return ($user->user_type === 'App\Models\Admin');
        });

        Gate::define('peserta-dashboard', function(User $user){
            return ($user->user_type === 'App\Models\Peserta');
        });

        Gate::define('forda-dashboard', function(User $user){
            return ($user->user_type === 'App\Models\Forda');
        });

        Gate::define('peserta-tryout', function(User $user){
            if ($user->user_type === 'App\Models\Peserta'){
                return $user->tryoutUser?true:false;
            }
            return false;
        });

        Gate::define('bukan-peserta-tryout', function(User $user){
            if (($user->user_type === 'App\Models\Peserta')){
                if((TryoutUser::where('user_id', $user->id)->count())){
                    return false;
                }
                return true;
            }
            return false;
        });

        Gate::define('peserta-its-fair', function(User $user){
            if (($user->user_type === 'App\Models\Peserta')){
                return $user->user->peserta_event->is_its_fair;
            }
            return false;
        });

        Gate::define('peserta-fnd', function(User $user){
            if (($user->user_type === 'App\Models\Peserta')){
                return $user->user->peserta_event->is_fnd;
            }
            return false;
        });
        
        Gate::define('peserta-odl', function(User $user){
            if (($user->user_type === 'App\Models\Peserta')){
                return $user->user->peserta_event->is_odl && PesertaODL::where('peserta_id', $user->user->peserta_event->id)->count();
            }
            return false;
        });
    }
}

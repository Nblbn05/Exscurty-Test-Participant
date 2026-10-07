<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Database\Factories\UserFactory;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Hidden;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

#[Fillable([
    'name',
    'email',
    'password',
    'role',
    ])]
#[Hidden(['password', 'remember_token'])]
class User extends Authenticatable
{
    /** @use HasFactory<UserFactory> */
    use HasFactory, Notifiable;

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
}

/*

NOTE CARA GANTI PASSWORD ACCOUNT, BUKA TERMINAL:
  $user = \App\Models\User::where('email', 'participant@exscurty.test')->first();
    $user->password = bcrypt('passwordbaru123');
    $user->save();

NOTE CARA BUAT AKUN DAN PASSWORD, BUKA TERMINAR :
php artisan tinker

lalu masukkan satu-satu akun dan pw nya:
\App\Models\User::create(['name' => 'Admin Ujian', 'email' => 'admin@exscurty.test', 'password' => bcrypt('password123'), 'role' => 'admin']);

\App\Models\User::create(['name' => 'Peserta Ujian', 'email' => 'peserta@exscurty.test', 'password' => bcrypt('password123'), 'role' => 'participant']);

exit
*/
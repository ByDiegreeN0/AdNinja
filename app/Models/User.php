<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function adminlte_desc(){
        return 'User';
    }

    // Relaciones

    public function links() {
        return $this->hasMany(tbl_links::class, 'user_id');

    }

    public function PayoutData(){
        return $this->hasOne(tbl_payouts_data::class);
    }

    public function referralLink(){
        return $this->hasOne(tbl_user_referral_link::class);
    }


    // Events


    protected $dispatchesEvents = [
        'created' => \App\Events\UserCreated::class,
    ];
}

<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'phone',
        'password',
        'status',
        'dob',
        'membership_year',
        'address',
        'city',
        'image',
        'profile_photo_path',
        'state_id',
        'country_id',
        'occupation_id',
        'group_id',
        'marital_status_id',
        'church_id',
        'hduhau_id'
    ];

    public function country()
    {

        return $this->belongsTo(Country::class);
    }
    public function state()
    {

        return $this->belongsTo(State::class);
    }
    public function city()
    {

        return $this->belongsTo(City::class);
    }
    public function occupation()
    {

        return $this->belongsTo(Occupation::class);
    }
    public function group()
    {

        return $this->belongsTo(Group::class);
    }
    public function marital_status()
    {

        return $this->belongsTo(Marital_status::class);
    }
    public function church()
    {

        return $this->belongsTo(Church::class);
    }
    public function hduhau()
    {

        return $this->belongsTo(hduhau::class);
    }

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
    ];
}

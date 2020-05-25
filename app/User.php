<?php

namespace App;

use App\Client;
use App\Traits\ScopeFilterByColumn;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasApiTokens, Notifiable, HasRoles;
    use ScopeFilterByColumn;
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 
        'lastname',
        'email',
        'mobile_phone', 
        'document_type', 
        'document_number',
        'user_type',
        'client_id', 
        'password',
        'active'
    ];

    protected $guard_name = "api";

    public function setPasswordAttribute($value) {
        $this->attributes['password'] = bcrypt($value);
    }

    public function client() {
        return $this->belongsTo(Client::class, 'client_id', 'id');
    }

    public function cities() {
        return $this->morphToMany(City::class, 'model', 'model_has_cities');
    }

    public function categories() {
        return $this->morphToMany(Category::class, 'model', 'model_has_categories');
    }

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'active' => 'bool'
    ];

    public function searchableColumns(): array {
        return  [
            'name',
            'lastname',
            'email',
            'mobile_phone',
            'document_type' => ['condition' => '='],
            'document_number',
            'user_type' => ['condition' => '='],
            'client_id' => ['condition' => '='],
            'active' => ['condition' => '=']
        ];
    }
}

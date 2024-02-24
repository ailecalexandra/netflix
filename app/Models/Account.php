<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{


    use HasFactory;
    public $fillable = [
        'platform_id',
        'provider_id',
        'cutoff_date',
        'email',
        'password'

    ];
    public function platform(){
        return $this->hasOne(Platform::class);
    }
    public function provider(){
        return $this->hasOne(Provider::class);
    }
    public function errors(){
        return $this->hasMany(Error::class);
    }
    public function userAccount(){
        return $this->hasMany(UserAccount::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Error extends Model
{

    use HasFactory;
    public $fillable = [
        'cuenta_id',
        'user_account_id',
        'description',
        'type_error_id'
    ];
    public function account(){
        return $this->hasOne(Account::class);
    }
    public function userAccount(){
        return $this->hasOne(UserAccount::class);
    }
    public function typeError()
    {
        return $this->hasOne(TypeError::class);
    }
}

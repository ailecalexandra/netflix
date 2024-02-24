<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserAccount extends Model
{

    use HasFactory;
    protected $fillable = [
        'user_id',
        'screen_id',
        'account_id'
    ];
    public function user(){
        return $this->hasOne(User::class);
    }
    public function screen(){
        return $this->hasOne(Screen::class);
    }
    public function account(){
        return $this->hasOne(Account::class);
    }
    public function errors(){
        return $this->hasMany(Error::class);
    }
}

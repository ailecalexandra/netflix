<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Method extends Model
{

    use HasFactory;
    public $fillable=['name'];
    public function userPay(){
        return $this->hasOne(UserPay::class);
    }
    public function providerPay(){
        return $this->hasOne(ProviderPay::class);
    }
}

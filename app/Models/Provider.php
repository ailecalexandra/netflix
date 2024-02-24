<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Nette\Utils\Type;

class Provider extends Model
{

    use HasFactory;
    public $fillable = [
        'name',
        'phone'
    ];
    public function account(){
        return $this->hasMany(Account::class);
    }
    public function providerPay(){
        return $this->hasMany(ProviderPay::class);
    }
    public function typeError(){
        return $this->hasMany(TypeError::class);
    }
}

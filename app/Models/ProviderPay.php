<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProviderPay extends Model
{

    use HasFactory;
    public $fillable = [
        'method_id',
        'admin_id',
        'provider_id',
        'amount'
    ];
    public function method(){
        return $this->hasOne(Method::class);
    }
    public function admin(){
        return $this->hasOne(Admin::class);
    }
    public function provider(){
        return $this->hasOne(Provider::class);
    }
}

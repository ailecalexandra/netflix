<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserPay extends Model
{
    use HasFactory;
    protected $fillable = [
        'amount',
        'user_id',
        'method_id',
        'reference',
        'screenshot',
        'admin_id'
    ];
    public function user(){
        return $this->hasOne(User::class);
    }
    public function method(){
        return $this->hasOne(Method::class);
    }
    public function admin(){
        return $this->hasOne(Admin::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Screen extends Model
{
    use HasFactory;
    protected $fillable = [
        'status_id',
        'cutoff_date',
        'account_id',
        'phone'
    ];
    public function status(){
        return $this->hasOne(Status::class);
    }
    public function account(){
        return $this->hasOne(Account::class);
    }
    public function userAccount(){
        return $this->hasOne(UserAccount::class);
    }
}

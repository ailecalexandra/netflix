<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Platform extends Model
{

    use HasFactory;
    public $fillable = [
        'name',
        'setting_id'
    ];
    public function setting()
    {
        return $this->hasOne(Setting::class);
    }
    public function account(){
        return $this->hasMany(Account::class);
    }
}

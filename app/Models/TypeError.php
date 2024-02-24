<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeError extends Model
{

    use HasFactory;
    protected $fillable = [
        'name',
        'provider_id'
    ];
    public function provider(){
        return $this->hasOne(Provider::class);
    }


}

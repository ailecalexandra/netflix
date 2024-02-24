<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    use HasFactory;
    public $fillable=['name'];

    protected $table = 'status';
    public function screen(){
        return $this->hasMany(Screen::class);
    }
}

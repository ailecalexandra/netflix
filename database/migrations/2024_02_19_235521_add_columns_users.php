<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(Schema::hasColumns('users',['password','email'])){
            Schema::dropColumns('users',['password','email']);
        }
        if(!Schema::hasColumn('users','phone')){
            Schema::table('users',function (Blueprint $table){
                $table->string('phone');
            });
    }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}

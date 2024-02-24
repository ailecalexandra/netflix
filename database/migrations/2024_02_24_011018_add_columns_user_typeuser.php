<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsUserTypeuser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasColumn('users','type_user')){
            Schema::table('users',function (Blueprint $table){
                $table->foreignId('type_user_id')->constrained('type_users');
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
        if (Schema::hasColumns('users','type_user')){
            Schema::dropColumns('users',['type_user_id']);
        }
    }
}

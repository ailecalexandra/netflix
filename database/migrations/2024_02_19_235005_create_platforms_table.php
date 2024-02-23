<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlatformsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('platforms')){
            Schema::create('platforms', function (Blueprint $table) {
                $table->id();
                $table->string('name');
                $table->foreignId('setting_id')->constrained('settings');
                $table->timestamps();
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
        if(Schema::hasTable('platforms')){
            Schema::dropIfExists('platforms');

        }
    }
}

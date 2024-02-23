<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTypeErrorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('type_errors')){
            Schema::create('type_errors', function (Blueprint $table) {
                $table->id();
                $table->string('name');
                $table->foreignId('provider_id')->constrained('providers');
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
        if(Schema::hasTable('type_errors')){
            Schema::dropIfExists('type_errors');

        }
    }
}

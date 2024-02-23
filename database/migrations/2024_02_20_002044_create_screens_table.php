<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateScreensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('screens')){
            Schema::create('screens', function (Blueprint $table) {
                $table->id();
                $table->foreignId('status_id')->constrained('status');
                $table->dateTime('cutoff_date');
                $table->foreignId('account_id')->constrained('accounts');
                $table->string('number')->nullable();
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
        if(Schema::hasTable('screens')){
            Schema::dropIfExists('screens');
        }
    }
}

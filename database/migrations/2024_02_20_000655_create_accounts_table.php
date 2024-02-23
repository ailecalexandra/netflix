<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('accounts')){
            Schema::create('accounts', function (Blueprint $table) {
                $table->id();
                $table->foreignId('platform_id')->constrained('platforms');
                $table->foreignId('provider_id')->constrained('providers');
                $table->dateTime('cutoff_date');
                $table->string('email')->unique();
                $table->string('password');
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
        if(Schema::hasTable('accounts')){
            Schema::dropIfExists('accounts');

        }
    }
}

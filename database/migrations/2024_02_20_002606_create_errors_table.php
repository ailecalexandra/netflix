<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateErrorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('errors')){
            Schema::create('errors', function (Blueprint $table) {
                $table->id();
                $table->foreignId('account_id')->constrained('accounts');
                $table->foreignId('user_account_id')->constrained('users_accounts');
                $table->string('description');
                $table->foreignId('type_error_id')->constrained('type_errors');
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
        if(Schema::hasTable('errors')){
            Schema::dropIfExists('errors');

        }
    }
}

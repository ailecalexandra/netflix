<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserPaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('user_payments')){
            Schema::create('user_payments', function (Blueprint $table) {
                $table->id();
                $table->decimal('amount',10,2);
                $table->foreignId('user_id')->constrained('users');
                $table->foreignId('method_id')->constrained('methods');
                $table->foreignId('admin_id')->constrained('admins');
                $table->string('reference')->nullable();
                $table->string('screenshot')->nullable();
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
        if(Schema::hasTable('user_payments')){
            Schema::dropIfExists('user_payments');

        }
    }
}

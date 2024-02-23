<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProviderPaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('provider_payments')){
            Schema::create('provider_payments', function (Blueprint $table) {
                $table->id();
                $table->foreignId('method_id')->constrained('methods');
                $table->foreignId('admin_id')->constrained('admins');
                $table->foreignId('provider_id')->constrained('providers');
                $table->decimal('amount',10,2);
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
        if(Schema::hasTable('provider_payments')){
            Schema::dropIfExists('provider_payments');

        }
    }
}

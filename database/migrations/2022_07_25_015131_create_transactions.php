<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactions extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->text('alamat')->nullable();
            $table->string('phone')->nullable();
            $table->string('kurir')->nullable();
            $table->enum('method_payment',['COD']);
            $table->bigInteger('total_price');
            $table->enum('status',['Cancel','Pending','Packaging','Delivery','Finish']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transactions');
    }
}

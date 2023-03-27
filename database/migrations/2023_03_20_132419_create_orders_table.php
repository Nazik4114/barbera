<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('phone');
            $table->string('time');
            $table->date('date');
            $table->timestamps();
        });
        Schema::create('order_service',function(Blueprint $table){
            $table->foreignIdFor(\App\Models\Order::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(\App\Models\Service::class)->constrained()->cascadeOnDelete();
        });
        Schema::create('master_order', function(Blueprint $table){
            $table->foreignIdFor(\App\Models\Master::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(\App\Models\Order::class)->constrained()->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
        Schema::dropIfExists('order_service');
    }
};

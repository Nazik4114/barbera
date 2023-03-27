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
        Schema::create('masters', function (Blueprint $table) {
            $table->id();
            $table->text('name');
            $table->string('image');
            $table->boolean('active')->default(true);
            $table->timestamps();
        });

        Schema::create('master_service', function(Blueprint $table){
            $table->foreignIdFor(\App\Models\Master::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(\App\Models\Service::class)->constrained()->cascadeOnDelete();
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('masters');
        Schema::dropIfExists('master_service');

    }
};

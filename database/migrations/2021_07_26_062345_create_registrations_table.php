<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistrationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registrations', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('salutations');
            $table->string('status');
            $table->string('affliation');
            $table->string('address');
            $table->string('sessions');
            $table->string('conference');
            $table->string('reg_sessions')->nullable(); 
            $table->string('mode')->nullable(); 
            $table->string('title')->nullable();
            $table->string('ptitle')->nullable();
            $table->mediumText('abstract')->nullable();
            $table->mediumText('synopsis')->nullable();
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
        Schema::dropIfExists('registrations');
    }
}

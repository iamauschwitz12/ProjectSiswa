<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbsudirmanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbsudirman', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->text('judul');
            $table->string('angkatan');
            $table->string('pembimbing');
            $table->string('nilai');
            $table->string('image');
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
        Schema::dropIfExists('tbsudirman');
    }
}

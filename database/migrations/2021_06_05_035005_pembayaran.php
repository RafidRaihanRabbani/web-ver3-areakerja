<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Pembayaran extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pembayaran', static function (Blueprint $table) {
            $table->increments('id');

            $table->string('paket')->nullable();

            $table->integer('harga')->nullable();

            $table->string('status')->nullable();
        });
    }
}

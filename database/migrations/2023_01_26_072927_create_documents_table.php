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
        Schema::create('documents', function (Blueprint $table) {
            $table->string('no_purchase other');
            $table->string('no_purchase request');
            $table->string('no_invoice');
            $table->string('no_memo');
            $table->text('keterangan pembelian');
            $table->date('tanggal invoice');
            $table->string('sender', 100);
            $table->string('recipients', 100);

            $table->string('status')->default('invite');

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
        Schema::dropIfExists('documents');
    }
};
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFauzanSyahsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fauzan_syahs', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->enum('jeniskelamin',['Pria', 'Wanita']);
            $table->biginteger('notelpon');
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
        Schema::dropIfExists('fauzan_syahs');
    }
}

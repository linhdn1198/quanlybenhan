<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGiuongBenhsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('GiuongBenh', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('phongBenh_id');
            $table->string('tenGiuongBenh');
            $table->tinyInteger('trangThai');
            $table->double('gia');
            $table->timestamps();
            $table->foreign('phongBenh_id')->references('id')->on('PhongBenh')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('GiuongBenh');
    }
}

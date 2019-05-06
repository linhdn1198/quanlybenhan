<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateXetNghiemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('XetNghiem', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('loaiXetNghiem_id');
            $table->unsignedBigInteger('benhAn_id');
            $table->string('ketQua');
            $table->date('ngayXetNghiem');
            $table->string('ghiChu');
            $table->timestamps();
            $table->foreign('loaiXetNghiem_id')->references('id')->on('LoaiXetNghiem')->onDelete('cascade');
            $table->foreign('benhAn_id')->references('id')->on('BenhAn')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('XetNghiem');
    }
}

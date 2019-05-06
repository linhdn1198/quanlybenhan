<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChiTietToaThuocsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ChiTietToaThuoc', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('toaThuoc_id');
            $table->unsignedBigInteger('duocPham_id');
            $table->integer('soLuong');
            $table->double('thanhTien');
            $table->string('ghiChu');
            $table->timestamps();
            $table->foreign('toaThuoc_id')->references('id')->on('ToaThuoc')->onDelete('cascade');
            $table->foreign('duocPham_id')->references('id')->on('DuocPham')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ChiTietToaThuoc');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBenhNhansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('BenhNhan', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('hoTen');
            $table->tinyInteger('gioiTinh');
            $table->string('diaChi');
            $table->date('ngaySinh');
            $table->string('noiSinh');
            $table->string('CMND', 15);
            $table->string('soDienThoai', 14);
            $table->string('ngheNghiep');
            $table->string('hinhAnh');
            $table->string('email');
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
        Schema::dropIfExists('BenhNhan');
    }
}

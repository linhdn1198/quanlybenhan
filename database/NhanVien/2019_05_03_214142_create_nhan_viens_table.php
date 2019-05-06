<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNhanViensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('NhanVien', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('chucDanh_id');
            $table->unsignedBigInteger('phongBan_id');
            $table->unsignedBigInteger('khoa_id');
            $table->unsignedBigInteger('boPhan_id');
            $table->unsignedBigInteger('chungChi_id');
            $table->string('tenNhanVien');
            $table->date('ngaySinh');
            $table->tinyInteger('gioiTinh');
            $table->string('soDienThoai', 15);
            $table->string('diaChi');
            $table->string('email');
            $table->timestamps();
            $table->foreign('chucDanh_id')->references('id')->on('ChucDanh')->onDelete('cascade');
            $table->foreign('phongBan_id')->references('id')->on('PhongBan')->onDelete('cascade');
            $table->foreign('khoa_id')->references('id')->on('Khoa')->onDelete('cascade');
            $table->foreign('boPhan_id')->references('id')->on('BoPhan')->onDelete('cascade');
            $table->foreign('chungChi_id')->references('id')->on('ChungChi')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('NhanVien');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHopDongsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('HopDong', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('loaiHopDong_id');
            $table->unsignedBigInteger('nhanVien_id');
            $table->date('ngayBatDau');
            $table->date('ngayKetThuc');
            $table->string('diaDiem');
            $table->double('phuCapCongViec');
            $table->double('phuCapDocHai');
            $table->string('nhiemVu');
            $table->double('thoiGianLamViec');
            $table->double('ngachLuong');
            $table->double('bacLuong');
            $table->double('heSoLuong');
            $table->date('thoiGianHopDong');
            $table->date('ngayKy');
            $table->timestamps();
            $table->foreign('loaiHopDong_id')->references('id')->on('LoaiHopDong')->onDelete('cascade');
            $table->foreign('nhanVien_id')->references('id')->on('NhanVien')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('HopDong');
    }
}

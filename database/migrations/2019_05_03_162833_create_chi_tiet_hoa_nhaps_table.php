<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChiTietHoaNhapsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ChiTietHoaDonNhap', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('hoaDonNhap_id');
            $table->unsignedBigInteger('vatTu_id');
            $table->integer('soLuong');
            $table->timestamps();
            $table->foreign('hoaDonNhap_id')->references('id')->on('HoaDonNhap')->onDelete('cascade');
            $table->foreign('vatTu_id')->references('id')->on('VatTu')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ChiTietHoaDonNhap');
    }
}

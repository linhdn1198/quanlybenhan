<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChiTietHoaXuatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ChiTietHoaDonXuat', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('hoaDonXuat_id');
            $table->unsignedBigInteger('vatTu_id');
            $table->integer('soLuong');
            $table->timestamps();
            $table->foreign('hoaDonXuat_id')->references('id')->on('HoaDonXuat')->onDelete('cascade');
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
        Schema::dropIfExists('ChiTietHoaDonXuat');
    }
}

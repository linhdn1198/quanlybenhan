<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChiTietHoaDonTheoDoisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ChiTietHoaDonTheoDoi', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('hoaDonTheoDoi_id');
            $table->unsignedBigInteger('vatTu_id');
            $table->integer('soLuong');
            $table->timestamps();
            $table->foreign('hoaDonTheoDoi_id')->references('id')->on('HoaDonTheoDoi')->onDelete('cascade');
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
        Schema::dropIfExists('ChiTietHoaDonTheoDoi');
    }
}

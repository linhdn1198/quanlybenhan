<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChiTietHoaDonDuTrusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ChiTietHoaDonDuTru', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('hoaDonDuTru_id');
            $table->unsignedBigInteger('vatTu_id');
            $table->integer('soLuong');
            $table->timestamps();
            $table->foreign('hoaDonDuTru_id')->references('id')->on('HoaDonDuTru')->onDelete('cascade');
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
        Schema::dropIfExists('ChiTietHoaDonDuTru');
    }
}

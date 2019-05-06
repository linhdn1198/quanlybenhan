<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHoaDonDuTrusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('HoaDonDuTru', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('nhanVien_id');
            $table->tinyInteger('trangThai');
            $table->timestamps();
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
        Schema::dropIfExists('HoaDonDuTru');
    }
}

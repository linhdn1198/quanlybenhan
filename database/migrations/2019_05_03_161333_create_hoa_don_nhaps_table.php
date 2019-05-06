<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHoaDonNhapsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('HoaDonNhap', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('nhanVien_id');
            $table->tinyInteger('trangThai');
            $table->double('tongTien');
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
        Schema::dropIfExists('HoaDonNhap');
    }
}

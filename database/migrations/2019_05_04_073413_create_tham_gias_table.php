<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateThamGiasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ThamGia', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('nhanVien_id');
            $table->unsignedBigInteger('phanCong_id');
            $table->string('vaiTro');
            $table->timestamps();
            $table->foreign('nhanVien_id')->references('id')->on('NhanVien')->onDelete('cascade');
            $table->foreign('phanCong_id')->references('id')->on('PhanCong')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ThamGia');
    }
}

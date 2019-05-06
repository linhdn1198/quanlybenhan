<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDuocPhamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('DuocPham', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('nuocSanXuat_id');
            $table->unsignedBigInteger('donViTinh_id');
            $table->string('tenDuocPham');
            $table->double('donGia');
            $table->date('hanSuDung');
            $table->date('ngaySanXuat');
            $table->timestamps();
            $table->foreign('nuocSanXuat_id')->references('id')->on('NuocSanXuat')->onDelete('cascade');
            $table->foreign('donViTinh_id')->references('id')->on('DonViTinh')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('DuocPham');
    }
}

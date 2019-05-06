<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVatTusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('VatTu', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('loaiVatTu_id');
            $table->unsignedBigInteger('nhaCungCap_id');
            $table->unsignedBigInteger('nuocSanXuat_id');
            $table->unsignedBigInteger('donViTinh_id');
            $table->string('tenVatTu');
            $table->date('hanSuDung');
            $table->double('donGia');
            $table->string('hinhAnh');
            $table->timestamps();
            $table->foreign('loaiVatTu_id')->references('id')->on('LoaiVatTu')->onDelete('cascade');
            $table->foreign('nhaCungCap_id')->references('id')->on('NhaCungCap')->onDelete('cascade');
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
        Schema::dropIfExists('VatTu');
    }
}

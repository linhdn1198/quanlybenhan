<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateThongTinChucVusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ThongTinChucVu', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('nhanVien_id');
            $table->unsignedBigInteger('phongBan_id');
            $table->unsignedBigInteger('chucVu_id');
            $table->string('soQD');
            $table->date('ngayKiQD');
            $table->date('ngayBatDau');
            $table->date('ngayKetThuc');
            $table->double('phuCap');
            $table->timestamps();
            $table->foreign('nhanVien_id')->references('id')->on('NhanVien')->onDelete('cascade');
            $table->foreign('phongBan_id')->references('id')->on('PhongBan')->onDelete('cascade');
            $table->foreign('chucVu_id')->references('id')->on('ChucVu')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ThongTinChucVu');
    }
}

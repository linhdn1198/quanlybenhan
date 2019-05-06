<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChuyenPhongBansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ChuyenPhongBan', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('nhanVien_id');
            $table->unsignedBigInteger('phongDangCongTac');
            $table->unsignedBigInteger('boPhanHienTai');
            $table->unsignedBigInteger('BoPhanChuyenToi');
            $table->string('soQD');
            $table->tinyInteger('trangThai');
            $table->date('ngayApDung');
            $table->string('lyDo');
            $table->date('ngayChuyen');
            $table->date('ngayVe');
            $table->string('ghiChu');
            $table->timestamps();
            $table->foreign('nhanVien_id')->references('id')->on('NhanVien')->onDelete('cascade');
            $table->foreign('phongDangCongTac')->references('id')->on('PhongBan')->onDelete('cascade');
            $table->foreign('boPhanHienTai')->references('id')->on('BoPhan')->onDelete('cascade');
            $table->foreign('BoPhanChuyenToi')->references('id')->on('BoPhan')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ChuyenPhongBan');
    }
}

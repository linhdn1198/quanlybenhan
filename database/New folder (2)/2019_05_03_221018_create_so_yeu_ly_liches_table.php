<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSoYeuLyLichesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('SoYeuLyLich', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('nhanVien_id');
            $table->unsignedBigInteger('quocTich_id');
            $table->unsignedBigInteger('danToc_id');
            $table->unsignedBigInteger('tonGiao_id');
            $table->unsignedBigInteger('hocVan_id');
            $table->unsignedBigInteger('chuyenMon_id');
            $table->string('noiSinh');
            $table->string('nguyenQuan');
            $table->string('hoTenCha');
            $table->string('hoTenMe');
            $table->tinyInteger('tinhTrangHonNhan');
            $table->string('hoTenVoChong');
            $table->string('CMTND', 15);
            $table->date('ngayCap');
            $table->string('noiCap');
            $table->string('soTheDoan');
            $table->string('soTheDang');
            $table->date('ngayVaoDoan');
            $table->date('ngayVaoDang');
            $table->timestamps();
            $table->foreign('nhanVien_id')->references('id')->on('NhanVien')->onDelete('cascade');
            $table->foreign('quocTich_id')->references('id')->on('QuocTich')->onDelete('cascade');
            $table->foreign('danToc_id')->references('id')->on('DanToc')->onDelete('cascade');
            $table->foreign('tonGiao_id')->references('id')->on('TonGiao')->onDelete('cascade');
            $table->foreign('hocVan_id')->references('id')->on('HocVan')->onDelete('cascade');
            $table->foreign('chuyenMon_id')->references('id')->on('ChuyenMon')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('SoYeuLyLich');
    }
}

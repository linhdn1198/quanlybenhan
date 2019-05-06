<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChiTietPhongBenhsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ChiTietPhongBenh', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('phongBenh_id');
            $table->unsignedBigInteger('vatTu_id');
            $table->tinyInteger('trangThai');
            $table->timestamps();
            $table->foreign('phongBenh_id')->references('id')->on('PhongBenh')->onDelete('cascade');
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
        Schema::dropIfExists('ChiTietPhongBenh');
    }
}

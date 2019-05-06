<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBenhAnsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('BenhAn', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('benhNhan_id');
            $table->string('nhomMau');
            $table->string('diUngThuoc');
            $table->string('chieuCao');
            $table->string('canNang');
            $table->date('ngayVao');
            $table->date('ngayRa');
            $table->timestamps();
            $table->foreign('benhNhan_id')->references('id')->on('BenhNhan')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('BenhAn');
    }
}

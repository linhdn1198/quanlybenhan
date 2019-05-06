<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGiuongDieuTrisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('GiuongDieuTri', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('giuongBenh_id');
            $table->unsignedBigInteger('benhNhan_id');
            $table->timestamps();
            $table->foreign('giuongBenh_id')->references('id')->on('GiuongBenh')->onDelete('cascade');
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
        Schema::dropIfExists('GiuongDieuTri');
    }
}

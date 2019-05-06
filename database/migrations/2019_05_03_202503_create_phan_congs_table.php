<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePhanCongsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('PhanCong', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('benhAn_id');
            $table->date('ngayApDung');
            $table->date('gioApDung');
            $table->timestamps();
            $table->foreign('benhAn_id')->references('id')->on('BenhAn')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('PhanCong');
    }
}

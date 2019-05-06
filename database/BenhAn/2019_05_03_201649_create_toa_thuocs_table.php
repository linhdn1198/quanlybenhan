<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateToaThuocsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ToaThuoc', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('benhAn_id');
            $table->string('chuanDoan');
            $table->string('cachGiaiQuyet');
            $table->date('ngayDieuTri');
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
        Schema::dropIfExists('ToaThuoc');
    }
}

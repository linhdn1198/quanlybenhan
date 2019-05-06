<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePhongBenhsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('PhongBenh', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('ten');
            $table->unsignedBigInteger('nhanVien_id');
            $table->timestamps();
            $table->foreign('nhanVien_id')->references('id')->on('NhanVien')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('PhongBenh');
    }
}

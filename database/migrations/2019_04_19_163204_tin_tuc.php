<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TinTuc extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('TinTuc',function(Blueprint $table){
            $table->increments('id');
            $table->integer('idLoaiTin')->unsigned();
            $table->foreign('idLoaiTin')->references('id')->on('LoaiTin');
            $table->longText('TieuDe');
            $table->longText('TieuDeKhongDau');
            $table->text('TomTat');
            $table->longText('NoiDung');
            $table->string('Hinh');
            $table->integer('NoiBat')->default(1);
            $table->integer('SoLuotXem')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('TinTuc');
    }
}

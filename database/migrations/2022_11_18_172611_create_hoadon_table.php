<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHoadonTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hoadon', function (Blueprint $table) {
            $table->integer('idhoadon')->primary();
            $table->integer('idnguoidung')->index('idnguoidung');
            $table->string('hoten', 50);
            $table->string('diachi');
            $table->string('dienthoai', 11);
            $table->string('email');
            $table->timestamps();
            $table->string('phuongthucthanhtoan', 45);
            $table->string('trangthai', 45);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hoadon');
    }
}

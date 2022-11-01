<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVitrisanphamTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vitrisanpham', function (Blueprint $table) {
            $table->integer('idvitrikhohang');
            $table->integer('idsanpham')->index('idsanpham');
            
            $table->primary(['idvitrikhohang', 'idsanpham']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vitrisanpham');
    }
}

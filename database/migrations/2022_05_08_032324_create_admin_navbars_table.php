<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admin_navbars', function (Blueprint $table) {
            $table->id();
            $table->string('home');
            $table->string('about');
            $table->string('servis');
            $table->string('portfolio');
            $table->string('team');
            $table->string('Contact');
            $table->string('Get_Started');
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
        Schema::dropIfExists('admin_navbars');
    }
};

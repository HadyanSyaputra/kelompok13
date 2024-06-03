<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAkademikMahasiswasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_akademik296', function (Blueprint $table) {
            $table->id();
            $table->string('prodi');
            $table->string('angkatan');
            $table->string('semester');
            $table->string('jumlah_mk');
            $table->string('ipk');
            $table->string('kelas');
            $table->string('dospem');
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
        Schema::dropIfExists('tb_akademik296');
    }
}


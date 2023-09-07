<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeminjamanTable extends Migration
{
    public function up()
    {
        Schema::create('peminjaman', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('idpeminjam');
            $table->foreign('idpeminjam')->references('id')->on('nasabah')->onDelete('cascade'); // Ubah ke 'nasabah'
            $table->date('tglpeminjaman')->default(now());
            $table->date('tglpengembalian')->default(now()->addWeek());
            $table->float('nominal');
            $table->text('keterangan');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('peminjaman');
    }
}

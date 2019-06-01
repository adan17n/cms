<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\blog;

class CreateBlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blog', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('judul');
            $table->text('pendahuluan');
            $table->text('isi');
            $table->text('penutup');
            $table->string('penulis');
            $table->string('gambar')->nullable();
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
        Schema::dropIfExists('blog');
    }
}

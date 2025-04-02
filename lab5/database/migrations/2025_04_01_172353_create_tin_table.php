<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('tin', function (Blueprint $table) {
            $table->id();
            $table->string('tieuDe');
            $table->text('tomTat');
            $table->string('urlHinh')->nullable();
            $table->integer('idLT');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tin');
    }
};

?>
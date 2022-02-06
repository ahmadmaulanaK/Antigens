<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPembayaranToAntigensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('antigens', function (Blueprint $table) {
            $table->string('cash')->after('jenis_pembayaran')->default(0);
            $table->string('PIUTANG')->after('cash');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('antigens', function (Blueprint $table) {
            //
        });
    }
}

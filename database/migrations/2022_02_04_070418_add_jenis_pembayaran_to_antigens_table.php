<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddJenisPembayaranToAntigensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('antigens', function (Blueprint $table) {
            $table->string('jenis_pembayaran')->after('pelayanan');
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
            $table->dropColumn('jenis_pembayaran');
        });
    }
}

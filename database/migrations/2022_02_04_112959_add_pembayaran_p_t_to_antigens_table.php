<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPembayaranPTToAntigensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('antigens', function (Blueprint $table) {
            $table->string('BCA-Dr')->after('cash');
            $table->string('BRI-Dr')->after('BCA-Dr');
            $table->string('BNI-Dr')->after('BRI-Dr');
            $table->string('BNI-PT')->after('BNI-Dr');
            $table->string('BJB-PT')->after('BNI-PT');
            $table->string('BCA-PT')->after('BJB-PT');
            $table->string('MANDIRI-PT')->after('BCA-PT');
           
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

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DeleteSanctum extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('failed_jobs', function (Blueprint $table) {
            $table->drop();
        });
        Schema::table('users', function (Blueprint $table) {
            $table->drop();
        });
        Schema::table('migrations', function (Blueprint $table) {
            $table->drop();
        });
        Schema::table('password_resets', function (Blueprint $table) {
            $table->drop();
        });
        Schema::table('personal_access_tokens', function (Blueprint $table) {
            $table->drop();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}

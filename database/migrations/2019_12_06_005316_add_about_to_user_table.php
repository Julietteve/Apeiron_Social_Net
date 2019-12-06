<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddAboutToUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
          $table->string('about')->nullable();
          $table->string('skills')->nullable();
          $table->string('media')->nullable();
          $table->string('profile_pic')->nullable();


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
          $table->dropColumn('about');
          $table->dropColumn('skills');
          $table->dropColumn('media');
            $table->dropColumn('profile_pic')->nullable();
        });
    }
}

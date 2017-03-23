<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterAgeSortedColumnUpdatePeopleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('people', function (Blueprint $table) {
        $table->dropColumn('age_sorted');
      });

      Schema::table('people', function (Blueprint $table) {
        $table->text('age_sorted')->after('emails');
      });     
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::table('people', function (Blueprint $table) {
        $table->dropColumn('age_sorted');
      });

      Schema::table('people', function (Blueprint $table) {
        $table->string('age_sorted')->after('emails');
      }); 
    }
}

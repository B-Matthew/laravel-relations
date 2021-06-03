<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('car_pilot', function (Blueprint $table) {
        $table->foreign('pilot_id' , 'pilotcar')
              ->references('id')
              ->on('pilots');

        $table->foreign('car_id' , 'carpilot')
              ->references('id')
              ->on('cars');
      });

      Schema::table('cars', function (Blueprint $table) {
          $table->foreign('brand_id', 'brandcar')
          ->references('id')
          ->on('brands');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::table('cars', function (Blueprint $table) {
          $table->dropForeign('brandcar');
      });

      Schema::table('car_pilot', function (Blueprint $table) {
        $table->dropForeign('pilotcar');
        $table->dropForeign('carpilot');
      });
    }
  }

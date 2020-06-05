<?php namespace Riotech\Listings\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateRiotechListingsListings8 extends Migration
{
    public function up()
    {
        Schema::table('riotech_listings_listings', function($table)
        {
            $table->date('open_house_date')->nullable();
            $table->time('open_house_start_time')->nullable();
            $table->time('open_house_close_time')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('riotech_listings_listings', function($table)
        {
            $table->dropColumn('open_house_date');
            $table->dropColumn('open_house_start_time');
            $table->dropColumn('open_house_close_time');
        });
    }
}

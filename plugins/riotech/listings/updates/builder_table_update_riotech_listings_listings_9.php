<?php namespace Riotech\Listings\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateRiotechListingsListings9 extends Migration
{
    public function up()
    {
        Schema::table('riotech_listings_listings', function($table)
        {
            $table->renameColumn('open_house_close_time', 'open_house_stop_time');
        });
    }
    
    public function down()
    {
        Schema::table('riotech_listings_listings', function($table)
        {
            $table->renameColumn('open_house_stop_time', 'open_house_close_time');
        });
    }
}

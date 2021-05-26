<?php namespace Riotech\Listings\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateRiotechListingsListings11 extends Migration
{
    public function up()
    {
        Schema::table('riotech_listings_listings', function($table)
        {
            $table->string('home_type', 191)->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('riotech_listings_listings', function($table)
        {
            $table->dropColumn('home_type');
        });
    }
}

<?php namespace Riotech\Listings\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateRiotechListingsListings10 extends Migration
{
    public function up()
    {
        Schema::table('riotech_listings_listings', function($table)
        {
            $table->dateTime('open_house_start_time')->nullable()->unsigned(false)->default(null)->change();
            $table->dateTime('open_house_stop_time')->nullable()->unsigned(false)->default(null)->change();
            $table->dropColumn('open_house_date');
        });
    }
    
    public function down()
    {
        Schema::table('riotech_listings_listings', function($table)
        {
            $table->time('open_house_start_time')->nullable()->unsigned(false)->default(null)->change();
            $table->time('open_house_stop_time')->nullable()->unsigned(false)->default(null)->change();
            $table->date('open_house_date')->nullable();
        });
    }
}

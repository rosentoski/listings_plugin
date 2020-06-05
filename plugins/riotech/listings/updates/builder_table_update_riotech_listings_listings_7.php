<?php namespace Riotech\Listings\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateRiotechListingsListings7 extends Migration
{
    public function up()
    {
        Schema::table('riotech_listings_listings', function($table)
        {
            $table->boolean('featured')->nullable()->default(false);
            $table->boolean('active')->nullable()->default(true);
            $table->boolean('open_house')->nullable()->default(false);
        });
    }
    
    public function down()
    {
        Schema::table('riotech_listings_listings', function($table)
        {
            $table->dropColumn('featured');
            $table->dropColumn('active');
            $table->dropColumn('open_house');
        });
    }
}

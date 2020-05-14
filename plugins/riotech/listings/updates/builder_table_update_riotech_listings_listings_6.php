<?php namespace Riotech\Listings\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateRiotechListingsListings6 extends Migration
{
    public function up()
    {
        Schema::table('riotech_listings_listings', function($table)
        {
            $table->decimal('listing_price', 19, 4)->nullable();
            $table->decimal('selling_price', 19, 4)->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('riotech_listings_listings', function($table)
        {
            $table->dropColumn('listing_price');
            $table->dropColumn('selling_price');
        });
    }
}

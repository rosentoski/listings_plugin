<?php namespace Riotech\Listings\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateRiotechListingsListings4 extends Migration
{
    public function up()
    {
        Schema::table('riotech_listings_listings', function($table)
        {
            $table->decimal('lot_length', 10, 2)->change();
            $table->decimal('lot_width', 10, 2)->change();
            $table->decimal('acres', 10, 2)->change();
            $table->decimal('baths', 4, 2)->change();
            $table->decimal('sqft', 10, 2)->change();
        });
    }
    
    public function down()
    {
        Schema::table('riotech_listings_listings', function($table)
        {
            $table->decimal('lot_length', 10, 0)->change();
            $table->decimal('lot_width', 10, 0)->change();
            $table->decimal('acres', 10, 0)->change();
            $table->decimal('baths', 10, 0)->change();
            $table->decimal('sqft', 10, 0)->change();
        });
    }
}

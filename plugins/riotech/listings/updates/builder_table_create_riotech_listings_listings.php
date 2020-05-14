<?php namespace Riotech\Listings\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateRiotechListingsListings extends Migration
{
    public function up()
    {
        Schema::create('riotech_listings_listings', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('slug')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->integer('sort_order')->nullable();
            $table->string('title')->nullable();
            $table->text('description')->nullable();
            $table->string('street')->nullable();
            $table->string('city')->nullable();
            $table->string('zip')->nullable();
            $table->string('state')->nullable();
            $table->string('country')->nullable();
            $table->decimal('lat', 11, 8);
            $table->decimal('lng', 10, 8);
            $table->decimal('lot_length', 10, 0)->nullable();
            $table->decimal('lot_width', 10, 0)->nullable();
            $table->decimal('acres', 10, 0)->nullable();
            $table->integer('beds')->nullable();
            $table->decimal('baths', 2, 2)->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('riotech_listings_listings');
    }
}

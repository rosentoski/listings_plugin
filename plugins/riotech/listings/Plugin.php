<?php namespace Riotech\Listings;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
      return [
        'Riotech\Listings\Components\ListingsMap' => 'ListingsMap',
        'Riotech\Listings\Components\Listingdetails' => 'ListingsDetails',
        'Riotech\Listings\Components\Listingsslider' => 'ListingsSlider'
      ];
    }

    public function registerSettings()
    {
      return [
        'settings' => [
            'label'       => 'Listings Settings',
            'description' => 'Manage settings for the Listing plugin.',
            'category'    => 'Listings',
            'icon'        => 'icon-cog',
            'class'       => 'Riotech\Listings\Models\Settings',
            'order'       => 500,
            'keywords'    => 'listings location',
        ]
    ];
    }

    public function pluginDetails()
    {
        return [
            'name'        => 'Listings',
            'description' => 'Provides lists and maps of listings',
            'author'      => 'Rory Osentoski',
            'icon'        => 'icon-home',
        ];
    }
}

<?php namespace Riotech\Listings\Components;

use Cms\Classes\ComponentBase;
use Riotech\Listings\Models\Listing;
use Riotech\Listings\Models\Settings;

class Listingdetails extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'Listing Details',
            'description' => 'Displays singular listing details on a page'
        ];
    }

    public function defineProperties()
    {
        return [];
    }
    public function onRun(){
      $this->listing = $this->loadListing();
      $this->googleapi = Settings::get('googleapi');
      $this->addCss('//cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css');
      $this->addCss('//unpkg.com/swiper/css/swiper.min.css');
      $this->addCss(['assets/scss/listingdetails.scss']);
      $this->addJs('//maps.googleapis.com/maps/api/js?key='.$this->googleapi.'&callback=initMap');
      $this->addJs('//cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.js');
      $this->addJs('//unpkg.com/swiper/js/swiper.min.js');
      $this->addJs(['assets/js/component.js']);
    }

    public function loadListing(){
      $pageslug = $this->param('slug');
      return Listing::where('slug', $pageslug)->get();
    }

    public $listing;
    public $googleapi;


}

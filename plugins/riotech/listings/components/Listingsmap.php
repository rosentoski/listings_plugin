<?php namespace Riotech\Listings\Components;

use CMS\Classes\ComponentBase;

use Riotech\Listings\Models\Listing;
use Riotech\Listings\Models\Settings;

class listingsmap extends ComponentBase
{
  public function componentDetails(){
    return [
      'name' => 'Listings Map',
      'description' => 'Display listing on an interactive map'
    ];
  }

  public function onRun(){
    $this->listings = Listing::all();
    $this->googleapi = Settings::get('googleapi');
    $this->addCss('//cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css');
    $this->addCss(['assets/scss/component.scss']);
    $this->addJs('//unpkg.com/@google/markerclustererplus@4.0.1/dist/markerclustererplus.min.js');
    $this->addJs('//maps.googleapis.com/maps/api/js?key='.$this->googleapi.'&callback=initMap');
    $this->addJs('//cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.js');

  }

  public $listings;
  public $googleapi;

}

 ?>

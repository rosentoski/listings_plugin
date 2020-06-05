<?php namespace Riotech\Listings\Components;

use Cms\Classes\ComponentBase;
use Riotech\Listings\Models\Listing;
use Riotech\Listings\Models\Settings;

class Listingsslider extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'Featured Listings Slider',
            'description' => 'A common slider for featured or other quick list of listings.'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function onRun(){
      $this->featuredlistings = Listing::where('featured', 1)->orWhere('open_house', 1)->get();
      $this->googleapi = Settings::get('googleapi');
      $this->addCss('//cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css');
      $this->addJs('//cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.js');
      $this->addCss('//unpkg.com/swiper/css/swiper.min.css');
      $this->addJs('//unpkg.com/swiper/js/swiper.min.js');
      $this->addCss(['assets/scss/listingsslider.scss']);
      $this->addJs(['assets/js/component.js']);
    }

    public $featuredlistings;
}

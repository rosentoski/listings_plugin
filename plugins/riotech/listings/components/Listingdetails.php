<?php namespace Riotech\Listings\Components;

use Cms\Classes\ComponentBase;
use Riotech\Listings\Models\Listing;

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
    }

    public function loadListing(){
      $pageslug = $this->param('slug');
      return Listing::where('slug', $pageslug)->get();
    }

    public $listing;


}

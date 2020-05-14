<?php namespace Riotech\Listings\Models;

use Model;

/**
 * Settings Model
 */
class Settings extends Model
{
  public $implement = ['System.Behaviors.SettingsModel'];

   // A unique code
   public $settingsCode = 'listings_settings';

   // Reference to field configuration
   public $settingsFields = 'fields.yaml';

}

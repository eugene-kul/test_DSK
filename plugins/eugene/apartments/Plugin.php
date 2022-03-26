<?php namespace Eugene\Apartments;

use Backend;
use System\Classes\PluginBase;

class Plugin extends PluginBase {

   public function pluginDetails() {
      return [
         'name'        => 'Apartments',
         'description' => 'Apartments list',
         'author'      => 'Eugene',
         'icon'        => 'icon-home'
      ];
   }


   public function register() {}

   public function boot() {}

   public function registerComponents() {
      return [
         'Eugene\Apartments\Components\ApartmentsList' => 'ApartmentsList'
      ];
   }

   public function registerPermissions() {}

   public function registerNavigation() {
      return [
         'reviews' => [
               'label'       => 'Квартиры',
               'url'         => Backend::url('eugene/apartments/Apartments'),
               'icon'        => 'icon-home',
               'permissions' => ['eugene.apartments.*'],
               'order'       => 500,
         ],
      ];
   }
}

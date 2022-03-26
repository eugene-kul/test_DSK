<?php namespace Eugene\Apartments\Components;

use Cms\Classes\ComponentBase;

class ApartmentsList extends ComponentBase {
   public function componentDetails() {
      return [
         'name'        => 'Apartments',
         'description' => 'Apartments List'
      ];
   }

   public function defineProperties() {
      return [
         'SortOrder' => [
             'title'         => 'Сортировка',
             'type'          => 'dropdown',
             'options'       => [
                 'new'    => 'сначала новые',
                 'old'    => 'сначала старые'
             ],
             'default'       => 'new',
         ]
      ];
   }

   public $records;

   public function onRun() {
      if ($this->property('SortOrder') == 'new') {
         $this->records = \Eugene\Apartments\Models\ApartmentsList::
            where('active', 1)
            ->orderBy('created_at', 'desc')
            ->get();
      } elseif ($this->property('SortOrder') == 'old') {
         $this->records = \Eugene\Apartments\Models\ApartmentsList::
         where('active', 1)
         ->orderBy('created_at', 'asc')
         ->get();
      }
   }
}

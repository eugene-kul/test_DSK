<?php namespace Eugene\Apartments\Controllers;

use BackendMenu;
use Backend\Classes\Controller;
use Eugene\Apartments\Models\ApartmentsList;

class Apartments extends Controller {
   public $implement = [
      'Backend.Behaviors.FormController',
      'Backend.Behaviors.ListController'
   ];

   public $formConfig = 'config_form.yaml';
   public $listConfig = 'config_list.yaml';

   public function __construct() {
      parent::__construct();
      BackendMenu::setContext('Eugene.ApartmentsList', 'apartmentslist', 'apartmentslist');
   }

   public function update($recordId) {
        $record = ApartmentsList::find($recordId);
        $record->save();
        $this->vars['record'] = $record;
        return $this->asExtension('FormController')->update($recordId);
   }

}

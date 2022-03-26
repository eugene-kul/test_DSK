<?php namespace Eugene\Apartments\Models;

use Model;

class ApartmentsList extends Model {
   use \October\Rain\Database\Traits\Validation;

   public $table = 'eugene_apartments_list';

   protected $guarded = ['*'];

   protected $fillable = [];

   public $hasOne = [];
   public $hasMany = [];
   public $belongsTo = [];
   public $belongsToMany = [];
   public $morphTo = [];
   public $morphOne = [];
   public $morphMany = [];
   public $attachOne = [];
   public $attachMany = [
      'images' => 'System\Models\File'
   ];

    /*Validation fields*/
   public $rules = [
      'name' => 'required',
      'tags' => 'required',
      'price' => 'required',
      'images' => 'required',
      'deadline' => 'required',
      'percent' => 'required'
   ];
}

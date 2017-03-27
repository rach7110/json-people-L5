<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class People extends Model
{
    protected $table = 'people';

    protected $fillable = ['emails, age_sorted'];


    public function email_list($json) {
      $people_data = $json->data;
      $email_list = [];

      foreach ($people_data as $person) {
        $email_list[] = $person->email;
      }

      $email_list = implode(',', $email_list);

      return $email_list;
    }

    public function full_name($json) {
      $people_data = $json->data;

      foreach ($people_data as $person) {
        $person->name = $person->first_name . ' ' . $person->last_name;
      }

      return $people_data;
    }

    public function descend_by_age($people) {

      usort($people, function($a, $b) { 
        return $a->age > $b->age ? -1 : 1; 
      });

      $age_sorted = new \stdClass();
      $age_sorted->data = $people;

      $json_age_sorted = json_encode($age_sorted);

      return $json_age_sorted;
    }

}
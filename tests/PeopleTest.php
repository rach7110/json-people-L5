<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\People;
use App\Exceptions\JsonPeopleHandler;

//  test asserting that the JSON is handled properly by the POST route
class PeopleTest extends TestCase
{

  public function setUp()
  {
    $this->people = new People;
    $this->data = json_decode('{"data":[{"first_name":"matt","last_name":"stauffer","age":31,"email":"matt@stauffer.com"},{"first_name":"dan","last_name":"sheetz","age":99,"email": "dan@sheetz.com"}]}');
  }

  public function test_email_array_is_obatined() 
  {
    $json = $this->data;

    $expected = "matt@stauffer.com,dan@sheetz.com";
    $actual = $this->people->email_list($json);

    $this->assertEquals($expected, $actual);

  }

  public function test_full_name_is_created() {
    $json = $this->data;
    $people_data = $this->people->full_name($json);

    $names = [];
    foreach ($people_data as $person) {
      $names[] = $person->name;
    }

    $expected = ['matt stauffer', 'dan sheetz'];
    $actual = $names;

    $this->assertEquals($expected, $actual);

  }

  public function test_descending_by_age() 
  {
    $json = $this->data;
    $people_data = $json->data;

    $expected = '{"data":[{"first_name":"dan","last_name":"sheetz","age":99,"email":"dan@sheetz.com"},{"first_name":"matt","last_name":"stauffer","age":31,"email":"matt@stauffer.com"}]}';

    $actual = $this->people->descend_by_age($people_data);

    $this->assertEquals($expected, $actual);
  }
  /**
  * @expectedException Exception
  * @expectedExceptionMessage Missing member: data
  */
  public function test_json_has_data_parameter() 
  {
    $json = json_decode('{"not_data":[{"first_name":"Ada","last_name":"Lovelace","age":31,"email":"Ada@Lovelace.com"}]}');

    (new JsonPeopleHandler($json))->validate();
  }
  /**
  * @expectedException Exception
  * @expectedExceptionMessage Missing member: first_name
  */
  public function test_json_has_first_name_parameter() 
  {
    $json = json_decode('{"data":[{"first":"Ada","last_name":"Lovelace","age":31,"email":"Ada@Lovelace.com"}]}');

    (new JsonPeopleHandler($json))->validate();
  }
  /**
  * @expectedException Exception
  * @expectedExceptionMessage Missing member: last_name
  */
  public function test_json_has_last_name_parameter() 
  {
    $json = json_decode('{"data":[{"first_name":"Ada","last":"Lovelace","age":31,"email":"Ada@Lovelace.com"}]}');

    (new JsonPeopleHandler($json))->validate();
  }
  /**
  * @expectedException Exception
  * @expectedExceptionMessage Missing member: age
  */
  public function test_json_has_last_age_parameter() 
  {
    $json = json_decode('{"data":[{"first_name":"Ada","last_name":"Lovelace","years":31,"email":"Ada@Lovelace.com"}]}');

    (new JsonPeopleHandler($json))->validate();
  }
  /**
  * @expectedException Exception
  * @expectedExceptionMessage Missing member: email
  */
  public function test_json_has_email_parameter() 
  {
    $json = json_decode('{"data":[{"first_name":"Ada","last_name":"Lovelace","age":31,"email_address":"Ada@Lovelace.com"}]}');

    (new JsonPeopleHandler($json))->validate();
  }
 
}
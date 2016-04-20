<?php

namespace Bisaga\Controller;

use Bisaga\Application;
use Symfony\Component\HttpFoundation\Request;

class PersonController
{

  public function show(Application $app, Request $request)
  {
    $gridTitle = 'Persons title';
    return $app->render('person.html.php', null);
  }

  public function getData(Application $app)
  {
    return $app->json([
        ['lastName' => 'Frank', 'name' => 'Al', 'checked' => true, 'linkText' => 'www.sap.com', 'href' => 'http://www.sap.com/extra_long_address_to_see_how_columns_will_react_to_large_content.', 'gender' => 'male', 'rating' => 4, 'src' => 'images/person1.gif'],
        ['lastName' => 'Friese', 'name' => 'Andy', 'checked' => true, 'linkText' => 'www.sap.com', 'href' => 'http://www.sap.com', 'gender' => 'male', 'rating' => 2, 'src' => 'images/person1.gif'],
        ['lastName' => 'Mann', 'name' => 'Anita', 'checked' => false, 'linkText' => 'www.sap.com', 'href' => 'http://www.sap.com', 'gender' => 'female', 'rating' => 3, 'src' => 'images/person1.gif'],
        ['lastName' => 'Schutt', 'name' => 'Doris', 'checked' => true, 'linkText' => 'www.sap.com', 'href' => 'http://www.sap.com', 'gender' => 'female', 'rating' => 4, 'src' => 'images/person1.gif'],
        ['lastName' => 'Open', 'name' => 'Doris', 'checked' => true, 'linkText' => 'www.sap.com', 'href' => 'http://www.sap.com', 'gender' => 'female', 'rating' => 2, 'src' => 'images/person1.gif'],
        ['lastName' => 'Dewit', 'name' => 'Kenya', 'checked' => false, 'linkText' => 'www.sap.com', 'href' => 'http://www.sap.com', 'gender' => 'female', 'rating' => 3, 'src' => 'images/person1.gif'],
        ['lastName' => 'Zar', 'name' => 'Lou', 'checked' => true, 'linkText' => 'www.sap.com', 'href' => 'http://www.sap.com', 'gender' => 'male', 'rating' => 1, 'src' => 'images/person1.gif'],
        ['lastName' => 'Burr', 'name' => 'Tim', 'checked' => true, 'linkText' => 'www.sap.com', 'href' => 'http://www.sap.com', 'gender' => 'male', 'rating' => 2, 'src' => 'images/person1.gif'],
        ['lastName' => 'Hughes', 'name' => 'Tish', 'checked' => true, 'linkText' => 'www.sap.com', 'href' => 'http://www.sap.com', 'gender' => 'male', 'rating' => 5, 'src' => 'images/person1.gif'],
        ['lastName' => 'Lester', 'name' => 'Mo', 'checked' => true, 'linkText' => 'www.sap.com', 'href' => 'http://www.sap.com', 'gender' => 'male', 'rating' => 3, 'src' => 'images/person1.gif'],
        ['lastName' => 'Case', 'name' => 'Justin', 'checked' => false, 'linkText' => 'www.sap.com', 'href' => 'http://www.sap.com', 'gender' => 'male', 'rating' => 3, 'src' => 'images/person1.gif'],
        ['lastName' => 'Time', 'name' => 'Justin', 'checked' => true, 'linkText' => 'www.sap.com', 'href' => 'http://www.sap.com', 'gender' => 'male', 'rating' => 4, 'src' => 'images/person1.gif'],
        ['lastName' => 'Barr', 'name' => 'Gaye', 'checked' => true, 'linkText' => 'www.sap.com', 'href' => 'http://www.sap.com', 'gender' => 'male', 'rating' => 2, 'src' => 'images/person1.gif'],
        ['lastName' => 'Poole', 'name' => 'Gene', 'checked' => true, 'linkText' => 'www.sap.com', 'href' => 'http://www.sap.com', 'gender' => 'male', 'rating' => 1, 'src' => 'images/person1.gif'],
        ['lastName' => 'Ander', 'name' => 'Corey', 'checked' => false, 'linkText' => 'www.sap.com', 'href' => 'http://www.sap.com', 'gender' => 'male', 'rating' => 5, 'src' => 'images/person1.gif'],
        ['lastName' => 'Early', 'name' => 'Brighton', 'checked' => true, 'linkText' => 'www.sap.com', 'href' => 'http://www.sap.com', 'gender' => 'male', 'rating' => 3, 'src' => 'images/person1.gif'],
        ['lastName' => 'Noring', 'name' => 'Constance', 'checked' => true, 'linkText' => 'www.sap.com', 'href' => 'http://www.sap.com', 'gender' => 'female', 'rating' => 4, 'src' => 'images/person1.gif'],
        ['lastName' => 'Haas', 'name' => 'Jack', 'checked' => true, 'linkText' => 'www.sap.com', 'href' => 'http://www.sap.com', 'gender' => 'male', 'rating' => 2, 'src' => 'images/person1.gif'],
        ['lastName' => 'Tress', 'name' => 'Matt', 'checked' => true, 'linkText' => 'www.sap.com', 'href' => 'http://www.sap.com', 'gender' => 'male', 'rating' => 4, 'src' => 'images/person1.gif'],
        ['lastName' => 'Turner', 'name' => 'Paige', 'checked' => true, 'linkText' => 'www.sap.com', 'href' => 'http://www.sap.com', 'gender' => 'female', 'rating' => 3, 'src' => 'images/person1.gif'],
        ['lastName' => 'Frank1', 'name' => 'Al', 'checked' => true, 'linkText' => 'www.sap.com', 'href' => 'http://www.sap.com/extra_long_address_to_see_how_columns_will_react_to_large_content.', 'gender' => 'male', 'rating' => 4, 'src' => 'images/person1.gif'],
        ['lastName' => 'Friese1', 'name' => 'Andy', 'checked' => true, 'linkText' => 'www.sap.com', 'href' => 'http://www.sap.com', 'gender' => 'male', 'rating' => 2, 'src' => 'images/person1.gif'],
        ['lastName' => 'Mann1', 'name' => 'Anita', 'checked' => false, 'linkText' => 'www.sap.com', 'href' => 'http://www.sap.com', 'gender' => 'female', 'rating' => 3, 'src' => 'images/person1.gif'],
        ['lastName' => 'Schutt1', 'name' => 'Doris', 'checked' => true, 'linkText' => 'www.sap.com', 'href' => 'http://www.sap.com', 'gender' => 'female', 'rating' => 4, 'src' => 'images/person1.gif'],
        ['lastName' => 'Open1', 'name' => 'Doris', 'checked' => true, 'linkText' => 'www.sap.com', 'href' => 'http://www.sap.com', 'gender' => 'female', 'rating' => 2, 'src' => 'images/person1.gif'],
        ['lastName' => 'Dewit1', 'name' => 'Kenya', 'checked' => false, 'linkText' => 'www.sap.com', 'href' => 'http://www.sap.com', 'gender' => 'female', 'rating' => 3, 'src' => 'images/person1.gif'],
        ['lastName' => 'Zar1', 'name' => 'Lou', 'checked' => true, 'linkText' => 'www.sap.com', 'href' => 'http://www.sap.com', 'gender' => 'male', 'rating' => 1, 'src' => 'images/person1.gif'],
        ['lastName' => 'Burr1', 'name' => 'Tim', 'checked' => true, 'linkText' => 'www.sap.com', 'href' => 'http://www.sap.com', 'gender' => 'male', 'rating' => 2, 'src' => 'images/person1.gif'],
        ['lastName' => 'Hughes1', 'name' => 'Tish', 'checked' => true, 'linkText' => 'www.sap.com', 'href' => 'http://www.sap.com', 'gender' => 'male', 'rating' => 5, 'src' => 'images/person1.gif'],
        ['lastName' => 'Lester1', 'name' => 'Mo', 'checked' => true, 'linkText' => 'www.sap.com', 'href' => 'http://www.sap.com', 'gender' => 'male', 'rating' => 3, 'src' => 'images/person1.gif'],
        ['lastName' => 'Case1', 'name' => 'Justin', 'checked' => false, 'linkText' => 'www.sap.com', 'href' => 'http://www.sap.com', 'gender' => 'male', 'rating' => 3, 'src' => 'images/person1.gif'],
        ['lastName' => 'Time1', 'name' => 'Justin', 'checked' => true, 'linkText' => 'www.sap.com', 'href' => 'http://www.sap.com', 'gender' => 'male', 'rating' => 4, 'src' => 'images/person1.gif'],
        ['lastName' => 'Barr1', 'name' => 'Gaye', 'checked' => true, 'linkText' => 'www.sap.com', 'href' => 'http://www.sap.com', 'gender' => 'male', 'rating' => 2, 'src' => 'images/person1.gif'],
        ['lastName' => 'Poole1', 'name' => 'Gene', 'checked' => true, 'linkText' => 'www.sap.com', 'href' => 'http://www.sap.com', 'gender' => 'male', 'rating' => 1, 'src' => 'images/person1.gif'],
        ['lastName' => 'Ander1', 'name' => 'Corey', 'checked' => false, 'linkText' => 'www.sap.com', 'href' => 'http://www.sap.com', 'gender' => 'male', 'rating' => 5, 'src' => 'images/person1.gif'],
        ['lastName' => 'Early1', 'name' => 'Brighton', 'checked' => true, 'linkText' => 'www.sap.com', 'href' => 'http://www.sap.com', 'gender' => 'male', 'rating' => 3, 'src' => 'images/person1.gif'],
        ['lastName' => 'Noring1', 'name' => 'Constance', 'checked' => true, 'linkText' => 'www.sap.com', 'href' => 'http://www.sap.com', 'gender' => 'female', 'rating' => 4, 'src' => 'images/person1.gif'],
        ['lastName' => 'Haas1', 'name' => 'Jack', 'checked' => true, 'linkText' => 'www.sap.com', 'href' => 'http://www.sap.com', 'gender' => 'male', 'rating' => 2, 'src' => 'images/person1.gif'],
        ['lastName' => 'Tress1', 'name' => 'Matt', 'checked' => true, 'linkText' => 'www.sap.com', 'href' => 'http://www.sap.com', 'gender' => 'male', 'rating' => 4, 'src' => 'images/person1.gif'],
        ['lastName' => 'Turner1', 'name' => 'Paige', 'checked' => true, 'linkText' => 'www.sap.com', 'href' => 'http://www.sap.com', 'gender' => 'female', 'rating' => 3, 'src' => 'images/person1.gif']
    ]);
  }

}
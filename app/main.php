<?php

use App\Models\City;
use App\Models\Country;
use App\Models\Countrylanguage;

require_once 'app/connection.php';

$city = City::first();
echo "ID: {$city->ID} Name: {$city->Name}\n";

$country = Country::first();
echo "Code: {$country->Code} Name: {$country->Name}\n";

$countrylanguage = Countrylanguage::first();
echo "CountryCode: {$countrylanguage->CountryCode} Language: {$countrylanguage->Language}\n";

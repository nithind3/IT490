<?php

$response = 'https://maps.googleapis.com/maps/api/place/textsearch/json?query=restaurants+in+Edison,NJ&key=AIzaSyA7M77mLfVDXW9Nl07w35OzogqgHb_ulzY';


$matches = json_decode(file_get_contents($response));
var_dump($matches);
//echo $matches->results[0]->name;

?>
~                                                                               
~      

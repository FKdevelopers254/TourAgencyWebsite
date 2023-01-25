<?php


$json_string =    file_get_contents("nash.json");
$parsed_json = json_decode($json_string, true);
$parsed_json = $parsed_json['data'];
//pr($parsed_json);

foreach($parsed_json as $key => $value)
{
   echo $value['value'] . '<br>';
   echo $value['trip_class'] . '<br>';
   echo $value['show_to_affiliates'] . '<br>';
   echo $value['origin'] . '<br>';
   echo $value['destination'] . '<br>';
   echo $value['gate'] . '<br>';
   echo $value['depart_date'] . '<br>';
   echo $value['return_date'] . '<br>';
   echo $value['number_of_changes'] . '<br>';
   echo $value['found_at'] . '<br>';
   echo $value['duration'] . '<br>';
   echo $value['distance'] . '<br><br><br><br><br>';
    
   // etc
}

?>
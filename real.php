<?php
  $json_string = file_get_contents("http://api.wunderground.com/api/08b3b071c185242d/astronomy/q/Australia/Sydney.json");
  $parsed_json = json_decode($json_string);
  $ageOfMoon=$parsed_json->{'moon_phase'}->{'ageOfMoon'};
  echo "Current ageOfMoon is: ${ageOfMoon} \n";
?>
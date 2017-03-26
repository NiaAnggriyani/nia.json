<?php 
$json_string = file_get_contents("http://api.wunderground.com/api/9423b552c43dd46f/astronomy/amalnac/geolookup/conditions/q/ID/ungaran.json"); 
$parsed_json = json_decode($json_string); 
$location = $parsed_json->{'location'}->{'city'}; 
$weather = $parsed_json->{'current_observation'}->{'weather'};
$feelslike_c= $parsed_json->{'current_observation'}->{'feelslike_c'};
$wind_degrees= $parsed_json->{'current_observation'}->{'wind_degrees'};
$visibility_km= $parsed_json->{'current_observation'}->{'visibility_km'};
$UV= $parsed_json->{'current_observation'}->{'UV'};
$ageOfMoon= $parsed_json->{'moon_phase'}->{'ageOfMoon'};
echo "Saat ini sedang berada di ${location}\n";
echo "<br>";
echo "Cuaca saat ini : ${weather}\n";
echo "<br>";
echo "Derajat Angin : ${wind_degrees} \n";
echo "<br>";
echo "Terasa Seperti : ${feelslike_c} celcius \n";
echo "<br>";
echo "Jarak Pandang : ${visibility_km}kilometers\n";
echo "<br>";
echo "Ultra Violet : ${UV}\n";
echo "<br>";
echo "Umur Bulan : ${ageOfMoon}\n";
?>
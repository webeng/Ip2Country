<?php
include 'Ip2Country.php';
$i = new Ip2Country;

//run below function once only. It will parse IpToCountry.csv
//file into PHP files and save them into php_db directory
$i->parseCSV2();

//to display countryCode:
echo $i->load('24.24.24.24')->countryCode;

//to display country and countryCode:
$i->load('24.24.24.24');
echo $i->countryCode;
echo $i->country;
?>

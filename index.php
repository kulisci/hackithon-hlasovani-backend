<?php

$h = fopen("votes.csv", "r");

$data = fgetcsv($h, 1000, ",");

echo $data;

?>
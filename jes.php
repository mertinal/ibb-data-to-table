<?php
header('Content-Type: application/json');
$data=file_get_contents("https://data.ibb.gov.tr/api/3/action/package_list");
echo $data;

?>
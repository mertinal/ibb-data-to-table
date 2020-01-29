<?php
header('Content-Type: application/json');
$queryId=$_GET['text'];
$data=file_get_contents("https://data.ibb.gov.tr/api/3/action/package_show?id=".$queryId);
$all=json_decode($data, true);
$sonid=$all["result"]["resources"][0]["resource_id"];
$data2=file_get_contents("https://data.ibb.gov.tr/api/3/action/datastore_search?resource_id=".$sonid);
$all2=json_decode($data2, true);
$myJSON = json_encode($all2["result"]["records"]);
echo $myJSON;

?>
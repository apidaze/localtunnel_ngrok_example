<?php

date_default_timezone_set('UTC');

$date = date('d-m-Y G:i:s');
$logs = "[". $date . " - " . __FILE__ . "] START OF PARAMETERS\n";
foreach($_GET as $key => $value) {
    $logs .= "[". $date . " - " . __FILE__ . "] " .  $key . " : " . $value ."\n";
}
$logs .= "[". $date . " - " . __FILE__ . "] END OF PARAMETERS\n";
$fplogs = fopen('/tmp/log_external_script.txt', 'a+');
fwrite($fplogs, $logs);
fclose($fplogs);

header('Content-Type: text/xml; charset=utf-8');

$destination_number = $_GET['destination_number'];
$uuid = $_GET['uuid'];
$exiting = $_GET['exiting'];

echo "
<document>
 <work>
  <answer/>
  <wait>2</wait>
  <speak>
  You will now be placed into the confererence
  </speak>
  <conference>testconference</conference>
 </work>
</document>";

?>

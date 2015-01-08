<?php
//$port=$_GET['port'];
$onoff=$_GET['onoff'];

    shell_exec('echo "'.$onoff.'" > /dev/ttyACM0');

?>


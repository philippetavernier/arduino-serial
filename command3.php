<?php
$port=$_GET['port'];
$onoff=$_GET['onoff'];

$verz="1.0";
$comPort = "/dev/ttyACM0"; /*change to correct com port */

  $fp =fopen($comPort, "w");
  fwrite($fp, $onoff); 
  fclose($fp);

/*$rcmd = $_POST["rcmd"];
switch ($rcmd) {
     case Stop:
        $fp =fopen($comPort, "w");
  fwrite($fp, 1); 
  fclose($fp);
  break;
     case Slow:
        $fp =fopen($comPort, "w");
  fwrite($fp, 2); 
  fclose($fp);
  break;
  case Medium:
        $fp =fopen($comPort, "w");
  fwrite($fp, 3); 
  fclose($fp);
  break;
  case Fast:
        $fp =fopen($comPort, "w");
  fwrite($fp, 4); 
  fclose($fp);
  break;
case Right:
        $fp =fopen($comPort, "w");
  fwrite($fp, 5); 
  fclose($fp);
  break;
case Left:
        $fp =fopen($comPort, "w");
  fwrite($fp, 6); 
  fclose($fp);
  break;
default:
  die('Crap, something went wrong. The page just puked.');
}
*/
?>

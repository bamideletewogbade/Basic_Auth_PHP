<?php
$myfile = fopen("20210413095857.txt", "r") or die("Unable to open file!");
echo fread($myfile,filesize("20210413095857.txt"));
fclose($myfile);
?>


<?php
echo "<html> <head><h1>Lab 01</h1></head></br>
<body><b>My name is Pargat</b> </br>";
$now = new DateTime();
echo"<b> Today Date and Time is </b>";
echo $now->format('Y-m-d H:i:s');
echo $now->getTimestamp();
echo"</body></html>";
?>
<?php 

$filename = 'COMMENTS.txt';
$Content = "Name: " . $_POST['contactname'] . " | Email: " . $_POST['email'] . " | Telephone: " . $_POST['tel'] . " | Department: " . $_POST['department'] . " | Subject: " . $_POST['subject'] . " | Message: " . $_POST['message'] . " ||  ENDOFTEXT\r\n\n";

$handle = fopen($filename, 'a+');
fwrite($handle, $Content);
fclose($handle);


header("Location: http://dciv.tntwzrd.info/");

?>
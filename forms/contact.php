<?php

  $contact = "" . date("Y/m/d") . "";
  
  $contact = $contact . "\t" . $_POST['name'];
  $contact = $contact . "\t" . $_POST['email'];
  $contact = $contact . "\t" . $_POST['subject'];
  //$contact = $contact . "\t" . $_POST['message'];
  $contact = $contact . "\n";
  
  $fp = fopen('../../contact.txt', 'a');
  fwrite($fp, $contact);
  fclose($fp);

  echo 'OK'; 

?>

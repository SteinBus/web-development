<?php
if ($_GET['email'] <> '') {
  $file_name = './data/' . $_GET['email'] . '.txt';
  if (!file_exists($file_name)) {
    $file = fopen($file_name, 'w');
    fwrite($file, "First Name: \n");
    fwrite($file, "Last Name: \n");
    fwrite($file, "Email: " . $_GET['email'] . "\n");
    fwrite($file, "Age: \n");
    fclose($file);
  }
  $file_strings = file($file_name);
  if ($_GET['first_name'] <> '') {
    $file_strings[0] = "First Name: " . $_GET['first_name'] . "\n"; 
  }
  if ($_GET['last_name'] <> '') {
    $file_strings[1] = "Last Name: " . $_GET['last_name'] . "\n"; 
  }
  if ($_GET['age'] <> '') {
    $file_strings[3] = "Age: " . $_GET['age'] . "\n"; 
  }
  $file = fopen($file_name, 'w');
  fwrite($file, implode('', $file_strings));
  fclose($file);
} else {
  echo 'error, email field is empty';
}

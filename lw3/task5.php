<?php
echo !is_numeric('6d5d') ? "true " : "false ";
if ($_GET['email'] <> '') {
  $file_name = './data/' . $_GET['email'] . '.txt';
  if (file_exists($file_name)) {
    $file_strings = file($file_name);
    foreach ($file_strings as $file_string) {
      echo $file_string . "<br />";
    }
  } else {
    echo 'error, no file with this email';
  }
} else {
  echo 'error, email field is empty';
}

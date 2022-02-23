<?php
$password = $_GET['password'];
$strength = 0;
$digits = 0;
$uppercase = 0;
$lowercase = 0;
$count_of_char = array();
if (ctype_alnum($password)) {
  $chars = str_split($password);
  foreach ($chars as $char) {
    if (is_numeric($char)) {
      $digits += 1;
    } else if (ctype_upper($char)) {
      $uppercase += 1;
    } else if (ctype_lower($char)) {
      $lowercase += 1;
    }
    if (array_key_exists($char, $count_of_char)) {
      $count_of_char[$char] += 1;
    } else {
      $count_of_char[$char] = 1;
    }
  }
  $strength += strlen($password) * 4;
  $strength += $digits * 4;
  if ($uppercase != 0) {
    $strength += (strlen($password) - $uppercase) * 2;
  }
  if ($lowercase != 0) {
    $strength += (strlen($password) - $lowercase) * 2;
  }
  if (ctype_alpha($password)) {
    $strength -= strlen($password);
  }
  if (is_numeric($password)) {
    $strength -= strlen($password);
  }
  foreach ($count_of_char as $count) {
    if ($count > 1) {
      $strength -= $count;
    }
  }
  echo 'Your password strength is ', $strength;
} else {
  echo 'your password must contain only letters and numbers';
}

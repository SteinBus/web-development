<?php
$text = $_GET['identifier'];
If (ctype_alnum($text) and !is_numeric($text[0])) {
  echo 'yes';
} else {  
  echo 'no, identifier must start with a letter and contain only leeters and numbers';
}

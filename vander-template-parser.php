<?php
// In this example it is a template parser for newsletter

class vander_code {
  public static function parser ($args = [], $target) {
    foreach ($args as $index => $value) { $target = str_replace("{$index}", $value, $target); }
    return $target;
  }
}

$values = array();

$values['username'] = 'Ulrik';
$values['password'] = 'Vander123';

$template = file_get_contents("/workspace/text-demo.html");

$parsedhtml = vander_code::parser($values, $template);

echo $parsedhtml;
?>

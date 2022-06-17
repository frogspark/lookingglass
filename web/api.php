<?php

require_once('wp/wp-load.php');

require_once('app/themes/frogspark/inc/API.php');

$api = API::getInstance();

try {

  var_dump(
    $api->agents(
      ''
    )->exec()
  );

  var_dump(
    $api->properties(
      false,
      false,
      false
    )->exec()
  );

} catch(Exception $exception) {

  var_dump($exception->getMessage());
}
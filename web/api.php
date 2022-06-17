<?php

$type = $_GET['type'] ?? false;
$origin = $_GET['origin'] ?? false;
$updated_from = $_GET['updated_from'] ?? false;
$per_page = $_GET['per_page'] ?? 999;
$page = $_GET['page'] ?? 1;

$endpoint = $_GET['endpoint'] ?: false;

if (!$endpoint) {
  echo 'Require api endpoint please see: http://188.166.157.64/';
  return;
}

if (!in_array($endpoint, ['health', 'properties', 'agents'])) {
  echo "Endpoint is not valid: 'health', 'properties', 'agents'";
  return;
}

try {

  require_once('wp/wp-load.php');
  require_once('app/themes/frogspark/inc/API.php');
  $api = API::getInstance();
  $data = null;

  if ($endpoint == 'health') {

    echo $api->health()->exec();

  } else if ($endpoint == 'agents') {

    $data =
      $api->agents(
        $origin,
        $per_page,
        $page
      )->exec();

  } else if ($endpoint == 'properties') {

    $data =
      $api->properties(
        $type,
        $origin,
        $updated_from,
        $per_page,
        $page
      )->exec();

  }

  var_dump($data);

} catch(Exception $exception) {

  var_dump($exception->getMessage());
}
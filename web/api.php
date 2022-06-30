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

  // Define path and URL to the ACF plugin.
  define('MY_ACF_PATH', get_stylesheet_directory() . '/includes/acf/');
  define('MY_ACF_URL', get_stylesheet_directory_uri() . '/includes/acf/');

  // Include the ACF plugin.
  include_once( MY_ACF_PATH . 'acf.php' );

  // API
  require_once('app/themes/frogspark/inc/API.php');

  // media_sideload_image
  require_once('wp/wp-admin/includes/plugin.php');
  require_once('wp/wp-admin/includes/media.php');
  require_once('wp/wp-admin/includes/file.php');
  require_once('wp/wp-admin/includes/image.php');

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

    $data = json_decode($data);

    foreach ($data->agents as $agent) {

      $agent_id = 0;

      $q = new WP_Query([
        'post_type'		=> 'agent',
        'post_status' => 'any',
        'meta_key'		=> 'guid',
        'meta_value'	=> $agent->guid,
        'posts_per_page' => 1
      ]);

      while ($q->have_posts()) {

        $q->the_post();
        $agent_id = get_the_ID();
      }

      $update = [
        'post_type' => 'agent',
        'post_title' => $agent->name,
        'post_date_gmt' => $agent->created,
        'post_modified_gmt' => $agent->updated
      ];

      if (!$agent_id) {
        $agent_id = wp_insert_post($update);
      } else {
        wp_update_post($update, $agent_id);
      }

      update_field('email', $agent->email, $agent_id);
      update_field('guid', $agent->guid, $agent_id);
      update_field('phone', $agent->phone, $agent_id);
      update_field('mobile', $agent->mobile, $agent_id);

      $parts = explode('.', $agent->image);
      $last = array_pop($parts);
      if ($last) {
        $image_id = media_sideload_image($agent->image, 0, '', 'id');
        update_field('image', $image_id, $agent_id);
      }
    }

  } else if ($endpoint == 'properties') {

    $data =
      $api->properties(
        $type,
        $origin,
        $updated_from,
        $per_page,
        $page
      )->exec();

    $data = json_decode($data);

    foreach ($data->properties as $prop) {

      $prop_id = 0;

      $q = new WP_Query([
        'post_type'		=> 'property',
        'post_status' => 'any',
        'meta_key'		=> 'guid',
        'meta_value'	=> $prop->guid,
        'posts_per_page' => 1
      ]);

      while ($q->have_posts()) {

        $q->the_post();
        $prop_id = get_the_ID();
      }

      $update = [
        'post_type' => 'property',
        'post_title' => $prop->name,
        'post_date_gmt' => $prop->created,
        'post_modified_gmt' => $prop->updated
      ];

      if (!$prop_id) {
        $prop_id = wp_insert_post($update);
      } else {
        wp_update_post($update, $prop_id);
      }

      update_field('guid', $prop->guid, $prop_id);
      update_field('acreage', $prop->acreage, $prop_id);

      foreach ($prop->agents as $agent) {

        $q = new WP_Query([
          'post_type'		=> 'agent',
          'post_status' => 'any',
          'meta_key'		=> 'guid',
          'meta_value'	=> $agent,
          'posts_per_page' => 1
        ]);

        while ($q->have_posts()) {

          $q->the_post();
          add_row('agents', ['agent' => get_the_ID()], $prop_id);
        }
      }

      update_field('bathrooms', $prop->bathrooms, $prop_id);
      update_field('bedrooms', $prop->bedrooms, $prop_id);
      update_field('description', $prop->description, $prop_id);

      foreach ($prop->images as $image) {

        $image_id = media_sideload_image($image, 0, '', 'id');
        add_row('images', ['image' => $image_id], $prop_id);
      }

      update_field('external_link', $prop->external_link, $prop_id);
      update_field('island', $prop->island, $prop_id);
      update_field('pools', $prop->pools, $prop_id);
      update_field('price', $prop->price, $prop_id);
      update_field('property_type', $prop->property_type, $prop_id);
      update_field('receptions', $prop->receptions, $prop_id);
    }
  }

} catch(Exception $exception) {

  var_dump($exception->getMessage());
}
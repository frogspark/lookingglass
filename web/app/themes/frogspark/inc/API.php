<?php

class API {

  const VALID_ORIGIN = [
    'SMITHSGORE',
    'VILLAVACATIONS',
    'REMAX','CORCORAN'
  ];

  const VALID_PROPERTY_TYPE = [
    'SALE',
    'LONG_RENT',
    'COMMERCIAL_SALE',
    'COMMERCIAL_RENT',
    'SHORT_RENT'
  ];

  protected static $self;
  private $c;
  private $host;

  public static function getInstance() {

    if (!isset(self::$self)) {

      self::$self = new self();
    }

    return self::$self;
  }

  private function __construct() {

    $this->c = curl_init();
    $this->host = 'http://188.166.157.64/v1/';

    curl_setopt($this->c, CURLOPT_RETURNTRANSFER, true);
  }

  public function agents($origin = false, $per_page = 10, $page = 1) {

    if ($origin && !in_array($origin, self::VALID_ORIGIN)) {

      throw new InvalidArgumentException(
        '$origin is not a valid value - ' . implode(self::VALID_ORIGIN, ', '));
    }

    if ($per_page <= 0) {

      throw new InvalidArgumentException('$per_page is not an integer greater than 0');
    }

    if ($page <= 0) {

      throw new InvalidArgumentException('$page is not an integer');
    }

    $query = [
      'per_page' => $per_page,
      'page' => $page
    ];
    if ($origin) {
      $query['origin'] = $origin;
    }

    $url = $this->host . 'agents?' . http_build_query($query);
    curl_setopt($this->c, CURLOPT_URL, $url);

    return $this;
  }

  public function health() {

    $url = $this->host . 'health';
    curl_setopt($this->c, CURLOPT_URL, $url);

    return $this;
  }

  public function properties($type, $origin, $updated_from, $per_page = 10, $page = 1) {

    if ($type && !in_array($type, self::VALID_PROPERTY_TYPE)) {

      throw new InvalidArgumentException(
        '$type is not a valid value - ' . implode(self::VALID_PROPERTY_TYPE, ', '));
    }

    if ($origin && !in_array($origin, self::VALID_ORIGIN)) {

      throw new InvalidArgumentException(
        '$origin is not a valid value - ' . implode(self::VALID_ORIGIN, ', '));
    }

    if ($updated_from <= 0) {

      throw new InvalidArgumentException('$updated_from is not an integer UNIX_TIMESTAMP');
    }

    if ($per_page <= 0) {

      throw new InvalidArgumentException('$per_page is not an integer greater than 0');
    }

    if ($page <= 0) {

      throw new InvalidArgumentException('$page is not an integer');
    }

    $query = [
      'per_page' => $per_page,
      'page' => $page
    ];

    if ($origin) {
      $query['origin'] = $origin;
    }
    if ($updated_from) {
      $query['updated_from'] = $updated_from;
    }
    if ($type) {
      $query['type'] = $type;
    }

    $url = $this->host . 'properties?' . http_build_query($query);
    curl_setopt($this->c, CURLOPT_URL, $url);

    return $this;
  }

  public function exec() {

    return curl_exec($this->c);
  }

  public function __destruct() {

    curl_close($this->c);
  }
}
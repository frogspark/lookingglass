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

  public static function loadACF($row_layout) {

    self::getInstance();

    if ($row_layout === 'properties') {

      try {
        return self::$self->properties(
          get_sub_field('type'),
          get_sub_field('origin'),
          strtotime(get_sub_field('updated_from')),
          (int) get_sub_field('per_page')
        )->exec();
      } catch (Exception $e) {

        var_dump($e->getMessage());
      }
    } else if ($row_layout === 'agents') {

      try {
        return self::$self->agents(
          get_sub_field('origin'),
          (int) get_sub_field('per_page')
        )->exec();
      } catch (Exception $e) {

        var_dump($e->getMessage());
      }
    }
  }

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

  public function agents($origin, $per_page = 10, $page = 1) {

    if (!in_array($origin, self::VALID_ORIGIN)) {

      throw new InvalidArgumentException(
        '$origin is not a valid value - ' . implode(self::VALID_ORIGIN, ', '));
    }

    if (!is_int($per_page)) {

      throw new InvalidArgumentException('$per_page is not an integer');
    }

    if (!is_int($page)) {

      throw new InvalidArgumentException('$page is not an integer');
    }

    $url =
      $this->host . 'agents?' .
      http_build_query(['origin' => $origin, 'per_page' => $per_page, 'page' => $page]);

    curl_setopt($this->c, CURLOPT_URL, $url);

    return $this;
  }

  public function health() {

    $url = $this->host . 'health';
    curl_setopt($this->c, CURLOPT_URL, $url);

    return $this;
  }

  public function properties($type, $origin, $updated_from, $per_page = 10, $page = 1) {

    if (!in_array($type, self::VALID_PROPERTY_TYPE)) {

      throw new InvalidArgumentException(
        '$type is not a valid value - ' . implode(self::VALID_PROPERTY_TYPE, ', '));
    }

    if (!in_array($origin, self::VALID_ORIGIN)) {

      throw new InvalidArgumentException(
        '$origin is not a valid value - ' . implode(self::VALID_ORIGIN, ', '));
    }

    if (!is_int($per_page)) {

      throw new InvalidArgumentException('$per_page is not an integer');
    }

    if (!is_int($page)) {

      throw new InvalidArgumentException('$page is not an integer');
    }

    $url =
      $this->host . 'properties?' .
      http_build_query([
        'origin' => $origin,
        'type' => $type,
        'per_page' => $per_page,
        'page' => $page,
        'updated_from' => $updated_from
      ]);
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
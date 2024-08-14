<?php

namespace Helpers;

class HTTP
{
  static $base = "http://localhost/PHP/php_project_7_20_2024";

  static function redirect($path, $query = "")
  {
    $url = static::$base . $path;
    if($query) $url.= "?$query";

    header("location: $url");
    exit();
  }
}
<?php

if (!isset($argv[1])) {
  print "Usage: php twigdeprecated.php {dir}" . PHP_EOL;
  exit;
}

require_once __DIR__.'/vendor/autoload.php';
$twig = new Twig_Environment();
$deprecations = new Twig_Util_DeprecationCollector($twig);
print_r($deprecations->collectDir($argv[1]));

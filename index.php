<?php

use Categories\Virtual;
use Categories\Volume;
use Categories\Weighted;

function __autoload ($classname) {
  include_once __DIR__ . DIRECTORY_SEPARATOR . str_replace('\\', DIRECTORY_SEPARATOR, $classname) . '.php';
}

$virtual = new Virtual();
$virtual->getCategory();

$volume = new Volume();
$volume->getCategory();

$weighted = new Weighted();
$weighted->getCategory();

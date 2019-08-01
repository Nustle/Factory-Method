<?php

include_once 'Categories\Virtual.php';
include_once 'Categories\Volume.php';
include_once 'Categories\Weighted.php';


$virtual = new Virtual();
$virtual->getCategory();

$volume = new Volume();
$volume->getCategory();

$weighted = new Weighted();
$weighted->getCategory();

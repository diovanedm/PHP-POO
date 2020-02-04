<?php 

require_once 'vendor/autoload.php';

use Cocur\Slugify\Slugify;

$slugify = new Slugify();
$slugify->addRule("Hello", "oi");
$slugify->addRule("World", "Mundo");
echo $slugify->slugify('Hello World!', '_');
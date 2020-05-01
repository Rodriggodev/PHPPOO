<?php
// autoload da pastava vendor do composer

require_once 'vendor/autoload.php';

use Cocur\Slugify\Slugify;

$slug =  new Slugify();

echo $slug->slugify('teste com slug');


 ?>

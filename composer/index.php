<?php

// include composer autoload
require '../vendor/autoload.php';

// import the Intervention Image Manager Class
use Intervention\Image\ImageManager;

// create an image manager instance with favored driver
$manager = new ImageManager(array('driver' => 'imagick'));

// to finally create image instances
$image = $manager->make('images/2.jpg')->resize(100, 100)->save('images/test_image.jpg');

//$image = $manager->make('images/2.jpg');
//$image->resize(100, 100);
//$image->save('images/test_image.jpg');
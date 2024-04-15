<?php

// Include the code for the generator
include 'generator.php';

// Setup the build
$options = [
    'exclude' => [ "snippets"],
    'base_path' => realpath(dirname(__FILE__)),
    'static' => [ "assets", "images" ]
];

// and generate the site
generate((object)$options);
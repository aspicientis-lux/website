<?php

// Include the code for the generator
include 'generator.php';

// Define paths to include and to exclude (relative to the src/ folder)
$exclude = [ "snippets"];

// Do not make edits below this line! //
$base_path = realpath(dirname(__FILE__));
$options = [ 'exclude' => $exclude, 'base_path' => $base_path ];
generate((object)$options);
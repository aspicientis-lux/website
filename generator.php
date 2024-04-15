<?php

function generate($options) {

    // Create the paths
    $src_path = $options->base_path . DIRECTORY_SEPARATOR . 'src';
    $exclude = array_map(fn($value) => $src_path . DIRECTORY_SEPARATOR . trim($value), $options->exclude );

    // get all the php files to process
    $files = get_php_files($src_path, $exclude);

    // Prepare the directory to safe the output
    prepare_output_dir($options->base_path);

    // And process all the files
    foreach($files as $file) {
        process_file($options->base_path, $file);
    }
}

function get_php_files($dir, $exclude) {

    $files = scandir($dir);
    $found = [];

    foreach($files as $file)
    {
        if($file === '.' || $file === '..') continue;
        $path = $dir . DIRECTORY_SEPARATOR . $file;
        if(is_file($path) && str_ends_with($file,".php")) $found[] = $path;
        if(!in_array($path, $exclude) && is_dir($path)) $found = array_merge($found, get_php_files($path,$exclude));
    }

    return $found;
}

function process_file($base_path, $file)
{
    // Determine where the out needs to be written
    $src_path = $base_path . DIRECTORY_SEPARATOR . 'src';
    $build_path = $base_path . DIRECTORY_SEPARATOR . 'build';
    $output_path = str_replace(".php", ".html", ($build_path . substr($file, strlen($src_path))));

    // Get the contents of the file
    chdir(dirname($file));
    $content = shell_exec("php $file");
    $content = str_replace('.php', '.html', $content);

    // Check if there is an output directory for the file
    $output_dir = dirname($output_path);
    if(!is_dir($output_dir)) mkdir($output_dir);

    // Write the contents to the file
    file_put_contents($output_path, $content);
}

function prepare_output_dir($base_path) {
    $build_path = $base_path . DIRECTORY_SEPARATOR . 'build';
    if(is_dir($build_path)) rmdir($build_path);
    mkdir($build_path);
}
<?php
// Magic constants
echo __DIR__ . "<br>";
echo __FILE__ . "<br>";
echo __LINE__ . "<br>";
// Create directory
// mkdir('test');
// Rename directory
// rename('test','test02');
// Delete directory
// rmdir('test02');
// Read files and folders inside directory
$file =scandir('../');
echo "<pre>";
var_dump($file);
echo "</pre>";
// file_get_contents, file_put_contents
echo file_get_contents('lorem.txt');
file_put_contents('sample.txt', "some content");
// file_get_contents from URL
// file_get_contents('http://jsonplacehold');
// https://www.php.net/manual/en/book.filesystem.php

// file_exists
// is_dir
// filemtime
// filesize
// disk_free_space
// file
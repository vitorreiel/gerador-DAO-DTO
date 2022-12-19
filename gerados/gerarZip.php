<?php

$dir = $_GET['nome'];

$zipfile = $_GET['nome'].'.zip';

$filenames = array();

function browse($dir) {
global $filenames;
    if ($handle = opendir($dir)) {
        while (false !== ($file = readdir($handle))) {
            if ($file != "." && $file != ".." && is_file($dir.'/'.$file)) {
                $filenames[] = $dir.'/'.$file;
            }
            else if ($file != "." && $file != ".." && is_dir($dir.'/'.$file)) {
                browse($dir.'/'.$file);
            }
        }
        closedir($handle);
    }
    return $filenames;
}

browse($dir);

$zip = new ZipArchive();

if ($zip->open($zipfile, ZIPARCHIVE::CREATE)!==TRUE) {
    exit("cannot open <$zipfile>\n");
}

foreach ($filenames as $filename) {
    $zip->addFile($filename,$filename);
}

$zip->close();

header("location:../index.php?nome=$dir");
?>
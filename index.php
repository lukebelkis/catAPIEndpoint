<?php

function getRandomImage($dir_path = NULL){
    if(!empty($dir_path)){
        $files = scandir($dir_path);
        $count = count($files);
        if($count > 2){
            $index = rand(2, ($count-1));
            $filename = $files[$index];
            return $dir_path."/".$filename;
        } else {
            return "The image directory is empty.";
        }
    } else {
        return "The image directory is invalid.";
    }
}
header('Content-Type: image/png');
readfile(getRandomImage("cats"));

?>

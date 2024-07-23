<?php
$img_path = "../upload/";
$avata_path ="../uploadanhava/";
$uploadDir = "..uploadanhbl/";

$images = glob($_SERVER['DOCUMENT_ROOT'] . $img_path . '/*.{jpg,jpeg,png,gif}', GLOB_BRACE);
$images = glob($_SERVER['DOCUMENT_ROOT'] . $avata_path . '/*.{jpg,jpeg,png,gif}', GLOB_BRACE);
$images = glob($_SERVER['DOCUMENT_ROOT'] . $uploadDir . '/*.{jpg,jpeg,png,gif}', GLOB_BRACE);

foreach ($images as $image) {
    $imagePath = str_replace($_SERVER['DOCUMENT_ROOT'], '', $image);
    echo '<img src="' . $imagePath . '" alt="Image">';
}
?>

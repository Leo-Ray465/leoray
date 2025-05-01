<?php
$folder = "projectsFolder/";
$images = glob($folder . "*.{jpg,jpeg,png}", GLOB_BRACE);
echo json_encode($images);
?>

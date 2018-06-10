<?php
require("/webroot/gaysugar/public_html/assets/wi/WideImage.php");
$dir = "/webroot/gaysugar/public_html/photos/";
$dir_www = "../../photos/";
$filename="017848_1.jpg";
$thumb="thumb_";
$image=$dir.$filename;
			echo  "<img src='".$dir_www.$filename."'>";
			if ($size = getimagesize($image)) {
				$w=$size[0];
				$h=$size[1];
				if ($w>$h) {
					$new_width=$h;
					$new_height=$h;
					$c=$h;
				} else {
					$new_width=$w;
					$new_height=$w;
					$c=$w;
				}
			}
			$targetFile = $dir_www.$thumb.$filename;
			WideImage::load($image)->resize(400)->saveToFile($dir.$filename);
			WideImage::load($image)->autocrop(-10,0,1)->crop(0,0,400,400)->saveToFile($targetFile);
			$x=$x . 'px';
			echo  "<img src='".$dir_www.$filename."'>";
			echo  "<img src='$targetFile'>";
?>
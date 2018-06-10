<?
	include "utils.class.php";
	$c=new utils;
	$c->connect();
	$filter=$_REQUEST[filter];
	$filename=$_REQUEST[filename];
	
	if ($filter == "1") $cmd="CCW";
	if ($filter == "2") $cmd="CW";
	if ($filter == "3") $cmd="MIR";
	if ($filter == "4") $cmd="GREY";
	if ($filter == "5") $cmd="NEG";
	if ($filter == "6") $cmd="EDG";
	if ($filter == "7") $cmd="CB";
	if ($filter == "8") $cmd="CR";
	if ($filter == "9") $cmd="BRT+";
	if ($filter == "10") $cmd="BRT-";
	if ($filter == "11") $cmd="CON+";
	if ($filter == "12") $cmd="CON-";
	if ($filter == "14") $cmd="SAVE";
	echo $c->adjustImage($filename, $cmd);
	
		function adjustImage($filename1,$mode=0) {
		if ($mode=="SAVE") {
			
			$src_image = imagecreatefromjpeg("/webroot/gaysugar/public_html/photos/" . $_COOKIE["last_photo_filter"]);
			$s=getimagesize($filename1);
			$src_width                    =    $s[0];
			$src_height                   =    $s[1];  
			$dst_image = imagecreatetruecolor($src_width, $src_height);

			if ($s[0] > $s[1]) {
				$width=$s[1];
				$height=$s[1];
			} else {
				$width=$s[0];
				$height=$s[0];
			}
			imagecopyresampled($dst_image, $src_image, 0, 0, 0, 0, $src_width, $src_height, $src_width, $src_height);
			imagejpeg($dst_image, "../photos/" . $filename1);
			return "photos/" . $filename1;
		}
		
		$filename_r="preview_".rand(1111111111,9999999999)."_".$filename1;
		if (!empty($_COOKIE["last_photo_filter"])) {
			if ($filename1 == $_COOKIE["last_photo_in"]) {
				$filename="../photos/" . $_COOKIE["last_photo_filter"];
			} else {
				$filename="../photos/".$filename1;
				setCookie("last_photo_filter", $filename_r, time()-3600, "/");
				setCookie("last_photo_in", $filename1, time()+3600, "/");
			}
		} else {
			$filename="../photos/".$filename1;
		}
		setCookie("last_photo_filter", $filename_r, time()+3600, "/");				
		$filename_p="../photos/".$filename_r;
		
		$s=getimagesize($filename);
		$src_width                    =    $s[0];
		$src_height                   =    $s[1]; 
		$crop_measure = min($s[0], $s[1]);
		
		if ($s[0] > $s[1]) {
			$width=$s[1];
			$height=$s[1];
		} else {
			$width=$s[0];
			$height=$s[0];
		}
		switch ( $mode ) {
			case "CCW":
						$im = imagecreatefromjpeg($filename);
						$im = imagerotate($im, 90,0);
						imagejpeg($im, $filename_p);
						break;
			case "EDG":
						$im = imagecreatefromjpeg($filename);
						imagefilter($im, IMG_FILTER_EMBOSS);
						imagejpeg($im, $filename_p);
						break;
			case "CW":
						$im = imagecreatefromjpeg($filename);
						$im = imagerotate($im,-90,0);
						imagejpeg($im, $filename_p);
						break;
			case "MIR":
						$im = imagecreatefromjpeg($filename);
						imageflip($src_image, IMG_FLIP_HORIZONTAL);
						imagejpeg($im, $filename_p);
						break;
			case "NEG":
						$im = imagecreatefromjpeg($filename);
						imageflip($im, IMG_FILTER_NEGATE);
						imagejpeg($im, $filename_p);
				 		break;
			case "GREY":
						$im = imagecreatefromjpeg($filename);
						imagefilter($im, IMG_FILTER_GRAYSCALE);
						imagejpeg($im, $filename_p);
						break;
			case "OB":
						$im = imagecreatefromjpeg($filename);
						$this->imagecolorF($im,"B");
						imagejpeg($im, $filename_p);
						break;
			case "CB":
						$im = imagecreatefromjpeg($filename);
						imagefilter($im, IMG_FILTER_COLORIZE, 0, 0, 255);
						imagejpeg($im, $filename_p);
						break;
			case "CR":
						$im = imagecreatefromjpeg($filename);
						imagefilter($im, IMG_FILTER_COLORIZE, 255, 0, 0);
						imagejpeg($im, $filename_p);
						break;

			case "BRT+":
						$im = imagecreatefromjpeg($filename);
						imagefilter($im, IMG_FILTER_BRIGHTNESS, 30);
						imagejpeg($im, $filename_p);
						break;
			case "BRT-":
						$im = imagecreatefromjpeg($filename);
						imagefilter($im, IMG_FILTER_BRIGHTNESS, -30);
						imagejpeg($im, $filename_p);
						break;
			case "CON+":
						$im = imagecreatefromjpeg($filename);
						imagefilter($im, IMG_FILTER_CONTRAST, 30);
						imagejpeg($im, $filename_p);
						break;
			case "CON-":
						$im = imagecreatefromjpeg($filename);
						imagefilter($im, IMG_FILTER_CONTRAST, -30);
						imagejpeg($im, $filename_p);
						break;
			case "SAVE":
						$im = imagecreatefromjpeg($filename_p);
						imagejpeg($im, $filename1);
						return "photos/" . $filename1;
			case "0":
						$im = imagecreatefromjpeg($filename);
						imagejpeg($im, $filename);
			default:
						$im = imagecreatefromjpeg($filename);
						imagejpeg($im, $filename);
		}
		imagedestroy($im);
		return "photos/" . $filename_r;
	}

<?php
include "class/utils.class.php";
$c=new utils;
$c->connect('199.91.65.82','cocojs');
$total=0;
$unique=0;
$j=explode('|',$_GET[uri]);
$code='';
for ($k=0;$k<count($j);$k++) {
	$cd=build($j[$k]);
	$code=$code . $cd;
}
echo $total . "@@@@" . $unique . "@@@@" . $code;

function build($uri) {
	$st='';
	global $unique,$total;
	$js=file_get_contents($uri);
	$aur1=array('function(','function (','=function','= function','<','>');
	$aur2=array('functi@n(','functi@n (','=functi@n','= functi@n','&lt;','&gt;');
	$aur3=array('function(','function (','=function','= function');
	$aur4=array('functi@n(','functi@n (','=functi@n','= functi@n');
	$au=explode("function ",str_replace($aur1,$aur2,$js));
	$an=array_unique($au);
	$total=$total+count($au);
	$unique=$unique+count($an);
	for ($i=1;$i<count($au)-1;$i++) {
		$ctr=0; $pp=0;
		$str=str_replace($aur2,$aur1,$au[$i]);
		$str="\t\t" . str_replace($aur4,$aur3,$au[$i]);
		$strln=strlen($str);
		for ($j=0; $j<$strln; $j++) {
				if (substr($str,$j,1)=='{') {
					$ctr++;
					$pp++;
				}
				if (substr($str,$j,1)=='}') {
					$ctr--;
				}
				if ($pp>0) {
					if ($ctr==0) {
						$str=substr($str,0,$j+1);
						break;
					}
				}
		}
		$st = $st . $str . "\r\n\r\n@@@@\r\n\r\n";
		$found="";
	}
	return $st;
}

<?
	include "class/utils.class.php";
	$c=new utils;
    include 'vendor/autoload.php';
	parse_str(http_build_query($_GET));

	if (!$_COOKIE['key_uri']) {
		setCookie("host",$host,time()*1+3600,"/");
		setCookie("password",$password,time()*1+3600,"/");
		setCookie("username",$username,time()*1+3600,"/");
	} else {
		$host=$_COOKIE[host];
		$password=$_COOKIE[password];
		$username=$_COOKIE[username];
	}
	
    $sftp = new \phpseclib\Net\SFTP($host);
	if (!$sftp->login($username, $password)) {
		exit('Login Failed');
	}
	$files=$sftp->nlist($path);
	$files=$sftp->rawlist($path);
	$f="";
	$header = "";
	foreach ($files as $file) {
		if (!stristr($file,'.')) {
			$path=str_replace("/$file","",$path);
			$str .= "<a href='ssh2.php?path=".$path."$file'><div class='col-xs-1' style='padding:10px;text-align:center;margin:5px;background:url(assets/images/folder.png) no-repeat center;background-size:70% 70%;width:85px;height:70px;font-size:0.9em;font-family:Open Sans;font-weight:bolder;padding-top:30px;text-shadow:1px 1px 1px #fff'>$file</div></a>";		
			$f .= $file;
		}
	}
	if (!$comp_orig) {
		if ($path=="") {
			$comp_orig=$f;
			if ($_COOKIE["last"]=='') setCookie("last", $f, 0, "/");
		}
	}
	$lx="0px";
	$t=0;
	for ($i=0; $i<count($px); $i++) {
		if ($t==6) {
			$t=1;
		} else {
			$t=$t+1;
		}
		if ($px[$i]) {
			$tag="tag" . $t;
			$header .= "<div class='col-xs-1' style='padding:10px;text-align:center;margin:2px;background:url(assets/images/$tag.png) no-repeat center;background-size:75% 75%;width:140px;height:40px;padding:10px;font-size:1em;font-family:Open Sans;font-weight:bolder;text-shadow:1px 1px 1px #fff;margin:0;position:absolute;left:$lx'>" . $px[$i] . "</div>";
			$left=$left*1+ 70;
			$lx=$left . "px";
		}
	}
?>
<!DOCTYPE html>
<html lang="en-US">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
		<meta content="telephone=no" name="format-detection">
		<link rel="stylesheet" type="text/css" href="prism.css" media="all" />
		<link href="assets/css/font-awesome.css" rel="stylesheet" >
		<link href="assets/css/jquery-confirm.css" rel="stylesheet" />
		<link href="assets/css/shadows.css" rel="stylesheet" />
		<link href="assets/css/jquery-ui.css" rel="stylesheet" />
		<link href="assets/css/bootstrap.css" rel="stylesheet">
		<link href="dz/dropzone.min.css" rel="stylesheet">
		<link href="assets/css/animate.css" rel="stylesheet">
		<link href='https://fonts.googleapis.com/css?family=Lato:300,400,700,900,300italic,400italic,700italic,900italic|Open+Sans:300' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
		<style>
			table,tr,td {
				border:none!Important;background:none!Important;box-shadow:none!Important;
			}
			table,td, p{
				font-family:Open Sans;
				font-weight:300;
			}
			h1,h2,h3,h4 {
				font-family:Open Sans!Important;;
				font-weight:300!Important;
				font-size:1.5em;
			}
			div, input{
				color:#000;
				font-family:Open Sans!Important;;
			}
		</style>
	</head>
	<body style=";overflow-x:hidden">
		<div class="container" style="background:white;background-size:cover;width:100%;height:auto;padding:5px;margin:auto;margin-top:10px;overflow-x:hidden">
			<div class="row">
				<div class="col-md-12">
					<input type="button" value=" . " onclick="location.href='ssh2.php'">
					<input type="button" value=" .. " onclick="location.href='ssh2.php?path=<?=$last;?>'">
					<input type="text" placeholder=" Enter Path ">
					<input type="button" value=" Go ">
				</div>
			</div>
		</div>
		<div class="container" style="background:aliceblue;background-size:cover;width:100%;height:auto;padding:15px;margin:auto;margin-top:10px;overflow-x:hidden">
				<div class="row">
					<div class="col-md-12 text-center">
						<?=$header;?>
					</div>
				</div>
				<br><br>
				<div class="row">
				<?
					if (($_COOKIE[last]==$f) && ($path)) {
				?>
					<div class="row">
						<div class="col-md-12 text-center">
							<br><h2>Error Retreiving folder contents.</h2>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 text-center">
							<input type="button" value=" Go Back " onclick="location.href='ssh2.php?path=<?=$last;?>'"><br><br>
						</div>
					</div>
				<? } else { ?>
					<? if (!$str) { ?>
						<div class="row">
							<div class="col-md-12 text-center">
								<br><h2>NO SUB FOLDERS FOUND</h2>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12 text-center">
								<input type="button" value=" Go Back " onclick="location.href='ssh2.php?path=<?=$last;?>'"><br><br>
							</div>
						</div>
					<? } else { ?>
						<?=$str;?>
					<? } ?>
				<? } ?>
			</div>
		</div>
	</body>
</html>
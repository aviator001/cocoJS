<?php ob_start(); ?>
<div id="showPic"  ondrop='drop(event)' ondragover='allowDrop(event)' style="position:absolute;text-align:center;margin:auto;top:200px;bottom:0;left:0;right:0;width:100%;height:100%">
	<?	
		include "../inc/utils.class.php";
		$c=new utils;
		$c->connect();
		$mid=$_REQUEST['member_id'];
		$auth=$_REQUEST['auth'];
		$seq=$_REQUEST[seq];
		$arr=array('mask1','mask2','mask3','mask4','mask5','mask6','mask7','mask8','mask9','mask10','mask11','mask11');
		$mask = "mb".rand(1,6).'.png';
		$display=($mid==$auth) ? "":"none";
		if ($seq) $add_seq_qry = " and id>$seq ";
		$q = $c->query("select id, filename_1 as photo, description_1, seq from dt_photos where member_id=$mid $add_seq_qry order by id asc limit 1");
		$r = $c->query("select login, cc_city, cc_state, age from dt_members where id=$mid order by id asc");
		if (count($q)>0) {
			$str='<div class="row">';
			for ($i = 0; $i<count($q); $i++) {
				$qfilename_1='"'.$q[$i][photo].'"';
				$fid="'".$q[$i][photo]."'";
				$qpreview_id='"preview_'.$q[$i][id].'"';
				$pid = $q[$i][id];
				$edit_url = "location.href='page.php?page=edit_photo&id=" . $q[$i][id] . "'";
				$album_url = "location.href='page.php?page=view_album&member_id=" . $mid . "'";
				if ($mid==$auth) $album_url = "location.href='page.php?page=edit_album&id=" . $q[$i][id] . "'";
				$profile_url = "location.href='page.php?page=view_profile&member_id=" . $mid . "'";
				$search_url = "location.href='page.php?page=browse&start=" . $_REQUEST[x_start] . "'";
				$ref='"page.php?page=view_photo&member_id='.$mid.'&seq='.$pid.'"';
				$view='"page.php?page=view_album&member_id='.$mid.'"';
				$style1="'display:$display;text-align:center;width:400px;height:35px;text-shadow:$none;padding-top:5px;padding-left:7px;font-size:18px;color:#333;opacity:1;background:#f0f0f0'";
				$style="'display:$display;text-align:center;width:400pxpx;height:35px;text-shadow:$none;padding-top:5px;padding-left:7px;font-size:18px;color:#333;opacity:1;background:#f0f0f0'";
				$style2="'display:$display;text-align:center;width:400pxpx;height:35px;text-shadow:$none;padding-top:5px;padding-left:7px;font-size:18px;color:#333;opacity:1'";
				$str .= "<div align=center class='col-md-3 www_box5' style='background:url(assets/images/mb3.png);margin-top:-30px;margin-left:auto;margin-right:auto;width:400px;padding:10px;padding-top:25px;height:auto;text-align:center;position:absolute;left:0;right:0;font-weight:300;color:#000;font-size:24px;text-shadow:0px 0px 1px #fff;opacity:1;font-family:Open Sans Condensed; font-size:40px;opacity:1'><font color=#000>".strtoupper($r[$i][login]). "<br><font style='font-size:24px;color:#000'>" . $r[$i][cc_city] . ", " . $c->getStateCode($r[$i][cc_state]). "</div>";
				$str .= "<div style='left:0;right:0;margin:auto;width:400px;max-width:400px;margin-top:60px'>";
				$str .= "<div><img onclick='show_photo1(".$qfilename_1.")' id='preview' draggable='true' ondragstart='drag(event)' title='".$q[$i][seq]."' src='photos/".$q[$i][photo]."' style='position:absolute;cursor:hand;cursor:pointer;max-width:400px;width:400px; border:0px solid #e0e0e0; border-bottom:0px solid #e0e0e0; box-shadow: 2px 5px 15px rgba(0,0,0,1)'></div>";
				if ($_GET[member_id]==$_COOKIE[mid]) {
					$str .= "<img onclick='save_photo_preview(".$qfilename_1.")' id='preview_pic' title='preview ".$q[$i][seq]."' src='photos/".$q[$i][photo]."' style='position:absolute;cursor:hand;cursor:pointer;max-width:247px;width:400px;max-width:400px'>";
				}
				$str .= "</div>";
				$str .= "<div id='controls' style='margin-top:40px;position:absolute;bottom:200px;z-index:9999999;opacity:0.7;width:400px;left:0;right:0;margin:auto;background:#e0e0e0;'>";
				$str .= "<span style='text-align:left;width:80px;height:40px;background:#e0e0e0;color:#000;text-shadow:0px 0px 1px #fff' onmouseout='this.style.textShadow=sw;this.style.background=offwhite' onmouseover='this.style.textShadow=none;this.style.background=blue' class='btn btn-danger' style='width:100px;background:#e0e0e0' onclick='$del_photo'><i class='fa fa-arrow-left' style='font-size:18px;margin-left:-10px'></i> <span style='font-size:18px' onclick='location.href=$ref'> PREV </span></span><span class='btn btn-danger' style='width:80px;height:40px;background:#e0e0e0' onmouseout='this.style.background=offwhite;this.style.color=red' onmouseover='this.style.background=red;this.style.color=white' onclick='location.href=$view'> <span style='color:#000;font-size:18px'>BACK</span></span><span class='btn btn-danger' style='width:75px;height:40px;background:#e0e0e0;color:#000;text-shadow:1px 0px 0px #fff' onmouseout='this.style.textShadow=sw;this.style.background=offwhite' onmouseover='this.style.textShadow=none;this.style.background=blue' onclick='location.href=$ref'><span style='margin-left:-10px;font-size:18px'> NEXT </span> <i style='margin-left:10px;font-size:18px' class='fa fa-arrow-right'></i> </span><br>";
				if ($mid==$auth) {
					$str .= '
					<div id="controls" style="font-family:Open Sans Condensed;font-size:18px;color:#333;cursor:hand;cursor:pointer;">
						<span class="btn btn-danger" id="center" style='.$style1.' onclick="show_edit_toolbar()"><i class="fa fa-camera"></i><b>PHOTO</b> TOOLS: Click Here to <b>Edit</b> this Image!</span> 
					';
					$str .= '<span id="edit_photo" style="display:none">
							<span class="btn btn-warning" id="center" style='.$style2.' onclick="photo_filter(1,'.$fid.')"><i class="fa fa-rotate-left"></i>Rotate Left 90</span> 
							<span class="btn btn-danger" id="center" style='.$style2.' onclick="photo_filter(14,'.$fid.')"><i class="fa fa-cut"></i><b>SAVE</span> 
							<span class="btn btn-warning" id="center" style='.$style2.' onclick="photo_filter(2,'.$fid.')"><i class="fa fa-rotate-right"></i>Rotate Right 90</span> 
							<span class="btn btn-danger" id="center" style='.$style.' onclick="photo_filter(3,'.$fid.')"><i class="fa fa-cut"></i>Negative</span> 
							<span class="btn btn-danger" id="center" style='.$style.' onclick="photo_filter(4,'.$fid.')"><i class="fa fa-cut"></i>Grey Scale</span> 
							<span class="btn btn-danger" id="center" style='.$style.' onclick="photo_filter(5,'.$fid.')"><i class="fa fa-cut"></i>Blues Only</span>  
							<span class="btn btn-danger" id="center" style='.$style.' onclick="photo_filter(6,'.$fid.')"><i class="fa fa-cut"></i>Filter: Edge Detect</span> 
							<span class="btn btn-danger" id="center" style='.$style.' onclick="photo_filter(7,'.$fid.')"><i class="fa fa-cut"></i>Filter: Blue</span> 
							<span class="btn btn-danger" id="center" style='.$style.' onclick="photo_filter(8,'.$fid.')"><i class="fa fa-cut"></i>Filter: Green</span> 
							<span class="btn btn-danger" id="center" style='.$style.' onclick="photo_filter(9,'.$fid.')"><i class="fa fa-cut"></i>+ Brightness</span> 
							<span class="btn btn-danger" id="center" style='.$style.' onclick="photo_filter(10,'.$fid.')"><i class="fa fa-cut"></i>- Brightness</span> 
							<span class="btn btn-danger" id="center" style='.$style.' onclick="photo_filter(11,'.$fid.')"><i class="fa fa-cut"></i>+ Contrast</span> 
							<span class="btn btn-danger" id="center" style='.$style.' onclick="photo_filter(12,'.$fid.')"><i class="fa fa-cut"></i>- Contrast</span> 
						</span>
					';
				} else {
					$str .= '<div id="controls" style="font-family:Open Sans Condensed;font-size:18px;color:#333;cursor:hand;cursor:pointer;">';
				}
 				$str .= '<span class="btn btn-warning" id="center" style="text-align:left;width:120px;height:35px;text-shadow:$none;padding-top:5px;padding-left:2px;font-size:18px;color:#333;opacity:1" onclick="'.$album_url.'"><i class="fa fa-arrow-circle-o-left"></i></i>User Album</span> 
						<span class="btn btn-warning" id="center" style="text-align:left;width:160px;height:35px;text-shadow:$none;padding-top:5px;padding-left:2px;font-size:18px;color:#333;opacity:1;margin-left:-4px" onclick="'.$search_url.'"><i class="fa fa-arrow-circle-o-left"></i><span style="margin-left:-4px">Back to Search Results</span></span> 
						<span class="btn btn-warning" id="center" style="text-align:left;width:121px;height:35px;text-shadow:$none;padding-top:5px;padding-left:2px;font-size:18px;color:#333;opacity:1;margin-left:-4px" onclick="'.$profile_url.'"><i class="fa fa-arrow-circle-o-left"></i></i>User Profile</span>
				</div></div>';
			}
		} else {
				?>
					<script>
						location.href="page.php?page=view_album&member_id=<?=$mid;?>"
					</script>
				<?
				}
		$str .='</div>';
		echo $str;
	
?>

<script>
var offwhite='#e0e0e0'
var none = 'none'
var sw='1px 0px 0px #fff'
var blue="#0093D9";
function allowDrop(ev) {
    ev.preventDefault();
}

function drag(ev) {
    ev.dataTransfer.setData("text", ev.target.id);
}

function drop(ev) {
    ev.preventDefault();
    var data = ev.dataTransfer.getData("text");
	location.href='page.php?page=view_photo&member_id=<?=$mid;?>&seq=<?=$pid;?>'
}

function show_photo1(obj){
	var md = document.getElementById('modal')
	md.style.display='block'
	md.style.zIndex='9999'
	var oImg = document.createElement('img')
	oImg.onError='photos/a000.png'
	oImg.src='photos/'+obj
	oImg.className='www_box5'
	oImg.style.cssText='left:40%;right:40%;margin:auto;position:absolute;z-index:9001;max-width:400px;top:100px'
	//oImg.addEventListener("click", click_pic(false), false)
	md.appendChild(oImg)
}

function click_pic(e) {
	var md = document.getElementById('modal')
	md.click()
}
function show_edit_toolbar() {
	var tb = document.getElementById('edit_photo')
	var sc = document.getElementById('wrapper')
	var ct = document.getElementById('controls')
	sc.style.height='800px'
	ct.style.bottom='100px'
	if (tb.style.display=='block') tb.style.display='none';
		else tb.style.display='block'
}

function photo_filter(obj,f) {
	jwait('Setting Default...')
	var url = 'inc/x_photo_filters.php?filter=' + obj + '&filename=' + f
	var request = $.ajax({
		url: url,
		type: "GET",
		dataType: "html",
		cache: false,
		success: function(msg) {
			jhide()
			document.getElementById('preview').src=msg
		}
	})		
}
function set_default(my_mid, my_pic) {
	var url = 'inc/x_default.php?mid=' + my_mid + '&f=' + my_pic
	jwait('Setting Default...')
	var request = $.ajax({
		url: url,
		type: "GET",
		dataType: "html",
		cache: false,
		success: function(msg) {
			jalert('Done')
			jhide() 
			location.href='page.php?page=album'
		}
	})		
}
</script>
<?php ob_flush(); ?>
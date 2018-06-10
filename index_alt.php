
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" type="text/css" href="prism.css" media="all" />

    <title>Cover Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <!-- Custom styles for this template -->
<script src="prism.js"></script>

	<style>
.tab-wrap {
  transition: 0.9s box-shadow ease;
  border-radius: 6px;
  max-width: 100%;
  display: flex;
  flex-wrap: wrap;
  position: relative;
  list-style: none;
  background-color: #fff;
  margin: 40px 0;
  box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24);
}
.tab-wrap:hover {
  box-shadow: 0 12px 23px rgba(0, 0, 0, 0.23), 0 10px 10px rgba(0, 0, 0, 0.19);
}
input[type=text] {
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
}
input[type=button] {
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
}
.tab {
  display: none;
}
.tab:checked:nth-of-type(1) ~ .tab__content:nth-of-type(1) {
  opacity: 1;
  transition: 0.5s opacity ease-in, 0.8s -webkit-transform ease;
  transition: 0.5s opacity ease-in, 0.8s transform ease;
  transition: 0.5s opacity ease-in, 0.8s transform ease, 0.8s -webkit-transform ease;
  position: relative;
  top: 0;
  z-index: 100;
  -webkit-transform: translateY(0px);
          transform: translateY(0px);
  text-shadow: 0 0 0;
}
.tab:checked:nth-of-type(2) ~ .tab__content:nth-of-type(2) {
  opacity: 1;
  transition: 0.5s opacity ease-in, 0.8s -webkit-transform ease;
  transition: 0.5s opacity ease-in, 0.8s transform ease;
  transition: 0.5s opacity ease-in, 0.8s transform ease, 0.8s -webkit-transform ease;
  position: relative;
  top: 0;
  z-index: 100;
  -webkit-transform: translateY(0px);
          transform: translateY(0px);
  text-shadow: 0 0 0;
}
.tab:checked:nth-of-type(3) ~ .tab__content:nth-of-type(3) {
  opacity: 1;
  transition: 0.5s opacity ease-in, 0.8s -webkit-transform ease;
  transition: 0.5s opacity ease-in, 0.8s transform ease;
  transition: 0.5s opacity ease-in, 0.8s transform ease, 0.8s -webkit-transform ease;
  position: relative;
  top: 0;
  z-index: 100;
  -webkit-transform: translateY(0px);
          transform: translateY(0px);
  text-shadow: 0 0 0;
}
.tab:checked:nth-of-type(4) ~ .tab__content:nth-of-type(4) {
  opacity: 1;
  transition: 0.5s opacity ease-in, 0.8s -webkit-transform ease;
  transition: 0.5s opacity ease-in, 0.8s transform ease;
  transition: 0.5s opacity ease-in, 0.8s transform ease, 0.8s -webkit-transform ease;
  position: relative;
  top: 0;
  z-index: 100;
  -webkit-transform: translateY(0px);
          transform: translateY(0px);
  text-shadow: 0 0 0;
}
.tab:checked:nth-of-type(5) ~ .tab__content:nth-of-type(5) {
  opacity: 1;
  transition: 0.5s opacity ease-in, 0.8s -webkit-transform ease;
  transition: 0.5s opacity ease-in, 0.8s transform ease;
  transition: 0.5s opacity ease-in, 0.8s transform ease, 0.8s -webkit-transform ease;
  position: relative;
  top: 0;
  z-index: 100;
  -webkit-transform: translateY(0px);
          transform: translateY(0px);
  text-shadow: 0 0 0;
}
.tab:first-of-type:not(:last-of-type) + label {
  border-top-right-radius: 0;
  border-bottom-right-radius: 0;
}
.tab:not(:first-of-type):not(:last-of-type) + label {
  border-radius: 0;
}
.tab:last-of-type:not(:first-of-type) + label {
  border-top-left-radius: 0;
  border-bottom-left-radius: 0;
}
.tab:checked + label {
  background-color: #fff;
  box-shadow: 0 -1px 0 #fff inset;
  cursor: default;
}
.tab:checked + label:hover {
  box-shadow: 0 -1px 0 #fff inset;
  background-color: #fff;
}
.tab + label {
  box-shadow: 0 -1px 0 #eee inset;
  border-radius: 6px 6px 0 0;
  cursor: pointer;
  display: block;
  text-decoration: none;
  color: #333;
  flex-grow: 5;
  text-align: center;
  background-color: #f2f2f2;
  -webkit-user-select: none;
     -moz-user-select: none;
      -ms-user-select: none;
          user-select: none;
  text-align: center;
  transition: 0.3s background-color ease, 0.3s box-shadow ease;
  height: 100px;
  box-sizing: border-box;
  padding: 15px;
}
.tab + label:hover {
  background-color: gold;
  box-shadow: 0 1px 0 #f4f4f4 inset;
}
.tab__content {
  padding: 10px 25px;
  background-color: transparent;
  position: absolute;
  width: 100%;
  z-index: -1;
  opacity: 0;
  left: 0;
  -webkit-transform: translateY(-3px);
          transform: translateY(-3px);
  border-radius: 6px;
}

/* boring stuff */
body {
  font-family: 'Helvetica', sans-serif;
  background-color: #e7e7e7;
  color: #777;
  padding: 30px 0;
  font-weight: 300;
}

.container {
  margin: 0 auto;
  display: block;
  max-width: 800px;
}
.container > *:not(.tab-wrap) {
  padding: 0 80px;
}

h1,
h2 {
  margin: 0;
  color: #444;
  text-align: center;
  font-weight: 400;
}

h2 {
  font-size: 1em;
  margin-bottom: 30px;
}

h3 {
  font-weight: 400;
}

p {
  line-height: 1.6;
  margin-bottom: 20px;
}
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
	</style>
    <link rel='stylesheet' id='redux-google-fonts-designr-css' href='http://fonts.googleapis.com/css?family=Montserrat%3A400%2C700%7CWork+Sans%3A400%7COpen+Sans&#038;subset=latin&#038;ver=1507386938' type='text/css' media='all' />
	<link href="assets/css/shadows.css" rel="stylesheet" >
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
	<link href="assets/css/jquery-confirm.css" rel="stylesheet" />
	<link href="dz/dropzone.min.css" rel="stylesheet">
	<link href="assets/css/animate.css" rel="stylesheet">
	<link href='https://fonts.googleapis.com/css?family=Lato:300,400,700,900,300italic,400italic,700italic,900italic|Open+Sans:300' rel='stylesheet' type='text/css'>
	
	</head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  <body class="text-center">
	<div class="container" style="width:1050px">

    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
				<span><img src="assets/images/logococo.png" style="height:160px"></span>
				<h1 class="elementor-heading-title elementor-size-default"><span style="color:maroon">Co.Co.</span><span style="color:grey">JS.</span></h1>
				<i><p class="elementor-icon-box-description" style="color:silver">&copy;&reg;The Co.Co.JS Company&trade;</p></i>
	
  <div class="tab-wrap">
    <input type="radio" id="tab1" name="tabGroup1" class="tab" checked>
    <label for="tab1"><h3>Introduction</h3></label>
    <div class="tab__content">
											<table style="width:100%;border:none;background:none;box-shadow:none;text-align:center;">
												<tr>
													<td>
														<img style="width:100px" src="assets/images/cap01.png"><div style="text-align:center">FIND & FIX DUPLICATE FUNCTIONS</div>
												
													</td>
													<td>
														<img style="width:100px" src="assets/images/cap02.png"><div>AUTO OPTIMIZE ALL YOUR JS LIBRARIES</div>

													</td>
													<td>
														<img style="width:100px" src="assets/images/cap03.png"><div>WWW COLLABORATE AND SHARE at FUNCTION LEVEL</div>
													</td>
													<td>
														<img style="width:100px" src="assets/images/cap04.png"><div>CREATE REAL TIME LOGICAL JS LIBRARIES</div>
													</td>
												</TR>
												<TR>
													<td>
														<img style="width:100px" src="assets/images/cap05.png"><div>COLLABORATE AND SHARE at FUNCTION LEVEL</div>
													</td>
													<td>
														<img style="width:100px" src="assets/images/cap06.png"><div>AUTO SCAN TO IMPORT FUNCTIONS TO COCOSPHERE</div>
													</td>
													<td>
														<img style="width:100px" src="assets/images/cap07.png"><div>NEVER RE-WRITE FUNCTION MORE THAN ONCE</div>
													</td>
													<td>
														<img style="width:100px" src="assets/images/cap08.png"><div>SIGNIFICANTLY TRIM FAT - INCLUDE ONLY WHAT YOU NEED</div>
													</td>
												</tr>
											</table>
    </div>

 
  </div>

  <div class="demo-section">
    <p>Etiam ut purus enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Morbi mattis ullamcorper velit. Pellentesque posuere. Etiam ut purus mattis mauris sodales aliquam. Praesent nec nisl a purus blandit viverra.</p>

    <p>Praesent nonummy mi in odio. Nullam accumsan lorem in dui. Vestibulum turpis sem, aliquet eget, lobortis pellentesque, rutrum eu, nisl. Nullam accumsan lorem in dui. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.</p>
  </div>

</div>	
  <h1>CSS Tabs</h1> 
<h2>Transitioning Between Variable Heights</h2>



  <div class="demo-section">
    <p>Praesent nonummy mi in odio. Nullam accumsan lorem in dui. Vestibulum turpis sem, aliquet eget, lobortis pellentesque, rutrum eu, nisl. Nullam accumsan lorem in dui. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.</p>
  </div>

  <div class="demo-section">
    <p>Donec interdum, metus et hendrerit aliquet, dolor diam sagittis ligula, eget egestas libero turpis vel mi. Proin viverra, ligula sit amet ultrices semper, ligula arcu tristique sapien, a accumsan nisi mauris ac eros. Phasellus volutpat, metus eget
      egestas mollis, lacus lacus blandit dui, id egestas quam mauris ut lacus. Praesent nec nisl a purus blandit viverra. Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>

    <p>In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Morbi mattis ullamcorper velit. Pellentesque posuere. Etiam ut purus mattis mauris sodales aliquam. Praesent nec nisl a purus blandit viverra.</p>
  </div>

  <div class="tab-wrap">
    <input type="radio" id="tab4" name="tabGroup2" class="tab" checked>
    <label id="t1" onclick="set(this)" for="tab4"><h3><i style="color:#666" class="fa fa-globe"></i> <div style="padding:10px;font-size:0.8em">SCAN</div></h3></label>

    <input type="radio" id="tab5" name="tabGroup2" class="tab">
    <label id="t2" onclick="set(this)" for="tab5"><h3><i style="color:#666" class="fa fa-hdd"></i> <div style="padding:10px;font-size:0.8em">BROWSE</div></h3></label>

    <input type="radio" id="tab6" name="tabGroup2" class="tab">
    <label id="t3" onclick="set(this)" for="tab6"><h3><i style="color:#666" class="fa fa-sitemap"></i> <div style="padding:10px;font-size:0.8em">FTP</div></h3></label>

    <input type="radio" id="tab7" name="tabGroup2" class="tab">
    <label id="t4" onclick="set(this)" for="tab7"><h3><i style="color:#666" class="fa fa-desktop"></i> <div style="padding:10px;font-size:0.8em">SSH</div></h3></label>

    <input type="radio" id="tab8" name="tabGroup2" class="tab">
    <label id="t5" onclick="set(this)" for="tab8"><h3><i style="color:#666" class="fa fa-list-alt"></i> <div style="padding:10px;font-size:0.8em">PASTE</div></h3></label>

    <div id="d1" class="tab__content">
      <h3 onclick="set(this)">SCAN</h3>
	  <div id="r1">
	  <p>
		Enter a public URI to scan for JavaScript. You may enter an absolute URL or a direct link to any type of file. All file types scanned for extraction. Ex: .html .php .js .aspx .txt ... Examples:
		<p>
			<li>http://example.com</li>
			<li>http://example.com/home.php</li>
			<li>http://example.com/assets/js/framework.js</li>
			<li>http://example.com/files</li>
		</p>
	  </p>
      <p>
			<div>Click SCAN to start extracting all javascript functions</div>
			<input style="box-shadow:inset 0 1px 10px 0 rgba(67,80,98,.24), inset 0 2px 4px 0 rgba(67,80,98,.4);margin-top:20px;padding:5px;width:350px; height:50.5px;border-radius:0;border:0 solid silver" type="text" id="uri"><input class="www_card_small"style="font-size:24px;width:150px;height:50px;padding:10px;border:0px solid silver;border-radius:4px;color:orange"  onclick="remote_script()" type="button" value="SCAN" style="height:50px">
	  </p>
	  </div>
		<div id="res1" style="display:none">
			<div style="font-family:Open Sans;font-weight:300;font-size:44px">RESULTS </div>
			<input onclick="rescan()" type="button" style="font-size:18px;width:150px;height:50px;padding:10px;border:0px solid silver;border-radius:4px;color:#333;background:lavenderblush" value=" RESET "/>
			<div id="data1" style="width:100%"></div>
		</div>	  
    </div>

    <div id="d2" class="tab__content">
      <h3>BROWSE</h3>
		<div id="r2">
			<p>Praesent nonummy mi in odio. Nullam accumsan lorem in dui. Vestibulum turpis sem, aliquet eget, lobortis pellentesque, rutrum eu, nisl. Nullam accumsan lorem in dui. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.</p>
			<div style="font-family:Open Sans;font-weight:300;font-size:44px">BROWSE LOCALLY </div>
			<div>All file types scanned for extraction. Ex: .html .php .js .aspx .txt ...</div>
		</div>
		<div id="frmHolder">
			<form style="width:100%;max-width:650px;border:none;display:" id="dz" action="upload.php"></form>
		</div>
		<div id="attachments" style="display:none" class="col-md-12" style="margin-top:10px">
			<div id="pbar_holder">
				<div id="pbar" style="background:url(assets/images/bar_orange.png);width:0px;height:50px"></div><span id="pc"></span>
			</div>
		</div>		
		<div id="res2" style="display:none">
			<div style="font-family:Open Sans;font-weight:300;font-size:44px">RESULTS </div>
			<div id="data2" style="width:100%"></div>
		</div>
	</div>

    <div class="tab__content">
      <h3>FTP</h3>
      <p>Praesent nonummy mi in odio. Nullam accumsan lorem in dui. Vestibulum turpis sem, aliquet eget, lobortis pellentesque, rutrum eu, nisl. Nullam accumsan lorem in dui. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.</p>
    </div>

    <div class="tab__content">
      <h3>SSH</h3>
      <p>Praesent nonummy mi in odio.</p>
    </div>

    <div class="tab__content">
      <h3>PASTE</h3>
      <p>Praesent nonummy mi in odio. Nullam accumsan lorem in dui. Vestibulum turpis sem, aliquet eget, lobortis pellentesque, rutrum.</p>
    </div></div></div>

<div id="jsFns" class="text-center" style="font-size:0.8em!Important;padding:20px;margin:auto;max-width:1500px;width:100%"></div>												

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
	<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
	<script src="assets/js/jquery-ui.js"></script>
	<script src="assets/js/common.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/jquery-confirm.min.js"></script>
	<script src="dz/dropzone.min.js"></script>

<script>
var lastElm
var ctr=0, mc=0, u='',last_total=0,unique_total=0,duplicates=0
	var bgx=["whitesmoke","aliceblue"]
	var uri
	var unique=''
	var fc=0
	var uc=0
	function rescan() {
		document.all.res1.style.display='none';
		document.all.r1.style.display='block'
	}
	function getUniques() {
		unique='unique'
		remote_script()
	}
	function getUniquesRemote() {
		unique='unique'
		remote_script2()
	}
	function remote_script(n) {
		setCookie('user','<?=$id;?>')
		if (!n) n=1
		mc=0
		unique_total=0
		if (!uri) uri=$$('uri').value
		var div='jsFns'
		if (unique=='unique') u='&unique=1'
		console.log('parseJS.php?uri='+uri+u+'&user=<?=$id;?>')
		var request = $.ajax({
			url: 'parseJS.php?uri='+uri+u, 
			type: "GET",
			dataType: "html",
			cache: false,
			success: function(msg) {
				$$(div).innerHTML=''
				if (msg!=='') {
					var fns=msg.split('@@@@')
					console.log(msg)
					fc=fns[0]*1
					uc=fns[1]*1
					console.log(fc)
					for (var i=2;i<fns.length;i++) {
						var dv=document.createElement('div')
						dv.style.fontSize='1.3em!Important;'
						var fnsName=fns[i].split('(')[0].trim()
						dv.innerHTML='<div style="background:;font-family:Open Sans!Important;font-weight:300!Important;margin-top:10px;padding:5px;font-size:20px;width:100%;height:50px;" class=""><span class="" style="position:absolute;margin-top:10px;padding:5px;color:#000;font-size:20px;font-weight:300;color:silver"><b>' + (mc+1) + '.  <b style="color:orange">FUNCTION</b>: <name style="color:#333">'+fnsName+'</name></span><span style="position:absolute;right:10px"><i style="margin:10px" class="fa fa-edit"></i><i style="margin:10px" class="fa fa-trash"></i><i style="margin:10px" class="fa fa-save"></i><i style="margin:10px;cursor:pointer" onclick="iselect()" id="cart_'+fnsName+'" class="fa fa-plus-circle"></i></span><img src="assets/images/knob4.png" style="position:absolute;margin-top:30px;right:10px;width:75px"></div>'
						dv.innerHTML+='<pre><code class="language-js  line-numbers" style="font-size:1.2em!Important;margin:10px">function ' + fns[i].trim()+'\t\t\n\n</code></pre>'
						dv.id='container_'+fnsName
						$$(div).appendChild(dv)
						mc++
					}
				}
				$('#r'+n).hide()
				$('#res'+n).show()
				$('#data'+n).html('<table style="border:0px solid white!Important;box-shadow:none!Important;width:100%"><tr style="background:#fff;border:none"><td style="width:50%;text-align:center;border:none;"><span style="background:none;padding:5px;width:50%;text-align:center;font-size:1.2em;font-family:Open Sans;font-weight:300;padding:10px;color:#000">ALL FUNCTIONS</span> <span style="font-size:1.2em;font-family:Open Sans;font-weight:300;padding:25px;color:#000"><b>'+fc+'</b></span> <span style="font-size:1.2em;font-family:Open Sans;font-weight:300;padding:10px;color:#000">DUPLICATES: </span> <b><span style="font-size:1.2em;font-family:Open Sans;font-weight:300;padding:10px;color:red">' + (fc*1-uc*1) + '</span></b></td></tr></table>')
				Prism.highlightAll();
			}
		})
	}
	function iselect(cid) {
		
	}
	function set(obj) {
		for (var i=1;i<=2;i++) {
			if (obj.id=='t'+i) 
			var ptr=i
			$$('t'+i).style.background=''
			$$('d'+i).style.display='none'
		}
		obj.style.background='aliceblue'
		$$('d'+ptr).style.display='block'
		if (ptr==2) show_attach()
	}
	
	
	Dropzone.autoDiscover=false
	var iErr=0, attach_id
	function getRandomInt(min, max) {
		return Math.floor(Math.random() * (max - min + 1)) + min;
	}
	
	var vb=''
	attach_id=guid()		

	function randomIntFromInterval(min,max) {
		return Math.floor(Math.random()*(max-min+1)+min);
	}
	var ims
	var usr_img=[]
	
	function guid(){
		j=16
		var op=''
		var arr=new Array('a','b','c','d','e','f','i','j','k','m','n','p','q','r','s','t','u','v','w','x','y','z',0,1,2,3,4,5,6,7,8,9,0,0,1,2,3,4,5,6,7,8,9,0)
		for (k=0;k<j;k++) {
			var inx=randomIntFromInterval(0,arr.length-1)
			op += arr[inx]
		}
		return op;
	}
	var files,uploads
	var myDropzone
	var abort
	var flz=[]
	function show_attach() {
		files=0
		uploads=0
		$$('dz').style.display='block'
		if ($$('attachments').style.display=='block') {
			$$('attachments').style.display='none'
			return false
		}
		$$('attachments').style.display='block'
		var url="upload.php"
		myDropzone = new Dropzone("form#dz", {
			url: url,
			maxFilesize: 1000000000
		});	
		myDropzone.on("addedfile", function(file) {
			// if ((file.type.indexOf('video')<0) && (file.type.indexOf('image')<0)) return false
			if (file.size>1000000000) {
				alert('too big')
				abort=true
				return false
			} else {
				abort=false
			}
			if (abort===true) return false
			files++
			uploads++
			flz.push(file.name)
		});
		
		myDropzone.on("totaluploadprogress", function(progress) {
			if ($$('pbar').style.display=='none') {
				$$('pbar').style.display='block'
				$$('pbar_holder').style.display='block'
				$$('pc').style.display='block'			
			}
			if (abort===true) return false
			$$('pbar').style.width=Math.round(progress,0)+'%'
			$$('pc').innerHTML=Math.round(progress,0) + '<b>%</b>'
		})
		
		myDropzone.on("complete", function(file) {
			files--
			if (files==0) {
				$$('dz').outerHTML=''
				$$('frmHolder').innerHTML=''
				var frm=document.createElement('form')
				frm.id='dz'
				frm.action='upload.php'
				frm.style.cssText='width:100%;max-width:650px;border:none;display:none;hright:50px;max-height:50px'
				frm.className="dropzone"
				$$('frmHolder').appendChild(frm)
				parse_files()
			}
			if (abort===true) return false
			$$('pbar').style.width='0px'
			$$('pbar').style.display='none'
			$$('pbar_holder').style.display='none'
			$$('pc').style.display='none'
		});
		$('#dz').click()
	}
	var uri=''
	function parse_files() {
		for (var k=0;k<flz.length;k++) {
			uri+='https://cocojs.com/uploads/'+flz[k] + '|'
		}
		remote_script(2)
	}
	
	function fs(el) {
		if (!el) el = document.documentElement, rfs = el.requestFullScreen || el.webkitRequestFullScreen || el.mozRequestFullScreen	|| el.msRequestFullScreen;
		if(typeof rfs!="undefined" && rfs){
			rfs.call(el);
		} else if (typeof window.ActiveXObject!="undefined") {
			var wscript = new ActiveXObject("WScript.Shell");
			if (wscript!=null) {
				wscript.SendKeys("{F11}");
			}
		}
	}
	var msgB=''
	function $$(ox) {
		return document.getElementById(ox)
	}
	
	
	function array_merge(array1,array2) {
		Array.prototype.push.apply(array1, array2);
		return array1
	}

</script>	
  </body>
</html>

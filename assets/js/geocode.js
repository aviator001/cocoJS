	navigator.geolocation.watchPosition(success, error);
	function success(position) {
		get_address(position.coords.latitude, position.coords.longitude)
		document.getElementById('address').style.display = 'none'
		set_my_location()
	}

	function error() {
		alert('error')
	}
	var mLat
	var mLng
	var pX
	var pY
	
      $(function(){
        $("#geocomplete").geocomplete({
          map: ".map_canvas",
          details: "form ",
          markerOptions: {
            draggable: true
          }
        });
        
        $("#geocomplete").bind("geocode:dragged", function(event, latLng){
		mLat = latLng.lat()
		mLng = latLng.lng()
          $("input[name=lat]").val(latLng.lat());
          $("input[name=lng]").val(latLng.lng());
			get_address(mLat,mLng)
			$("#reset").show();
        });
        
        $("#reset").click(function(){
          $("#geocomplete").geocomplete("resetMarker");
          $("#reset").hide();
          return false;
        });
        
        $("#find").click(function(){
          $("#geocomplete").trigger("geocode");
        }).click();
      });  

	function get_address(mX,mY) {
			document.getElementById('g1').style.display = 'block'
			var request = $.ajax({
			url: 'inc/x_address_from_latlng.php?a=' + mX + '&b=' + mY,
			type: "GET",
			dataType: "html",
			cache: false,
			success: function(msg) {
				document.getElementById('g1').style.display = 'none'
				document.getElementById('geocomplete').value = msg
				var m = msg.split(", ")
				m = 'New Location<br><br><b>' + m[0] + '</b><br>' + m[1].toUpperCase() + ' ' + m[2].toUpperCase() + '<br><br>'
				document.getElementById('address').style.display = 'block'
				document.getElementById('address').innerHTML = m
				document.getElementById('address').style.cssText =  'position:absolute;width:200px;height:auto;padding:5px;background:white;opacity:0.8;box-shadow:0px 0px 5px rgba(0,0,0,0.7);border-radius:6px;padding-top:5px'
				document.getElementById('address').style.left = 75 + 'px'
				document.getElementById('address').style.top =  75 + 'px'
				set_my_location()
			}
		})
	}
	
	function hide() {
		document.getElementById('vibrate').style.display='none'
	}
		var alt = 0
		var torture = 0
		var t
		var vcolor = 'red'
		var vtotal = 0
		var rv = 0
		function vibrate_red() {
				//if (rv < 256) document.getElementById('geocomplete').style.background = 'RGB(255,' + rv + ',' + rv + ')'
				rv=rv+10
			 if (alt==0) {
				document.getElementById('rled').style.background = vcolor
				alt=1
			} else {
				document.getElementById('rled').style.background = 'white'
				alt=0
			}
			if (torture < 15) {
				t = setTimeout('vibrate_red()', 10)
				torture++
			} else {
				vtotal++
				alt = 0
				torture = 0
				clearTimeout(t)
				document.getElementById('rled').style.background = 'none'
				if (vcolor == 'red') vcolor = 'white'
					else vcolor = 'red'
				if (vtotal < 2) vibrate_red()
					else vtotal = 999
			}
		}
		
		var alt = 0
		var torture = 0
		var t
		function vibrate_blue() {
			 if (alt==0) {
				document.getElementById('bled').style.background = 'red'
				alt=1
			} else {
				document.getElementById('bled').style.background = 'white'
				alt=0
			}
			if (torture < 15) {
				t = setTimeout('vibrate_red()', 10)
				torture++
			} else {
				torture = 0
				clearTimeout(t)
				document.getElementById('bled').style.background = 'white'
				vibrate_blue()
			}
		}
		var c_old
		function set_my_location()
		{
			var c = document.getElementById('geocomplete').value
			c = c.split(', ')
			var e = c[2]
			var d
				d = e.split(' ')
				var str = document.getElementById('lat').value + '|' + document.getElementById('lng').value + '|' + c[0] + '|' + c[1] + '|' + d[0] + '|' + d[1]
				setCookie("DELIVYR_COORDS", str, 30)
				vibrate_red()
				var r = '<table><tr><td colspan=3 class="condensed">SET LOCATION</td><td><img onclick="hide()" src="images/cross.png"></td></tr><tr><td colspan=4 class="condensed"><hr></td></tr><tr><td colspan=4 class="condensed">'
				document.getElementById('address').innerHTML = r + '<font color=#0093D9>Location Set to</font><br> <font style="font-size:16px;color:#000">' + document.getElementById('geocomplete').value + '</td></tr></table>'
			c_old=c
		}

	var tt
	var b = 1
	

		function setCookie(cname,cvalue,exdays)
		{
			var d = new Date();
			d.setTime(d.getTime()+(exdays*24*60*60*1000));
			var expires = "expires="+d.toGMTString();
			document.cookie = cname + "=" + cvalue + "; " + expires;
		 }

		function getCookie(cname)
		{
			var name = cname + "=";
			var ca = document.cookie.split(';');
			for(var i=0; i<ca.length; i++) 
			  {
			  var c = ca[i].trim();
			  if (c.indexOf(name)==0) return c.substring(name.length,c.length);
			}
			return "";
		}
		var x = 0
		var cra
		var noDelete = false
		var ev
		var stillTyping
		var lastTime = 0
		var stop_time
		var rt
		var func
		var arg


		function delCookie(cname)
		{
			var d = new Date();
			 d.setTime(d.getTime());
			var expires = "expires="+d.toGMTString();
			document.cookie = cname + "=" + "" + "; " + expires;
		 }

	function window_width()
	{
		if (document.body && document.body.offsetWidth) {
		 winW = document.body.offsetWidth;
		 winH = document.body.offsetHeight;
		}

		if (document.compatMode=='CSS1Compat' &&
			document.documentElement &&
			document.documentElement.offsetWidth ) {
			return document.documentElement.offsetWidth;
		}

		if (window.innerWidth && window.innerHeight) {
		 return window.innerWidth;
		}
	}

	function window_height()
	{
		if (document.body && document.body.offsetWidth) {
		 winH = document.body.offsetHeight;
		}

		if (document.compatMode=='CSS1Compat' &&
			document.documentElement &&
			document.documentElement.offsetWidth ) {
			winH = document.documentElement.offsetHeight;
			return winH
		}

		if (window.innerWidth && window.innerHeight) {
		 winH = window.innerHeight;
		 return winH;
		}
	}	

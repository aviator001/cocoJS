	(function(d, s, id) {
		var js, fjs = d.getElementsByTagName(s)[0];
		if (d.getElementById(id)) return;
		js = d.createElement(s); js.id = id;
		js.src = "https://connect.facebook.net/en_US/sdk.js";
		fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));

	window.fbAsyncInit = function() {
		FB.init({
			appId      : '340032229516154',
			cookie     : true,
			xfbml      : true,
			version    : 'v2.8'
		});
	};

	function myFacebookLogin() {
		checkLoginState()
		FB.login(function(){
		FB.api('/me', { locale: 'en_US', fields: 'name, email, birthday, gender' }, function(response) {
			console.log('Successful login for: ' + response.name);
			console.log(response);
  			loginReg(response.name,response.email,response.id,response.birthday,response.gender)
			});
		  }, {scope: 'public_profile,user_friends,email,user_birthday'});
	}

	function statusChangeCallback(response) {
		if (response.status === 'connected') {
			console.log("Connected")
			console.log(response);
		} else {
			console.log("Not Connected")
		}
	}

	function checkLoginState() {
		FB.getLoginStatus(function(response) {
		  statusChangeCallback(response);
		});
	}

	function loginReg(na, em, id, bd, gn) {
		var url="x_fb.php?email="+em+"&name="+na+"&id="+id+"&birthday="+bd+"&gender="+gn
		console.log(url)
		var request = $.ajax({
		url: url,
		type: "GET",
		dataType: "html",
		cache: false,
		success: function(msg) {
				console.log(msg)
				var r=JSON.parse(msg)
				console.log(r)
				if (r.result !== 'register') {
					showRegistration()
				} else {
					if (r.result=='login') {
						setCookie('logged','1')
						setCookie('mid',r.mid)
						setCookie('login',r.login)
						setCookie('mobile',r.mobile)
						setCookie('name',r.name)
						setCookie('location',r.location)
						setCookie('email',r.email)
						window.top.location.href='home.html'
					}
				}
			}
		
		})		
	}

	function logout() {
		wait(), delCookie("mid"), delCookie("action"), setTimeout(function() {
			delCookie("action"), setCookie("action", ""), del_all()
		}, 10), document.cookie.split(";").forEach(function(e) {
			document.cookie = e.replace(/^ +/, "").replace(/=.*/, "=;expires=" + (new Date).toUTCString() + ";path=/")
		}), delCookie("mid"), delCookie("action"), delCookie("login"), setTimeout(function() {
			delCookie("action"), setCookie("action", ""), del_all()
		}, 10), delall(), location.href = "index.php?logout", hide()
	}

	function formatCurrency(e) {
		if (!e) return "";
		var d,e=e+''
		var o=e+''
		if (e.indexOf('.')>-1){
			d=e.split('.')[1]
			e=e.split('.')[0]
		}
		var o = e.length,
			t = e.length,
			n = [],
			i = 0,
			r = "";
		if (o <= 3) return e+''+'.'+d;
		for (; e.length >= 3;) n[i] = e.substr(-3), i += 1, t -= 3, e = e.substr(0, t);
		e && (n[i] = e);
		for (var c = 0; c < n.length; c++) r = n[c] + "," + r;
		r = r.substr(0, r.length - 1);
		return r +''+'.'+d
	}
	function loginReg(na, em, id, bd, gn) {
		var url="x_fb.php?email="+em+"&name="+na+"&id="+id+"&birthday="+bd+"&gender="+gn
		console.log(url)
		var request = $.ajax({
		url: url,
		type: "GET",
		dataType: "html",
		cache: false,
		success: function(msg) {
				console.log(msg)
				var r=JSON.parse(msg)
				console.log(r)
				if (r.result !== 'register') {
					showRegistration()
				} else {
					if (r.result=='login') {
						setCookie('logged','1')
						setCookie('mid',r.mid)
						setCookie('login',r.login)
						setCookie('mobile',r.mobile)
						setCookie('name',r.name)
						setCookie('location',r.location)
						setCookie('email',r.email)
						window.top.location.href='home.html'
					}
				}
			}
		
		})		
	}

	function logout() {
		wait(), delCookie("mid"), delCookie("action"), setTimeout(function() {
			delCookie("action"), setCookie("action", ""), del_all()
		}, 10), document.cookie.split(";").forEach(function(e) {
			document.cookie = e.replace(/^ +/, "").replace(/=.*/, "=;expires=" + (new Date).toUTCString() + ";path=/")
		}), delCookie("mid"), delCookie("action"), delCookie("login"), setTimeout(function() {
			delCookie("action"), setCookie("action", ""), del_all()
		}, 10), delall(), location.href = "index.php?logout", hide()
	}

	function formatCurrency(e) {
		if (!e) return "";
		var d,e=e+''
		var o=e+''
		if (e.indexOf('.')>-1){
			d=e.split('.')[1]
			e=e.split('.')[0]
		}
		var o = e.length,
			t = e.length,
			n = [],
			i = 0,
			r = "";
		if (o <= 3) return e+''+'.'+d;
		for (; e.length >= 3;) n[i] = e.substr(-3), i += 1, t -= 3, e = e.substr(0, t);
		e && (n[i] = e);
		for (var c = 0; c < n.length; c++) r = n[c] + "," + r;
		r = r.substr(0, r.length - 1);
		return r +''+'.'+d
	}

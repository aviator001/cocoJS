var latLng=[], infoWindow=[], ad, id, options
var my_mid=getCookie('mid')
var my_login=getCookie('login')
var my_img=getCookie('img')

var my_lat, my_lng, my_latLng
var Server
var marker=[]
var boxText=[]
var ib=[], infoBox=[]
var msgBodySocket=[]
var lat=[], lng=[], action, markerID
var mid=[], login=[], age=[], filename_1=[], age=[], gender=[]
var gmap, x_img, x_login
var ib=[]
my_lat=getCookie('lat')
my_lng=getCookie('lng')
var pt
document.getElementById('wrapper').style.overflow='hidden'

$(document).ready(function() {
	Server = new websocket('ws://199.91.65.85:9303');
	
	Server.bind('open', function() {

	});

	//OH NOES! Disconnection occurred.
	Server.bind('close', function( data ) {
	});

	//Log any messages sent from server
	Server.bind('message', function( payload ) {
		msgBodySocket=payload.split('|')
		action = msgBodySocket[0]
		if (action=='NEW_MARKER') {
				markerID=msgBodySocket[1]
				mid=msgBodySocket[2]
				login=msgBodySocket[3]
				lat=msgBodySocket[4].trim()*1
				lng=msgBodySocket[5].trim()*1
		}
		if (action=='M') {
			lat=msgBodySocket[2].trim()*1
			lng=msgBodySocket[3].trim()*1
			mid=msgBodySocket[4]
		}
			if (mid==track) {
				pt = new google.maps.LatLng(lat,lng)
			}
			if(map){
				mp1.cq="map";
				map.setCenter(pt);
			};			
	});
	Server.connect();	
})
	setTimeout('send_init()',1000)

	function send_init() {
		Server.send( 'message',  'PING' + '|' + my_mid );
	}
	
	function success(position) {
		my_latLng = new google.maps.LatLng(position.coords.latitude, position.coords.longitude);
		map.setCenter(my_latLng)
		Server.send( 'message',  position.coords.latitude + '|' + position.coords.longitude + '|' + my_mid );
	}
	
	var map=null;var pan=null;
	var defaultLat=getCookie('lat');
	var defaultLng=getCookie('lng');
	var defaultZoom=18;

	function setCookie(cname,cvalue,exdays)	{
		var d = new Date();
		d.setTime(d.getTime()+(exdays*24*60*60*1000));
		var expires = "expires="+d.toGMTString();
		document.cookie = cname + "=" + cvalue + "; " + expires;
	 }

	function getCookie(cname)	{
		var name = cname + "=";
		var ca = document.cookie.split(';');
		for(var i=0; i<ca.length; i++) {
		  var c = ca[i].trim();
		  if (c.indexOf(name)==0) return c.substring(name.length,c.length);
		}
		return "";
	}
	function MP1(){
		this.dn=0;this.cL=0;this.ca=defaultLat;this.dK=defaultLng;this.dP=defaultZoom;this.cF="";this.bZ=10;
		this.fs=[
					google.maps.MapTypeId.ROADMAP,
					google.maps.MapTypeId.SATELLITE,
					google.maps.MapTypeId.HYBRID,
					google.maps.MapTypeId.TERRAIN
				];
		this.dM=true;
		this.bB=true;
		this.bd=true;
		this.cQ=false;
		this.dB=null;
		this.bY=null;
		this.cj=null;
		this.cA=null;
		this.eQ=null;
		this.cR=null;
		this.cb=null;
		this.cq="";
		this.cV=0;
		this.dc=0;
		this.dp=0;
	};
		
	MP1.prototype.initialize1=function(){
		glog("initialize 1");this.eu();this.fe();if(this.cF){this.eO(this.cF);}else{var pt=new google.maps.LatLng(this.ca,this.dK);this.cN(pt);}
		
	};
	
	MP1.prototype.cN=function(pt){
		this.du(pt);this.ca=pt.lat();this.dK=pt.lng();this.dZ=new Date;this.eh(pt);this.eK(pt);var bM=null;bM=pt;this.fG(this.bB,bM,this.dA,this.cI,this.cP);this.fr();
	};
	
	MP1.prototype.eu=function(){
		var fj=document.location.search.substring(1);var ah=[];var eg=fj.split("&");for(var i=0;i<eg.length;i++){var bW=eg[i];var ix=bW.indexOf("=");if(ix>0){var et=bW.substr(0,ix);var cO="";if(ix<bW.length-1){cO=bW.substr(ix+1);ah[et]=cO;}}}var dI=ah["addr"];if(dI){this.cF=dI;}var fJ=ah["lng"];if(fJ){this.dK=parseFloat(fJ);}var es=ah["lat"];if(es){this.ca=parseFloat(es);}var el=ah["svb"];if(el){this.dA=parseFloat(el);}var fn=ah["svp"];if(fn){this.cI=parseFloat(fn);}var fM=ah["svz"];if(fM){this.cP=parseFloat(fM);}var eb=ah["zoom"];if(eb){this.dP=parseInt(eb);}var cE=ah["slng"];if(cE){this.eo=parseFloat(cE);}var cC=ah["slat"];if(cC){this.dS=parseFloat(cC);}var cJ=ah["sh"];if(cJ){this.dA=parseFloat(cJ);}var dC=ah["sp"];if(dC){this.cI=parseFloat(dC);}var fB=ah["sz"];if(fB){this.cP=parseFloat(fB);}var ee=ah["gm"];if(ee){this.bZ=parseInt(ee);}var cc=ah["bm"];if(cc){this.dX=parseInt(cc);}var fA=ah["mw"];if(fA){this.dj=fA>0?true:false;}var fa=ah["be"];if(fa){this.fk=fa>0?true:false;}var dN=ah["bef"];if(dN){this.dU=dN>0?true:false;}var co=ah["ni"];if(co){this.eH=co>0?true:false;}var cG=ah["panel"];if(cG){this.dM=cG.indexOf("m")> -1?true:false;this.bB=cG.indexOf("s")> -1?true:false;this.eV=cG.indexOf("b")> -1?true:false;this.fK=cG.indexOf("i")> -1?true:false;}if(this.eH){this.fK=false;}var fh=ah["mv"];if(fh){this.fp=parseInt(fh);}var dW=ah["md"];if(dW){this.ed=parseInt(dW);}var cw=ah["mi"];if(cw){if(cw.length==1){this.ec=cw;var eT=parseInt(cw);var dO="http://maps.google.com/mapfiles/ms/micons/";switch(eT){case 2:dO+="green-dot.png";break;default:dO+="red-dot.png";break;case 3:dO+="yellow-dot.png";break;case 4:dO+="blue-dot.png";break;}this.db=dO;}else if(cw.length>1){this.db=cw;}}if(!this.db){this.db="http://maps.google.com/mapfiles/ms/micons/red-dot.png";}var ej=ah["pt"];if(ej){this.eR=unescape(ej);}var cl=ah["pd"];if(cl){this.fm=unescape(cl);}var dI=ah["addr"];if(dI){this.cF=unescape(dI);}if(typeof(dmCreatePath)!="undefined"){this.fq=dmCreatePath;}
	};
		
	MP1.prototype.eO=function(dg){
		if(!this.cU){
		this.cU=new google.maps.Geocoder();}this.cU.geocode({address:dg},function(eG,cs){if(cs==google.maps.GeocoderStatus.OK){var ek=eG[0];var pt=ek.geometry.location;cbGeocoderSuccess(pt);}else{var cf="Error, unable to find "+dg;cbGeocoderError(cf);}});
	};
	
	function cbGeocoderSuccess(pt,fl){
		glog("cb geocoder success "+pt);mp1.cN(pt);
	};
	
	function cbGeocoderError(cW){
		glog("cb geocoder error: "+cW);var pt=new google.maps.LatLng(mp1.ca,mp1.dK);mp1.cN(pt);
	};
	
	MP1.prototype.fw=function(){
		var fb=true;
		if(typeof(window.innerHeight)=="number"){
			fb=false;
		}
		if(fb){
			this.dn=parseInt(document.documentElement.clientWidth);
			this.cL=parseInt(document.documentElement.clientHeight);
		}else{
			this.dn=parseInt(window.innerWidth);
			this.cL=parseInt(window.innerHeight);
		}};
		
		MP1.prototype.cZ=function(dk,de,x,y,wd,ht){
			if(dk){
					dk.style.left=x+"px";
					dk.style.top=y+"px";
					dk.style.width=wd+"px";
					dk.style.height=ht+"px";
					dk.style.display=de?"block":"none";
				}else{
			}
		};
		
		MP1.prototype.fe=function(){
		var cz=eid("g_map");cz.innerHTML="";
		this.cR=new HeaderPanel();
		this.cj=new MapPanel();
		this.dv=new EarthPanel();
		this.cA=new StreetviewPanel();
		this.cb=new StatPanel();
		this.cR.df(cz);
		this.cj.df(cz);
		this.dv.df(cz);
		this.cA.df(cz);
		this.cb.df(cz);
		this.dR();
	};

	function resizePage(){
		if(mp1&&mp1.dG){
			mp1.dG();
		}
	};

	MP1.prototype.dG=function(){
		if(map&& !this.fu){
			this.fu=map.getCenter();
		}
	this.fw();
	var dF=32;
	var ht=this.cL-dF;
	var ht1=Math.floor(ht/2);
	var ht2=ht-ht1;
	var wd=this.dn;
	var wd1=Math.floor(wd/2);
	var wd2=wd-wd1;
	var cY=Math.floor(this.dn/2);
	if(this.cR){
		this.cZ(this.cR.ak,true,0,0,wd,dF);
	}
	if(this.cA){
		var fL=0;
		var cu=wd1;
		var ds=ht1;
		if(this.dM){
			if(!this.bd){
				fL=wd1;
				cu=wd2;
				ds=ht;
			}
		}else{
			ds=ht;
			if(!this.bd){
				cu=wd;
			}
		}
	this.cZ(this.cA.ak,this.bB,fL,dF,cu,ds);
	if(this.bB&&pan){
			pan.setVisible(true);
		}else if(pan){
			pan.setVisible(false);
		}
	glog("streetview Width = "+cu);
	}if(this.cj){var ff=0;var cD=ht1;var cY=wd1;var ct=ht2;if(this.bB){if(!this.bd){ff=0;cD=0;cY=wd2;ct=ht;}}else{cD=0;ct=ht;if(!this.bd){cY=wd;}}this.cZ(this.cj.ak,this.dM,ff,dF+cD,cY,ct);}if(this.dv){var cS=wd1;var dh=dF;var cv=wd2;var bX=ht;if(!this.dM&& !this.bB){cS=0;cv=wd;}this.cZ(this.dv.ak,this.bd,cS,dh,cv,bX);if(this.cQ){var ht2=parseInt(bX/2);this.cZ(this.dv.ak,this.bd,cS,dh,cv,bX-ht2);}this.cZ(this.cb.ak,this.cQ,cS,dh+ht2,cv,ht2);}
		glog("resize page : show map = "+this.dM+", show street view = "+this.eZ+", show earth = "+this.bd);
		
		if(pan){google.maps.event.trigger(pan,"resize");
	}
	if(map){google.maps.event.trigger(map,"resize");
	}};
	
	MP1.prototype.dR=function(){
		var fz=this.bB;this.dM=true;this.bB=true;this.bd=true;var ce="#FFFFFF";
		var dQ="#B9D3EE";
		if(eid("menuDiv1")){
			eid("menuDiv1").style.backgroundColor=this.dM?dQ:ce;
		}
		if(eid("menuDiv2")){
			eid("menuDiv2").style.backgroundColor=this.bB?dQ:ce;
		}
		
		if(eid("menuDiv3")){eid("menuDiv3").style.backgroundColor=this.bd?dQ:ce;}mp1.dG();
		
		if(this.bB&&this.cr){var pt=this.ef.pt;if(!pt){pt=map.getCenter();}this.dJ(pt,50,null,null,null);this.cr=false;}if(this.dM&&this.eV){}
	};
		
	function layoutRefresh(){
		mp1.dR();
	};
	
	MP1.prototype.fc=function(cB){
		this.cq=cB;var eF=eid("activePanel");
		if(eF){eF.innerHTML=cB;}glog("active panel = "+cB);
	};
	
	function focusPanel(cB){
		mp1.fc(cB);
	};
	
	function HeaderPanel(){
		this.ak=null;
	};
	
	HeaderPanel.prototype.df=function(ad){
		this.ak=document.createElement("div");
		this.ak.id="headerDiv";
		this.ak.style.position="absolute";
		this.ak.style.display="none";
		this.ak.style.backgroundColor="white";
		this.ak.style.color="black";
		this.dE=0;
		var eY="";
		var fv="";
		var eS="";
		var eW="";
		this.ak.innerHTML="<table style='width:100%'><tr valign='top'><td style='width:25%'>"+"<input id='geocoderText' type'text' style='color:gray; width:200px' />"+"</td><td align='right' style='width:25%'>"+"<input id='geolocateButton' type='button' value='View My Location' onclick='geolocateClick()' style='color:green' />"+"</td><td>"+"<div id='coordsDiv'></div>"+"</td><td align='right' style='width:120px'>"+"<a id='aboutLink' target='_blank' href='http://www.mapchannels.com/streetearthmap.htm' style='color:dodgerblue' title='Create a Street Earth Map for your website at www.mapchannels.com'>About</a> &nbsp;"+"<a id='bookmarkLink' target='_blank' href='' style='color:dodgerblue' title='Link to a map of the currently viewed location''>Bookmark</a> &nbsp;"+"</div>"+"</td></tr></table>";ad.appendChild(this.ak);};function clickMode(a){eid("mapCheckbox").checked=(a==0||a==1);eid("streetviewCheckbox").checked=(a==0||a==2);eid("earthCheckbox").checked=(a==0||a==3);mp1.dR();};function geolocateClick(){glog("geolocate click");mp1.fd(cbGeolocateSuccess,cbGeolocateError);};function MapPanel(){this.ak=null;};MapPanel.prototype.df=function(ad){this.ak=document.createElement("div");this.ak.id="mapDiv";this.ak.style.position="absolute";this.ak.style.display="none";this.ak.style.backgroundColor="white";this.ak.style.color="black";this.dE=0;this.ak.onmouseover=function(){focusPanel("map");};ad.appendChild(this.ak);};MP1.prototype.eh=function(pt){var dw=eid("mapDiv");var cd=this.fs[this.bZ];if(!cd){cd=google.maps.MapTypeId.ROADMAP;}

	var en={
		zoom:this.dP,
		center:pt,
		mapTypeId:cd,
		scaleControl:true,
		scrollwheel:this.dj,
		disableDoubleClickZoom:true,
		tilt:0
	};
		
	map=new google.maps.Map(dw,en);
	this.eD();

	google.maps.event.addListener(map,"idle",function(){if(mp1.cq=="map"){mp1.dm();}});
	google.maps.event.addListener(map,"dblclick",function(a){
		var pt=a.latLng;
		map.setCenter(pt);
		mp1.dm();
		mp1.dJ(pt,50,null,null,null);});
		
		google.maps.event.addListener(map,"bounds_changed",function(){});};
		MP1.prototype.eD=function(){var dw=eid("mapDiv");
		var fC={publisherId:"pub-5408854154696215",channelNumber:"6259147956",format:google.maps.adsense.AdFormat.BUTTON,position:google.maps.ControlPosition.RIGHT_BOTTOM,map:map,visible:true,backgroundColor:"#FFFFFF",borderColor:"#FFFFFF",textColor:"#000000",titleColor:"#000088",urlColor:"#444488"};
		var fE=document.createElement('div');
		this.fN=new google.maps.adsense.AdUnit(fE,fC);};
		
		function StreetviewPanel(){
			//this.ak=null;
		};
		StreetviewPanel.prototype.df=function(ad){
			this.ak=document.createElement("div");
			this.ak.id="panDiv";
			this.ak.style.position="absolute";
			this.ak.style.display="block";
			this.ak.style.backgroundColor="white";
			this.ak.style.color="black";
			this.dE=10;
			this.ak.onmouseover=function(){focusPanel("streetview");};
			ad.appendChild(this.ak);};
			
			MP1.prototype.ep=function(){glog("setStreetviewEventHandler");
			if(!this.eJ){
				this.eJ=true;
				google.maps.event.addListener(pan,"position_changed",function(){
					var pt=pan.getPosition();
					map.setCenter(pt);
					glog("position changed : center map ?  @ "+pt);
					mp1.dm(true);
					mp1.cK();});
					google.maps.event.addListener(pan,"visible_changed",function(){
						var pt=pan.getPosition();
						map.setCenter(pt);
						mp1.cK();});
						google.maps.event.addListener(pan,"pov_changed",function(){
							mp1.cK();
							});
						}};
					MP1.prototype.fG=function(de,eB,cT,ck,da){glog("createStreetView");
					if(!pan){
						var ez={scrollwheel:this.dj};
						pan=new google.maps.StreetViewPanorama(eid("panDiv"),ez);
						if(map){map.setStreetView(pan);
					}}
					if(de){this.dJ(eB,50,cT,ck,da);
						}else{
					this.cr=true;if(!this.dY){this.fF();}}};
					MP1.prototype.dJ=function(pt,cg,cT,ck,da){
						glog("display Nearest Streetview from "+pt+", range="+cg);
						if(!this.dB){
							this.dB=new google.maps.StreetViewService();
						}
						this.dB.getPanoramaByLocation(pt,cg,function(ft,cs){
							if(cs==google.maps.StreetViewStatus.OK){
								var fg=ft.location;
								var bM=fg.latLng;
								var ci=cT;
								var cp=0;
								var ea=1;
								if(ci==null){ci=google.maps.geometry.spherical.computeHeading(bM,pt);
									}else{
								cp=ck;
								ea=da;
							}
						pan.setPov({heading:ci,pitch:cp,zoom:ea});
						pan.setPosition(bM);
						map.setCenter(bM);
						mp1.dS=bM.lat();
						mp1.eo=bM.lng();
						mp1.dA=ci;mp1.ep();
					}else{
						if(cg<500){
							var ey=cg<50?100:500;
							mp1.dJ(pt,ey,cT,ck,da);
						}else{
							glog("no street view found");}}});};
							
						var ge;
						var geLookAt;
						var zoomToRange=[591657550.500000,591657550.500000,295828775.300000,147914387.600000,73957193.820000,36978596.910000,18489298.450000,9244649.227000,4622324.614000,2311162.307000,1155581.153000,577790.576700,288895.288400,144447.644200,72223.822090,36111.911040,18055.955520,9027.977761,4513.988880,2256.994440,1128.497220,564.25,282.12,141.06,70.53,35.26];
						
						function EarthPanel()
							{this.ak=null;};
							EarthPanel.prototype.df=function(ad){
								this.ak=document.createElement("div");
								this.ak.id="earthDiv";
								this.ak.style.position="absolute";
								this.ak.style.display="block";
								this.ak.style.backgroundColor="white";
								this.ak.style.color="black";
								this.dE=0;
								this.ak.onmouseover=function(){
									focusPanel("earth");
								};
								ad.appendChild(this.ak);
							};
							MP1.prototype.eK=function(){
								glog("create earth");
								google.load("earth","1",{"callback":initEarth});
							};
							function initEarth(){
								glog("initEarth");
								google.earth.createInstance("earthDiv",initCallback,failureCallback);
							};
							
							function initCallback(object){
								var earthDiv=eid("earthDiv");
								ge=object;
								ge.getLayerRoot().enableLayerById(ge.LAYER_BUILDINGS,true);
								ge.getLayerRoot().enableLayerById(ge.LAYER_ROADS,true);
								ge.getLayerRoot().enableLayerById(ge.LAYER_TREES,true);
								ge.getOptions().setAtmosphereVisibility(true);
								ge.getOptions().setScaleLegendVisibility(true);
								var z=map.getZoom()+25;
								var range=zoomToRange[z];
								if(range>0){}
									else{range=100;}
								
								var window=ge.getWindow();
								glog("create earth lat = "+mp1.ca+" lng = "+mp1.dK);
								ge.getWindow().setVisibility(true);
								geLookAt=ge.createLookAt('');
								geLookAt.setLatitude(mp1.ca);
								geLookAt.setLongitude(mp1.dK);
								geLookAt.setRange(range);
								geLookAt.setTilt(75);
								ge.getView().setAbstractView(geLookAt);
								google.earth.addEventListener(ge.getView(),"viewchange",function(eC){mp1.dm();
							});
						};
								
								
						function failureCallback(object){
							glog("earth failureCallback");
						};
						MP1.prototype.dm=function(){
							switch(this.cq){
								case "map":
								case "streetview":
								if(map){var pt=map.getCenter();
								var z=map.getZoom();
								this.du(pt);
								var cX=false;
								if(Math.abs(pt.lat()-this.cV)>0.000001){cX=true;}else if(Math.abs(pt.lng()-this.dc)>0.000001){cX=true;}else if(z!=this.dp){cX=true;}if(cX&&ge&&geLookAt){this.cV=pt.lat();this.dc=pt.lng();this.dp=z;ge.getOptions().setFlyToSpeed(4.0);glog("sync "+pt+" z = "+z);geLookAt.setLatitude(pt.lat());geLookAt.setLongitude(pt.lng());var range=zoomToRange[z+4];if(range>0){}else{range=1000;}geLookAt.setRange(range);ge.getView().setAbstractView(geLookAt);}}break;case "earth":if(ge&&geLookAt){geLookAt=ge.getView().copyAsLookAt(ge.ALTITUDE_RELATIVE_TO_GROUND);var range=geLookAt.getRange();var z=3;while(z<22&&range<zoomToRange[z]){z++;}var lat=geLookAt.getLatitude();var lng=geLookAt.getLongitude();var pt=new google.maps.LatLng(lat,lng);map.setCenter(pt);map.setZoom(z-3);eid("statusText").innerHTML+=formatFloat(pt.lat(),5)+","+formatFloat(pt.lng(),5);}else{glog("no ge / geLookAt error "+ge+" ... "+geLookAt);}break;}};MP1.prototype.du=function(pt){};MP1.prototype.cK=function(){if(this.cq!="streetview"){return;}glog("sync StreetviewChanges");var bM=null;if(pan){bM=pan.getPosition();if(map){map.setCenter(bM);}if(true){var ev=null;var fi=null;if(bM){ev=bM.lat();fi=bM.lng();}var cn=pan.getPov();var ci=0;var cp=0;if(cn){ci=cn.heading;cp=cn.pitch;dq=Math.floor((ci+45)/90);while(dq<0){dq+=4;}while(dq>=4){dq-=4;}}var eU=pan.getVisible()&&(bM!=null);if(ge&&geLookAt){glog("sync : set heading "+ci);geLookAt.setHeading(ci);geLookAt.setTilt(45+cp);ge.getView().setAbstractView(geLookAt);}}}this.eE();};MP1.prototype.eE=function(){if(map){var pt=map.getCenter();var x=formatFloat(pt.lng(),6);var y=formatFloat(pt.lat(),6);var er="http://data.mapchannels.com/streetearth2/map.htm";var fI="?lat="+y+"&lng="+x;er+=fI;eid("bookmarkLink").href=er;}};
								
								function StatPanel(){
									//this.ak=null;
								};

								StatPanel.prototype.df=function(ad){
								this.ak=document.createElement("div");
								this.ak.id="statDiv";
								this.ak.style.position="absolute";
								this.ak.style.display="block";
								this.ak.style.backgroundColor="white";
								this.ak.style.color="black";
								this.dE=0;this.ak.style.overflow="auto";
								ad.appendChild(this.ak);
							};
							StatPanel.prototype.fo=function(){
								this.ak.innerHTML="";
							};
							
							StatPanel.prototype.dV=function(eI){
								this.ak.innerHTML="<div>"+eI+"</div>"+this.ak.innerHTML;
							};
							MP1.prototype.fr=function(){
								glog("initAutoComplete");
								var eA=eid("geocoderText");
								this.bY=new google.maps.places.Autocomplete(eA);
								this.bY.bindTo("bounds",map);
								google.maps.event.addListener(this.bY,'place_changed',function(){
									var dz=mp1.bY.getPlace();
									if(dz.geometry){
										var pt=null;
										if(dz.geometry.location){
											pt=dz.geometry.location
										}else if(
											dz.geometry.viewport){
												pt=dz.geometry.viewport.getCenter();
											}
										if(pt){
											map.setCenter(dz.geometry.location);
											mp1.dm();
											mp1.dJ(pt,50,null,null,null);
										}}
									});
								};
							
							function findGeoLocation(di,dH){
								di=di||function(){};
								dH=dH||function(){};
								var ew=navigator.geolocation;
								
								if(ew){
									try{function ei(fH){
										di(fH.coords);
									};
									ew.getCurrentPosition(ei,dH,{enableHighAccuracy:true,maximumAge:0,timeout:60000});
									}
								catch(err){
									glog("Error: unable to obtain geolocation");
									dH();
								}}else{
									glog("Error: geolocation is not supported");
									dH();
								}};
								
								MP1.prototype.fd=function(di,dH){
									glog("init geolocation");
									findGeoLocation(
										function(dr){
											var pt=new google.maps.LatLng(dr.latitude,dr.longitude);
											glog("GeoLocation success :  "+pt);(di)(pt,"");
										},function(){glog("GeoLocation error");
										var cf="Unable to find your location";(dH)(null,cf);
									});
								};
								
								function cbGeolocateSuccess(pt,cW){
									glog("geolocate success");
									if(map){
										mp1.cq="map";
										map.setCenter(pt);
										map.setZoom(20);
									}};
								
								function cbGeolocateError(pt,cW){
									glog("geolocate error");
									if(map){
										alert(cW);
									}};
								
								function eid(id){
									return document.getElementById(id);
								};
								
								function glog(a){
									if(mp1&&mp1.cb){mp1.cb.dV(a);
								}};
								
								function formatFloat(n,d){
									var m=Math.pow(10,d);
									return Math.round(n*m,10)/m;
								};
								
								String.prototype.trim=function(){return this.replace(/^\s*|\s*$/g,'');};String.prototype.normalise=function(){var str="";var src=this;var len=src.length;var lc=0;for(var i=0;i<len;i++){var c=src.substr(i,1);if(c!="\r"&&c!="\n"&&c!="\t"){if(c!=" "||lc!=" "){str+=c;}lc=c;}}return str;};

								function DirFromBearing(a){
									var fD=Math.round(a+360)%360;
									var d=parseInt((fD+45)/90)%4;
									return d;
								} 

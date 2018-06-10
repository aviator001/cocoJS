var html=document.documentElement;var objText,objType,objStyle,objWait,spinner
var toast=document.createElement('span');var jModalWn=document.createElement('div');var objWait=document.createElement('img');var objW=document.createElement('img');var err_img='assets/images/a000.png';jModalWn.id='jModalWn'
objW.id='objW'
jModalWn.style.cssText="display:none;position:fixed;width:100%;height:100%;top:0px;bottom:0px;left:0px;right:0px;margin:auto;z-index:999999999999999999999;background:;opacity:1"
objWait.style.cssText="margin:auto;position:fixed;z-index:9999999999999999999991;left:0;right:0;top:0;bottom:0;width:100px;padding:20px;background:#fff;border-radius:8px;opacity:0.8;box-shadow:0px 0px 5px #333"
objW.style.cssText="margin:auto;position:fixed;z-index:9999999999999999999991;left:0;right:0;top:0;bottom:0;width:125px;padding:20px;padding-top:10px;background:#fff;border-radius:8px;opacity:0.9;box-shadow:0px 0px 5px #333"
objWait.src='https://gaysugardaddyfinder.com/assets/img/wait.gif'
objW.src='https://gaysugardaddyfinder.com/assets/img/wait.gif'
html.appendChild(jModalWn)
html.appendChild(jBoxCont)
html.appendChild(jToastWn)
var watchID=null;document.addEventListener("deviceready",onDeviceReady,false);function onDeviceReady(){var options={enableHighAccuracy:true};watchID=navigator.geolocation.watchPosition(displayPosition,onError,options);}var options={enableHighAccuracy:true};navigator.geolocation.watchPosition(getPosition,onError,options);function onError(){jalert('Your location is required for the proper search and display of prospective matches. Please check your browser permissions and try again. Press cancel to proceed without getting location (Most functions on the site will not work)','onDeviceReady','noProceed')}function get_loc_from_zip(cc_zip){if(!cc_zip){show_error_reg(document.getElementById('cc_zip'))
validate=false}var url='https://sugardaddydays.com/inc/x_get_city_state_zip.php?zip='+cc_zip
var request=$.ajax({url:url,type:"GET",dataType:"html",cache:false,success:function(msg){var lxc=msg.trim()
lx=lxc.split(',')
var cc_city=lx[0]
var cc_state=lx[1]
var cc_zip=lx[2]
var lat=lx[3]
var lng=lx[4]
var cc_location=cc_city+', '+cc_state+' '+cc_zip
alert(cc_location)
setCookie('location',cc_location)
setCookie('x-location',cc_location)
setCookie('zip',cc_zip)
setCookie('city',cc_city)
setCookie('state',cc_state)
setCookie('lat',lat)
setCookie('lng',lng)
if(document.getElementById('autolocation'))document.getElementById('autolocation').textContent=cc_location}})}function getPosition(position){if(getCookie('accurate'))return false
var geocoder=new google.maps.Geocoder();var latlng=new google.maps.LatLng(position.coords.latitude,position.coords.longitude);geocoder.geocode({'latLng':latlng},function(results,status){if(status==google.maps.GeocoderStatus.OK){if(results[0]){formatted_address=results[0].formatted_address
var address="",city="",state="",zip="",country="";for(var i=0;i<results[0].address_components.length;i++){var addr=results[0].address_components[i];if(addr.types[0]=='country')country=addr.long_name;else if(addr.types[0]=='street_address')address=address+addr.long_name;else if(addr.types[0]=='establishment')address=address+addr.long_name;else if(addr.types[0]=='route')address=address+addr.long_name;else if(addr.types[0]=='postal_code')zip=addr.short_name;else if(addr.types[0]==['administrative_area_level_1'])state=addr.short_name;else if(addr.types[0]==['locality'])city=addr.long_name;}street_no=results[0].address_components[0].short_name
street=results[0].address_components[1].short_name
full_address=formatted_address
full_address=street_no+', '+street+' '+city+' '+state+' '+zip+' '+country
console.log(full_address)
setCookie('location',city+', '+state+' '+zip)
setCookie('x-location',city+', '+state+' '+zip)
setCookie('street_no',street_no)
setCookie('street',street)
setCookie('city',city)
setCookie('state',state)
setCookie('zip',zip)
setCookie('lat',position.coords.latitude)
setCookie('lng',position.coords.longitude)
setCookie('accurate','1')
console.log(full_address)}}});}function ntfy(str,xCol){if(!xCol)xCol='#fff'
document.getElementById('notify').style.bottom='10px'
document.getElementById('notify').style.right='10px'
document.getElementById('notify').style.background=xCol
document.getElementById('notify').style.display='block'
document.getElementById('notify').style.opacity='1'
document.getElementById('notify').style.padding='10px'
document.getElementById('notify_txt').innerHTML=str
setTimeout('hide_ntfy()',5000)}function hide_ntfy(){document.getElementById('notify').style.display='none'
document.getElementById('notify_txt').innerHTML=''}function noProceed(){var zip=prompt('what is your zip code?')
get_loc_from_zip(zip)}function jalert(txt,fn1,fn2){if(!fn1)var fn1=''
if(!fn2)var fn2=''
if(!type)var type='dark'
if(!modal)var modal=0
if(modal&&!type)type='dark'
$('#j_modal').show()
var obj3=$.confirm({title:false,closeIcon:false,theme:type,backgroundDismiss:false,columnClass:'col-md-6 col-md-offset-3',confirmButtonClass:'btn-info',cancelButtonClass:'btn-danger',cssText:'zIndex:999999999999999999999',confirm:function(){$('#j_modal').hide()
window[fn1]()},cancel:function(){$('#j_modal').hide()
window[fn2]()},});obj3.setContent(txt)
obj3.setDialogCenter()}function jwait(objTxt){if(!objTxt)objTxt='Please Wait'
objT.innerHTML=objTxt
jModalWn.appendChild(objWait)
jModalWn.appendChild(objT)
jModalWn.style.display='block'}function jhide(){document.getElementById('jModalWn').style.display=='none'
jModalWn.style.display='none'
objT.style.display='none'}var wl=window.location.href;var mob=(window.location.href.indexOf('file://')>=0);function setCookie(cname,cvalue){if(mob===true){window.localStorage.setItem(cname,cvalue);}else{var d=new Date();d.setTime(d.getTime()+(1*24*60*60*1000));var expires="expires="+d.toGMTString();document.cookie=cname+"="+cvalue+"; "+expires;}}function getCookie(cname){if(mob===true){var cvalue=window.localStorage.getItem(cname);return cvalue}else{var name=cname+"=";var ca=document.cookie.split(';');for(var i=0;i<ca.length;i++){var c=ca[i].trim();if(c.indexOf(name)==0)return c.substring(name.length,c.length);}return"";}}function delCookie(cname){if(mob===true){window.localStorage.removeItem(cname);}else{var d=new Date();d.setTime(d.getTime());var expires="expires="+d.toGMTString();document.cookie=cname+"="+""+"; "+expires;}}function clear_all(){if(mob===true){window.localStorage.clear();}else{document.cookie.split(";").forEach(function(c){document.cookie=c.replace(/^ +/,"").replace(/=.*/,"=;expires="+new Date().toUTCString()+";path=/");});}}
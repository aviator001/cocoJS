<?
	session_start();
	$id=session_id();
	include "class/utils.class.php";
	$c=new utils;
	//include "sftp.php";
	//$c->show($files);	
?>
<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <meta content="telephone=no" name="format-detection">
    <link rel="stylesheet" type="text/css" href="http://ewizz.net/themes/designr/modern/wp-content/cache/wpfc-minified/c0d86cf9fc9a8877e090ca83085c4432/1507386954index.css" media="all" />
    <link rel="stylesheet" type="text/css" href="prism.css" media="all" />
    <link rel='stylesheet' id='redux-google-fonts-designr-css' href='http://fonts.googleapis.com/css?family=Montserrat%3A400%2C700%7CWork+Sans%3A400%7COpen+Sans&#038;subset=latin&#038;ver=1507386938' type='text/css' media='all' />
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
</style>
</head>
<script src="prism.js"></script>
<body style="padding:20px;background:url(assets/images/box2.png)"  class="home page-template page-template-template-fullwidth-elementor page-template-template-fullwidth-elementor-php page page-id-880 is-loading elementor-default elementor-page elementor-page-880">
    <div class="overlay2 overlay-scale">
        <div class="modalwrap"> <i class="fa fa-times-circle overlay-close" aria-hidden="true"></i>
            <div class="trans-pie">
                <nav>
                    <div class="menu-modal-left-container">
                        <ul id="transaprentmenu" class="">
                            <li id="menu-item-1808" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1808"><a href="http://ewizz.net/themes/designr/modern/regular-page/">Regular Page</a></li>
                            <li id="menu-item-1809" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1809"><a href="http://ewizz.net/themes/designr/modern/blog/">Blog</a></li>
                            <li id="menu-item-1798" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1798"><a href="http://ewizz.net/themes/designr/modern/contact-us/">Contact Us</a></li>
                        </ul>
                    </div>
                </nav>
            </div>
            <div class="trans-pie">
                <nav>
                    <div class="menu-modal-center-container">
                        <ul id="transaprentmenu2" class="">
                            <li id="menu-item-1677" class="menu-item menu-item-type-post_type menu-item-object-post menu-item-1677"><a href="http://ewizz.net/themes/designr/modern/2017/05/08/designr-best-theme-of-2017/">Designr – Best theme of 2017</a></li>
                            <li id="menu-item-1769" class="menu-item menu-item-type-post_type menu-item-object-post menu-item-1769"><a href="http://ewizz.net/themes/designr/modern/2017/05/08/design-rebound-last-week-issue/">Design Rebound: Last Week Issue</a></li>
                            <li id="menu-item-1770" class="menu-item menu-item-type-post_type menu-item-object-post menu-item-1770"><a href="http://ewizz.net/themes/designr/modern/2017/05/08/make-great-office-to-boost-performances/">Make great office to boost performances</a></li>
                        </ul>
                    </div>
                </nav>
            </div>
            <div class="trans-pie">
                <nav>
                    <div class="menu-modal-right-container">
                        <ul id="transaprentmenu3" class="">
                            <li id="menu-item-1692" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-1692"><a href="http://ewizz.net/themes/designr/modern/category/design/">Design</a></li>
                            <li id="menu-item-1657" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-1657"><a href="http://ewizz.net/themes/designr/modern/category/work/">Work</a></li>
                            <li id="menu-item-1658" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-1658"><a href="http://ewizz.net/themes/designr/modern/category/development/">Development</a></li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <div class="overlay overlay-scale"> <i class="fa fa-times-circle overlay-close" aria-hidden="true"></i>
        <div class="modalwrap">
            <form method="GET" action="http://ewizz.net/themes/designr/modern/">
                <input type="text" class="bigsearchbox" value="" name="s" placeholder="Type and hit enter" />
            </form>
        </div>
    </div>
 
    <div class="elementor elementor-880">
        <div class="elementor-inner">
            <div class="elementor-section-wrap">
                <section data-id="yhcjrva" class="elementor-element elementor-element-yhcjrva elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}" data-element_type="section">
                    <div class="elementor-container elementor-column-gap-default">
                        <div class="elementor-row www_box2">
                            <div data-id="e491w1p" class="elementor-element elementor-element-e491w1p elementor-column elementor-col-100 elementor-top-column" data-element_type="column">
                                <div class="elementor-column-wrap elementor-element-populated">
                                    <div class="elementor-widget-wrap">
                                        <div data-id="hkancir" class="elementor-element elementor-element-hkancir elementor-widget elementor-widget-shortcode" data-element_type="shortcode.default">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-shortcode">
                                                    <link href="http://fonts.googleapis.com/css?family=Montserrat:600" rel="stylesheet" property="stylesheet" type="text/css" media="all">
                                                    <div id="rev_slider_2_1_wrapper" class="rev_slider_wrapper fullscreen-container" data-source="gallery" style="background:linear-gradient(345deg, rgba(198,68,252,1) 0%, rgba(88,86,214,1) 100%);padding:0px;">
                                                        <!-- START REVOLUTION SLIDER 5.4.6 fullscreen mode -->
                                                        <div id="rev_slider_2_1" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.4.6">
                                                            <ul>
                                                                <!-- SLIDE  -->
                                                                <li data-index="rs-2" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="1000" data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                                                                    <!-- MAIN IMAGE --><img src="" data-bgcolor='linear-gradient(45deg, rgba(252,0,193,1) 26%, rgba(133,27,203,1) 66%, rgba(70,41,209,1) 87%, rgba(46,46,211,1) 95%)' style='background:linear-gradient(45deg, rgba(252,0,193,1) 26%, rgba(133,27,203,1) 66%, rgba(70,41,209,1) 87%, rgba(46,46,211,1) 95%)' alt="" title="Home 1" data-lazyload="http://ewizz.net/themes/designr/modern/wp-content/plugins/revslider/admin/assets/images/transparent.png" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="off" class="rev-slidebg" data-no-retina>
                                                                    <!-- LAYERS -->
                                                                    <!-- LAYER NR. 1 -->
                                                                    <div class="tp-caption   tp-resizeme" id="slide-2-layer-25" data-x="['left','left','left','left']" data-hoffset="['21','21','21','-9']" data-y="['top','top','top','top']" data-voffset="['45','45','45','30']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="image" data-responsive_offset="on" data-frames='[{"delay":700,"speed":1500,"frame":"0","from":"x:center;y:middle;rZ:360deg;opacity:0;","to":"o:1;rZ:15;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 5;"><img src="http://ewizz.net/themes/designr/modern/wp-content/plugins/revslider/admin/assets/images/dummy.png" alt="" data-ww="['55px','55px','55px','56px']" data-hh="48px" width="111" height="96" data-lazyload="http://ewizz.net/themes/designr/modern/wp-content/uploads/revslider/parallaxscroll/OBJ_triangle_s.png" data-no-retina></div>
                                                                    <!-- LAYER NR. 2 -->
                                                                    <div class="tp-caption tp-shape tp-shapewrapper  tp-resizeme  tp-joyshadow rs-parallaxlevel-15" id="slide-2-layer-15" data-x="['center','center','center','center']" data-hoffset="['264','264','260','260']" data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" data-width="2500" data-height="['500','500','400','300']" data-whitespace="nowrap" data-type="shape" data-responsive_offset="on" data-frames='[{"delay":100,"speed":750,"frame":"0","from":"sX:3;sY:3;opacity:0;","to":"o:1;rZ:45;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 6;background:linear-gradient(145deg, rgba(255,2,90,1) 0%, rgba(88,86,214,1) 100%);">
																		<img src="uploads/lib_great.png">
																	</div>
                                                                    <!-- LAYER NR. 3 -->
                                                                    <div class="tp-caption tp-shape tp-shapewrapper  tp-resizeme" id="slide-2-layer-1" data-x="['center','center','center','center']" data-hoffset="['0','0','0','-1']" data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','-3']" data-width="2500" data-height="['500','500','400','300']" data-whitespace="nowrap" data-type="shape" data-basealign="slide" data-responsive_offset="on" data-frames='[{"delay":200,"speed":750,"frame":"0","from":"sX:3;sY:3;opacity:0;","to":"o:1;rZ:-15;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 7;background:linear-gradient(170deg, rgba(178,5,252,1) 0%, rgba(56,53,214,1) 100%);"></div>
                                                                    <!-- LAYER NR. 4 -->
                                                                    <div class="www_card tp-caption tp-shape tp-shapewrapper  tp-resizeme rs-parallaxlevel-2" id="slide-2-layer-6" data-x="['center','center','center','center']" data-hoffset="['17','17','14','10']" data-y="['middle','middle','middle','middle']" data-voffset="['27','27','47','3']" data-width="['646','646','560','279']" data-height="['554','554','500','280']" data-whitespace="nowrap" data-type="shape" data-responsive_offset="on" data-frames='[{"delay":700,"speed":1500,"frame":"0","from":"z:0;rX:0;rY:0;rZ:0;sX:0.7;sY:0.7;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 8;border-color:rgb(255,255,255);border-style:solid;border-width:20px 20px 20px 20px;">
																	</div>
                                                                    <!-- LAYER NR. 5 -->

                                                                    <div class="tp-caption   tp-resizeme rs-parallaxlevel-2" id="slide-2-layer-2" data-x="['center','center','center','center']" data-hoffset="['3','3','-4','-1']" data-y="['middle','middle','middle','middle']" data-voffset="['-62','-62','-31','-35']" data-fontsize="['210','210','180','90']" data-lineheight="['100','100','80','50']" data-letterspacing="['-10','-10','0','0']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="text" data-responsive_offset="on" data-frames='[{"delay":550,"split":"chars","splitdelay":0.1,"speed":2500,"split_direction":"random","frame":"0","from":"y:50px;sX:1;sY:1;opacity:1;fb:20px;","color":"#001536","to":"o:1;fb:0;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","color":"transparent","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[30,30,30,20]" style="z-index: 119; white-space: nowrap; font-size: 160px; line-height: 100px; font-weight: 600; color: #000; letter-spacing: -10px;font-family:Montserrat;"><img src="assets/images/js_lib.png"></div>
                                                                    <!-- LAYER NR. 6 -->
                                                                    <div class="tp-caption   tp-resizeme rs-parallaxlevel-2" id="slide-2-layer-3" data-x="['center','center','center','center']" data-hoffset="['3','3','-1','1']" data-y="['middle','middle','middle','middle']" data-voffset="['115','115','131','50']" data-fontsize="['210','210','180','90']" data-lineheight="['100','100','80','50']" data-letterspacing="['-10','-10','0','0']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="text" data-responsive_offset="on" data-frames='[{"delay":600,"split":"chars","splitdelay":0.1,"speed":2500,"split_direction":"random","frame":"0","from":"y:50px;sX:1;sY:1;opacity:0;fb:20px;","color":"#001536","to":"o:1;fb:0;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","color":"transparent","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[30,30,30,20]" style="z-index: 9999; white-space: nowrap; font-size: 25px!Important; line-height: 80px; font-weight: 600; color: #000; letter-spacing: -10px;font-family:Montserrat;"><img src="assets/images/in_distress.png"></div>
																	
                                                                    <!-- LAYER NR. 7 -->
                                                                    <div class="tp-caption tp-shape tp-shapewrapper  tp-resizeme rs-parallaxlevel-10" id="slide-2-layer-27" data-x="['left','left','left','left']" data-hoffset="['593','593','715','715']" data-y="['top','top','top','top']" data-voffset="['1530','1530','574','574']" data-width="['176','176','50','50']" data-height="['187','187','100','100']" data-whitespace="nowrap" data-type="shape" data-responsive_offset="on" data-frames='[{"delay":700,"speed":1500,"frame":"0","from":"x:center;y:middle;rZ:360deg;opacity:0;","to":"o:1;rZ:44;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 11;border-color:rgba(255,255,255,0.07);border-style:solid;border-width:12px 12px 12px 12px;border-radius:25px 25px 25px 25px;color:#000">

																		<div class="rs-looped rs-wave" data-speed="5" data-angle="0" data-radius="4px" data-origin="50% 50%"></div>
																	</div>
                                                                    <!-- LAYER NR. 8 -->
                                                                    <div class="tp-caption tp-shape tp-shapewrapper  tp-resizeme rs-parallaxlevel-10" id="slide-2-layer-21" data-x="['left','left','left','left']" data-hoffset="['1194','1194','658','416']" data-y="['top','top','top','top']" data-voffset="['-23','-23','334','60']" data-width="['738','738','50','50']" data-height="['738','738','50','50']" data-whitespace="nowrap" data-type="shape" data-responsive_offset="on" data-frames='[{"delay":700,"speed":1500,"frame":"0","from":"x:center;y:middle;opacity:0;","to":"o:1;rZ:40;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 12;border-color:rgba(255,255,255,0.08);border-style:solid;border-width:22px 22px 22px 22px;">
                                                                        <div class="rs-looped rs-wave" data-speed="3" data-angle="0" data-radius="4px" data-origin="50% 50%"></div>
																	

                                                                    </div>
                                                                    <!-- LAYER NR. 9 -->
                                                                    <div class="tp-caption tp-shape tp-shapewrapper  tp-resizeme rs-parallaxlevel-10" id="slide-2-layer-22" data-x="['left','left','left','left']" data-hoffset="['-203','-203','-4','42']" data-y="['top','top','top','top']" data-voffset="['349','349','328','360']" data-width="['100','100','100','50']" data-height="['100','100','100','50']" data-whitespace="nowrap" data-type="shape" data-responsive_offset="on" data-frames='[{"delay":700,"speed":1500,"frame":"0","from":"x:center;y:middle;opacity:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 13;border-color:rgb(255,255,255);border-style:solid;border-width:3px 3px 3px 3px;border-radius:50px 50px 50px 50px;">
                                                                        <div class="rs-looped rs-wave" data-speed="6" data-angle="0" data-radius="6px" data-origin="50% 50%"></div>
                                                                    </div>
                                                                    <!-- LAYER NR. 10 -->
                                                                    <a class="tp-caption   tp-resizeme tp-svg-layer" href="#toolbox" target="_self" id="slide-2-layer-17" data-x="['center','center','center','left']" data-hoffset="['21','21','0','-153']" data-y="['bottom','bottom','bottom','bottom']" data-voffset="['-22','-22','50','91']" data-color="['rgb(0,0,0)','rgb(0,0,0)','rgb(255,255,255)','rgb(255,255,255)']" data-width="['100','100','50','50']" data-height="['125','125','50','50']" data-whitespace="nowrap" data-visibility="['on','on','on','off']" data-type="svg" data-actions='' data-svg_src="http://ewizz.net/themes/designr/modern/wp-content/plugins/revslider/public/assets/assets/svg/navigation/ic_arrow_downward_24px.svg" data-svg_idle="sc:transparent;sw:0;sda:0;sdo:0;" data-basealign="slide" data-responsive_offset="on" data-frames='[{"delay":2500,"speed":1000,"frame":"0","from":"y:-50px;opacity:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 14; min-width: 100px; max-width: 100px; max-width: 125px; max-width: 125px; color: #000000;cursor:pointer;text-decoration: none;">
                                                                        <div class="rs-looped rs-slideloop" data-easing="Power1.easeIn" data-speed="1" data-xs="0" data-xe="0" data-ys="-10" data-ye="10"></div>
                                                                    </a>
                                                                    <!-- LAYER NR. 11 -->
                                                                    <div class="tp-caption tp-shape tp-shapewrapper  tp-resizeme rs-parallaxlevel-12" id="slide-2-layer-19" data-x="['left','left','left','left']" data-hoffset="['188','188','123','39']" data-y="['top','top','top','top']" data-voffset="['13','13','138','65']" data-width="['282','282','60','30']" data-height="['282','282','60','30']" data-whitespace="nowrap" data-type="shape" data-responsive_offset="on" data-frames='[{"delay":700,"speed":1500,"frame":"0","from":"x:center;y:middle;opacity:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 15;background-color:rgba(147,147,147,0);border-color:rgba(122,0,204,0.55);border-style:solid;border-width:8px 8px 8px 8px;border-radius:222px 222px 222px 222px;">
                                                                        <div class="rs-looped rs-wave" data-speed="6" data-angle="0" data-radius="5px" data-origin="50% 50%"></div>
                                                                    </div>
                                                                    <!-- LAYER NR. 12 -->
                                                                    <div class="tp-caption   tp-resizeme rs-parallaxlevel-12" id="slide-2-layer-23" data-x="['left','left','left','left']" data-hoffset="['1150','1150','657','394']" data-y="['top','top','top','top']" data-voffset="['307','307','128','298']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="image" data-responsive_offset="on" data-frames='[{"delay":700,"speed":1500,"frame":"0","from":"x:center;y:middle;rZ:360deg;opacity:0;","to":"o:1;rZ:25;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 16;">
                                                                        <div class="rs-looped rs-wave" data-speed="7" data-angle="0" data-radius="5px" data-origin="50% 50%"><img src="http://ewizz.net/themes/designr/modern/wp-content/plugins/revslider/admin/assets/images/dummy.png" alt="" data-ww="['110px','110px','110px','110px']" data-hh="['95px','95px','95px','95px']" width="221" height="191" data-lazyload="http://ewizz.net/themes/designr/modern/wp-content/uploads/revslider/parallaxscroll/OBJ_triangle.png" data-no-retina></div>
                                                                    </div>
                                                                    <!-- LAYER NR. 13 -->
                                                                    <div class="tp-caption   tp-resizeme rs-parallaxlevel-12" id="slide-2-layer-24" data-x="['left','left','left','left']" data-hoffset="['134','134','31','-34']" data-y="['top','top','top','top']" data-voffset="['364','364','589','494']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="image" data-responsive_offset="on" data-frames='[{"delay":700,"speed":1500,"frame":"0","from":"x:center;y:middle;rZ:360deg;opacity:0;","to":"o:1;rZ:320;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 17;">
                                                                        <div class="rs-looped rs-wave" data-speed="6" data-angle="0" data-radius="6px" data-origin="50% 50%"><img src="http://ewizz.net/themes/designr/modern/wp-content/plugins/revslider/admin/assets/images/dummy.png" alt="" data-ww="['101px','101px','110px','110px']" data-hh="['87px','87px','95px','95px']" width="221" height="191" data-lazyload="http://ewizz.net/themes/designr/modern/wp-content/uploads/revslider/parallaxscroll/OBJ_triangle.png" data-no-retina></div>
                                                                    </div>
                                                                    <!-- LAYER NR. 14 -->
                                                                    <div class="tp-caption tp-shape tp-shapewrapper  tp-resizeme rs-parallaxlevel-11" id="slide-2-layer-28" data-x="['left','left','left','left']" data-hoffset="['57','57','764','764']" data-y="['top','top','top','top']" data-voffset="['608','608','723','723']" data-width="['105','105','30','30']" data-height="['86','86','30','30']" data-whitespace="nowrap" data-type="shape" data-responsive_offset="on" data-frames='[{"delay":700,"speed":1500,"frame":"0","from":"x:center;y:middle;rZ:360deg;opacity:0;","to":"o:1;rZ:-15;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 18;border-color:rgb(255,255,255);border-style:solid;border-width:3px 3px 3px 3px;">
                                                                        <div class="rs-looped rs-wave" data-speed="8" data-angle="0" data-radius="8px" data-origin="50% 50%"></div>
                                                                    </div>
                                                                    <!-- LAYER NR. 15 -->
                                                                    <div class="tp-caption tp-shape tp-shapewrapper  tp-resizeme rs-parallaxlevel-10" id="slide-2-layer-31" data-x="['left','left','left','left']" data-hoffset="['50','50','658','416']" data-y="['top','top','top','top']" data-voffset="['1421','1421','334','60']" data-width="['738','738','50','50']" data-height="['738','738','50','50']" data-whitespace="nowrap" data-type="shape" data-responsive_offset="on" data-frames='[{"delay":700,"speed":1500,"frame":"0","from":"x:center;y:middle;opacity:0;","to":"o:1;rZ:40;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 19;border-color:rgba(255,255,255,0.08);border-style:solid;border-width:22px 22px 22px 22px;">
                                                                        <div class="rs-looped rs-wave" data-speed="3" data-angle="0" data-radius="4px" data-origin="50% 50%"></div>
                                                                    </div>
                                                                    <!-- LAYER NR. 16 -->
                                                                    <div class="tp-caption   tp-resizeme rs-parallaxlevel-12" id="slide-2-layer-32" data-x="['left','left','left','left']" data-hoffset="['981','981','31','-34']" data-y="['top','top','top','top']" data-voffset="['700','700','589','494']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="image" data-responsive_offset="on" data-frames='[{"delay":700,"speed":1500,"frame":"0","from":"x:center;y:middle;rZ:360deg;opacity:0;","to":"o:1;rZ:37;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 20;">
                                                                        <div class="rs-looped rs-wave" data-speed="6" data-angle="0" data-radius="6px" data-origin="50% 50%"><img src="http://ewizz.net/themes/designr/modern/wp-content/plugins/revslider/admin/assets/images/dummy.png" alt="" data-ww="['101px','101px','110px','110px']" data-hh="['87px','87px','95px','95px']" width="221" height="191" data-lazyload="http://ewizz.net/themes/designr/modern/wp-content/uploads/revslider/parallaxscroll/OBJ_triangle.png" data-no-retina></div>
                                                                    </div>
                                                                    <!-- LAYER NR. 17 -->
                                                                    <div class="tp-caption tp-shape tp-shapewrapper  tp-resizeme rs-parallaxlevel-10" id="slide-2-layer-33" data-x="['left','left','left','left']" data-hoffset="['-231','-231','658','416']" data-y="['top','top','top','top']" data-voffset="['474','474','334','60']" data-width="['738','738','50','50']" data-height="['738','738','50','50']" data-whitespace="nowrap" data-type="shape" data-responsive_offset="on" data-frames='[{"delay":700,"speed":1500,"frame":"0","from":"x:center;y:middle;opacity:0;","to":"o:1;rZ:40;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 21;border-color:rgba(255,255,255,0.08);border-style:solid;border-width:22px 22px 22px 22px;">
                                                                        <div class="rs-looped rs-wave" data-speed="3" data-angle="0" data-radius="4px" data-origin="50% 50%"></div>
                                                                    </div>
                                                                    <!-- LAYER NR. 18 -->
                                                                    <div class="tp-caption tp-shape tp-shapewrapper  tp-resizeme rs-parallaxlevel-12" id="slide-2-layer-34" data-x="['left','left','left','left']" data-hoffset="['910','910','123','39']" data-y="['top','top','top','top']" data-voffset="['-24','-24','138','65']" data-width="['192','192','60','30']" data-height="['192','192','60','30']" data-whitespace="nowrap" data-type="shape" data-responsive_offset="on" data-frames='[{"delay":700,"speed":1500,"frame":"0","from":"x:center;y:middle;opacity:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 22;background-color:rgba(147,147,147,0);border-color:rgba(122,0,204,0.55);border-style:solid;border-width:8px 8px 8px 8px;border-radius:222px 222px 222px 222px;">
                                                                        <div class="rs-looped rs-wave" data-speed="6" data-angle="0" data-radius="5px" data-origin="50% 50%"></div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                            <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
                                                        </div>
                                                    </div>
                                                    <!-- END REVOLUTION SLIDER -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section data-id="smokywg" class="elementor-element elementor-element-smokywg elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" id="toolbox" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}" data-element_type="section">
                    <div class="elementor-container elementor-column-gap-default">
                        <div class="elementor-row">
                            <div data-id="9pbb1nw" class="elementor-element elementor-element-9pbb1nw elementor-column elementor-col-100 elementor-top-column" data-element_type="column">
                                <div class="elementor-column-wrap elementor-element-populated">
                                    <div class="elementor-widget-wrap">
                                        <div data-id="ia14fad" class="elementor-element elementor-element-ia14fad elementor-widget elementor-widget-text-editor" data-element_type="text-editor.default">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-text-editor elementor-clearfix">
                                            </div>
                                        </div>
                                        <div style="text-align:left" data-id="k777tdx" class="elementor-element elementor-element-k777tdx animated fadeIn center elementor-invisible elementor-widget elementor-widget-heading" data-settings="{&quot;_animation&quot;:&quot;fadeIn&quot;}" data-element_type="heading.default">
										<br>                                          
										<div><span><img src="assets/images/logococo.png" style="height:160px"></span>
													<h1 class="elementor-heading-title elementor-size-default"><span style="color:maroon">Co.Co.</span><span style="color:grey">JS.</span></h1>
														<i><p class="elementor-icon-box-description" style="color:silver">&copy;&reg;The Co.Co.JS Company&trade;</p></i>
										</div>
										<br>
                                            <div class="elementor-widget-container">
												<h2>INTRODUCTION</h2>
												<table style="border:none;background:none;box-shadow:none;text-align:center;margin:30px">
												<tr>
													<td>
														<img style="width:200px" src="assets/images/cap01.png"><div style="text-align:center">FIND & FIX DUPLICATE FUNCTIONS</div>
												
													</td>
													<td>
														<img style="width:200px" src="assets/images/cap02.png"><div>AUTO OPTIMIZE ALL YOUR JS LIBRARIES</div>

													</td>
													<td>
														<img style="width:200px" src="assets/images/cap03.png"><div>WWW COLLABORATE AND SHARE at FUNCTION LEVEL</div>
													</td>
													<td>
														<img style="width:200px" src="assets/images/cap04.png"><div>CREATE REAL TIME LOGICAL JS LIBRARIES</div>
													</td>
												</TR>
												<TR>
													<td>
														<img style="width:200px" src="assets/images/cap05.png"><div>COLLABORATE AND SHARE at FUNCTION LEVEL</div>
													</td>
													<td>
														<img style="width:200px" src="assets/images/cap06.png"><div>AUTO SCAN TO IMPORT FUNCTIONS TO COCOSPHERE</div>
													</td>
													<td>
														<img style="width:200px" src="assets/images/cap07.png"><div>NEVER RE-WRITE FUNCTION MORE THAN ONCE</div>
													</td>
													<td>
														<img style="width:200px" src="assets/images/cap08.png"><div>SIGNIFICANTLY TRIM FAT - INCLUDE ONLY WHAT YOU NEED</div>
													</td>
												</tr>
											</table>
												<p class="elementor-icon-box-description" style="color:#000;padding:10px;margin:10px">Almost all developers with a moderate amount of coding behind them - is guilty of this: Carrying excess baggage - in terms of JavaScript code that will never get executed. Our trusty old go-to js libraries that
													we have built over the years get thrown into every project by default, because they contain our top 10 fav functions that we use all the time. And thats cool. Now. What about the remaining 20 that we will never 
													use on this project but they account for 90% of the file by data size?
												</p>
												<section style="vertical-align:middle;text-align:center;width:100%!Important;max-width:100%;padding:30px;height:400px" data-id="sbndiws" class="www_card" data-settings="{&quot;background_background&quot;:&quot;none&quot;,&quot;shape_divider_top&quot;:&quot;waves&quot;,&quot;shape_divider_bottom&quot;:&quot;waves&quot;}" data-element_type="section">
													<div id="d1" style="width:100%;text-align:center;color:#000">
														<div id="r1">
															<div style="font-family:Open Sans;font-weight:300;font-size:44px">SCAN SITE </div>
															<div>All file types scanned for extraction. Ex: .html .php .js .aspx .txt ...</div>
															<div>Click SCAN to start extracting all javascript functions</div>
															<input style="box-shadow:inset 0 1px 10px 0 rgba(67,80,98,.24), inset 0 2px 4px 0 rgba(67,80,98,.4);margin-top:20px;padding:5px;width:350px; height:50.5px;border-radius:0;border:0 solid silver" type="text" id="uri"><input class="www_card_small"style="font-size:24px;width:150px;height:50px;padding:10px;border:0px solid silver;border-radius:4px;color:orange"  onclick="remote_script()" type="button" value="SCAN" style="height:50px">
														</div>
														<div id="res1" style="display:none">
															<div style="font-family:Open Sans;font-weight:300;font-size:44px">RESULTS </div>
															<input onclick="rescan()" type="button" style="font-size:18px;width:150px;height:50px;padding:10px;border:0px solid silver;border-radius:4px;color:#333;background:lavenderblush" value=" RESET "/>
															<div id="data1" style="width:100%"></div>
														</div>
													</div>
													<div id="d2" style="display:none;width:100%;max-width:500px;text-align:center;color:#000;position:absolute;margin:auto;left:0;right:0">
														<div id="r2">
															<div style="font-family:Open Sans;font-weight:300;font-size:44px">BROWSE LOCALLY </div>
															<div>All file types scanned for extraction. Ex: .html .php .js .aspx .txt ...</div>
															<div>Click SCAN to start extracting all javascript functions</div>
															<input style="box-shadow:inset 0 1px 10px 0 rgba(67,80,98,.24), inset 0 2px 4px 0 rgba(67,80,98,.4);margin-top:20px;padding:5px;width:350px; height:50.5px;border-radius:0;border:0 solid silver" type="text" id="uri"><input class="www_card_small"style="font-size:24px;width:150px;height:50px;padding:10px;border:0px solid silver;border-radius:4px;color:orange"  onclick="remote_script()" type="button" value="SCAN" style="height:50px">
														</div>
														<div id="frmHolder">
															<form style="width:100%;max-width:650px;border:none;display:none" id="dz" action="upload.php"></form>
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
													<div id="d3" style="display:none;position:absolute">
														<iframe id="ssh" src="ssh2.php" style="display:none;position:absolute;z-index:99999999;min-width:1075px!Important;width:1075px!Important;height:100%"></iframe>
														<input placeholder="Remote server IP" class="" style="box-shadow:inset 0 1px 10px 0 rgba(67,80,98,.24), inset 0 2px 4px 0 rgba(67,80,98,.4);margin-top:20px;padding:5px;width:350px; height:50.5px;border-radius:0px 0 0 8px;border:0px solid silver" type="text" id="host"><br>
														<input placeholder="Private Key URI" class="" style="box-shadow:inset 0 1px 10px 0 rgba(67,80,98,.24), inset 0 2px 4px 0 rgba(67,80,98,.4);margin-top:20px;padding:5px;width:350px; height:50.5px;border-radius:0px 0 0 8px;border:0px solid silver" type="text" id="key"><br>
														<input placeholder="User Name" class="" style="box-shadow:inset 0 1px 10px 0 rgba(67,80,98,.24), inset 0 2px 4px 0 rgba(67,80,98,.4);margin-top:20px;padding:5px;width:350px; height:50.5px;border-radius:0px 0 0 8px;border:0px solid silver" type="text" id="username"><br>
														<input placeholder="Key File Password" class="" style="box-shadow:inset 0 1px 10px 0 rgba(67,80,98,.24), inset 0 2px 4px 0 rgba(67,80,98,.4);margin-top:20px;padding:5px;width:350px; height:50.5px;border-radius:0px 0 0 8px;border:0px solid silver" type="text" id="password"><br>
														<input onclick="remote_script()" type="button" value="Connect SCH" style=";margin-top:20px;padding:5px;width:350px; height:50.5px;border-radius:0px 0 0 8px;border:0px solid silver">
													</div>
													<div id="d4" style="display:none;position:absolute">
														<div style="font-family:Open Sans;font-weight:300;font-size:44px">ENTER URL </div>
														<input class="" style="box-shadow:inset 0 1px 10px 0 rgba(67,80,98,.24), inset 0 2px 4px 0 rgba(67,80,98,.4);margin-top:20px;padding:5px;width:350px; height:50.5px;border-radius:0px 0 0 8px;border:0px solid silver" type="text" id="uri"><input onclick="remote_script()" type="button" value="import" style="height:50px">
													</div>
												</section>
                                                <div class="elementor-row">
                                                    <div data-id="tvz0ohs"class="elementor-element elementor-element-tvz0ohs elementor-column elementor-col-33 elementor-inner-column" data-element_type="column">
                                                        <div class="elementor-column-wrap elementor-element-populated">
                                                            <div class="elementor-widget-wrap">
                                                                <div data-id="5wsr47w" style="background:aliceblue" id="t1" onclick="set(this)" style="background:gold"  class="elementor-element elementor-element-5wsr47w elementor-view-default elementor-position-top elementor-vertical-align-top animated fadeInUp card elementor-invisible elementor-widget elementor-widget-icon-box" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:132}" data-element_type="icon-box.default">
                                                                    <div class="elementor-widget-container">
                                                                        <div class="elementor-icon-box-wrapper" style="background:">
                                                                            <div class="elementor-icon-box-icon"> <span class="elementor-icon elementor-animation-"> <i style="color:#333" class="fa fa-globe"></i> </span></div>
                                                                            <div class="elementor-icon-box-content">
                                                                                <h3 style="font-family:Open Sans;font-weight:300;font-size:24px" class="elementor-icon-box-title"> <span >Scan Remote URL</span></h3>
																				<input onclick="remote_script()" type="button" value="Go">                                                                           
																			</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div data-id="tvz0ohs"class="elementor-element elementor-element-tvz0ohs elementor-column elementor-col-33 elementor-inner-column" data-element_type="column">
                                                        <div class="elementor-column-wrap elementor-element-populated">
                                                            <div class="elementor-widget-wrap">
                                                                <div data-id="5wsr47w" style="background:" id="t2" onclick="set(this)" style="background:gold"  class="elementor-element elementor-element-5wsr47w elementor-view-default elementor-position-top elementor-vertical-align-top animated fadeInUp card elementor-invisible elementor-widget elementor-widget-icon-box" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:132}" data-element_type="icon-box.default">
                                                                    <div class="elementor-widget-container">
                                                                        <div class="elementor-icon-box-wrapper" style="background:">
                                                                            <div class="elementor-icon-box-icon"> <span class="elementor-icon elementor-animation-"> <i style="color:#333" class="fa fa-hdd"></i> </span></div>
                                                                            <div class="elementor-icon-box-content">
                                                                                <h3 style="font-family:Open Sans;font-weight:300;font-size:24px" class="elementor-icon-box-title"> <span >Browse Local Disks</span></h3>
																				<input onclick="remote_script()" type="button" value="Go">                                                                           
																		   </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div  data-id="tvz0ohs"class="elementor-element elementor-element-tvz0ohs elementor-column elementor-col-33 elementor-inner-column" data-element_type="column">
                                                        <div class="elementor-column-wrap elementor-element-populated">
                                                            <div class="elementor-widget-wrap">
                                                                <div data-id="5wsr47w" id="t3" onclick="set(this)"  class="elementor-element elementor-element-5wsr47w elementor-view-default elementor-position-top elementor-vertical-align-top animated fadeInUp card elementor-invisible elementor-widget elementor-widget-icon-box" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:132}" data-element_type="icon-box.default">
                                                                    <div class="elementor-widget-container">
                                                                        <div class="elementor-icon-box-wrapper">
                                                                            <div class="elementor-icon-box-icon"> <span class="elementor-icon elementor-animation-"> <i style="color:#333" class="fa fa-desktop"></i> </span></div>
                                                                            <div class="elementor-icon-box-content">
                                                                                <h3 style="font-family:Open Sans;font-weight:300;font-size:24px" class="elementor-icon-box-title"> <span >Scan Remote Server</span></h3>
																				<input onclick="remote_script()" type="button" value="SSH1"><input onclick="remote_script()" type="button" value="SSH2"><input onclick="remote_script()" type="button" value="FTP">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div data-id="tvz0ohs"class="elementor-element elementor-element-tvz0ohs elementor-column elementor-col-33 elementor-inner-column" data-element_type="column">
                                                        <div class="elementor-column-wrap elementor-element-populated">
                                                            <div class="elementor-widget-wrap">
                                                                <div data-id="5wsr47w" id="t4" onclick="set(this)"  class="elementor-element elementor-element-5wsr47w elementor-view-default elementor-position-top elementor-vertical-align-top animated fadeInUp card elementor-invisible elementor-widget elementor-widget-icon-box" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:132}" data-element_type="icon-box.default">
                                                                    <div class="elementor-widget-container">
                                                                        <div class="elementor-icon-box-wrapper">
                                                                            <div class="elementor-icon-box-icon"> <span class="elementor-icon elementor-animation-"> <i style="color:#333" class="fa fa-list-alt"></i> </span></div>
                                                                            <div class="elementor-icon-box-content">
                                                                                <h3 style="font-family:Open Sans;font-weight:300;font-size:24px" class="elementor-icon-box-title"> <span >Paste Contents</span></h3>
																				<input onclick="remote_script()" type="button" value="Go">                                                                           

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

											</div>												
												<div id="jsFns" style="font-size:0.7em!Important"></div>												
												<h3>EFFECIENCY</h3>
												<p class="elementor-icon-box-description" style="color:#000">
													How about the functions you end up re-writing each proejct from scratch because they remain hidden in the deepest recesses of your code? Its actually worse if you do locate them because you are now staring at 6 different versions
													and you lost track 3 CTRL+TABS ago.
												</p>
												<h3>THE COCOSPHERE</h3>
												<p class="elementor-icon-box-description" style="color:#000">
													A World Wide Web of JavaScript functions, a vast collective knowledgebase, with an infinite number of physical and logical 
												</p>
												<h3>POTENTIAL APPLICATIONS</h3>
												<p class="elementor-icon-box-description" style="color:#000">
													There are enough tools out there to manage your JS files. But what we really need to manage are the individual functions. After all isnt the end goal of any optimization process worth its salt - cutting size?
												</p>
												<h3>CO-LOCATED COLLECTIVE of JS FUNCTIONS</h3>
												<p class="elementor-icon-box-description" style="color:#000">
													All functions will reside in a single universe, in a simple flat heirarchy
												</p>
												
												<p class="elementor-icon-box-description" style="color:#000">
													A user may set one or more of the functions to be published publically or be kept private
												</p>
												<p class="elementor-icon-box-description" style="color:#000">
													If published, each function will be given a unique identity and will be accessible as an independent uni-function library that could be
													<ul>
													<li>
														Invoked by an IDE plugin to be inserted in any program, sub routine or API
													</li>
													<p>
														OR
													</p>
													<li>
														Added as a reference - and will be inserted at any point at run-time.
													</li>
													</ul>
												</p>
												<p class="elementor-icon-box-description" style="color:#000">
													A user will have the ability to create an infinite number of API Endpoints, each end point consisting of eeither
													<ul>	
														<li>
															A physical function
														</li>
														<p>
															OR
														</p>
														<li>
															A collection of functions
														</li>
														<p>
															OR
														</p>
														<li>
															A virtual reference to another users function
														</li>
													</ul>
											
												</p>												
												<h3>USER EXPERIENCE</h3>
												<p class="elementor-icon-box-description" style="color:#000">
													There are enough tools out there to manage your JS files. But what we really need to manage are the individual functions. After all isnt the end goal of any optimization process worth its salt - cutting size?
												</p>																								<h3>USER EXPERIENCE</h3>
												<h2>IMPLEMENTATION</h2>
												<h3>DISCOVERY</h3>
												<p class="elementor-icon-box-description" style="color:#000">
													Co.Co.JS will automatically scan any JavaScript file or deep scan folders for al the JavaScript functions it can identify and catalog to a database - and this point forward, JS Files are transformed from physical entities to logical 
													collections as defined by you. Its the same concept of creating multiple logical database views from a few physical tables.
												</p>
												<p class="elementor-icon-box-description" style="color:#000">
													Once all the functions are cataloged and iindividually assigned an ID to, the owner will be given a chance to add meta information on each function - for example:
												</p>
												<ul>
													<li>
														FUNCTION
														<ul>
															<li>
																PROPERTIES
																	<ul>
																		Name
																	</ul>
																	<ul>
																		Description
																	</ul>
																	<ul>
																		Scope
																	</ul>
															</li>
															<li>
																SCOPE
																	<ul>
																		Public
																	</ul>
																	<ul>
																		Private
																	</ul>
																	<ul>
																		Hidden
																	</ul>
															</li>
															<li>
																INPUTS
																	<ul>
																		Type
																	</ul>
																	<ul>
																		Format
																	</ul>
																	<ul>
																		Description
																	</ul>
															</li>
															<li>
																OUTPUT
																	<ul>
																		Type
																	</ul>
															</li>
															<li>Dependencies</li>
															<li>Callers</li>
															<li>Callees</li>
															<li>...</li>
														</ul>
													</li>
												</ul>

												<h3>RESOURCE POOL MANAGEMENT</h3>
												<p class="elementor-icon-box-description" style="color:#000">
													
												</p>
												<p class="elementor-icon-box-description" style="color:#000">
					
                                       <section data-id="43ssvbf" class="elementor-element elementor-element-43ssvbf elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-inner-section" data-element_type="section">
                                            <div class="elementor-container elementor-column-gap-default">
                                                <div class="elementor-row">
                                                    <div data-id="tvz0ohs" class="elementor-element elementor-element-tvz0ohs elementor-column elementor-col-33 elementor-inner-column" data-element_type="column">
                                                        <div class="elementor-column-wrap elementor-element-populated">
                                                            <div class="elementor-widget-wrap">
                                                                <div data-id="5wsr47w" class="elementor-element elementor-element-5wsr47w elementor-view-default elementor-position-top elementor-vertical-align-top animated fadeInUp card elementor-invisible elementor-widget elementor-widget-icon-box" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:132}" data-element_type="icon-box.default">
                                                                    <div class="elementor-widget-container">
                                                                        <div class="elementor-icon-box-wrapper">
                                                                            <div class="elementor-icon-box-icon"> <span class="elementor-icon elementor-animation-"> <i style="color:#333" class="fa fa-database"></i> </span></div>
                                                                            <div class="elementor-icon-box-content">
                                                                                <h3 class="elementor-icon-box-title"> <span >Premade Sites</span></h3>
                                                                                <p class="elementor-icon-box-description">Import premade websites with one click. Growing list of demos weekly.</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div data-id="5wsr47w" class="elementor-element elementor-element-5wsr47w elementor-view-default elementor-position-top elementor-vertical-align-top animated fadeInUp card elementor-invisible elementor-widget elementor-widget-icon-box" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:132}" data-element_type="icon-box.default">
                                                                    <div class="elementor-widget-container">
                                                                        <div class="elementor-icon-box-wrapper">
                                                                            <div class="elementor-icon-box-icon"> <span class="elementor-icon elementor-animation-"> <i style="color:#333"  class="fa fa-list-alt"></i> </span></div>
                                                                            <div class="elementor-icon-box-content">
                                                                                <h3 class="elementor-icon-box-title"> <span >Premade Sites</span></h3>
                                                                                <p class="elementor-icon-box-description">Import premade websites with one click. Growing list of demos weekly.</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div data-id="a5txs7y" class="elementor-element elementor-element-a5txs7y elementor-column elementor-col-33 elementor-inner-column" data-element_type="column">
                                                        <div class="elementor-column-wrap elementor-element-populated">
                                                            <div class="elementor-widget-wrap">
                                                                <div data-id="5wsr47w" class="elementor-element elementor-element-5wsr47w elementor-view-default elementor-position-top elementor-vertical-align-top animated fadeInUp card elementor-invisible elementor-widget elementor-widget-icon-box" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:132}" data-element_type="icon-box.default">
                                                                    <div class="elementor-widget-container">
                                                                        <div class="elementor-icon-box-wrapper">
                                                                            <div class="elementor-icon-box-icon"> <span class="elementor-icon elementor-animation-"> <i style="color:#333" class="fa fa-database"></i> </span></div>
                                                                            <div class="elementor-icon-box-content">
                                                                                <h3 class="elementor-icon-box-title"> <span >Premade Sites</span></h3>
                                                                                <p class="elementor-icon-box-description">Import premade websites with one click. Growing list of demos weekly.</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div data-id="5wsr47w" class="elementor-element elementor-element-5wsr47w elementor-view-default elementor-position-top elementor-vertical-align-top animated fadeInUp card elementor-invisible elementor-widget elementor-widget-icon-box" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:132}" data-element_type="icon-box.default">
                                                                    <div class="elementor-widget-container">
                                                                        <div class="elementor-icon-box-wrapper">
                                                                            <div class="elementor-icon-box-icon"> <span class="elementor-icon elementor-animation-"> <i style="color:#333"  class="fa fa-list-alt"></i> </span></div>
                                                                            <div class="elementor-icon-box-content">
                                                                                <h3 class="elementor-icon-box-title"> <span >Premade Sites</span></h3>
                                                                                <p class="elementor-icon-box-description">Import premade websites with one click. Growing list of demos weekly.</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div data-id="n490w37" class="elementor-element elementor-element-n490w37 elementor-column elementor-col-33 elementor-inner-column" data-element_type="column">
                                                        <div class="elementor-column-wrap elementor-element-populated">
                                                            <div class="elementor-widget-wrap">
                                                                <div data-id="5wsr47w" class="elementor-element elementor-element-5wsr47w elementor-view-default elementor-position-top elementor-vertical-align-top animated fadeInUp card elementor-invisible elementor-widget elementor-widget-icon-box" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:132}" data-element_type="icon-box.default">
                                                                    <div class="elementor-widget-container">
                                                                        <div class="elementor-icon-box-wrapper">
                                                                            <div class="elementor-icon-box-icon"> <span class="elementor-icon elementor-animation-"> <i style="color:#333" class="fa fa-database"></i> </span></div>
                                                                            <div class="elementor-icon-box-content">
                                                                                <h3 class="elementor-icon-box-title"> <span >Premade Sites</span></h3>
                                                                                <p class="elementor-icon-box-description">Import premade websites with one click. Growing list of demos weekly.</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div data-id="5wsr47w" class="elementor-element elementor-element-5wsr47w elementor-view-default elementor-position-top elementor-vertical-align-top animated fadeInUp card elementor-invisible elementor-widget elementor-widget-icon-box" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:132}" data-element_type="icon-box.default">
                                                                    <div class="elementor-widget-container">
                                                                        <div class="elementor-icon-box-wrapper">
                                                                            <div class="elementor-icon-box-icon"> <span class="elementor-icon elementor-animation-"> <i style="color:#333"  class="fa fa-list-alt"></i> </span></div>
                                                                            <div class="elementor-icon-box-content">
                                                                                <h3 class="elementor-icon-box-title"> <span >Premade Sites</span></h3>
                                                                                <p class="elementor-icon-box-description">Import premade websites with one click. Growing list of demos weekly.</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>				
            
																	
												</p>


											</div>
                                        </div>
 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
				
				<section data-id="sbndiws" class="elementor-element elementor-element-sbndiws elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-settings="{&quot;background_background&quot;:&quot;none&quot;,&quot;shape_divider_top&quot;:&quot;waves&quot;,&quot;shape_divider_bottom&quot;:&quot;waves&quot;}" data-element_type="section">
                    <div class="elementor-background-overlay"></div>
                    <div class="elementor-shape elementor-shape-top" data-negative="false">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none">
                            <path class="elementor-shape-fill" d="M421.9,6.5c22.6-2.5,51.5,0.4,75.5,5.3c23.6,4.9,70.9,23.5,100.5,35.7c75.8,32.2,133.7,44.5,192.6,49.7c23.6,2.1,48.7,3.5,103.4-2.5c54.7-6,106.2-25.6,106.2-25.6V0H0v30.3c0,0,72,32.6,158.4,30.5c39.2-0.7,92.8-6.7,134-22.4c21.2-8.1,52.2-18.2,79.7-24.2C399.3,7.9,411.6,7.5,421.9,6.5z"></path> </svg>
                    </div>
                    <div class="elementor-shape elementor-shape-bottom" data-negative="false">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none">
                            <path class="elementor-shape-fill" d="M421.9,6.5c22.6-2.5,51.5,0.4,75.5,5.3c23.6,4.9,70.9,23.5,100.5,35.7c75.8,32.2,133.7,44.5,192.6,49.7c23.6,2.1,48.7,3.5,103.4-2.5c54.7-6,106.2-25.6,106.2-25.6V0H0v30.3c0,0,72,32.6,158.4,30.5c39.2-0.7,92.8-6.7,134-22.4c21.2-8.1,52.2-18.2,79.7-24.2C399.3,7.9,411.6,7.5,421.9,6.5z"></path> </svg>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <footer id="footerwrap" class="center-widgets">
        <section id="footer">
            <div class="container footer-flex-center">
                <div class="footer-widget">
                    <div class="textwidget"><img style="height:100px" src="assets/images/logococo.png" alt="" /></div>
                </div>
            </div>
        </section>
    </footer>
    <div id="loading">
        <div id="loading-center">
            <div id="loading-center-absolute2">
                <div class="object2" id="object1"></div>
                <div class="object2" id="object2"></div>
                <div class="object2" id="object3"></div>
            </div>
        </div>
    </div>
    <script type="text/javascript" defer src="http://ewizz.net/themes/designr/modern/wp-content/cache/autoptimize/js/autoptimize_e313d66ee9322233fcbcc4d696f8866d.js"></script>
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
		for (var i=1;i<=4;i++) {
			if (obj.id=='t'+i) var ptr=i
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
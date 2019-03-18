﻿<?php              
error_reporting(E_ALL);
include('admin/connect.php');
include('dbconfig.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-126673009-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());

        gtag('config', 'UA-126673009-1');
        gtag('config', 'AW-774008992');
    </script>
	<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5c475e03ab5284048d0e156e/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
<style>
       footer-right ul.social-icons2 {
            
            padding-top: 20px;
        }
		footer .footer-right ul.social-icons2 li {
	            display:inline;
	            margin-right: 5px;
		}
            
footer .footer-right ul.social-icons2 li a i.fa.fa-facebook {
	background-color:#3b5998;
	width:42px;
    height:42px;
    line-height:44px;
	border-radius:50%;
	-webkit-border-radius:50%;
	-moz-border-radius:50%;
	-o-border-radius:50%;
	-ms-border-radius:50%;
	font-size:21px;
	color:#fff;
	text-align: center;
    vertical-align: middle;	
	 transition:0.5s all;
	-webkit-transition:0.5s all;
	-moz-transition:0.5s all;
	-o-transition:0.5s all;
	-ms-transition:0.5s all;
}
footer .footer-right ul.social-icons2 li a i.fa.fa-instagram {
	background-color:#55acee;
	    width:42px;
    height:42px;
    line-height:44px;
	border-radius:50%;
	-webkit-border-radius:50%;
	-moz-border-radius:50%;
	-o-border-radius:50%;
	-ms-border-radius:50%;
	font-size:22px;
	color:#fff;
	text-align: center;
    vertical-align: middle;
	 transition:0.5s all;
	-webkit-transition:0.5s all;
	-moz-transition:0.5s all;
	-o-transition:0.5s all;
	-ms-transition:0.5s all;
}
footer .footer-right ul.social-icons2 li a i.fa.fa-linkedin {
	background-color:#e68523;
	border-radius:50%;
	-webkit-border-radius:50%;
	-moz-border-radius:50%;
	-o-border-radius:50%;
	-ms-border-radius:50%;
	font-size:21px;
	color:#fff;
	width:42px;
    height:42px;
    line-height:42px;
	text-align: center;
    vertical-align: middle;
	 transition:0.5s all;
	-webkit-transition:0.5s all;
	-moz-transition:0.5s all;
	-o-transition:0.5s all;
	-ms-transition:0.5s all;
}
footer .footer-right ul.social-icons2 li a i.fa.fa-youtube {
	background-color:#dc4e41;
	width:42px;
    height:42px;
    line-height:44px;
	border-radius:50%;
	-webkit-border-radius:50%;
	-moz-border-radius:50%;
	-o-border-radius:50%;
	-ms-border-radius:50%;
	font-size:22px;
	color:#fff;
	text-align: center;
    vertical-align: middle;
	 transition:0.5s all;
	-webkit-transition:0.5s all;
	-moz-transition:0.5s all;
	-o-transition:0.5s all;
	-ms-transition:0.5s all;
}
footer .footer-right ul.social-icons2 li a i.fa.fa-facebook:hover {
	background-color:#002573;
}
footer .footer-right ul.social-icons2 li a i.fa.fa-instagram:hover {
	background-color:#004A82;
}
footer .footer-right ul.social-icons2 li a i.fa.fa-linkedin:hover { 
	background-color:#BB5E00;
}
footer .footer-right ul.social-icons2 li a i.fa.fa-youtube:hover { 
	background-color:#8A0B00;
}
</style>
    <meta charset="UTF-8">
    <!-- viewport meta -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Algo8 is empowering Businesses through Data Science, Machine learning and Artificial Intelligence">
    <meta name="keywords" content="ALGO8, ai, artificial intelligence, machine learning, Data Science">

    <title>Home | ALGO8.AI | ARTIFICIAL INTELLIGENCE</title>

    <!-- inject:css -->
    <link rel="icon" href="images/favicon.ico" sizes="48x48">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/simple-line-icons.css">
    <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap/bootstrap-reboot.css">
    <link rel="stylesheet" href="style.css">
    <!-- endinject -->
</head>
<body>
    <!-- Preloader -->
    <div class="preloader">
        <div id="loader">
            <div id="box"></div>
            <div id="hill"></div>
        </div>
    </div>
    <!-- Header Starts -->
    <header>
        <!-- Starts: .main-menu -->
        <div class="main-menu">
            <div class="container">
                <nav class="navbar navbar-expand-lg">
				
                    <a class="navbar-brand" href="index.php">
					<?php
							while($row1 = mysql_fetch_array($navbar1)){
					        ?>
                        <img src="<?php echo 'admin/site-images/'.$row1['image']?>" alt="Logo ALgo8" >
                    </a>
					 <?php
				               }
							   ?>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown"
                            aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon icon-menu"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav">
                            <li class="nav-item dropdown">
							<?php
							while($row = mysql_fetch_array($navbar2)){

					        ?>
                                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Platform</a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="loc8.php">
                                        <?php echo $row['subheading1'] ?>
                                    </a>
                                    <a class="dropdown-item" href="opini8.php">
                                        <?php echo $row['subheading2'] ?>
                                    </a>
                                    <!--<a class="dropdown-item" href="#">
                                        Algo8 Data Lake aaS
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        Machine Learning aaS
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        Deep Learning aaS
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        Data Science Team aaS
                                    </a>-->
                                    <a class="dropdown-item" href="http://theikigailab.com/" target="_blank"><?php echo $row['subheading3'] ?></a>
                                </div>
                            </li>
							<?php
							}					
					?>
                            <li class="nav-item dropdown">
							<?php
							while($row = mysql_fetch_array($navbar3)){

					        ?>
                                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Solutions</a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="banking.php"><?php echo $row['subheading1'] ?></a>
                                    <a class="dropdown-item" href="retail.php"><?php echo $row['subheading2'] ?></a>
                                    <a class="dropdown-item" href="telecom.php"><?php echo $row['subheading3'] ?></a>
                                    <a class="dropdown-item" href="insurance.php"><?php echo $row['subheading4'] ?></a>
                                    <a class="dropdown-item" href="healthcare.php"><?php echo $row['subheading5'] ?></a>
                                    <a class="dropdown-item" href="manufacturing.php"><?php echo $row['subheading6'] ?></a>
                                    <a class="dropdown-item" href="government.php"><?php echo $row['subheading7'] ?></a>
                                </div>
                            </li>
							<?php
							}					
					?>
                            <li class="nav-item dropdown">
							<?php
							while($row = mysql_fetch_array($navbar4)){

					        ?>
                                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">About</a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="about.php"><?php echo $row['subheading1'] ?></a>
                                    <a class="dropdown-item" href="team.php"><?php echo $row['subheading2'] ?></a>
                                    <!--<a class="dropdown-item" href="#">Algo8 newsroom</a>-->
                                    <a class="dropdown-item" href="careers.php"><?php echo $row['subheading3'] ?></a>
									<a class="dropdown-item" href="blogs/blog-classic.php"><?php echo $row['subheading4'] ?></a>
                                </div>
                            </li>
							<?php
							}					
					?>
                            <li class="nav-item">
							<?php
							while($row = mysql_fetch_array($navbar5)){

					        ?>
                                <a class="nav-link" href="careers.php" >we are hiring</a>
                            </li>
							<?php
							}					
					?>
                            <!-- Ends .nav-right -->
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!-- Ends: .main-menu -->
    </header>
    <!-- Ends: header -->
    <!-- Start: .hero-area -->
   <section class="intro-video player" id="intro-video" data-property="{videoURL:'https://youtu.be/jAQPXD_PsHA',containment:'self',autoPlay:true, mute:true, opacity:6}">
        <div class="intro-video-content">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 style="color:#fff">
                            Empowering <span>Business</span> and <span>Individuals</span> through
                            <span>Artificial Intelligence</span>
                        </h1>
                        <p>
                            We create potent data driven tech which is decisive in driving our clients growth.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="project-flow section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12 section-title">
				<?php
							while($row = mysql_fetch_array($fact1)){


					     ?>
                    <h2>
                        <?php echo $row['category2'] ?>
                    </h2>
                </div>
				<?php
							}
							?>
                <!-- Ends: .section-title -->
                <div class="col-md-12">
                    <div class="flow-process">
                        <div class="row">
                                                        <!-- Ends: .col-md-3 -->
                            <div class="col-lg-2 col-sm-6 flow-wrapper">
                                <div class="flow-single">
                                    <div class="desc">
									<?php
							while($row = mysql_fetch_array($fact3)){


					     ?>
                                        <h3 class="color2"><?php echo $row['category2'] ?></h3>
                                        <p><?php echo $row['category1'] ?></p>
                                    </div>
									<?php
							}
							?>
                                    <div class="divider divider-down">
                                        <span class="color2-bg"></span>
                                    </div>
                                    <div class="icon icon-down color2">
                                        <img src="images/workforce_1.png" style="height:50px; widhth:50px" alt="icon-workforce" >
                                    </div>
                                </div>
                            </div>
                            <!-- Ends: .col-md-3 -->
                            <div class="col-lg-2 col-sm-6 flow-wrapper">
                                <div class="flow-single">
                                    <div class="icon color1">
                                        <img src="images/clients_1.png" style="height:50px; widhth:50px" alt="icon-clients" >
                                    </div>
                                    <div class="divider">
                                        <span class="color1-bg"></span>
                                    </div>
                                    <div class="desc">
									<?php
							while($row = mysql_fetch_array($fact4)){


					     ?>
                                        <h3 class="color1"><?php echo $row['category2'] ?></h3>
                                        <p><?php echo $row['category1'] ?></p>
                                    </div>
									<?php
							}
							?>
                                </div>
                            </div>
                            <!-- Ends: .col-md-3 -->
                            <div class="col-lg-2 col-sm-6 flow-wrapper">
                                <div class="flow-single">
                                    <div class="desc">
									<?php
							while($row = mysql_fetch_array($fact5)){


					     ?>
                                        <h3 class="pcolor"><?php echo $row['category2'] ?></h3>
                                        <p><?php echo $row['category1'] ?></p>
                                    </div>
									<?php
							}
							?>
                                    <div class="divider divider-down">
                                        <span class="pcolor-bg"></span>
                                    </div>
                                    <div class="icon icon-down pcolor">
                                          <img src="images/projects_1.png" style="height:50px; widhth:50px" alt="icon-projects" >
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-sm-6 flow-wrapper">
                                <div class="flow-single">
                                    <div class="icon color2">
                                        <img src="images/r&d_1.png" style="height:50px; widhth:50px" alt="icon-r&d" >
                                    </div>
                                    <div class="divider">
                                        <span class="color2-bg"></span>
                                    </div>
                                    <div class="desc">
									<?php
							while($row = mysql_fetch_array($fact6)){


					     ?>
                                        <h3 class="color2"><?php echo $row['category2'] ?> </h3>
										
                                        <p><?php echo $row['category1'] ?></p>
                                    </div>
									<?php
							}
							?>
                                </div>
                            </div>
                            <div class="col-lg-2 col-sm-6 flow-wrapper">
                                <div class="flow-single">
                                    <div class="desc">
									<?php
							while($row = mysql_fetch_array($fact7)){


					     ?>
                                        <h3 class="color1"><?php echo $row['category2'] ?></h3>
										
                                        <p><?php echo $row['category1'] ?></p>
                                    </div>
									<?php
							}
							?>
                                    <div class="divider divider-down">
                                        <span class="color1-bg"></span>
                                    </div>
                                    <div class="icon icon-down color1">
                                         <img src="images/global_1.png" style="height:50px; widhth:50px" alt="icon-global" class="icon-globe-alt">
                                    </div>
                                </div>
                            </div>
							<div class="col-lg-2 col-sm-6 flow-wrapper">
                                <div class="flow-single">
                                    <div class="icon color1">
                                        <img src="images/clients_1.png" style="height:50px; widhth:50px" alt="icon-clients" >
                                    </div>
                                    <div class="divider">
                                        <span class="color1-bg"></span>
                                    </div>
                                    <div class="desc">
									<?php
							while($row = mysql_fetch_array($fact2)){


					     ?>
                                        <h3 class="color1"><?php echo $row['category2'] ?></h3>
                                        <p><?php echo $row['category1'] ?></p>
                                    </div>
									<?php
							}
							?>
                                </div>
                            </div>
                            <!-- Ends: .col-md-3 -->
                        </div>
                    </div>
                    <!-- Ends: .flow-process -->
                </div>
                <!-- Ends: .col-md-12 -->
            </div>
        </div>
    </section>
    <script type="text/javascript">
        !function (g, i, m, f, d, k, e) { new (function () { }); var c = { C: m.PI, F: m.max, s: m.min, Rb: m.ceil, hb: m.floor, kb: m.abs, jb: m.sin, cc: m.cos, Zc: m.tan, Ue: m.atan, Pb: m.sqrt, m: m.pow, u: m.round }, h = { Se: function (a) { return -c.cc(a * c.C) / 2 + .5 }, Bb: function (a) { return a }, Re: function (a) { return a * a }, hd: function (a) { return -a * (a - 2) }, oe: function (a) { return (a *= 2) < 1 ? 1 / 2 * a * a : -1 / 2 * (--a * (a - 2) - 1) }, Qe: function (a) { return a * a * a }, Pe: function (a) { return (a -= 1) * a * a + 1 }, Oe: function (a) { return (a *= 2) < 1 ? 1 / 2 * a * a * a : 1 / 2 * ((a -= 2) * a * a + 2) }, Ne: function (a) { return a * a * a * a }, Me: function (a) { return -((a -= 1) * a * a * a - 1) }, Le: function (a) { return (a *= 2) < 1 ? 1 / 2 * a * a * a * a : -1 / 2 * ((a -= 2) * a * a * a - 2) }, Ke: function (a) { return a * a * a * a * a }, Ie: function (a) { return (a -= 1) * a * a * a * a + 1 }, He: function (a) { return (a *= 2) < 1 ? 1 / 2 * a * a * a * a * a : 1 / 2 * ((a -= 2) * a * a * a * a + 2) }, Ge: function (a) { return 1 - c.cc(c.C / 2 * a) }, pe: function (a) { return c.jb(c.C / 2 * a) }, We: function (a) { return -1 / 2 * (c.cc(c.C * a) - 1) }, ne: function (a) { return a == 0 ? 0 : c.m(2, 10 * (a - 1)) }, Xd: function (a) { return a == 1 ? 1 : -c.m(2, -10 * a) + 1 }, me: function (a) { return a == 0 || a == 1 ? a : (a *= 2) < 1 ? 1 / 2 * c.m(2, 10 * (a - 1)) : 1 / 2 * (-c.m(2, -10 * --a) + 2) }, Zd: function (a) { return -(c.Pb(1 - a * a) - 1) }, fe: function (a) { return c.Pb(1 - (a -= 1) * a) }, he: function (a) { return (a *= 2) < 1 ? -1 / 2 * (c.Pb(1 - a * a) - 1) : 1 / 2 * (c.Pb(1 - (a -= 2) * a) + 1) }, je: function (a) { if (!a || a == 1) return a; var b = .3, d = .075; return -(c.m(2, 10 * (a -= 1)) * c.jb((a - d) * 2 * c.C / b)) }, le: function (a) { if (!a || a == 1) return a; var b = .3, d = .075; return c.m(2, -10 * a) * c.jb((a - d) * 2 * c.C / b) + 1 }, ge: function (a) { if (!a || a == 1) return a; var b = .45, d = .1125; return (a *= 2) < 1 ? -.5 * c.m(2, 10 * (a -= 1)) * c.jb((a - d) * 2 * c.C / b) : c.m(2, -10 * (a -= 1)) * c.jb((a - d) * 2 * c.C / b) * .5 + 1 }, be: function (a) { var b = 1.70158; return a * a * ((b + 1) * a - b) }, Wd: function (a) { var b = 1.70158; return (a -= 1) * a * ((b + 1) * a + b) + 1 }, Td: function (a) { var b = 1.70158; return (a *= 2) < 1 ? 1 / 2 * a * a * (((b *= 1.525) + 1) * a - b) : 1 / 2 * ((a -= 2) * a * (((b *= 1.525) + 1) * a + b) + 2) }, Nd: function (a) { return 1 - h.Lc(1 - a) }, Lc: function (a) { return a < 1 / 2.75 ? 7.5625 * a * a : a < 2 / 2.75 ? 7.5625 * (a -= 1.5 / 2.75) * a + .75 : a < 2.5 / 2.75 ? 7.5625 * (a -= 2.25 / 2.75) * a + .9375 : 7.5625 * (a -= 2.625 / 2.75) * a + .984375 }, Ye: function (a) { return a < 1 / 2 ? h.Nd(a * 2) * .5 : h.Lc(a * 2 - 1) * .5 + .5 }, Of: c.Rb, jg: c.hb }; var b = new function () { var j = this, G = 1, pb = 2, sb = 3, rb = 4, Z = 5, H, r = 0, n = 0, B = 0, A = navigator, fb = A.appName, p = A.userAgent, q = parseFloat; function Eb() { if (!H) { H = { Qc: "ontouchstart" in g || "createTouch" in i }; var a; if (A.pointerEnabled || (a = A.msPointerEnabled)) H.Sd = a ? "msTouchAction" : "touchAction" } return H } function u(h) { if (!r) { r = -1; if (fb == "Microsoft Internet Explorer" && !!g.attachEvent && !!g.ActiveXObject) { var e = p.indexOf("MSIE"); r = G; n = q(p.substring(e + 5, p.indexOf(";", e)));/*@cc_on@*/ } else if (fb == "Netscape" && !!g.addEventListener) { var d = p.indexOf("Firefox"), b = p.indexOf("Safari"), f = p.indexOf("Chrome"), c = p.indexOf("AppleWebKit"); if (d >= 0) { r = pb; n = q(p.substring(d + 8)) } else if (b >= 0) { var i = p.substring(0, b).lastIndexOf("/"); r = f >= 0 ? rb : sb; n = q(p.substring(i + 1, b)) } else { var a = /Trident\/.*rv:([0-9]{1,}[\.0-9]{0,})/i.exec(p); if (a) { r = G; n = q(a[1]) } } if (c >= 0) B = q(p.substring(c + 12)) } else { var a = /(opera)(?:.*version|)[ \/]([\w.]+)/i.exec(p); if (a) { r = Z; n = q(a[2]) } } } return h == r } function v() { return u(G) } function qb() { return u(sb) } function ub() { return u(Z) } function mb() { return qb() && B > 534 && B < 535 } function I() { u(); return B > 537 || n > 42 || r == G && n >= 11 } function nb(a) { var b, c; return function (g) { if (!b) { b = d; var f = a.substr(0, 1).toUpperCase() + a.substr(1); l([a].concat(["WebKit", "ms", "Moz", "O", "webkit"]), function (h, d) { var b = a; if (d) b = h + f; if (g.style[b] != e) return c = b }) } return c } } function lb(b) { var a; return function (c) { a = a || nb(b)(c) || b; return a } } var L = lb("transform"); function eb(a) { return {}.toString.call(a) } var bb = {}; l(["Boolean", "Number", "String", "Function", "Array", "Date", "RegExp", "Object"], function (a) { bb["[object " + a + "]"] = a.toLowerCase() }); function l(b, d) { var a, c; if (eb(b) == "[object Array]") { for (a = 0; a < b.length; a++)if (c = d(b[a], a, b)) return c } else for (a in b) if (c = d(b[a], a, b)) return c } function F(a) { return a == f ? String(a) : bb[eb(a)] || "object" } function C(a) { try { return F(a) == "object" && !a.nodeType && a != a.window && (!a.constructor || {}.hasOwnProperty.call(a.constructor.prototype, "isPrototypeOf")) } catch (b) { } } function jb(b, a) { setTimeout(b, a || 0) } function ab(b, d, c) { var a = !b || b == "inherit" ? "" : b; l(d, function (c) { var b = c.exec(a); if (b) { var d = a.substr(0, b.index), e = a.substr(b.index + b[0].length + 1, a.length - 1); a = d + e } }); a && (c += (!a.indexOf(" ") ? "" : " ") + a); return c } function gb(a, b) { if (a === e) a = b; return a } j.Oc = Eb; j.Fd = v; j.Hf = qb; j.nf = I; nb("transform"); j.Rc = function () { return n }; j.fc = jb; j.I = gb; j.sb = function (a, b) { b.call(a); return z({}, a) }; function U(a) { a.constructor === U.caller && a.E && a.E.apply(a, U.caller.arguments) } j.E = U; j.Pc = function (a) { if (j.Xf(a)) a = i.getElementById(a); return a }; function t(a) { return a || g.event } j.Vf = t; j.Gb = function (b) { b = t(b); var a = b.target || b.srcElement || i; if (a.nodeType == 3) a = j.Tc(a); return a }; j.Pd = function (a) { a = t(a); return a.relatedTarget || a.toElement }; j.gd = function (a) { a = t(a); return a.which || ([0, 1, 3, 0, 2])[a.button] || a.charCode || a.keyCode }; j.Jc = function (a) { a = t(a); return { x: a.clientX || 0, y: a.clientY || 0 } }; j.Lf = function (b, a) { return b.x >= a.x && b.x <= a.x + a.w && b.y >= a.y && b.y <= a.y + a.h }; j.Od = function (c, e) { var a = b.Wf(e), d = b.Jc(c); return j.Lf(d, a) }; function w(c, d, a) { if (a !== e) c.style[d] = a == e ? "" : a; else { var b = c.currentStyle || c.style; a = b[d]; if (a == "" && g.getComputedStyle) { b = c.ownerDocument.defaultView.getComputedStyle(c, f); b && (a = b.getPropertyValue(d) || b[d]) } return a } } function X(b, c, a, d) { if (a === e) { a = q(w(b, c)); isNaN(a) && (a = f); return a } if (a == f) a = ""; else d && (a += "px"); w(b, c, a) } function m(c, a) { var d = a ? X : w, b; if (a & 4) b = lb(c); return function (e, f) { return d(e, b ? b(e) : c, f, a & 2) } } function zb(a) { return q(a.style.opacity || "1") } function Bb(b, a) { b.style.opacity = a == 1 || a == f ? "" : c.u(a * 100) / 100 } var N = { U: ["rotate"], ab: ["rotateX"], bb: ["rotateY"], ec: ["skewX"], Vb: ["skewY"] }; if (!I()) N = z(N, { P: ["scaleX", 2], O: ["scaleY", 2], db: ["translateZ", 1] }); function M(c, a) { var b = ""; if (a) { if (v() && n && n < 10) { delete a.ab; delete a.bb; delete a.db } l(a, function (d, c) { var a = N[c]; if (a) { var e = a[1] || 0; if (O[c] != d) b += " " + a[0] + "(" + d + (["deg", "px", ""])[e] + ")" } }); if (I()) { if (a.pb || a.ob || a.db != e) b += " translate3d(" + (a.pb || 0) + "px," + (a.ob || 0) + "px," + (a.db || 0) + "px)"; if (a.P == e) a.P = 1; if (a.O == e) a.O = 1; if (a.P != 1 || a.O != 1) b += " scale3d(" + a.P + ", " + a.O + ", 1)" } } c.style[L(c)] = b } j.df = m("transformOrigin", 4); j.rf = m("backfaceVisibility", 4); j.Nb = m("transformStyle", 4); j.Gf = m("perspective", 6); j.Bf = m("perspectiveOrigin", 4); j.Bd = function (b, a) { if (v() && n < 9) b.style.zoom = a == 1 ? "" : a; else { var c = L(b), f = a == 1 ? "" : "scale(" + a + ")", e = b.style[c], g = new RegExp(/[\s]*scale\(.*?\)/g), d = ab(e, [g], f); b.style[c] = d } }; j.eb = function (a, d, b, c) { a = j.Pc(a); if (a.addEventListener) { d == "mousewheel" && a.addEventListener("DOMMouseScroll", b, c); a.addEventListener(d, b, c) } else if (a.attachEvent) { a.attachEvent("on" + d, b); c && a.setCapture && a.setCapture() } }; j.nb = function (a, c, d, b) { a = j.Pc(a); if (a.removeEventListener) { c == "mousewheel" && a.removeEventListener("DOMMouseScroll", d, b); a.removeEventListener(c, d, b) } else if (a.detachEvent) { a.detachEvent("on" + c, d); b && a.releaseCapture && a.releaseCapture() } }; j.Wb = function (a) { a = t(a); a.preventDefault && a.preventDefault(); a.cancel = d; a.returnValue = k }; j.vf = function (a) { a = t(a); a.stopPropagation && a.stopPropagation(); a.cancelBubble = d }; j.Sb = function (d, c) { var a = [].slice.call(arguments, 2), b = function () { var b = a.concat([].slice.call(arguments, 0)); return c.apply(d, b) }; return b }; j.Wf = function (b) { var a = b.getBoundingClientRect(); return { x: a.left, y: a.top, w: a.right - a.left, h: a.bottom - a.top } }; j.rb = function (d, c) { for (var b = [], a = d.firstChild; a; a = a.nextSibling)(c || a.nodeType == 1) && b.push(a); return b }; function db(a, c, e, b) { b = b || "u"; for (a = a ? a.firstChild : f; a; a = a.nextSibling)if (a.nodeType == 1) { if (D(a, b) == c) return a; if (!e) { var d = db(a, c, e, b); if (d) return d } } } j.wf = db; j.V = function (a, f, d, g) { d = d || "u"; var e; do { if (a.nodeType == 1) { var c; d && (c = D(a, d)); if (c && c == gb(f, c) || g == a.tagName) { e = a; break } } a = b.Tc(a) } while (a && a != i.body); return e }; j.Df = function (a) { return W(["INPUT", "TEXTAREA", "SELECT"])[a.tagName] }; function z() { var f = arguments, d, c, b, a, h = 1 & f[0], g = 1 + h; d = f[g - 1] || {}; for (; g < f.length; g++)if (c = f[g]) for (b in c) { a = c[b]; if (a !== e) { a = c[b]; var i = d[b]; d[b] = h && (C(i) || C(a)) ? z(h, {}, i, a) : a } } return d } j.tb = z; j.Uc = function (a) { return F(a) == "function" }; j.Ef = function (a) { return F(a) == "array" }; j.Xf = function (a) { return F(a) == "string" }; j.Gc = function (a) { return !isNaN(q(a)) && isFinite(a) }; j.f = l; j.Fe = C; function Q(a) { return i.createElement(a) } j.qc = function () { return Q("DIV") }; j.pf = function () { }; function E(b, c, a) { if (a == e) return b.getAttribute(c); b.setAttribute(c, a) } function D(a, b) { return E(a, b) || E(a, "data-" + b) } j.n = E; j.K = D; j.l = function (d, b, c) { var a = j.cf(D(d, b)); if (isNaN(a)) a = c; return a }; function W(b) { var a = {}; l(b, function (b) { if (b != e) a[b] = b }); return a } j.jd = W; j.ff = function (a) { a && (a = a.toLowerCase()); return a }; j.Tc = function (a) { return a.parentNode }; j.ub = function (a) { j.fb(a, "none") }; j.sd = function (a, b) { j.fb(a, b ? "none" : "") }; j.mf = function (b, a) { b.removeAttribute(a) }; j.Kf = function (d, a) { if (a) d.style.clip = "rect(" + c.u(a.g || a.z || 0) + "px " + c.u(a.q) + "px " + c.u(a.p) + "px " + c.u(a.i || a.A || 0) + "px)"; else if (a !== e) { var h = d.style.cssText, g = [new RegExp(/[\s]*clip: rect\(.*?\)[;]?/i), new RegExp(/[\s]*cliptop: .*?[;]?/i), new RegExp(/[\s]*clipright: .*?[;]?/i), new RegExp(/[\s]*clipbottom: .*?[;]?/i), new RegExp(/[\s]*clipleft: .*?[;]?/i)], f = ab(h, g, ""); b.eg(d, f) } }; j.dg = function (b, a) { if (a) b.style.backgroundColor = "rgba(" + c.u(a.pd) + "," + c.u(a.od) + "," + c.u(a.md) + "," + a.L + ")" }; j.qb = function () { return +new Date }; j.X = function (b, a) { b.appendChild(a) }; j.lb = function (b, a, c) { (c || a.parentNode).insertBefore(b, a) }; j.uc = function (b, a) { a = a || b.parentNode; a && a.removeChild(b) }; j.Tf = function (a, b) { l(a, function (a) { j.uc(a, b) }) }; j.Ld = function (a) { j.Tf(j.rb(a, d), a) }; function hb() { l([].slice.call(arguments, 0), function (a) { if (j.Ef(a)) hb.apply(f, a); else a && a.o() }) } j.o = hb; j.Rf = function (a, b) { var c = j.Tc(a); if (b & 1) { j.S(a, (j.M(c) - j.M(a)) / 2); j.Qd(a, f) } if (b & 2) { j.T(a, (j.N(c) - j.N(a)) / 2); j.Id(a, f) } }; var R = { g: f, q: f, p: f, i: f, Q: f, J: f }; j.Uf = function (a) { var b = j.qc(); s(b, { yd: "block", vb: j.Xb(a), g: 0, i: 0, Q: 0, J: 0 }); var d = j.xd(a, R); j.lb(b, a); j.X(b, a); var e = j.xd(a, R), c = {}; l(d, function (b, a) { if (b == e[a]) c[a] = b }); s(b, R); s(b, c); s(a, { g: 0, i: 0 }); return c }; j.Sf = function (b, a) { return parseInt(b, a || 10) }; j.cf = q; j.Dd = function (b, a) { var c = i.body; while (a && b !== a && c !== a) a = a.parentNode; return b === a }; function T(d, c, b) { var a = d.cloneNode(!c); !b && j.mf(a, "id"); return a } j.Jb = T; j.wb = function (e, f) { var a = new Image; function b(e, d) { j.nb(a, "load", b); j.nb(a, "abort", c); j.nb(a, "error", c); f && f(a, d) } function c(a) { b(a, d) } if (ub() && n < 11.6 || !e) b(!e); else { j.eb(a, "load", b); j.eb(a, "abort", c); j.eb(a, "error", c); a.src = e } }; j.ag = function (e, a, d) { var b = 1; function c(c) { b--; if (a && c && c.src == a.src) a = c; !b && d && d(a) } l(e, function (a) { if (a.src) { b++; j.wb(a.src, c) } }); c() }; j.D = w; m("backgroundColor"); j.Kc = m("overflow"); j.rc = m("pointerEvents"); j.T = m("top", 2); j.Qd = m("right", 2); j.Id = m("bottom", 2); j.S = m("left", 2); j.M = m("width", 2); j.N = m("height", 2); m("marginLeft", 2); m("marginTop", 2); j.Xb = m("position"); j.fb = m("display"); j.H = m("zIndex", 1); j.ce = function (b, a, c) { if (a !== e) Bb(b, a, c); else return zb(b) }; j.eg = function (a, b) { if (b != e) a.style.cssText = b; else return a.style.cssText }; j.de = function (b, a) { if (a === e) { a = w(b, "backgroundImage") || ""; var c = /\burl\s*\(\s*["']?([^"'\r\n,]+)["']?\s*\)/gi.exec(a) || []; return c[1] } w(b, "backgroundImage", a ? "url('" + a + "')" : "") }; var K; j.ee = K = { L: j.ce, g: j.T, q: j.Qd, p: j.Id, i: j.S, Q: j.M, J: j.N, vb: j.Xb, yd: j.fb, zb: j.H }; j.xd = function (c, b) { var a = {}; l(b, function (d, b) { if (K[b]) a[b] = K[b](c) }); return a }; function s(b, h) { var a = I(), d = mb(), g = L(b); function c(l, a) { a = a || {}; var h = a.db || 0, i = (a.ab || 0) % 360, j = (a.bb || 0) % 360, k = (a.U || 0) % 360, c = a.P, d = a.O, f = a.tg; if (c == e) c = 1; if (d == e) d = 1; if (f == e) f = 1; var b = new yb(a.pb, a.ob, h); b.sc(c, d, f); b.Yd(a.ec, a.Vb); b.ab(i); b.bb(j); b.ke(k); b.Yb(a.A, a.z); l.style[g] = b.ie() } s = function (g, b) { b = b || {}; var i = b.A, k = b.z, h; l(K, function (a, c) { h = b[c]; h !== e && a(g, h) }); j.Kf(g, b.c); j.dg(g, b.ib); if (!a) { i != e && j.S(g, (b.Wc || 0) + i); k != e && j.T(g, (b.id || 0) + k) } if (b.ae) if (d) jb(j.Sb(f, M, g, b)); else if (a) c(g, b); else M(g, b) }; j.W = s; s(b, h) } j.W = s; function yb(j, k, n) { var d = this, b = [1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, j || 0, k || 0, n || 0, 1], i = c.jb, h = c.cc, l = c.Zc; function g(a) { return a * c.C / 180 } function m(c, e, l, m, o, r, t, u, w, z, A, C, E, b, f, k, a, g, i, n, p, q, s, v, x, y, B, D, F, d, h, j) { return [c * a + e * p + l * x + m * F, c * g + e * q + l * y + m * d, c * i + e * s + l * B + m * h, c * n + e * v + l * D + m * j, o * a + r * p + t * x + u * F, o * g + r * q + t * y + u * d, o * i + r * s + t * B + u * h, o * n + r * v + t * D + u * j, w * a + z * p + A * x + C * F, w * g + z * q + A * y + C * d, w * i + z * s + A * B + C * h, w * n + z * v + A * D + C * j, E * a + b * p + f * x + k * F, E * g + b * q + f * y + k * d, E * i + b * s + f * B + k * h, E * n + b * v + f * D + k * j] } function e(c, a) { return m.apply(f, (a || b).concat(c)) } d.sc = function (a, c, d) { if (a != 1 || c != 1 || d != 1) b = e([a, 0, 0, 0, 0, c, 0, 0, 0, 0, d, 0, 0, 0, 0, 1]) }; d.Yb = function (a, c, d) { b[12] += a || 0; b[13] += c || 0; b[14] += d || 0 }; d.ab = function (c) { if (c) { a = g(c); var d = h(a), f = i(a); b = e([1, 0, 0, 0, 0, d, f, 0, 0, -f, d, 0, 0, 0, 0, 1]) } }; d.bb = function (c) { if (c) { a = g(c); var d = h(a), f = i(a); b = e([d, 0, -f, 0, 0, 1, 0, 0, f, 0, d, 0, 0, 0, 0, 1]) } }; d.ke = function (c) { if (c) { a = g(c); var d = h(a), f = i(a); b = e([d, f, 0, 0, -f, d, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1]) } }; d.Yd = function (a, c) { if (a || c) { j = g(a); k = g(c); b = e([1, l(k), 0, 0, l(j), 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1]) } }; d.ie = function () { return "matrix3d(" + b.join(",") + ")" } } var O = { Wc: 0, id: 0, A: 0, z: 0, Cb: 1, P: 1, O: 1, U: 0, ab: 0, bb: 0, pb: 0, ob: 0, db: 0, ec: 0, Vb: 0 }; j.qd = function (c, d) { var a = c || {}; if (c) if (b.Uc(c)) a = { I: a }; else if (b.Uc(c.c)) a.c = { I: c.c }; a.I = a.I || d; if (a.c) a.c.I = a.c.I || d; if (a.ib) a.ib.I = a.ib.I || d; return a }; function ib(c, a) { var b = {}; l(c, function (c, d) { var f = c; if (a[d] != e) if (j.Gc(c)) f = c + a[d]; else f = ib(c, a[d]); b[d] = f }); return b } j.Ud = ib; j.Vd = function (o, j, s, t, E, F, p) { var a = j; if (o) { a = {}; for (var i in j) { var G = F[i] || 1, B = E[i] || [0, 1], g = (s - B[0]) / B[1]; g = c.s(c.F(g, 0), 1); g = g * G; var y = c.hb(g); if (g != y) g -= y; var k = t.I || h.Bb, m, C = o[i], r = j[i]; if (b.Gc(r)) { k = t[i] || k; var D = k(g); m = C + r * D } else { m = z({ ac: {} }, o[i]); var A = t[i] || {}; l(r.ac || r, function (d, a) { k = A[a] || A.I || k; var c = k(g), b = d * c; m.ac[a] = b; m[a] += b }) } a[i] = m } var x = l(j, function (b, a) { return O[a] != e }); x && l(O, function (c, b) { if (a[b] == e && o[b] !== e) a[b] = o[b] }); if (x) { if (a.Cb) a.P = a.O = a.Cb; a.Hb = p.Hb; a.Ib = p.Ib; if (v() && n >= 11 && (j.A || j.z) && s != 0 && s != 1) a.U = a.U || 1e-8; a.ae = d } } if (j.c && p.Yb) { var q = a.c.ac, w = (q.g || 0) + (q.p || 0), u = (q.i || 0) + (q.q || 0); a.i = (a.i || 0) + u; a.g = (a.g || 0) + w; a.c.i -= u; a.c.q -= u; a.c.g -= w; a.c.p -= w } if (a.c && !a.c.g && !a.c.i && !a.c.z && !a.c.A && a.c.q == p.Hb && a.c.p == p.Ib) a.c = f; return a } }; function o() { var a = this, f, e = [], c = []; function k(a, b) { e.push({ Fb: a, Db: b }) } function j(a, c) { b.f(e, function (b, d) { b.Fb == a && b.Db === c && e.splice(d, 1) }) } function i() { e = [] } function h() { b.f(c, function (a) { b.nb(a.td, a.Fb, a.Db, a.rd) }); c = [] } a.xc = function () { return f }; a.a = function (e, a, d, f) { b.eb(e, a, d, f); c.push({ td: e, Fb: a, Db: d, rd: f }) }; a.xb = function (e, a, d, f) { b.f(c, function (g, h) { if (g.td === e && g.Fb == a && g.Db === d && g.rd == f) { b.nb(e, a, d, f); c.splice(h, 1) } }) }; a.Je = h; a.yc = a.addEventListener = k; a.removeEventListener = j; a.j = function (a) { var c = [].slice.call(arguments, 1); b.f(e, function (b) { b.Fb == a && b.Db.apply(g, c) }) }; a.o = function () { if (!f) { f = d; h(); i() } } } var l = function (C, D, i, m, R, Q) { C = C || 0; var a = this, p, n, o, s, F = 0, O = 1, L, M, K, G, B = 0, j = 0, r = 0, A, l, f, h, q, z, u = [], y, I = k, J, H = k; function T(a) { f += a; h += a; l += a; j += a; r += a; B += a } function x(C) { var k = C; if (q) if (!z && (k >= h || k < f) || z && k >= f) k = ((k - f) % q + q) % q + f; if (!A || s || j != k) { var g = c.s(k, h); g = c.F(g, f); if (i.zc) g = h - g + f; if (!A || s || g != r) { if (Q) { var x = (g - l) / (D || 1), o = b.Vd(R, Q, x, L, K, M, i); if (y) b.f(o, function (b, a) { y[a] && y[a](m, b) }); else b.W(m, o); var n; if (J) { var p = g > f && g < h; if (p != H) n = H = p } if (!n && o.L != e) { var t = o.L < .001; if (t != I) n = I = t } if (n != e) { n && b.rc(m, "none"); !n && b.rc(m, b.n(m, "data-events")) } } var w = r, v = r = g; b.f(u, function (b, c) { var a = !A && z || k <= j ? u[u.length - c - 1] : b; a.B(g - B) }); j = k; A = d; a.Ac(w - l, v - l); a.Eb(w, v) } } } function E(a, b, d) { b && a.Ub(h); if (!d) { f = c.s(f, a.Kb() + B); h = c.F(h, a.Z() + B) } u.push(a) } var v = g.requestAnimationFrame || g.webkitRequestAnimationFrame || g.mozRequestAnimationFrame || g.msRequestAnimationFrame; if (b.Hf() && b.Rc() < 7 || !v) v = function (a) { b.fc(a, i.vd) }; function N() { if (p) { var d = b.qb(), e = c.s(d - F, i.fd), a = j + e * o * O; F = d; if (a * o >= n * o) a = n; x(a); if (!s && a * o >= n * o) P(G); else v(N) } } function w(e, g, i) { if (!p) { p = d; s = i; G = g; e = c.F(e, f); e = c.s(e, h); n = e; o = n < j ? -1 : 1; a.Cc(); F = b.qb(); v(N) } } function P(b) { if (p) { s = p = G = k; a.pc(); b && b() } } a.cd = function (a, b, c) { w(a ? j + a : h, b, c) }; a.Tb = w; a.Te = function (a, b) { w(h, a, b) }; a.v = P; a.Xc = function () { return j }; a.Vc = function () { return n }; a.k = function () { return r }; a.B = x; a.Ve = function () { x(h, d) }; a.Hc = function () { return p }; a.wd = function (a) { O = a }; a.Ub = T; a.G = function (a, b) { E(a, 0, b) }; a.oc = function (a) { E(a, 1) }; a.gc = function (a) { h += a }; a.Kb = function () { return f }; a.Z = function () { return h }; a.Eb = a.Cc = a.pc = a.Ac = b.pf; a.hc = b.qb(); i = b.tb({ vd: 16, fd: 50 }, i); m && (J = b.n(m, "data-inactive")); q = i.bc; z = i.qe; y = i.re; f = l = C; h = C + D; M = i.u || {}; K = i.se || {}; L = b.qd(i.cb) }; var n = { we: "data-scale", ye: "data-autocenter", Ee: "data-nofreeze", Hd: "data-nodrag" }; new (function () { }); new (function () { }); var r = { ze: 1 }; function p(e, d, c) { var a = this; b.sb(a, o); l.call(a, 0, c.gb); a.Lb = 0; a.Dc = c.gb } p.Ec = 21; p.Mb = 24; var t = function () { var a = this, hb = b.sb(a, o); l.call(a, 0, 0); var e, s, gb = [h.Bb, h.Se, h.Re, h.hd, h.oe, h.Qe, h.Pe, h.Oe, h.Ne, h.Me, h.Le, h.Ke, h.Ie, h.He, h.Ge, h.pe, h.We, h.ne, h.Xd, h.me, h.Zd, h.fe, h.he, h.je, h.le, h.ge, h.be, h.Wd, h.Td, h.Nd, h.Lc, h.Ye, h.Of, h.jg], P = {}, S, C, u = new l(0, 0), T = [], x = [], E, q = 0; function G(d, c) { var a = {}; b.f(d, function (d, f) { var e = P[f]; if (e) { if (b.Fe(d)) d = G(d, c || f == "e"); else if (c) if (b.Gc(d)) d = gb[d]; a[e] = d } }); return a } function I(c, f) { var e = [], d = b.l(c, "play"); if (f && d) { var g = new t(c, s, { Ze: d }); N.push(g); a.a(g, p.Ec, Z); a.a(g, p.Mb, U) } else b.f(b.rb(c), function (a) { e = e.concat(I(a, f + 1)) }); if (!f && (!j || j & 16) || f && (!d || !(d & 16))) { var h = S[b.l(c, "t")]; h && e.push({ R: c, mc: h }) } return e } function O(c, e) { var a = T[c]; if (a == f) { a = T[c] = { Y: c, Fc: [], ed: [] }; var d = 0; !b.f(x, function (a, b) { d = b; return a.Y > c }) && d++; x.splice(d, 0, a) } return a } function db(o, p, g) { var a, e; if (C) { var k = C[b.l(o, "c")]; if (k) { a = O(k.r, 0); a.If = k.e || 0 } } b.f(p, function (h) { var f = b.tb(d, {}, G(h)), i = b.qd(f.cb); delete f.cb; if (f.i) { f.A = f.i; i.A = i.i; delete f.i } if (f.g) { f.z = f.g; i.z = i.g; delete f.g } var m = { cb: i, Hb: g.Q, Ib: g.J }, j = new l(h.b, h.d, m, o, g, f); q = c.F(q, h.b + h.d); if (a) { if (!e) e = new l(h.b, 0); e.G(j) } else { var k = O(h.b, h.b + h.d); k.Fc.push(j) } if (f.ib) g.ib = { pd: 0, od: 0, md: 0, L: 0 }; g = b.Ud(g, f) }); if (a && e) { e.Ve(); var h = e, i, j = e.Kb(), m = e.Z(), n = c.F(m, a.If); if (a.Y < m) { if (a.Y > j) { h = new l(j, a.Y - j); h.G(e, d) } else h = f; i = new l(a.Y, n - j, { bc: n - a.Y, qe: d }); i.G(e, d) } h && a.Fc.push(h); i && a.ed.push(i) } return g } function cb(a) { b.f(a, function (d) { var a = d.R, f = b.M(a), e = b.N(a), c = { i: b.S(a), g: b.T(a), A: 0, z: 0, L: 1, zb: b.H(a) || 0, U: 0, ab: 0, bb: 0, P: 1, O: 1, pb: 0, ob: 0, db: 0, ec: 0, Vb: 0, Q: f, J: e, c: { g: 0, q: f, p: e, i: 0 } }; c.Wc = c.i; c.id = c.g; db(a, d.mc, c) }) } function fb(f, e, g) { var c = f.b - e; if (c) { var b = new l(e, c); b.G(u, d); b.Ub(g); a.G(b) } a.gc(f.d); return c } function eb(e) { var c = u.Kb(), d = 0; b.f(e, function (e, f) { e = b.tb({ d: 3e3 }, e); fb(e, c, d); c = e.b; d += e.d; if (!f || e.t == 2) { a.Lb = c; a.Dc = c + e.d } }) } function B(g, e, d) { var f = e.length; if (f > 4) for (var j = c.Rb(f / 4), a = 0; a < j; a++) { var h = e.slice(a * 4, c.s(a * 4 + 4, f)), i = new l(h[0].Y, 0); B(i, h, d); g.G(i) } else b.f(e, function (a) { b.f(d ? a.ed : a.Fc, function (a) { d && a.gc(q - a.Z()); g.G(a) }) }) } var j, F, v = 0, g, z, K, J, A, N = [], H = [], r, D, m; function y(a) { return a & 2 || a & 4 && b.Oc().Qc } function ab() { if (!A) { g & 8 && a.a(i, "keydown", Q); if (g & 32) { a.a(i, "mousedown", w); a.a(i, "touchstart", w) } A = d } } function Y() { a.xb(i, "keydown", Q); a.xb(i, "mousedown", w); a.xb(i, "touchstart", w); A = k } function L(b) { if (!r || b) { r = d; a.v(); b && v && a.B(0); a.wd(1); a.Te(); ab(); a.j(p.Ec, a) } } function n() { if (!D && (r || a.k())) { D = d; a.v(); a.Xc() > a.Lb && a.B(a.Lb); a.wd(K || 1); a.Tb(0) } } function V() { !m && n() } function M(c) { var b = c; if (c < 0 && a.k()) b = 1; if (b != v) { v = b; F && a.j(p.Mb, a, v) } } function Q(a) { g & 8 && b.gd(a) == 27 && n() } function X(a) { if (m && b.Pd(a) !== f) { m = k; g & 16 && b.fc(V, 160) } } function w(a) { g & 32 && !b.Dd(e, b.Gb(a)) && n() } function W(a) { if (!m) { m = d; if (j & 1) b.Od(a, e) && L() } } function bb(i) { var h = b.Gb(i), a = b.V(h, f, f, "A"), c = a && (b.Df(a) || a === e || b.Dd(e, a)); if (r && y(g)) !c && n(); else if (y(j)) !c && L(d) } function Z(b) { var c = b.Af(), a = H[c]; a !== b && a && a.yf(); H[c] = b } function U(b, c) { a.j(p.Mb, b, c) } a.Af = function () { return J || "" }; a.yf = n; a.Cc = function () { M(1) }; a.pc = function () { r = k; D = k; M(-1); !a.k() && Y() }; a.Eb = function () { !m && z && a.Xc() > a.Dc && n() }; a.E = function (m, i, f) { e = m; s = i; j = f.Ze; E = f.sf; S = s.Jd; C = s.pg; var l = { g: "y", i: "x", p: "m", q: "t", U: "r", ab: "rX", bb: "rY", P: "sX", O: "sY", pb: "tX", ob: "tY", db: "tZ", ec: "kX", Vb: "kY", L: "o", cb: "e", zb: "i", c: "c", ib: "bc", pd: "re", od: "gr", md: "bl" }; b.f(l, function (b, a) { P[b] = a }); cb(I(e, 0)); B(u, x); if (j) { a.G(u); E = d; z = b.l(e, "idle"); g = b.l(e, "rollback"); K = b.l(e, "speed", 1); J = b.K(e, "group"); (y(j) || y(g)) && a.a(e, "click", bb); if ((j & 1 || z) && !b.Oc().Qc) { a.a(e, "mouseenter", W); a.a(e, "mouseleave", X) } F = b.l(e, "pause") } var k = s.qg || [], c = k[b.l(e, "b")] || [], h = { b: q, d: c.length ? 0 : f.gb || z || 0 }; c = c.concat([h]); eb(c); a.Z(); E && a.gc(1e8); q = a.Z(); B(a, x, d); a.B(-1); a.B(b.l(e, "initial") || 0) }; a.o = function () { b.o(hb, N); a.v(); a.B(-1) }; b.E(a) }, j = (g.module || {}).exports = function () { var a = this, xc = b.sb(a, o), Kb = "data-jssor-slider", Cc = "data-jssor-thumb", t, m, R, Hb, cb, tb, Z, M, K, P, Ub, zc = 1, qc = 1, Gc = 1, hc = 1, cc = {}, w, U, Vb, Zb, Yb, Ib, Gb, Fb, gb, E = [], fc, u = -1, jc, q, I, H, L, kb, lb, F, J, hb, S, A, W, jb, Y = [], lc, nc, dc, s, sb, Cb, nb, eb, X, ic, Bb, Mb, Nb, G, ac = 0, bb = 0, Q = Number.MAX_VALUE, N = Number.MIN_VALUE, C, ib, db, T = 1, Sb = 0, mb, B, Ab, zb, O, xb, yb, z, V, ob, y, Jb, Xb = b.Oc(), Qb = Xb.Qc, x = [], D, ub, ab, bc, Ac, Ic, vb; function Eb() { return !T && X & 12 } function Bc() { return Sb || !T && X & 3 } function Db() { return !B && !Eb() && !y.Hc() } function Rc() { return !Bc() && Db() } function Ec() { return A || R } function Kc() { return Ec() & 2 ? lb : kb } function Hc(a, c, d) { b.S(a, c); b.T(a, d) } function vc(c, b) { var a = Ec(), d = (kb * b + ac) * (a & 1), e = (lb * b + ac) * (a & 2) / 2; Hc(c, d, e) } function sc(b, f) { if (B && !(C & 1)) { var e = b, d; if (b < N) { e = N; d = -1 } if (b > Q) { e = Q; d = 1 } if (d) { var a = b - e; if (f) { a = c.Ue(a) * 2 / c.C; a = c.m(a * d, 1.6) } else { a = c.m(a * d, .625); a = c.Zc(a * c.C / 2) } b = e + a * d } } return b } function Mc(a) { return sc(a, d) } function dd(a) { return sc(a) } function wb(a, b) { if (!(C & 1)) { var c = a - Q + (b || 0), d = N - a + (b || 0); if (c > 0 && c > d) a = Q; else if (d > 0) a = N } return a } function oc(a) { return !(C & 1) && a - N < .0001 } function mc(a) { return !(C & 1) && Q - a < .0001 } function pb(a) { return !(C & 1) && (a - N < .0001 || Q - a < .0001) } function Ob(c, a, d) { !vb && b.f(Y, function (b) { b.ic(c, a, d) }) } function uc(b) { var a = b, d = pb(b); if (d) a = wb(a); else { b = v(b); a = b } a = c.hb(a); a = c.F(a, 0); return a } function ad(a) { x[u]; fc = u; u = a; jc = x[u] } function Pc() { A = 0; var b = z.k(), d = uc(b); Ob(d, b); if (pb(b) || b == c.hb(b)) { if (s & 2 && (eb > 0 && d == q - 1 || eb < 0 && !d)) s = 0; ad(d); a.j(j.Jf, u, fc) } } function ec(a, b) { if (q && (!b || !y.Hc())) { y.v(); y.Ic(a, a) } } function rb(a) { if (q) { a = v(a); a = wb(a); ec(a) } else Ob(0, 0) } function Uc() { var b = j.Kd || 0, a = ib; j.Kd |= a; return W = a & ~b } function Qc() { if (W) { j.Kd &= ~ib; W = 0 } } function Tb(c) { var a = b.qc(); b.W(a, gb); c && b.Kc(a, "hidden"); return a } function v(b, a) { a = a || q || 1; return (b % a + a) % a } function wc(c, a, b) { s & 8 && (s = 0); qb(c, Bb, a, b) } function Pb() { b.f(Y, function (a) { a.nc(a.lc.kg <= T) }) } function cd(c) { if (!T && (b.Pd(c) || !b.Od(c, t))) { T = 1; Pb(); if (!B) { X & 12 && Dc(); x[u] && x[u].Qb() } a.j(j.Qf) } } function bd() { if (T) { T = 0; Pb(); B || !(X & 12) || Fc() } a.j(j.Mf) } function Jc() { b.W(U, gb) } function Rb(b, a) { qb(b, a, d) } function qb(g, h, l, p) { if (q && (!B || m.Ad) && !Eb() && !isNaN(g)) { var f = z.k(), a = g; if (l) { a = f + g; if (C & 2) { if (oc(f) && g < 0) a = Q; if (mc(f) && g > 0) a = N } } if (!(C & 1)) if (p) a = v(a); else a = wb(a, .5); if (l && !pb(a)) a = c.u(a); var j = (a - f) % q; a = f + j; if (h == e) h = Bb; var b = c.kb(j), i = 0; if (b) { if (b < 1) b = c.m(b, .5); if (b > 1) { var o = Kc(), n = (R & 1 ? Gb : Fb) / o; b = c.s(b, n * 1.5) } i = h * b } vb = d; y.v(); vb = k; y.Ic(f, a, i) } } function Nc(e, h, o) { var l = this, i = { g: 2, q: 1, p: 2, i: 1 }, m = { g: "top", q: "right", p: "bottom", i: "left" }, g, a, f, j, k = {}; l.R = e; l.dc = function (q, l, u) { var p, s = q, r = l; if (!f) { f = b.Uf(e); g = e.parentNode; j = { sc: b.l(e, n.we, 1), ld: b.l(e, n.ye) }; b.f(m, function (c, a) { k[a] = b.l(e, "data-scale-" + c, 1) }); a = e; if (h) { a = b.Jb(g, d); b.W(a, { g: 0, i: 0 }); b.X(a, e); b.X(g, a) } } if (o) { p = c.F(q, l); if (h) if (u >= 0 && u < 1) { var w = c.s(q, l); p = c.s(p / w, 1 / (1 - u)) * w } } else s = r = p = c.m(K < P ? l : q, j.sc); var x = h ? 1.001 : 1, t = p * x; h && (hc = t); b.Bd(a, t); b.M(g, f.Q * s); b.N(g, f.J * r); var v = b.Fd() && b.Rc() < 9 ? t : 1, y = (s - v) * f.Q / 2, z = (r - v) * f.J / 2; b.S(a, y); b.T(a, z); b.f(f, function (d, a) { if (i[a] && d) { var e = (i[a] & 1) * c.m(q, k[a]) * d + (i[a] & 2) * c.m(l, k[a]) * d / 2; b.ee[a](g, e) } }); b.Rf(g, j.ld) } } function Yc() { var a = this; l.call(a, 0, 0, { bc: q }); b.f(x, function (b) { a.oc(b); b.Ub(G / F) }) } function Xc() { var a = this, b = Jb.R; l.call(a, -1, 2, { cb: h.Bb, re: { vb: vc }, bc: q, zc: Cb }, b, { vb: 1 }, { vb: -2 }) } function Zc() { var b = this; l.call(b, -1e8, 2e8); b.Eb = function (e, b) { if (c.kb(b - e) > 1e-5) { var g = b, f = b; if (c.hb(b) != b && b > e && (C & 1 || b > bb)) f++; var h = uc(f); Ob(h, g, d); a.j(j.Yf, v(g), v(e), b, e) } } } function Oc(o, n) { var b = this, g, i, e, c, h; l.call(b, -1e8, 2e8, { fd: 100 }); b.Cc = function () { mb = d; a.j(j.Zf, v(z.k()), V.k()) }; b.pc = function () { mb = k; c = k; a.j(j.lf, v(z.k()), V.k()); !B && Pc() }; b.Eb = function (f, b) { var a = b; if (c) a = h; else if (e) { var d = b / e; a = m.Nc(d) * (i - g) + g } a = Mc(a); V.B(a) }; b.Ic = function (a, c, h, f) { B = k; e = h || 1; g = a; i = c; vb = d; V.B(a); vb = k; b.B(0); b.Tb(e, f) }; b.jf = function () { c = d; c && b.cd(f, f, d) }; b.xf = function (a) { h = a }; V = new Zc; V.G(o); Nb && V.G(n) } function Lc() { var c = this, a = Tb(); b.H(a, 0); c.R = a; c.Zb = function () { b.ub(a); b.Ld(a) } } function Wc(w, h) { var g = this, ib = b.sb(g, o), y, G = 0, P, t, F, B, K, i, E = [], V, N, R, n, r, A, S; l.call(g, -J, J + 1, { bc: C & 1 ? q : e, zc: Cb }); function L() { y && y.o(); Sb -= G; G = 0; y = new cb.mb(t, cb, { gb: b.l(t, "idle", ic), sf: !s }); y.yc(p.Mb, Y) } function Z() { y.hc < cb.hc && L() } function Y(b, a) { G += a; Sb += a; if (h == u) !G && g.Qb() } function Q(p, s, o) { if (!N) { N = d; if (i && o) { var q = b.l(i, "data-expand", 0) * 2, f = o.width, e = o.height, m = f, l = e; if (f && e) { if (B) { if (B & 3 && (!(B & 4) || f > I || e > H)) { var n = k, r = I / H * e / f; if (B & 1) n = r > 1; else if (B & 2) n = r < 1; m = n ? f * H / e : I; l = n ? H : e * I / f } b.M(i, m); b.N(i, l); b.T(i, (H - l) / 2); b.S(i, (I - m) / 2) } b.Bd(i, c.F((m + q) / m, (l + q) / l)) } b.Xb(i, "absolute") } a.j(j.uf, h) } s.Rd(k); p && p(g) } function X(f, b, c, e) { if (e == A && u == h && s && Db() && !g.xc()) { var a = v(f); D.Ce(a, h, b, g, c, H / I); b.tf(); ob.Ub(a - ob.Kb() - 1); ob.B(a); ec(a, d) } } function bb(b) { if (b == A && u == h && Db() && !g.xc()) { if (!n) { var a = f; if (D) if (D.Ab == h) a = D.Ae(); else D.Zb(); Z(); n = new Vc(w, h, a, y); n.Cf(r) } !n.Hc() && n.Sc() } } function M(a, d, j) { if (a == h) { if (a != d) x[d] && x[d].Yc(); else !j && n && n.Ff(); r && r.Xe(); A = b.qb(); g.wb(b.Sb(f, bb, A)) } else { var i = c.s(h, a), e = c.F(h, a), l = c.s(e - i, i + q - e), k = J + m.of - 1; (!R || l <= k) && g.wb() } } function fb() { if (u == h && n) { n.v(); r && r.af(); r && r.bf(); n.kd() } } function hb() { u == h && n && n.v() } function ab(b) { !db && a.j(j.ef, h, b) } g.Rd = function (a) { if (S != a) { S = a; a && b.X(w, K); !a && b.uc(K) } }; g.wb = function (e, c) { c = c || g; if (E.length && !N) { c.Rd(d); if (!V) { V = d; a.j(j.gf, h); b.f(E, function (a) { if (!b.n(a, "src")) { var c = b.K(a, "src") || b.K(a, "src2") || ""; if (c) { a.src = c; b.fb(a, b.n(a, "data-display")) } } }) } b.ag(E, i, b.Sb(f, Q, e, c)) } else Q(e, c) }; g.hf = function () { if (Rc()) if (q == 1) { g.Yc(); M(h, h) } else { var a; if (D) a = D.De(q); if (a) { A = b.qb(); var c = h + eb, d = x[v(c)]; return d.wb(b.Sb(f, X, c, d, a, A), g) } else (C || !pb(z.k()) || !pb(z.k() + eb)) && Rb(eb) } }; g.Qb = function () { M(h, h, d) }; g.Yc = function () { r && r.af(); r && r.bf(); g.nd(); n && n.kf(); n = f; L() }; g.tf = function () { b.ub(w) }; g.nd = function () { b.sd(w) }; function T(a, k, e) { if (b.n(a, Kb)) return; if (e) { if (!t) { t = a; F = Tb(d); var c = "background"; b.D(F, c + "Color", b.D(t, c + "Color")); b.D(F, c + "Image", b.D(t, c + "Image")); b.D(t, c, f); b.lb(F, t) } b.n(a, "data-events", b.rc(a)); b.n(a, "data-display", b.fb(a)); b.df(a, b.K(a, "data-to")); b.rf(a, b.K(a, "data-bf")); e > 1 && b.Nb(a, b.n(a, "data-ts")); b.Gf(a, b.l(a, "data-p")); b.Bf(a, b.K(a, "po")); if (a.tagName == "IMG") { E.push(a); if (!b.n(a, "src")) { R = d; b.ub(a) } } var g = b.de(a); if (g) { var h = new Image; b.n(h, "src", g); E.push(h) } e && b.H(a, (b.H(a) || 0) + 1) } var j = b.rb(a); b.f(j, function (c) { if (e < 3 && !i) if (b.K(c, "u") == "image") { i = c; i.border = 0; b.W(i, gb); b.W(a, gb); b.D(i, "maxWidth", "10000px"); b.X(F, i) } T(c, k, e + 1) }) } g.Ac = function (c, b) { var a = J - b; vc(P, a) }; g.Ab = h; T(w, d, 0); B = b.l(t, "data-fillmode", m.zf); var O = b.wf(t, "thumb", d); if (O) { b.Jb(O); b.ub(O) } b.sd(w); K = b.Jb(U); b.H(K, 1e3); g.a(w, "click", ab); L(d); P = w; g.a(a, 203, M); g.a(a, 28, hb); g.a(a, 24, fb); g.o = function () { b.o(ib, y, n) } } function Vc(F, h, q, r) { var c = this, E = b.sb(c, o), i = 0, t = 0, g, m, f, e, n, w, v, y = x[h]; l.call(c, 0, 0); function A() { c.Sc() } function C(a) { v = a; c.v(); c.Sc() } function z() { } c.Sc = function () { if (!B && !mb && !v && u == h && !c.xc()) { var k = c.k(); if (!k) if (g && !n) { n = d; c.kd(d); a.j(j.Pf, h, t, i, t, g, e) } a.j(j.bd, h, k, i, m, f, e); if (!Eb()) { var l; if (k == e) s && b.fc(y.hf, 20); else { if (k == f) l = e; else if (!k) l = f; else l = c.Vc(); (k != f || !Bc()) && c.Tb(l, A) } } } }; c.Ff = function () { f == e && f == c.k() && c.B(m) }; c.kf = function () { D && D.Ab == h && D.Zb(); var b = c.k(); b < e && a.j(j.bd, h, -b - 1, i, m, f, e) }; c.kd = function (a) { q && b.Kc(S, a && q.mc.sg ? "" : "hidden") }; c.Ac = function (c, b) { if (n && b >= g) { n = k; y.nd(); D.Zb(); a.j(j.hg, h, g, i, t, g, e) } a.j(j.gg, h, b, i, m, f, e) }; c.Cf = function (a) { if (a && !w) { w = a; a.yc($JssorPlayer$.ve, C) } }; c.a(r, p.Ec, z); q && c.oc(q); g = c.Z(); c.oc(r); m = g + r.Lb; e = c.Z(); f = s ? g + r.Dc : e; c.o = function () { E.o(); c.v() } } function gc() { bc = mb; Ac = y.Vc(); ab = z.k(); ub = dd(ab) } function Fc() { gc(); if (B || Eb()) { y.v(); a.j(j.fg) } } function Dc(f) { if (Db()) { var b = z.k(), a = ub, e = 0; if (f && c.kb(O) >= m.dd) { a = b; e = yb } a = c.Rb(a); a = wb(a + e, .5); var d = c.kb(a - b); if (d < 1 && m.Nc != h.Bb) d = c.m(d, .5); if ((!db || !f) && bc) y.Tb(Ac); else if (b == a) jc.Qb(); else y.Ic(b, a, d * Bb) } } function yc(a) { !b.V(b.Gb(a), e, n.Hd) && b.Wb(a) } function pc(b) { Ab = k; B = d; Fc(); if (!bc) A = 0; a.j(j.cg, v(ab), ab, b) } function Tc(a) { tc(a, 1) } function tc(c, d) { O = 0; xb = 0; yb = 0; Gc = hc; if (d) { var h = c.touches[0]; zb = { x: h.clientX, y: h.clientY } } else zb = b.Jc(c); var f = b.Gb(c), g = b.V(f, "1", Cc); if ((!g || g === t) && !W && (!d || c.touches.length == 1)) { jb = b.V(f, e, n.Hd) || !ib || !Uc(); a.a(i, d ? "touchmove" : "mousemove", Wb); Ab = !jb && b.V(f, e, n.Ee); !Ab && !jb && pc(c, d) } } function Wb(a) { var e, f; a = b.Vf(a); if (a.type != "mousemove") if (a.touches.length == 1) { f = a.touches[0]; e = { x: f.clientX, y: f.clientY } } else fb(); else e = b.Jc(a); if (e) { var i = e.x - zb.x, j = e.y - zb.y, g = c.kb(i), h = c.kb(j); if (A || g > 1.5 || h > 1.5) if (Ab) pc(a, f); else { if (c.hb(ub) != ub) A = A || R & W; if ((i || j) && !A) { if (W == 3) if (h > g) A = 2; else A = 1; else A = W; if (Qb && A == 1 && h > g * 2.4) jb = d } var l = i, k = kb; if (A == 2) { l = j; k = lb } (O - xb) * nb < -1.5 && (yb = 0); (O - xb) * nb > 1.5 && (yb = -1); xb = O; O = l; Ic = ub - O * nb / k / Gc * m.bg; if (O && A && !jb) { b.Wb(a); y.jf(d); y.xf(Ic) } } } } function fb() { Qc(); a.xb(i, "mousemove", Wb); a.xb(i, "touchmove", Wb); db = O; if (B) { db && s & 8 && (s = 0); y.v(); B = k; var b = z.k(); a.j(j.ig, v(b), b, v(ab), ab); X & 12 && gc(); Dc(d) } } function ed(c) { var f = b.Gb(c), a = b.V(f, "1", Kb); if (t === a) if (db) { b.vf(c); a = b.V(f, e, "data-jssor-button", "A"); a && b.Wb(c) } else { s & 4 && (s = 0); a = b.V(f, e, "data-jssor-click"); if (a) { b.Wb(c); hitValues = (b.n(a, "data-jssor-click") || "").split(":"); var g = b.Sf(hitValues[1]); hitValues[0] == "to" && qb(g - 1); hitValues[0] == "next" && qb(g, e, d) } } } a.yb = function (a) { if (a == e) return s; if (a != s) { s = a; s && x[u] && x[u].Qb() } }; a.Hb = function () { return K }; a.Ib = function () { return P }; a.Nf = function (b) { if (b == e) return Ub || K; a.dc(b, b / K * P) }; a.dc = function (c, a, d) { b.M(t, c); b.N(t, a); zc = c / K; qc = a / P; b.f(cc, function (a) { a.dc(zc, qc, d) }); if (!Ub) { b.lb(S, w); b.T(S, 0); b.S(S, 0) } Ub = c }; a.cd = function () { a.yb(s || 1) }; function Sc() { Xb.Sd && b.D(w, Xb.Sd, ([f, "pan-y", "pan-x", "auto"])[ib] || ""); a.a(t, "click", ed, d); a.a(t, "mouseleave", cd); a.a(t, "mouseenter", bd); a.a(t, "mousedown", tc); a.a(t, "touchstart", Tc); a.a(t, "dragstart", yc); a.a(t, "selectstart", yc); a.a(g, "mouseup", fb); a.a(i, "mouseup", fb); a.a(i, "touchend", fb); a.a(i, "touchcancel", fb); a.a(g, "blur", fb); m.Ob && a.a(i, "keydown", function (c) { var a = b.gd(c); if (a == 37 || a == 39) { s & 8 && (s = 0); wc(m.Ob * (a - 38) * nb, d) } }) } function kc(g) { xc.Je(); E = []; x = []; var h = b.rb(w), k = b.jd(["DIV", "A", "LI"]); b.f(h, function (a) { var c = a; if (k[a.tagName.toUpperCase()] && !b.K(a, "u") && b.fb(a) != "none") { var c = Tb(d); b.W(a, gb); b.lb(c, a); b.X(c, a); b.Nb(c, "flat"); b.Nb(a, "preserve-3d"); b.ub(c); E.push(c) } b.H(c, (b.H(c) || 0) + 1) }); q = E.length; if (q) { var a = R & 1 ? Gb : Fb; Jc(); G = m.ad; if (G == e) G = (a - F + L) / 2; hb = a / F; J = c.s(q, m.jc || q, c.Rb(hb)); C = J < q ? m.tc : 0; if (q * F - L <= a) { hb = q - L / F; G = (a - F + L) / 2; ac = (a - F * q + L) / 2 } if (Hb) { Mb = Hb.mb; Nb = !G && J == 1 && q > 1 && Mb && (!b.Fd() || b.Rc() >= 9) } if (!(C & 1)) { bb = G / F; if (bb > q - 1) { bb = q - 1; G = bb * F } N = bb; Q = N + q - hb - L / F } ib = (J > 1 || G ? R : -1) & m.Bc; if (Nb) D = new Mb(Jb, I, H, Hb, Qb, Hc); for (var f = 0; f < E.length; f++) { var i = E[f], j = new Wc(i, f); x.push(j) } ob = new Xc; z = new Yc; y = new Oc(z, ob); Sc() } b.f(Y, function (a) { a.kc(q, x); g && a.yc(r.ze, wc) }) } a.E = function (c, g) { a.R = t = b.Pc(c); K = b.M(t); P = b.N(t); m = b.tb({ zf: 0, of: 1, Ob: 1, Mc: 0, yb: 0, tc: 1, zd: d, Ad: d, xe: 1, Md: 3e3, wc: 1, vc: 500, Nc: h.hd, dd: 20, bg: 1, Ed: 0, te: 1, ud: 1, Bc: 1 }, g); m.zd = m.zd && b.nf(); if (m.gb != e) m.Md = m.gb; if (m.ue != e) m.jc = m.ue; if (m.Be != e) m.ad = m.Be; s = m.yb & 63; !m.te; eb = m.xe; X = m.wc; X &= Qb ? 10 : 5; ic = m.Md; Bb = m.vc; R = m.ud & 3; sb = b.ff(b.n(t, "dir")) == "rtl"; Cb = sb && (R == 1 || m.Bc & 1); nb = Cb ? -1 : 1; Hb = m.og; cb = b.tb({ mb: p }, m.ng); tb = m.mg; Z = m.lg; M = m.ug; var f = b.rb(t); b.f(f, function (a, d) { var c = b.K(a, "u"); if (c == "loading") U = a; else { if (c == "slides") { w = a; b.D(w, "margin", 0); b.D(w, "padding", 0); b.Nb(w, "flat") } if (c == "navigator") Vb = a; if (c == "arrowleft") Zb = a; if (c == "arrowright") Yb = a; if (c == "thumbnavigator") Ib = a; if (a.tagName != "STYLE" && a.tagName != "SCRIPT") cc[c || d] = new Nc(a, c == "slides", b.jd(["slides", "thumbnavigator"])[c]) } }); U && b.uc(U); U = U || b.qc(i); Gb = b.M(w); Fb = b.N(w); I = m.Cd || Gb; H = m.qf || Fb; gb = { Q: I, J: H, g: 0, i: 0, yd: "block", vb: "absolute" }; L = m.Ed; kb = I + L; lb = H + L; F = R & 1 ? kb : lb; Jb = new Lc; b.n(t, Kb, "1"); b.H(w, b.H(w) || 0); b.Xb(w, "absolute"); S = b.Jb(w, d); b.D(S, "pointerEvents", "none"); b.lb(S, w); b.X(S, Jb.R); b.Kc(w, "hidden"); if (Vb && tb) { lc = new tb.mb(Vb, tb, K, P); Y.push(lc) } if (Z && Zb && Yb) { Z.tc = m.tc; nc = new Z.mb(Zb, Yb, Z, a); Y.push(nc) } if (Ib && M) { M.Mc = m.Mc; M.Ob = M.Ob || 0; dc = new M.mb(Ib, M, U); !M.rg && b.n(Ib, Cc, "1"); Y.push(dc) } kc(d); a.dc(K, P); Pb(); rb(v(m.Mc)); b.D(t, "visibility", "visible") }; a.o = function () { s = 0; b.o(x, Y, xc); b.Ld(t) }; b.E(a) }; j.ef = 21; j.cg = 22; j.ig = 23; j.Zf = 24; j.lf = 25; j.gf = 26; j.uf = 27; j.fg = 28; j.Mf = 31; j.Qf = 32; j.Yf = 202; j.Jf = 203; j.Pf = 206; j.hg = 207; j.gg = 208; j.bd = 209; jssor_1_slider_init = function () { var d = { yb: 1, gb: 0, vc: 5e3, Nc: h.Bb, wc: 4, Cd: 140, ad: 0 }, c = new j("jssor_1", d), e = 980; function a() { var d = c.R.parentNode, b = d.clientWidth; if (b) { var f = m.min(e || b, b); c.Nf(f) } else g.setTimeout(a, 30) } a(); b.eb(g, "load", a); b.eb(g, "resize", a); b.eb(g, "orientationchange", a) } }(window, document, Math, null, true, false)
    </script>
    <style>
        .jssorl-009-spin img {
            animation-name: jssorl-009-spin;
            animation-duration: 1.6s;
            animation-iteration-count: infinite;
            animation-timing-function: linear
        }

        @keyframes jssorl-009-spin {
            from {
                transform: rotate(0);
            }

            to {
                transform: rotate(360deg);
            }
        }
    </style>
    <section class="project-flow section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12 section-title">
				<?php
							while($fetchdata = mysql_fetch_array($client1)){


					     ?>
                    <h2>
                        <?php echo $fetchdata['head']?>
                    </h2>
                </div>
                <!-- Ends: .section-title -->
                <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:700px;height:100px;overflow:hidden;visibility:hidden;">
                    <!-- Loading Screen -->
                    <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
                        <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="img/spin.svg" />
                    </div>
                    <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:980px;height:100px;overflow:hidden;">
                        <div>
                            <img data-u="image" src="<?php echo 'admin/site-images/'.$fetchdata['clientimage']?>" />
                        </div>
						<?php
							}					
					?>
						
                        <div>
						<?php
							while($fetchdata = mysql_fetch_array($client2)){


					     ?>
                            <img data-u="image" src="<?php echo 'admin/site-images/'.$fetchdata['clientimage']?>" />
                        </div>
						<?php
							}					
					?>
                        <div>
						<?php
							while($fetchdata = mysql_fetch_array($client3)){


					     ?>
                            <img data-u="image" src="<?php echo 'admin/site-images/'.$fetchdata['clientimage']?>" />
                        </div>
						<?php
							}					
					?>
                        <div>
						<?php
							while($fetchdata = mysql_fetch_array($client4)){


					     ?>
                            <img data-u="image" src="<?php echo 'admin/site-images/'.$fetchdata['clientimage']?>" />
                        </div>
						<?php
							}					
					?>
                        <div>
						<?php
							while($fetchdata = mysql_fetch_array($client5)){


					     ?>
                            <img data-u="image" src="<?php echo 'admin/site-images/'.$fetchdata['clientimage']?>" />
                        </div>
						<?php
							}					
					?>
                        <div>
						<?php
							while($fetchdata = mysql_fetch_array($client6)){


					     ?>
                            <img data-u="image" src="<?php echo 'admin/site-images/'.$fetchdata['clientimage']?>" />
                        </div>
						<?php
							}					
					?>
                        <div>
						<?php
							while($fetchdata = mysql_fetch_array($client7)){


					     ?>
                            <img data-u="image" src="<?php echo 'admin/site-images/'.$fetchdata['clientimage']?>" />
                        </div>
						<?php
							}					
					?>
                        <div>
						<?php
							while($fetchdata = mysql_fetch_array($client8)){


					     ?>
                            <img data-u="image" src="<?php echo 'admin/site-images/'.$fetchdata['clientimage']?>" />
                        </div>
						<?php
							}					
					?>
                        <div>
						<?php
							while($fetchdata = mysql_fetch_array($client9)){


					     ?>
                            <img data-u="image" src="<?php echo 'admin/site-images/'.$fetchdata['clientimage']?>" />
                        </div>
						<?php
							}					
					?>
                        <div>
						<?php
							while($fetchdata = mysql_fetch_array($client10)){


					     ?>
                            <img data-u="image" src="<?php echo 'admin/site-images/'.$fetchdata['clientimage']?>" />
                        </div>
						<?php
							}					
					?>
                        <div>
						<?php
							while($fetchdata = mysql_fetch_array($client11)){


					     ?>
                            <img data-u="image" src="<?php echo 'admin/site-images/'.$fetchdata['clientimage']?>" />
                        </div>
						<?php
							}					
					?>
                        <div>
						<?php
							while($fetchdata = mysql_fetch_array($client12)){


					     ?>
                            <img data-u="image" src="<?php echo 'admin/site-images/'.$fetchdata['clientimage']?>" alt="test alt" />
                        </div>
						<?php
							}					
					?>

                    </div>
                </div>
                <!-- Ends: .col-md-12 -->
            </div>
        </div>
    </section>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="widget-area links">
					<?php
							while($row = mysql_fetch_array($footer1)){


					     ?>
                        <div class="widget-head">
                            <h2>
                                Industries
                            </h2>
                        </div>
                        <div class="widget-contents">
                            <ul class="list-unstyled">
                                <li>
                                    <a href="banking.php">
                                        <?php echo $row['subheading1'] ?>
                                    </a>
                                </li>
                                <li>
                                    <a href="retail.php">
                                       <?php echo $row['subheading2'] ?>
                                    </a>
                                </li>
                                <li>
                                    <a href="telecom.php">
                                        <?php echo $row['subheading3'] ?>
                                    </a>
                                </li>
                                <li>
                                    <a href="insurance.php">
                                        <?php echo $row['subheading4'] ?>
                                    </a>
                                </li>
                                <li>
                                    <a href="healthcare.php">
                                        <?php echo $row['subheading5'] ?>
                                    </a>
                                </li>
                                <li>
                                    <a href="manufacturing.php">
                                        <?php echo $row['subheading6'] ?>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
					<?php
							}
							?>
                </div>
                <!-- Ends: .col-md-3 -->

                <div class="col-lg-3 col-md-6">
                    <div class="widget-area links">
					<?php
							while($row = mysql_fetch_array($footer2)){


					     ?>
                        <div class="widget-head">
                            <h2>
                                <?php echo $row['mainheading'] ?>
                            </h2>
                        </div>
                        <div class="widget-contents">
                            <ul class="list-unstyled">
                                <li>
                                    <a href="loc8.php">
                                         <?php echo $row['subheading1'] ?>
                                    </a>
                                </li>
                                <li>
                                    <a href="opini8.php">
                                         <?php echo $row['subheading2'] ?>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                         <?php echo $row['subheading3'] ?>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                         <?php echo $row['subheading4'] ?>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                         <?php echo $row['subheading5'] ?>
                                    </a>
                                </li>
                                <li><a href=""> <?php echo $row['subheading6'] ?></a></li>

                            </ul>
                        </div>
                    </div>
					<?php
							}
							?>
                </div>
                <!-- Ends: .col-md-3 -->

                <div class="col-lg-3 col-md-6">
                    <div class="widget-area links">
					<?php
							while($row = mysql_fetch_array($footer3)){


					     ?>
                        <div class="widget-head">
                            <h2>
                                <?php echo $row['mainheading'] ?>
                            </h2>
                        </div>
                        <div class="widget-contents">
                            <ul class="list-unstyled">
                                <li>
                                    <a href="about.php">
                                        <?php echo $row['subheading1'] ?>
                                    </a>
                                </li>
                                <li>
                                    <a href="team.php">
                                        <?php echo $row['subheading2'] ?>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                         <?php echo $row['subheading3'] ?>
                                    </a>
                                </li>
                                <li>
                                    <a href="careers.php">
                                        <?php echo $row['subheading4'] ?>
                                    </a>
                                </li>
                                <li>
                                    <a href="blogs/blog-classic.php">
                                        <?php echo $row['subheading5'] ?>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
					<?php
							}
							?>
                </div>
				
                <!-- Ends: .col-md-3 -->

                <div class="col-lg-3 col-md-6">
                    <div class="widget-area links">
					<?php
							while($row = mysql_fetch_array($footer4)){


					     ?>
                        <div class="widget-head">
                            <h2>
                                <?php echo $row['mainheading'] ?>
                            </h2>
                        </div>
                        <div class="widget-contents">
                            <ul class="list-unstyled">
                                <li><a href=""> <?php echo $row['subheading1'] ?></a></li>
                            </ul>
                        </div>
                    </div>
					<?php
							}
							?>
				<div class="footer-right">
				<ul class="social-icons2">
					<li><a href="https://m.facebook.com/algo8ai/"><i class="fa fa-facebook"></i></a></li>
					<li><a href="https://instagram.com/theikigailab?utm_source=ig_profile_share&igshid=1cw46hdbc7lh3"><i class="fa fa-instagram"></i></a></li>
					<li><a href="https://www.linkedin.com/company/algo8"><i class="fa fa-linkedin"></i></a></li>
					<li><a href="https://www.youtube.com/watch?v=k0MpVsTAyWo"><i class="fa fa-youtube"></i></a></li>
				</ul>
			   </div>
                </div>

                <!-- Ends: .col-md-3 -->
            </div>
        </div>
    </footer>
    <!-- Ends: .hero-area -->
    <!-- ==============================================
        JS GOES HERE
    ================================================= -->
    <!-- inject:js -->
    <script type="text/javascript">jssor_1_slider_init();</script>
    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="js/vendor/jquery/jquery-1.12.3.js"></script>

    <script src="js/vendor/jquery/particles.min.js"></script>

    <script src="js/vendor/jquery/popper.min.js"></script>

    <script src="js/vendor/bootstrap.min.js"></script>

    <script src="js/vendor/jquery.magnific-popup.min.js"></script>

    <script src="js/vendor/jquery.sticky.js"></script>

    <script src="js/vendor/owl.carousel.min.js"></script>

    <script src="js/vendor/particles-app.js"></script>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDMjWSDG4QO9RnoYOsLOKITmRLbkg6B5TM"></script>
    <script src="js/vendor/gmap.js"></script>

    <script src="js/main.js"></script>
    <script src="js/jquery-1.12.0.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.meanmenu.min.js"></script>
    <script src="js/jquery.mb.YTPlayer.min.js"></script>
    <script src="js/jquery.syotimer.min.js"></script>
    <script src="js/custom.js"></script>

    <!-- endinject -->
    <script type="text/javascript">
        var Tawk_API = Tawk_API || {}, Tawk_LoadStart = new Date();
        (function () {
            var s1 = document.createElement("script"), s0 = document.getElementsByTagName("script")[0];
            s1.async = true;
            s1.src = 'https://embed.tawk.to/5c1a31e982491369ba9ec036/default';
            s1.charset = 'UTF-8';
            s1.setAttribute('crossorigin', '*');
            s0.parentNode.insertBefore(s1, s0);
        })();
    </script>

</body>

</html>
<?php              
error_reporting(E_ALL);
include('admin/connect.php');
include('dbconfig.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<style>
       footer-right ul.social-icons2 {
            
            padding-top: 20px;
        }
		footer .footer-right ul.social-icons2 li {
	            display:inline;
	            margin-right: 5px;
		}
             ul {
                 margin: 0;
                 padding: 0;
                 padding-top: 0px;
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
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-126673009-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());

        gtag('config', 'UA-126673009-1');
    </script>

    <meta charset="UTF-8">
    <!-- viewport meta -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content=" Telecom-Case Studies ALgo8 - Industry Solutions | Telecom ">
    <meta name="keywords" content="Algo8, ai, artificial intelligence, machine learning">
    <title>Telecom-Case Studies | Telecom</title>
    <!-- inject:css -->
	<link rel="icon" href="images/favicon.ico" sizes="48x48">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/simple-line-icons.css">
    <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/uikit-rtl.css" />
    <link rel="stylesheet" href="css/uikit-rtl.min.css" />
    <link rel="stylesheet" href="css/uikit.css" />
    <link rel="stylesheet" href="css/uikit.min.css" />
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

    <!-- Start: .hero-area -->
    <section class="intro telecom">
        <div class="container">
            <div class="intro-details">
                <div class="intro-info">
                    <h2></h2>
                </div>
            </div>
        </div>
    </section>
    <section class="blog-wrapper section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 col-md-12">
                    <div class="blog-details">
                        <div class="blog-contents noselect">
                            <h2 class="blog-title">
                                Business Challenge
                            </h2>
                            <p>
                                Hutchison3, a leading telecom company, wanted to identify the customers with high risk of churning out of operator’s network or data/ voice services. Also telco wanted to understand the data consumption patterns to create customized offerings and segmented/ granular targeting.
                            </p>
                            <h2 class="blog-title">
                                Transformation
                            </h2>
                            <p>
                                Algo8’s cutting edge solution enabled the client  to accurately  identify the churning customers by building powerful machine learning algorithms. The data consumption patterns were also identified through BIGDATA setup and cluster computing.
                            </p>
                            <h2 class="blog-title">
                                Results
                            </h2>
                            <div class="container">
                                <div class="row">
                                    <div class="col-sm">
                                        7% reduction in annual data –churn rate for the operator
                                    </div>
                                    <div class="col-sm">
                                        Churning customer identified with 93% accuracy.
                                    </div>
                                    <div class="col-sm">
                                        Pinpointing individual customer behavior as compared to consumer group for customized plans
                                    </div>
                                </div>
                            </div>
                            <h2 class="blog-title">
                                Business challenge story <br />
                                <span>Solving big business challenges</span>
                            </h2>
                            <p>
                                High competition among telecom companies amid aggressive pricing of fast data has been widespread in the telecom industry and it continues to remain intense as the larger operators are contesting to acquire subscribers of the exiting telecom companies.<br />Telco has historically been a capital-intensive industry with high fixed costs, which has put pressure on telecom operators to maximise customer retention .
                            </p>
                            <p>
                                A leading telecom company , Hutchison3, faced challenge while trying to identify customers with high risk of churning out of operator’s network or data/ voice services.Telco also wanted Suggestions around corrective actions to retain these high risk customers.
                            </p>
                            <p>
                                The other big, rather impossible challenge was to highlight data consumption patterns of every customer in order to create customized offerings and segmented/granular targeting.This task was particularly difficult as the data usage behavior changes based on type of apps being used as well as time of the day, location, etc.
                            </p>
                            <h2 class="blog-title">
                                Transformation story <br />
                                <span>Harnessing the power of analytics</span>
                            </h2>
                            <p>
                                Telecom is one of the largest industries in the world, hence the value created by augmenting AI and machine learning to this artery of connectivity is also stupendous.This was particularly realised when Algo8 collaborated with Hutchison3 to understand the challenge and the direct impact it would have on business and revenue.
                            </p>
                            <p>
                                Algo8 incorporated various data sources such as CRM, billing, plans, CDR, XDR and Support along with engineering more than 1200 features to capture all characteristics for creating a 360° view of each customer .
                            </p>
                            <p>
                                Machine learning algorithms such as Support Vector machine(SVM) and XGBoost were used to create an ensemble model. This model was used to predict the churn rate. Survival Analysis was done to tentatively tell the time before churn.
                            </p>
                            <p>
                                In order to Highlight data consumption patterns of customers, feature creation was done through Bigdata setup and cluster computing. These features were based upon Recency, frequency, volume, type of website/app, type of content, time of day, location, plan, device etc.
                            </p>
                            <p>
                                This is truly business redefined!
                            </p>
                            <!--<ul>
                                <li>
                                    Application of a variety of tools to gain insight into what DMI’s financial and logistical data means across a variety of indicators
                                </li>
                                <li>Democratisation of data access across various verticals and departments</li>
                                <li>
                                    Elimination of data silos to enable faster data handling
                                </li>
                                <li>Single, unified view of data across the organisation combined with the ability to store all types of structured and unstructured data for quick reference and archival storage.</li>
                                <li>Ability to load raw data in native format and transform as per context</li>
                            </ul>-->

                            <h2 class="blog-title">
                                Results story <br />
                                <span>Transforming data into real results</span>
                            </h2>
                            <p>
                                Algo8’s churn prediction model , generated a 93% accurate prediction. Not only did it identify high risk customers but also affirmed the most impactful reason of their dissatisfaction. This directly impacted revenues with a 7% reduction in the annual churn rate for the operator.
                            </p>
                            <p>
                                Customer data consumption pattern was pinpointed at individual level as compared to the consumer group to identify up/X-sell opportunities in terms of customized plans.This acutely helped the client to create personalized marketing campaigns, laser-targeted advertising, and deep customer engagement .
                            </p>
                            <p>
                                Algo8 has worked with 3 Telecom companies and the results have been overwhelming each time. From an AI enabled organisation, Algo8 is envisioning a world where AI and ML are symbiotically linked to the way we perceive and perform activities across various spheres of life.
                            </p>
                            <h2 class="blog-title">
                                About CLIENT - Hutchison 3
                            </h2>
                            <p>
                                Hutchison 3 Indonesia provides telecommunications services in Indonesia. It offers mobile data, voice, and SMS services, as well as mobile broadband services. The company was founded in 2004 and is based in Jakarta Selatan, Indonesia.
                            </p>
                            <h2 class="blog-title">
                                Relevant Solution components
                            </h2>
                            <ul>
                                <li>Machine Learning SaaS</li>
                                <li>Deep Learning SaaS</li>
                            </ul>
                            <h2 class="blog-title">
                                Take the next step
                            </h2>
                            <p>
                                Algo8 builds potent data driven tech that is decisive in driving our client’s growth.
                                Learn how Algo8 can help you
                            </p>
                        </div>
                        <!-- Ends: .blog-contents -->
                    </div>
                    <!-- Ends: .blog-details -->
                </div>
                <!-- Ends: .col-lg-8 -->
            </div>
        </div>
        <!-- Ends: .contianer -->
    </section>
    <section class="cta">
        <div class="container">
            <div class="row">
                <div class="col-md-12 cta-contents">
                    <h2></h2>
                    <a href="" onclick="LC_API.open_chat_window();return false;" class="btn btn-large">
                        Contact Us
                        <span class="icon-paper-plane"></span>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- Starts: Footer -->
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
                                    <a href="#">
                                         <?php echo $row['subheading3'] ?>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                         <?php echo $row['subheading4'] ?>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                         <?php echo $row['subheading5'] ?>
                                    </a>
                                </li>
                                <li><a href="#"> <?php echo $row['subheading6'] ?></a></li>

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
                                    <a href="#">
                                         <?php echo $row['subheading3'] ?>
                                    </a>
                                </li>
                                <li>
                                    <a href="careers.php">
                                        <?php echo $row['subheading4'] ?>
                                    </a>
                                </li>
                                <li>
                                    <a href="blog-classic.php">
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
                                <li><a href="#"> <?php echo $row['subheading1'] ?></a></li>
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
    <!-- Ends: Footer -->
    <!-- ==============================================
        JS GOES HERE
    ================================================= -->
    <!-- inject:js -->
    <script src="js/uikit-icons.js"></script>
    <script src="js/uikit-icons.min.js"></script>
    <script src="js/uikit.js"></script>
    <script src="js/uikit.min.js"></script>
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
    <!-- endinject -->
    <script type="text/javascript">
        window.__lc = window.__lc || {};
        window.__lc.license = 10169092;
        (function () {
            var lc = document.createElement('script'); lc.type = 'text/javascript'; lc.async = true;
            lc.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'cdn.livechatinc.com/tracking.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(lc, s);
        })();
    </script>
</body>

</html>


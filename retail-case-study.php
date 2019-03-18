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
    <meta name="description" content=" Retail-Case Studies ALgo8 - Industry Solutions | Retail ">
    <meta name="keywords" content="Algo8, ai, artificial intelligence, machine learning">
    <title>Retail-Case Studies | Reatail</title>
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
    <section class="intro retail-case">
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
                                Future Group , India’s leading retailer , were looking at opening 500 new stores across the country to fight the influence of Online retailing by personalizing the experience of Hyperlocal.

                            </p>
                            <h2 class="blog-title">
                                Transformation
                            </h2>
                            <p>
                                Algo8’s location intelligence tool , Loc8 helped the retailer bring external catchment data as a context to look at store performance. Through more than a thousand geodemographic data features and powerful machine learning, external catchment data was combined with internal transactional data to give optimal insights to the retailer
                            </p>
                            <h2 class="blog-title">
                                Results
                            </h2>
                            <div class="container">
                                <div class="row">
                                    <div class="col-sm">
                                        Client saved 9% in the first quarter of Implementation Itself just by Loc8’s Predictive Inventory Analysis.
                                    </div>
                                    <div class="col-sm">
                                        2000 new store locations were predicted across Delhi in 2 months time.
                                    </div>
                                    <div class="col-sm">
                                        Overall revenue and profits increased significantly through Loc8’s Dynamic Assortment of Goods
                                    </div>
                                </div>
                            </div>
                            <h2 class="blog-title">
                                Business challenge story <br />
                                <span>Solving big business challenges</span>
                            </h2>
                            <blockquote>
                                <span class="icon-speech"></span> “The team at Algo8 has helped us deliver impactful use cases for our clients in retail and government domains.”Sandipan Chattopadhay , Ex- CTO, Justdial
                            </blockquote>
                            <p>
                                With the advent of Online retail , traditional retailing has had a tough time lately. Traffic in shopping centres of biggest markets has been declining. Every retailer felt the need for a change.The success of a store is hugely impacted by its location and this crucial decision was  merely based upon either local knowledge or the historical data , both these approaches are not accurate as they do not take customer profiles into consideration.
                            </p>
                            <p>
                                Leading retailer ‘Future group’ decided to come up with 500 new stores across India which gives them personalising experience of Hyperlocal.They wanted to know their consumer’s thought process and perception which supposedly led to the challenge, however they had access to just a little more than the transaction data.
                            </p>
                            <p>
                                The next big challenge was to overcome the losses incurred in perishable products category. Uneven demands of goods sometimes led to overstocking while at other times it led to non-availability of products , which was a big disadvantage.
                            </p>
                            <p>The third challenge was the right Marketing.The retailer observed that over the past couple of years there was a significant reduction in promotional scheme acceptance along with a rise in marketing expenditure. Sending customised promotional schemes to customers was a big time need.</p>
                            <p>Algo8’s location intelligence tool , Loc8 , was used to achieve these milestones. Though it was a daunting task, in the end it did yield astounding results.</p>
                            <h2 class="blog-title">
                                Transformation story <br />
                                <span>Harnessing the power of analytics</span>
                            </h2>
                            <blockquote>
                                <span class="icon-speech"></span> “Algo8 has increased the potential value we can extract from data from different sources in a way more flexible and scalable.”- Anmol Nayyar (Executive Director,DMI)
                            </blockquote>
                            <p>Data from all sources was brought together which included store location data , customer data, macroeconomic data and Algo8’s proprietary data. These drivers were fed into Loc8 which used its powerful machine learning algorithm to predict areas with highest sale potential. To make sure that this location was a profitable proposition, client suggestions or constraints were also considered. Hence Loc8 ended up predicting the most ideal locations which would generate highest revenues for the business.</p>
                            <p>
                                For Predictive Inventory Analysis , Algo8 collected the relevant data of each product. Advance forecasting techniques were applied on this data to forecast the demand and supply. The output was then fed to Predictive Analytics Algorithms which recommended the right amount of goods to be procured .
                            </p>
                            <p>
                                The Retailer had some luxury stores in key cities and they wanted to identify the most valuable customers from existing ones, based upon relationship and purchase habits. Algo8 created this dynamic customer segment based upon relationship quotient , demography and behavioural sweet spot.
                            </p>
                            <p>
                                Dynamic assortment was achieved by analysing current data to understand the present assortment performance.Products with higher sale potential were identified. A model was created to ensure that maximum unique demands are met and this assortment was further rationalised through affinity analysis. The final assortment was fed into an optimisation engine with the objective to maximise the overall revenue per square foot.
                            </p>
                            <p>
                                In order to optimise marketing, huge data Extraction, transformation and loading exercise was undertaken to gather the relevant data.Feature engineering techniques like PCA was used to create new features. With advanced techniques such as SVM , Algo8 was able to predict the probability of campaign acceptance.

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
                                2000 potential store locations were recommended by LOC8 in just 2 months based on the constraints provided while filtering out all the Bad locations. Predictive inventory analysis helped the client save 9% of its revenue in the very first quarter of implementation.
                                There has been a substantial decrease in the annual mailing expenditure and growth in campaign success.The implementation of Dynamic assortment marked an increase in the overall revenue and profits for the retailer.
                                It goes without saying that the stupendous success of this project is a milestone in Algo8’s journey.
                            </p>

                            <h2 class="blog-title">
                                About CLIENT - Future group
                            </h2>
                            <p>
                                Future Group is an Indian private conglomerate, headquartered in Mumbai. The company is known for having a significant prominence in Indian retail and fashion sectors, with popular supermarket chains like Big Bazaar and Food Bazaar, lifestyle stores like Brand Factory, Central etc. and also for having a notable presence in integrated foods and FMCG manufacturing sectors. Future Retail (initially Pantaloons Retail India Ltd (PRIL)) and Future Lifestyle Fashions, two operating companies of Future Group, are among the top retail companies listed in BSE with respect to assets, and in NSE with respect to market capitalization.
                            </p>
                            <h2 class="blog-title">
                                Relevant Solution components
                            </h2>
                            <ul>

                                <li>LOC8</li>
                                <li>ALGO8 Data Lake</li>
                                <li>Machine Learning SaaS</li>
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


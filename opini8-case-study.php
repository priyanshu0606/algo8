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
footer .footer-right ul.social-icons2 li a i.fa.fa-twitter:hover {
	background-color:#004A82;
}
footer .footer-right ul.social-icons2 li a i.fa.fa-linkedin:hover { 
	background-color:#BB5E00;
}
footer .footer-right ul.social-icons2 li a i.fa.fa-google-plus:hover { 
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
    <meta name="description" content=" BFSI-Case Studies ALgo8 - Platform | BFSI ">
    <meta name="keywords" content="Algo8, ai, artificial intelligence, machine learning">
    <title>Opini8-Case Studies | Platform</title>
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
    <section class="intro opini8-case">
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
                                The client wanted a method through which they could market their product, capture audience sentiment in real time and then simultaneously respond to queries or doubts that emerged from these responses. Conventional manual marketing process was a time consuming and costly affair. The client’s interest to feel the pulse of the public was a challenge that could be solved through incorporation of Data Mining (DM) and Machine Learning (ML). Algo8’s Opini8 became the go-to point for the client.
                            </p>
                            <h2 class="blog-title">
                                Transformation
                            </h2>
                            <p>
                                ML, DM and Natural Language Processing (NLP) techniques are leading the long awaited and much needed change in the Movies business. Opini8 uses social media to make pre-release and post release strategy for movies targeted communication. This in turn ensures that the client can be in sync with its client’s thought process at nearly all times and generate appropriate responses or solutions to any issues or queries.
                            </p>
                            <h2 class="blog-title">
                                Results
                            </h2>
                            <div class="container">
                                <div class="row">
                                    <div class="col-sm">
                                        A manual marketing process which lasted almost 2 months could be achieved in real time through Opini8.
                                    </div>
                                    <div class="col-sm">
                                        Ideal locations for promotions were predicted with 95% accuracy
                                    </div>
                                    <div class="col-sm">
                                        Every single comment and retweet about the movie was captured and the brand sentiment analysis was published on a real time basis
                                    </div>
                                </div>
                            </div>
                            <h2 class="blog-title">
                                Business challenge story <br />
                                <span>Solving big business challenges</span>
                            </h2>
                            <blockquote>
                                <span class="icon-speech"></span> “Impactful insights which are counter intuitive.”-Vivek Rangachari ,Director, DAR Media Pvt. Ltd
                            </blockquote>
                            <p>
                                The producers of the film wanted a method through which they could effectively market their film to audiences on electronic and print platforms. The presentation of content that would be alluring and yet understandable at the same time was a challenge.
                            </p>
                            <p>
                                At a time when the ‘Comedy-drama’ genre is being talked about the world over, presenting its subtleties on the big screen was a challenge the producers faced. More than that, ensuring that the potential target audience would be captivated from the release of the trailer to the film screening too was a considerable task. This is when the producers thought of incorporating ‘Sentiment Analysis’ into their marketing strategy.
                            </p>
                            <p>The producers felt that more than just putting up posters and releasing videos online, grasping the pulse of the audience was crucial since such a step would help the film grab eyeballs and ensure a bumper revenue. In this context, understanding the psyche and tastes of the audience, what they expected from the star cast and directors and in which way or frame they wished for the movie to go forward became significant points of concern. </p>
                            <p>The producer’s decision to tie-up with Algo8 to understand ‘Sentiments’ of the audience marked a unique departure from conventional forms of attracting cinema-goers. Though it was a daunting task in the end it did yield interesting results. </p>
                            <h2 class="blog-title">
                                Transformation story <br />
                                <span>Harnessing the power of Opini8</span>
                            </h2>
                            <blockquote>
                                <span class="icon-speech"></span> “Data is now helping us be more creative with our communication through Opini8”-Vivek Rangachari ,Director, DAR Media Pvt. Ltd
                            </blockquote>
                            <p>
                                Algo8’s Opini8 works on NLP, DM and ML & does the contextual opinion mining and sentiment evaluation for predicting the trends and demography of the audience. By understanding key words, phrases and mood of the users who comment on social media or entertainment news portals, Opini8 tries to understand the expectation of the target group and communicate it to the makers of the project.
                            </p>
                            <p>
                                The producers of Bucket List wanted to experiment with something radical and different to ensure that their marketing campaign would reach all sections of society and enthrall cinema aficionados enough that they’d be compelled to buy a ticket. In this context, understanding their sentiments and channelising it through a platform that was in sync with their aspirations became critical to the movie’s success. This task was accomplished successfully by Opini8.
                            </p>
                            <p>
                                The producers, by investing their time in Opini8, were in tune with their audience which ultimately resulted in the movie performing well at the box office and earning praise from film critics. The film’s experimental theme and audience’s hopes from it was also well- evaluated and communicated to the producers thanks to Opini8.
                            </p>
                            <h2 class="blog-title">
                                Results story <br />
                                <span>Transforming data into real results</span>
                            </h2>
                            <p>
                                The producer’s wish to understand their audience’s mindset in real time was a challenge that Opini8 solved. The preparedness towards the social media interactions and channelizing their marketing efforts had been automated with near real time responses.
                            </p>
                            <p>
                                The brand sentiment management for the movie as a product became easier than ever. This meant that not only was the movie successful in generating interest amongst its intended target audience, it was also successful in ensuring that their interest translated into the earnest desire to watch the movie. Opini8 became a game changer in this context.
                            </p>
                            <p>
                                Ideal locations for promotions were predicted with 95% accuracy. More importantly, manual marketing process which lasted almost 2 months could be achieved in real time now through Opini8.
                            </p>
                            <p>
                                The producer’s decision to invest in Opini8 also reflected the film industry’s desire to be more tech-savvy with the stated aim of retaining film lovers.
                            </p>
                            <h2 class="blog-title">
                                About CLIENT - Bucket List
                            </h2>
                            <p>
                                Directed by Tejas Prabha Vijay Deoskar, "Bucket List" has been produced by DAR Motion Pictures, Dark Horse Cinemas and Blue Mustang Creations and  stars Madhuri Dixit in her Marathi debut, along with Renuka Shahane and Sumeet Raghavan. Though Bucket List starts off with Dixit playing the ideal housewife whose day starts and ends with making her family happy, she realises that she has lost her individual identity and then begins her journey of self-realisation.
                            </p>
                            <h2 class="blog-title">
                                Relevant Solution components
                            </h2>
                            <ul>

                                <li>Opini8</li>
                            </ul>
                            <h2 class="blog-title">
                                Take the next step
                            </h2>
                            <p>
                                Algo8 builds potent data driven tech that is decisive in driving our client’s growth.
                                Learn how Opini8 can help you
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


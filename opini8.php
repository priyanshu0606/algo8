<?php              
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
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-126673009-1');
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

    <meta charset="UTF-8">
    <!-- viewport meta -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content=" Platform opini8 - Industry Solutions | Platform opini8 ">
    <meta name="keywords" content="Algo8, ai, artificial intelligence, machine learning">
    <title>Platform | Opini8</title>
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
    <section class="intro opini8">
        <div class="container">
            <div class="intro-details">
                <div class="intro-info">
				<?php
							while($row = mysql_fetch_array($opini1)){

					        ?>
                    <h2>
                         <?php echo $row['imagetext2'] ?>
                    </h2>
                    <p>
                        <?php echo $row['imagetext'] ?>
                    </p>
                </div>
				<?php
							}					
					?>
            </div>
        </div>
    </section>
    <section class="services">
        <div class="container">
            <div class="row">
			<?php
							while($row = mysql_fetch_array($opini2)){

					        ?>
                <div class="col-md-12 section-title">
                    <h2>
                                                <?php echo $row['imagetext2'] ?>
                    </h2>
                </div>
                <div class="col-lg-6 col-md-12 service-image">
                    <figure>
                        <img src="<?php echo 'admin/site-images/'.$row['image']?>" alt="" class="img-fluid">
                    </figure>
                </div>
                <div class="col-lg-6 col-md-12 service-desc">
                  <p>
                        Amidst social media noise, where x amount of data is created and put out every second, the biggest challenge was to stand out from the clutter and to reach the right people. The biggest questions were :
                    </p>
                    <p>
                        How to reach the target audience? <br />

                        What content should be promoted ? <br />

                        At what time should the content be put out there so that it reaches the maximum number of the people.
                    </p>
                </div>
            </div>
			<?php
			}
			?>
        </div>
    </section>
    <section class="about-contents">
        <div class="container">
            <div class="row">
                <div class="col-md-12 wcu research-features">
                    <div class="row">
                        <div class="col-md-12 section-title">
                            <h2>
                                HOW OPINI8 HELPS
                            </h2>
                            <p>Opini8 is an An End-to-End Analytics Pipeline For Social and Print Media which Analyses gross public sentiment on social media platforms.</p>
                        </div>
                    </div>
                </div>
                <!-- Ends: .research-features -->
                <div class="col-md-6">
                    <ul uk-accordion>
                        <li>
                            <a class="uk-accordion-title" href="#">EXPLORING AUDIENCE OPINION </a>
                            <div class="uk-accordion-content">
                                <ul class="list-unstyled">
                                    <li>
                                        <span class="icon-arrow-right-circle"></span> Intent analysis of social media content
                                    </li>
                                    <li>
                                        <span class="icon-arrow-right-circle"></span> Explore key audiences/ influencers
                                    </li>
                                    <li>
                                        <span class="icon-arrow-right-circle"></span> Identify and evaluate Mass opinion
                                    </li>
                                    <li>
                                        <span class="icon-arrow-right-circle"></span> Digital Campaign management
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a class="uk-accordion-title" href="#">PRE-RELEASE ANALYTICS </a>
                            <div class="uk-accordion-content">
                                <ul class="list-unstyled">
                                    <li>
                                        <span class="icon-arrow-right-circle"></span> Know your revenue from digital engagements
                                    </li>
                                    <li>
                                        <span class="icon-arrow-right-circle"></span> Optimize your Product Launch date
                                    </li>
                                    <li>
                                        <span class="icon-arrow-right-circle"></span> Marketing Insights
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a class="uk-accordion-title" href="#">INTELLIGENT FORECAST MACHINE </a>
                            <div class="uk-accordion-content">
                                <ul class="list-unstyled">
                                    <li>
                                        <span class="icon-arrow-right-circle"></span> Expenses vs Investment forecast
                                    </li>
                                    <li>
                                        <span class="icon-arrow-right-circle"></span> Get to know: Ways to Higher ROI(Insights)
                                    </li>
                                    <li>
                                        <span class="icon-arrow-right-circle"></span> Optimize and Channelize Marketing efforts
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a class="uk-accordion-title" href="#">Trend Analysis</a>
                            <div class="uk-accordion-content">
                                <p>Understanding demand helps to get better ROI with mood of audience, in genre, cast and other things.</p>
                            </div>
                        </li>

                        <li>
                            <a class="uk-accordion-title" href="#">Forecast Business Targets</a>
                            <div class="uk-accordion-content">
                                <p>This is basic need of all movie makers to know what they are going to earn. </p>
                            </div>
                        </li>
                        <li>
                            <a class="uk-accordion-title" href="#">Targeted Campaign</a>
                            <div class="uk-accordion-content">
                                <p>
                                    Setting up right campaign to right audience with successful engagement, with budget isn’t anymore challenge.
                                </p>
                            </div>
                        </li>
                    </ul>
                    <a href="opini8-case-study.php" style="font-weight:500; font-size:20px; line-height:50px;">VIEW CASE STUDY</a>
                </div>
                <div class="col-md-6">
                    <iframe height="315" width="100%" src="https://www.youtube.com/embed/k0MpVsTAyWo" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </section>

    <div class="col-md-12 research-keynotes">
        <div class="row">
            <div class="col-md-12 section-title ">
                <h2>
                    Product Features
                </h2>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="box">
				<?php
							while($row = mysql_fetch_array($ft1)){

					        ?>
                    <span class="icon-eye"></span>
                    <h3>
                        <?php echo $row['category2'] ?>
                    </h3>
                    <p>
                        <?php echo $row['category1'] ?>
                    </p>
                </div><?php
				}
				?>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="box">
				<?php
							while($row = mysql_fetch_array($ft2)){

					        ?>
                    <span class="icon-map"></span>
                    <h3><?php echo $row['category2'] ?></h3>
                    <p>
                        <?php echo $row['category1'] ?>
                    </p>
                </div>
				<?php
				}
				?>
            </div>
            <!-- Ends: .col-md-3 -->
            <div class="col-lg-3 col-md-6">
                <div class="box">
				<?php
							while($row = mysql_fetch_array($ft3)){

					        ?>
                    <span class="icon-chart"></span>
                    <h3><?php echo $row['category2'] ?></h3>
                    <p>
                        <?php echo $row['category1'] ?>
                    </p>
                </div>
				<?php
				}
				?>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="box">
				<?php
							while($row = mysql_fetch_array($ft4)){

					        ?>
                    <span class="icon-layers"></span>
                    <h3>
                        <?php echo $row['category2'] ?>
                    </h3>
                    <p>
                        <?php echo $row['category1'] ?>
                    </p>
                </div>
				<?php
				}
				?>
            </div>
        </div>
    </div>
    <div class="full-width-testimonial">
        <div class="full-width-testimonial-section">
            <div class="full-width-testimonial-icon text-center">
                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                     width="41px" height="34px" viewBox="-235 240 41 34" style="enable-background:new -235 240 41 34;" xml:space="preserve">
                <path class="quote-path" d="M-231.3,260.4c0-5,1.3-8.8,3.7-11.7c2.4-2.8,6-4.6,10.5-5.5v5c-3.5,1-6,2.8-7.1,5.5c-0.7,1.4-0.9,2.8-0.8,4
            h8.1v12.8h-14.4V260.4z" />

                <path class="quote-path" d="M-212,260.4c0-5,1.3-8.8,3.7-11.7c2.4-2.8,6-4.6,10.5-5.5v5c-3.5,1-6,2.8-7.1,5.5c-0.7,1.4-0.9,2.8-0.8,4h8.1
            v12.8H-212V260.4z" />

      </svg>
            </div>
            <div class="full-width-testimonial-content">
                <h5 class="full-width-testimonial-text">
                    Impactful insights which are counter intuitive. Data is now helping us be more creative with our
                    communication through Opini8.
                </h5>
                <p class="full-width-testimonial-source">Vivek Rangachari</p>
                <span class="full-width-testimonial-source-context">Director, DAR Media Pvt. Ltd</span>
            </div>
        </div>
    </div>
    <!-- Start publications -->
    <section class="publications section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12 section-title">
                    <h2>
                        What do expert say
                    </h2>
                </div>
                <!-- Ends: .section-title -->
                <div class="container">
                    <div class="row">
                        <!-- Ends: .projects-excerpts -->
                        <div class="col-md-2"></div>
                        <div class="col-md-8">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="project-single">
									<?php
							while($row = mysql_fetch_array($expt1)){

					        ?>
                                        <figure>
                                            <img src="<?php echo 'admin/site-images/'.$row['image']?>" alt="" class="img-fluid">
                                            <figcaption>
                                                <h3><a href=""> <?php echo $row['imagetext2'] ?> </a></h3>
                                                <p>
                                                    <?php echo $row['imagetext'] ?>
                                                </p>
                                                <a href="">
                                                    Read More
                                                    <span class="icon-arrow-right"></span>
                                                </a>
                                            </figcaption>
                                        </figure>
                                    </div>
									<?php
									}
									?>
                                </div>
                                <!-- Ends: .col-md-6 -->
                                <div class="col-md-6">
                                    <div class="project-single">
									<?php
							while($row = mysql_fetch_array($expt2)){

					        ?>
                                        <figure>
                                            <img src="<?php echo 'admin/site-images/'.$row['image']?>" alt="" class="img-fluid">
                                            <figcaption>
                                                <h3><a href=""> <?php echo $row['imagetext2'] ?> </a></h3>
                                                <p>
                                                    <?php echo $row['imagetext'] ?>
                                                </p>
                                                <a href="">
                                                    Read More
                                                    <span class="icon-arrow-right"></span>
                                                </a>
                                            </figcaption>
                                        </figure>
                                    </div>
									<?php
									}
									?>
                                </div>
                                <!-- Ends: .col-md-6 -->
                            </div>
                        </div>
                        <!-- Ends: .col-md-8 -->
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Ends: publications -->
    <!-- Starts: Call To Action -->
    <section class="cta">
        <div class="container">
            <div class="row">
                <div class="col-md-12 cta-contents">
                    <h2>Explore the power of AI </h2>
                    <a href="javascript:void(Tawk_API.toggle())" class="btn btn-large">
                        Schedule a demo
                        <span class="icon-paper-plane"></span>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- Ends: .cta -->
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
    <script>
        $(document).ready(function () {
            $('.btns').click(function () {
                var collapse_content_selector = $(this).attr('href');
                var toggle_switch = $(this);
                $(collapse_content_selector).toggle(function () {
                    if ($(this).css('display') == 'none') {
                        toggle_switch.php('Read More');
                    } else {
                        toggle_switch.php('Read Less');
                    }
                });
            });

        });
    </script>
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
    <!-- endinject -->

</body>

</html>
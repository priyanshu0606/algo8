<?php              
error_reporting(E_ALL);
include('admin/connect.php');
include('dbconfig.php');
?>
<!DOCTYPE html>
<html>
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-126673009-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
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
    <meta name="description" content="ALgo8 Team -| Meet the team ">
    <meta name="keywords" content="Our Team, ai, artificial intelligence, machine learning">
    <title>Meet The Team</title>
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
    <link rel="icon" href="images/favicon.ico" sizes="48x48">
    <link rel="stylesheet" href="css/font-awesome.min.css" />
    <link rel="stylesheet" href="css/magnific-popup.css" />
    <link rel="stylesheet" href="css/owl.carousel.min.css" />
    <link rel="stylesheet" href="css/simple-line-icons.css" />
    <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css" />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" type="text/css" href="css/icomoon.css" />
    <link rel="stylesheet" type="text/css" href="css/normalize.css" />
    <link rel="stylesheet" type="text/css" href="css/default.css" />
    <link rel="stylesheet" type="text/css" href="css/jquery.mCustomScrollbar.css" />
    <link rel="stylesheet" type="text/css" href="css/component.css" />
    <link rel="stylesheet" type="text/css" href="css/demo.css" />
    <script src="js/modernizr.custom.js"></script>

</head>
<body>
    <!-- Preloader -->
    <div class="preloader">
        <div id="loader">
            <div id="box"></div>
            <div id="hill"></div>
        </div>
    </div>
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
    <main class="demo-main">
        <section id="awsm-modal" class="demo-section">
            <!-- .style-title-->
            <div class="container">
                <div class="awsm-modal">
                    <div class="row">
                        <ul class="grid awsm-popup-grid style-1">
                            <li>
                                <a href="#popup-01-awsm01356001" id="tigger-01-awsm01356001" class="awsm-popup-trigger">
                                    <figure>
                                        <div class="awsm-grid-holder">
										 <?php
							                  while($row1 = mysql_fetch_array($t1)){
					                     ?>
                                            <img src="<?php echo 'admin/site-images/'.$row1['image']?>" alt="Nandan Mishra Co-Founder and CEO ALgo8">
                                            <figcaption>
                                                <div class="awsm-personal-info">
                                                    <span>CEO</span>
                                                    <h2>Nandan Mishra</h2>
                                                </div>
                                                <!-- .awsm-personal-info -->
                                            </figcaption>
                                        </div>
										<?php
											  }
											  ?>
                                        <!-- .awsm-grid-holder -->
                                    </figure>
                                </a>
                            </li>
                            <li>
                                <a href="#popup-01-awsm01356002" id="tigger-01-awsm01356002" class="awsm-popup-trigger">
                                    <figure>
                                        <div class="awsm-grid-holder">
										 <?php
							                  while($row1 = mysql_fetch_array($t2)){
					                     ?>
                                            <img src="<?php echo 'admin/site-images/'.$row1['image']?>" alt="Himanshu Ujjwal Singh Co-Founder, COO ALGO8">
                                            <figcaption>
                                                <div class="awsm-personal-info">
                                                    <span>
                                                        CTO
                                                    </span>
                                                    <h2>Himanshu Ujjwal Singh</h2>

                                                </div>
                                                <!-- .awsm-personal-info -->
                                            </figcaption>
                                        </div>
										<?php
											  }
											  ?>
                                        <!-- .awsm-grid-holder -->
                                    </figure>
                                </a>
                            </li>
                            <li>
                                <a href="#popup-01-awsm01356003" id="tigger-01-awsm01356003" class="awsm-popup-trigger">
                                    <figure>
                                        <div class="awsm-grid-holder">
										 <?php
							                  while($row1 = mysql_fetch_array($t3)){
					                     ?>
                                            <img src="<?php echo 'admin/site-images/'.$row1['image']?>" alt="Rohit Singh Vice President ALgo8">
                                            <figcaption>
                                                <div class="awsm-personal-info">
                                                    <span>
                                                        VP Operations
                                                    </span>
                                                    <h2>
                                                        Rohit Singh
                                                    </h2>
                                                </div>
                                                <!-- .awsm-personal-info -->
                                            </figcaption>
                                        </div>
										<?php
											  }
											  ?>
                                        <!-- .awsm-grid-holder -->
                                    </figure>
                                </a>
                            </li>
                            <li>
                                <a href="#popup-01-awsm01356004" id="tigger-01-awsm01356004" class="awsm-popup-trigger">
                                    <figure>
                                        <div class="awsm-grid-holder">
										 <?php
							                  while($row1 = mysql_fetch_array($t4)){
					                     ?>
                                            <img src="<?php echo 'admin/site-images/'.$row1['image']?>" alt=" Nishish Jha Promoter, Investor ALGO8">
                                            <figcaption>
                                                <div class="awsm-personal-info">
                                                    <span>
                                                        Promoter, Investor
                                                    </span>
                                                    <h2>
                                                        Nishish Jha
                                                    </h2>

                                                </div>
                                                <!-- .awsm-personal-info -->
                                            </figcaption>
                                        </div>
										<?php
											  }
											  ?>
                                        <!-- .awsm-grid-holder -->
                                    </figure>
                                </a>
                            </li>
                            <li>
                                <a href="#popup-01-awsm01356005" id="tigger-01-awsm01356005" class="awsm-popup-trigger">
                                    <figure>
                                        <div class="awsm-grid-holder">
										 <?php
							                  while($row1 = mysql_fetch_array($t5)){
					                     ?>
                                            <img src="<?php echo 'admin/site-images/'.$row1['image']?>" alt="img05">
                                            <figcaption>
                                                <div class="awsm-personal-info">
                                                    <span>
                                                        CIO
                                                    </span>
                                                    <h2>
                                                        Anshuman Srivastava
                                                    </h2>
                                                </div>
                                                <!-- .awsm-personal-info -->
                                            </figcaption>
                                        </div>
										<?php
											  }
											  ?>
                                        <!-- .awsm-grid-holder -->
                                    </figure>
                                </a>
                            </li>
                            <li>
                                <a href="#popup-01-awsm01356006" id="tigger-01-awsm01356006" class="awsm-popup-trigger">
                                    <figure>
                                        <div class="awsm-grid-holder">
										 <?php
							                  while($row1 = mysql_fetch_array($t6)){
					                     ?>
                                            <img src="<?php echo 'admin/site-images/'.$row1['image']?>" alt="img06">
                                            <figcaption>
                                                <div class="awsm-personal-info">
                                                    <span>
                                                        VP Technology
                                                    </span>
                                                    <h2>
                                                        Saurabh Gupta
                                                    </h2>
                                                </div>
                                                <!-- .awsm-personal-info -->
                                            </figcaption>
                                        </div>
										<?php
											  }
											  ?>
                                        <!-- .awsm-grid-holder -->
                                    </figure>
                                </a>
                            </li>
                            <li>
                                <a href="#popup-01-awsm01356007" id="tigger-01-awsm01356007" class="awsm-popup-trigger">
                                    <figure>
                                        <div class="awsm-grid-holder">
										 <?php
							                  while($row1 = mysql_fetch_array($t7)){
					                     ?>
                                            <img src="<?php echo 'admin/site-images/'.$row1['image']?>" alt="img07">
                                            <figcaption>
                                                <div class="awsm-personal-info">
                                                    <span>
                                                        AVP Canada Sales
                                                    </span>
                                                    <h2>
                                                        Ankit Kohli
                                                    </h2>
                                                </div>
                                                <!-- .awsm-personal-info -->
                                            </figcaption>
                                        </div>
										<?php
											  }
											  ?>
                                        <!-- .awsm-grid-holder -->
                                    </figure>
                                </a>
                            </li>
                            <li>
                                <a href="#popup-01-awsm01356008" id="tigger-01-awsm01356008" class="awsm-popup-trigger">
                                    <figure>
                                        <div class="awsm-grid-holder">
										 <?php
							                  while($row1 = mysql_fetch_array($t8)){
					                     ?>
                                            <img src="<?php echo 'admin/site-images/'.$row1['image']?>" alt="img08">
                                            <figcaption>
                                                <div class="awsm-personal-info">
                                                    <span> VP Technology</span>
                                                    <h2>Vaibhaw Singh Chandel</h2>
                                                </div>
                                                <!-- .awsm-personal-info -->
                                            </figcaption>
                                        </div>
										<?php
											  }
											  ?>
                                        <!-- .awsm-grid-holder -->
                                    </figure>
                                </a>
                            </li>
                            <li>
                                <a href="#popup-01-awsm01356009" id="tigger-01-awsm01356009" class="awsm-popup-trigger">
                                    <figure>
                                        <div class="awsm-grid-holder">
										 <?php
							                  while($row1 = mysql_fetch_array($t9)){
					                     ?>
                                            <img src="<?php echo 'admin/site-images/'.$row1['image']?>" alt="img09">
                                            <figcaption>
                                                <div class="awsm-personal-info">
                                                    <span>Advisor</span>
                                                    <h2>Dhiraj Girdhar</h2>
                                                </div>
                                                <!-- .awsm-personal-info -->
                                            </figcaption>
                                        </div>
										<?php
											  }
											  ?>
                                        <!-- .awsm-grid-holder -->
                                    </figure>
                                </a>
                            </li>
                            <li>
                                <a href="#popup-01-awsm01356010" id="tigger-01-awsm01356010" class="awsm-popup-trigger">
                                    <figure>
                                        <div class="awsm-grid-holder">
										 <?php
							                  while($row1 = mysql_fetch_array($t10)){
					                     ?>
                                            <img src="<?php echo 'admin/site-images/'.$row1['image']?>" alt="img10">
                                            <figcaption>
                                                <div class="awsm-personal-info">
                                                    <span>CBO India</span>
                                                    <h2>Shashi Shekhar</h2>
                                                </div>
                                                <!-- .awsm-personal-info -->
                                            </figcaption>
                                        </div>
										<?php
											  }
											  ?>
                                        <!-- .awsm-grid-holder -->
                                    </figure>
                                </a>
                            </li>
                            <li>
                                <a href="#popup-01-awsm01356011" id="tigger-01-awsm01356011" class="awsm-popup-trigger">
                                    <figure>
                                        <div class="awsm-grid-holder">
										 <?php
							                  while($row1 = mysql_fetch_array($t11)){
					                     ?>
                                            <img src="<?php echo 'admin/site-images/'.$row1['image']?>" alt="img11">
                                            <figcaption>
                                                <div class="awsm-personal-info">
                                                    <span>Advisor</span>
                                                    <h2>Sam Vishal</h2>
                                                </div>
                                                <!-- .awsm-personal-info -->
                                            </figcaption>
                                        </div>
										<?php
											  }
											  ?>
                                        <!-- .awsm-grid-holder -->
                                    </figure>
                                </a>
                            </li>
                            <li>
                                <a href="#popup-01-awsm01356012" id="tigger-01-awsm01356012" class="awsm-popup-trigger">
                                    <figure>
                                        <div class="awsm-grid-holder">
										 <?php
							                  while($row1 = mysql_fetch_array($t12)){
					                     ?>
                                            <img src="<?php echo 'admin/site-images/'.$row1['image']?>" alt="img12">
                                            <figcaption>
                                                <div class="awsm-personal-info">
                                                    <span>Advisor</span>
                                                    <h2>Sumit Sinha</h2>
                                                </div>
                                                <!-- .awsm-personal-info -->
                                            </figcaption>
                                        </div>
										<?php
											  }
											  ?>
                                        <!-- .awsm-grid-holder -->
                                    </figure>
                                </a>
                            </li>
                            <li>
                                <a href="#popup-01-awsm01356013" id="tigger-01-awsm01356013" class="awsm-popup-trigger">
                                    <figure>
                                        <div class="awsm-grid-holder">
										 <?php
							                  while($row1 = mysql_fetch_array($t13)){
					                     ?>
                                            <img src="<?php echo 'admin/site-images/'.$row1['image']?>" alt="img13">
                                            <figcaption>
                                                <div class="awsm-personal-info">
                                                    <span>Advisor</span>
                                                    <h2>Abhishek Anand</h2>
                                                </div>
                                                <!-- .awsm-personal-info -->
                                            </figcaption>
                                        </div>
										<?php
											  }
											  ?>
                                        <!-- .awsm-grid-holder -->
                                    </figure>
                                </a>
                            </li>
                            <li>
                                <a href="#popup-01-awsm01356014" id="tigger-01-awsm01356014" class="awsm-popup-trigger">
                                    <figure>
                                        <div class="awsm-grid-holder">
										 <?php
							                  while($row1 = mysql_fetch_array($t14)){
					                     ?>
                                            <img src="<?php echo 'admin/site-images/'.$row1['image']?>" alt="img14">
                                            <figcaption>
                                                <div class="awsm-personal-info">
                                                    <span>AVP Marketing</span>
                                                    <h2>Tanushri Dixit</h2>
                                                </div>
                                                <!-- .awsm-personal-info -->
                                            </figcaption>
                                        </div>
										<?php
											  }
											  ?>
                                        <!-- .awsm-grid-holder -->
                                    </figure>
                                </a>
                            </li>
                            <li>
                                <a href="#popup-01-awsm01356015" id="tigger-01-awsm01356015" class="awsm-popup-trigger">
                                    <figure>
                                        <div class="awsm-grid-holder">
										 <?php
							                  while($row1 = mysql_fetch_array($t15)){
					                     ?>
                                            <img src="<?php echo 'admin/site-images/'.$row1['image']?>" alt="img15">
                                            <figcaption>
                                                <div class="awsm-personal-info">
                                                    <span>VP India Sales</span>
                                                    <h2>Sudhir Singh Nayak</h2>
                                                </div>
                                                <!-- .awsm-personal-info -->
                                            </figcaption>
                                        </div>
										<?php
											  }
											  ?>
                                        <!-- .awsm-grid-holder -->
                                    </figure>
                                </a>
                            </li>
                            <li>
                                <a href="#popup-01-awsm01356016" id="tigger-01-awsm01356016" class="awsm-popup-trigger">
                                    <figure>
                                        <div class="awsm-grid-holder">
										 <?php
							                  while($row1 = mysql_fetch_array($t16)){
					                     ?>
                                            <img src="<?php echo 'admin/site-images/'.$row1['image']?>" alt="img16">
                                            <figcaption>
                                                <div class="awsm-personal-info">
                                                    <span>Advisor</span>
                                                    <h2>Prof Neeta Awasthy</h2>
                                                </div>
                                                <!-- .awsm-personal-info -->
                                            </figcaption>
                                        </div>
										<?php
											  }
											  ?>
                                        <!-- .awsm-grid-holder -->
                                    </figure>
                                </a>
                            </li>
                            <li>
                                <a href="#popup-01-awsm01356017" id="tigger-01-awsm01356017" class="awsm-popup-trigger">
                                    <figure>
                                        <div class="awsm-grid-holder">
										 <?php
							                  while($row1 = mysql_fetch_array($t17)){
					                     ?>
                                            <img src="<?php echo 'admin/site-images/'.$row1['image']?>" alt="img17">
                                            <figcaption>
                                                <div class="awsm-personal-info">
                                                    <span>Associate</span>
                                                    <h2>Swati Gupta</h2>
                                                </div>
                                                <!-- .awsm-personal-info -->
                                            </figcaption>
                                        </div>
										<?php
											  }
											  ?>
                                        <!-- .awsm-grid-holder -->
                                    </figure>
                                </a>
                            </li>
                            <li>
                                <a href="#popup-01-awsm01356018" id="tigger-01-awsm01356018" class="awsm-popup-trigger">
                                    <figure>
                                        <div class="awsm-grid-holder">
										 <?php
							                  while($row1 = mysql_fetch_array($t18)){
					                     ?>
                                            <img src="<?php echo 'admin/site-images/'.$row1['image']?>" alt="img18">
                                            <figcaption>
                                                <div class="awsm-personal-info">
                                                    <span> Data science Trainee</span>
                                                    <h2>Gaurav</h2>
                                                </div>
                                                <!-- .awsm-personal-info -->
                                            </figcaption>
                                        </div>
										<?php
											  }
											  ?>
                                        <!-- .awsm-grid-holder -->
                                    </figure>
                                </a>
                            </li>
                            <li>
                                <a href="#popup-01-awsm01356019" id="tigger-01-awsm01356019" class="awsm-popup-trigger">
                                    <figure>
                                        <div class="awsm-grid-holder">
										 <?php
							                  while($row1 = mysql_fetch_array($t19)){
					                     ?>
                                            <img src="<?php echo 'admin/site-images/'.$row1['image']?>" alt="img19">
                                            <figcaption>
                                                <div class="awsm-personal-info">
                                                    <span>Data science Trainee</span>
                                                    <h2>Nishant Ramaku</h2>
                                                </div>
                                                <!-- .awsm-personal-info -->
                                            </figcaption>
                                        </div>
										<?php
											  }
											  ?>
                                        <!-- .awsm-grid-holder -->
                                    </figure>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- .row -->
                    <!-- Modal Content -->
                    <div class="awsm-popup-items style-1">
                        <a href="#" class="awsm-popup-close"></a>
                        <div class="awsm-popup-items-main">
                            <a href="#" class="awsm-nav-item awsm-nav-left"></a>
                            <div id="popup-01-awsm01356001" class="awsm-popup-item">
                                <div class="awsm-popup-content">
                                    <div class="awsm-popup-content-main">
                                        <div class="awsm-image-main">
                                            <img src="images/T1.jpg" alt="img01">
                                        </div>
                                        <!-- .image-main -->
                                        <div class="awsm-popup-details">
                                            <div class="awsm-modal-content-inner">
                                                <h3>CEO</h3>
                                                <h2>Nandan Mishra</h2>
                                                <p>Nandan believes that Genius is to Create what is needed. He continues to walk the talk by creating disruptive solution which are data driven. He has worked with big businesses, governments and banks to create data led strategy which have been decisive for their growth His vision of ubiquitous data science is of a future which enables and democratises the application of AI in every sphere of human life. </p>

                                                <ul class="awsm-social-icons">

                                                    <li><a href="http://linkedin.com/in/nandan-mishra"><i class="icon-linkedin" aria-hidden="true"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- .awsm-popup-details -->
                                    </div>
                                    <!-- .awsm-popup-content-main -->
                                </div>
                                <!-- .awsm-popup-content -->
                            </div>
                            <!-- .awsm-popup-item -->
                            <div id="popup-01-awsm01356002" class="awsm-popup-item">
                                <div class="awsm-popup-content">
                                    <div class="awsm-popup-content-main">
                                        <div class="awsm-image-main">
                                            <img src="images/T2.jpg" alt="img02">
                                        </div>
                                        <!-- .image-main -->
                                        <div class="awsm-popup-details">
                                            <div class="awsm-modal-content-inner">
                                                <h3>CTO</h3>
                                                <h2>Himanshu Ujjwal Singh</h2>
                                                <p>Prior to that he has helped MNCs in setting up their analytics practice in the field of telecom, healthcare, retail & Workforce analytics. He has a keen inclination in solving real life commercial and social problems in a scalable manner using AI. Helping organization with monetization of their data as data products is his area of expertise.</p>

                                                <ul class="awsm-social-icons">
                                                    <li><a href="http://linkedin.com/in/himanshu-ujjawal-singh-47933923"><i class="icon-linkedin" aria-hidden="true"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- .awsm-popup-details -->
                                    </div>
                                    <!-- .awsm-popup-content-main -->
                                </div>
                                <!-- .awsm-popup-content -->
                            </div>
                            <!-- .awsm-popup-item -->
                            <div id="popup-01-awsm01356003" class="awsm-popup-item">
                                <div class="awsm-popup-content">
                                    <div class="awsm-popup-content-main">
                                        <div class="awsm-image-main">
                                            <img src="images/T3.jpg" alt="img03">
                                        </div>
                                        <!-- .image-main -->
                                        <div class="awsm-popup-details">
                                            <div class="awsm-modal-content-inner">
                                                <h3>VP Operations</h3>
                                                <h2>Rohit Singh</h2>
                                                <p>
                                                    Rohit has extensive experience and in-depth knowledge of Products & Solutions across Utility domains (Pharma,Telecom, Healthcare, Digital Media, Social Media, Marketing,Retail)
                                                    He specializes in leading engagements involving advanced analytics capabilities for solving complex business problems
                                                    Enthused with the analysis of unstructured data, he has co-created Opini8 with ALGO8.
                                                </p>
                                                <ul class="awsm-social-icons">
                                                    <li><a href="http://linkedin.com/in/rohitsingh1106"><i class="icon-linkedin" aria-hidden="true"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- .awsm-popup-details -->
                                    </div>
                                    <!-- .awsm-popup-content-main -->
                                </div>
                                <!-- .awsm-popup-content -->
                            </div>
                            <!-- .awsm-popup-item -->
                            <div id="popup-01-awsm01356004" class="awsm-popup-item">
                                <div class="awsm-popup-content">
                                    <div class="awsm-popup-content-main">
                                        <div class="awsm-image-main">
                                            <img src="images/t4.jpg" alt="img04">
                                        </div>
                                        <!-- .image-main -->
                                        <div class="awsm-popup-details">
                                            <div class="awsm-modal-content-inner">
                                                <h3>Promoter, Investor</h3>
                                                <h2>Nishish Jha</h2>
                                                <p>Nishish has been a part of the core strategy of an IT giant  in India since its early days, now a US $7.2 billion global technology and IT enterprise.  A known Indo-Canadian IT Veteran, Nishish is the managing partner a VC firm out of Canada. At ALGO8, he shares the dream to built the best Indian data science firm in the world.</p>
                                                <ul class="awsm-social-icons">
                                                    <li><a href="http://linkedin.com/in/nishishjha"><i class="icon-linkedin" aria-hidden="true"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- .awsm-popup-details -->
                                    </div>
                                    <!-- .awsm-popup-content-main -->
                                </div>
                                <!-- .awsm-popup-content -->
                            </div>
                            <!-- .awsm-popup-item -->
                            <div id="popup-01-awsm01356005" class="awsm-popup-item">
                                <div class="awsm-popup-content">
                                    <div class="awsm-popup-content-main">
                                        <div class="awsm-image-main">
                                            <img src="images/T5.jpg" alt="img05">
                                        </div>
                                        <!-- .image-main -->
                                        <div class="awsm-popup-details">
                                            <div class="awsm-modal-content-inner">
                                                <h3>CIO</h3>
                                                <h2>Anshuman Srivastava</h2>
                                                <p>
                                                    He has  experience in conceptualizing, designing and building advanced data science powered  products. He has deep understanding of industry 's evolving need for data-driven decision making and the role of design thinking to ensure successful adaptation of such solutions by business and functional users.He is a National University of Singapore alumnus .
                                                </p>
                                                <ul class="awsm-social-icons">
                                                    <li><a href="http://linkedin.com/in/anshuman-srivastava-b7b43435"><i class="icon-linkedin" aria-hidden="true"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- .awsm-popup-details -->
                                    </div>
                                    <!-- .awsm-popup-content-main -->
                                </div>
                                <!-- .awsm-popup-content -->
                            </div>
                            <!-- .awsm-popup-item -->
                            <div id="popup-01-awsm01356006" class="awsm-popup-item">
                                <div class="awsm-popup-content">
                                    <div class="awsm-popup-content-main">
                                        <div class="awsm-image-main">
                                            <img src="images/T6.jpg" alt="img06">
                                        </div>
                                        <!-- .image-main -->
                                        <div class="awsm-popup-details">
                                            <div class="awsm-modal-content-inner">
                                                <h3>VP Technology</h3>
                                                <h2>Saurabh Gupta</h2>
                                                <p>
                                                    Saurabh has 7 years of experience in analytics. He has set up data science practice for an early stage startup and deployed production pipeline for deep learning solutions. He has worked extensively with mobile sensor, retail and digital domain. He has expertise in converting business problem into data science problem using right set of tools and technology. Saurabh holds a degree in chemical engineering from IIT Kanpur.
                                                </p>
                                                <ul class="awsm-social-icons">
                                                    <li><a href="http://linkedin.com/in/saurabhg01"><i class="icon-linkedin" aria-hidden="true"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- .awsm-popup-details -->
                                    </div>
                                    <!-- .awsm-popup-content-main -->
                                </div>
                                <!-- .awsm-popup-content -->
                            </div>
                            <!-- .awsm-popup-item -->
                            <div id="popup-01-awsm01356007" class="awsm-popup-item">
                                <div class="awsm-popup-content">
                                    <div class="awsm-popup-content-main">
                                        <div class="awsm-image-main">
                                            <img src="images/T7.jpg" alt="img07">
                                        </div>
                                        <!-- .image-main -->
                                        <div class="awsm-popup-details">
                                            <div class="awsm-modal-content-inner">
                                                <h3>AVP Canada Sales</h3>
                                                <h2>Ankit Kohli</h2>
                                                <p>
                                                    Spent entire career in solving business problems, contributing tangible ROI using Automation technologies.
                                                    Led countrywide operations for an MNC involved in AI and Industrial Robotics.
                                                    Seeing technologies from business lens , he believes machine intelligence will assist humans in complex decision making.
                                                </p>

                                                <ul class="awsm-social-icons">
                                                    <li><a href="http://linkedin.com/in/ankitkohli24"><i class="icon-linkedin" aria-hidden="true"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- .awsm-popup-details -->
                                    </div>
                                    <!-- .awsm-popup-content-main -->
                                </div>
                                <!-- .awsm-popup-content -->
                            </div>
                            <!-- .awsm-popup-item -->
                            <div id="popup-01-awsm01356008" class="awsm-popup-item">
                                <div class="awsm-popup-content">
                                    <div class="awsm-popup-content-main">
                                        <div class="awsm-image-main">
                                            <img src="images/T8.jpg" alt="img08">
                                        </div>
                                        <!-- .image-main -->
                                        <div class="awsm-popup-details">
                                            <div class="awsm-modal-content-inner">
                                                <h3>VP Technology</h3>
                                                <h2>
                                                    Vaibhaw Singh Chandel
                                                </h2>
                                                <p>
                                                    Vaibhaw is a Computer vision expert. He has worked on various interesting data science problems such as customer profiling, optimizing store layout, live prediction of winning odds of sports teams during his stint at Retail and Sports analytics startups. As a core team member of a Computer Vision startup, he developed several large scale products on image retrieval, automated tagging, and pattern matching problems used by e-commerce companies in fashion and furniture industry. Apart from computer vision, he is fascinated by NLP, Speech Recognition, and behavioral economics. Vaibhaw holds a degree in chemical engineering from IIT Kanpur.
                                                </p>
                                                <ul class="awsm-social-icons">
                                                    <li><a href="http://linkedin.com/in/vaibhaw"><i class="icon-linkedin" aria-hidden="true"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- .awsm-popup-details -->
                                    </div>
                                    <!-- .awsm-popup-content-main -->
                                </div>
                                <!-- .awsm-popup-content -->
                            </div>
                            <!-- .awsm-popup-item -->
                            <div id="popup-01-awsm01356009" class="awsm-popup-item">
                                <div class="awsm-popup-content">
                                    <div class="awsm-popup-content-main">
                                        <div class="awsm-image-main">
                                            <img src="images/T9.jpg" alt="img09">
                                        </div>
                                        <!-- .image-main -->
                                        <div class="awsm-popup-details">
                                            <div class="awsm-modal-content-inner">
                                                <h3>Advisor</h3>
                                                <h2>
                                                    Dhiraj Girdhar
                                                </h2>
                                                <p>
                                                    Dhiraj is a proven business leader and entrepreneur who brings 20+ years of experience in application development, systems integration, account management, business development and implementation experience with Various Clients such as Toyota, TD Bank, Rogers Communications, Bell Canada, TELUS and other global 500 organizations.

                                                    Dhiraj’s experience spans across a variety of industries including Telecom, Financial, High Tech, Manufacturing, Pharmaceuticals and Government where he has developed extensive expertise in business and solution architecture. Dhiraj has successfully managed several large consulting & operational engagements at Bell Canada, Rogers, Direct Energy Marketing Limited, Bank of Montreal, CIBC, and Loyalty Management Group.

                                                    Dhiraj has a Bachelor’s Degree of Science with Honors from the University of Western Ontario, in Computer Science
                                                </p>
                                                <ul class="awsm-social-icons">
                                                    <li><a href="#"><i class="icon-linkedin" aria-hidden="true"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- .awsm-popup-details -->
                                    </div>
                                    <!-- .awsm-popup-content-main -->
                                </div>
                                <!-- .awsm-popup-content -->
                            </div>
                            <!-- .awsm-popup-item -->
                            <div id="popup-01-awsm01356010" class="awsm-popup-item">
                                <div class="awsm-popup-content">
                                    <div class="awsm-popup-content-main">
                                        <div class="awsm-image-main">
                                            <img src="images/t10.jpg" alt="img10">
                                        </div>
                                        <!-- .image-main -->
                                        <div class="awsm-popup-details">
                                            <div class="awsm-modal-content-inner">
                                                <h3>CBO, India</h3>
                                                <h2>
                                                    Shashi Shekhar
                                                </h2>
                                                <p>
                                                    Shashi has been leading some of the world's most Innovative Fortune 500 Multi National companies. He has more than 25 years of experience in building and managing complex Businesses and a large team of highly accomplished individuals.
                                                    A Mentor and Motivator having excellent knowledge of Industrial,Government and Consumer's market segments. He believe that the progress of human life is in adopting intelligent data science in all walks of life
                                                </p>
                                                <ul class="awsm-social-icons">
                                                    <li><a href="#"><i class="icon-linkedin" aria-hidden="true"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- .awsm-popup-details -->
                                    </div>
                                    <!-- .awsm-popup-content-main -->
                                </div>
                                <!-- .awsm-popup-content -->
                            </div>
                            <!-- .awsm-popup-item -->
                            <div id="popup-01-awsm01356011" class="awsm-popup-item">
                                <div class="awsm-popup-content">
                                    <div class="awsm-popup-content-main">
                                        <div class="awsm-image-main">
                                            <img src="images/T11.jpg" alt="img11">
                                        </div>
                                        <!-- .image-main -->
                                        <div class="awsm-popup-details">
                                            <div class="awsm-modal-content-inner">
                                                <h3>Advisor</h3>
                                                <h2>Sam Vishal</h2>
                                                <p>
                                                    Sam Vishal is an IT professional with 20+ years of experience in Information technology and services Industry. He holds a degree in Engineering and MBA from Cornell University in addition to numerous certifications such as PMP, ITIL and CISSP.
                                                    He has managed various IT  leadership positions across India, USA and Canada in multinationals such as GE Capital, Mphasis Corporation, Manulife Financial and SunLife.
                                                    Some of his notable achievements include:
                                                    a)  Managing Information Security Program for SunLife
                                                    b)  Leading Project management office for Manulife Financial
                                                    c)  receiving BS7799 (prestigious Information Security certification) for Msource Corp – a California based IT services multinational company.
                                                    d)  and, As SVP Service delivery head for  Aithent Canada, delivering industry leading applications such as Mutual fund dealer broker management system for Investor’s group and Trade activity reporting system for Royal bank of Canada.
                                                </p>
                                                <ul class="awsm-social-icons">
                                                    <li><a href="#"><i class="icon-linkedin" aria-hidden="true"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- .awsm-popup-details -->
                                    </div>
                                    <!-- .awsm-popup-content-main -->
                                </div>
                                <!-- .awsm-popup-content -->
                            </div>
                            <!-- .awsm-popup-item -->
                            <div id="popup-01-awsm01356012" class="awsm-popup-item">
                                <div class="awsm-popup-content">
                                    <div class="awsm-popup-content-main">
                                        <div class="awsm-image-main">
                                            <img src="images/t12.jpg" alt="img12">
                                        </div>
                                        <!-- .image-main -->
                                        <div class="awsm-popup-details">
                                            <div class="awsm-modal-content-inner">
                                                <h3>Advisor</h3>
                                                <h2>
                                                    Sumit Sinha
                                                </h2>
                                                <p>
                                                    How human and evolving technologies can better understand, create and delivery higher  perceived value for any business ".  This is what drives Sumit.  In todays disruptive , dynamic and evolving business world he strongly believes that "Data" is a raw asset in the hands of every business . But its an organization (3C's) capability ,creativity and  cleverness to transform this data into wisdom, will quantify the perceived  value . Smart and intelligent use of data will be a key catalyst that will drive the next wave of  "distinct competitive advantage" for most business.  Winners will be those who are faster, better and smarter to adapt, sustain  and transform the data to create Intelligent and wise systems .
                                                    Sumit, is a Computer Science engineer and a management graduate with extensive , successful and diversified IT experience across various Industries. He is an agile, technology savvy and results driven  professional. Has led and have been part of several transformational projects across various industries and its value chain
                                                </p>
                                                <ul class="awsm-social-icons">
                                                    <li><a href="#"><i class="icon-linkedin" aria-hidden="true"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- .awsm-popup-details -->
                                    </div>
                                    <!-- .awsm-popup-content-main -->
                                </div>
                                <!-- .awsm-popup-content -->
                            </div>
                            <!-- .awsm-popup-item -->
                            <div id="popup-01-awsm01356013" class="awsm-popup-item">
                                <div class="awsm-popup-content">
                                    <div class="awsm-popup-content-main">
                                        <div class="awsm-image-main">
                                            <img src="images/t13.jpg" alt="img13">
                                        </div>
                                        <!-- .image-main -->
                                        <div class="awsm-popup-details">
                                            <div class="awsm-modal-content-inner">
                                                <h3>Advisor</h3>
                                                <h2>
                                                    Abhishek Anand
                                                </h2>
                                                <p>
                                                    In a career spanning over a decade, Abhishek has worked with businesses in different sectors, and in different functional roles.
                                                    Whether it was formulating and executing monetization strategies for ibibo, or marketing strategies for Myntra, he played a pivotal role in shaping different businesses while working closely with the top management. In his last professional engagement, he was leading business processes for Riva (a Directi company) where he set up sales processes and strategy for the business, and led the whole process of building the sales force. Abhishek has been involved with a number of different startups as a friend, offering his assistance whenever possible. He ran a TV show recommendation system fresh out of college, which he exited from, in 2011. Before joining us at Xelpmoc, he was running a fashion-tech startup, that achieved operational profitability weeks into operations. He holds a degree in Mechanical Engineering from Indian Institute of Technology Kanpur.
                                                </p>
                                                <ul class="awsm-social-icons">
                                                    <li><a href="#"><i class="icon-linkedin" aria-hidden="true"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- .awsm-popup-details -->
                                    </div>
                                    <!-- .awsm-popup-content-main -->
                                </div>
                                <!-- .awsm-popup-content -->
                            </div>
                            <!-- .awsm-popup-item -->
                            <div id="popup-01-awsm01356014" class="awsm-popup-item">
                                <div class="awsm-popup-content">
                                    <div class="awsm-popup-content-main">
                                        <div class="awsm-image-main">
                                            <img src="images/t14.jpg" alt="img14">
                                        </div>
                                        <!-- .image-main -->
                                        <div class="awsm-popup-details">
                                            <div class="awsm-modal-content-inner">
                                                <h3>AVP Marketing</h3>
                                                <h2>
                                                    Tanushri Dixit
                                                </h2>
                                                <p></p>
                                                <ul class="awsm-social-icons">
                                                    <li><a href="http://linkedin.com/in/tanushri-nandan-23b722151"><i class="icon-linkedin" aria-hidden="true"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- .awsm-popup-details -->
                                    </div>
                                    <!-- .awsm-popup-content-main -->
                                </div>
                                <!-- .awsm-popup-content -->
                            </div>
                            <!-- .awsm-popup-item -->
                            <div id="popup-01-awsm01356015" class="awsm-popup-item">
                                <div class="awsm-popup-content">
                                    <div class="awsm-popup-content-main">
                                        <div class="awsm-image-main">
                                            <img src="images/T15.jpg" alt="img15">
                                        </div>
                                        <!-- .image-main -->
                                        <div class="awsm-popup-details">
                                            <div class="awsm-modal-content-inner">
                                                <h3>VP India Sales</h3>
                                                <h2>Sudhir Singh Nayak</h2>
                                                <p>
                                                    “From manual invoice processing to robotics process automation - Sudhir has seen it all in his 16 years as a master black belt. He believes that most of the 'jobs', as we know them today, will get automated and humans will be required only for complex decision making; because simple decisions will also get automated as systems become more intelligent. He believes that India is sitting on a goldmine because we are good in math and a large subset of math-literate youngsters is also programming literate. Within a few hundred hours of training these resources can transform into Data Scientists and we can become the 'Decision-Black-Box' of the world.“.
                                                    <br />He is on a mission to create a Super-30 of Data Scientists in every city of India
                                                </p>
                                                <ul class="awsm-social-icons">
                                                    <li><a href="#"><i class="icon-linkedin" aria-hidden="true"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- .awsm-popup-details -->
                                    </div>
                                    <!-- .awsm-popup-content-main -->
                                </div>
                                <!-- .awsm-popup-content -->
                            </div>
                            <!-- .awsm-popup-item -->
                            <div id="popup-01-awsm01356016" class="awsm-popup-item">
                                <div class="awsm-popup-content">
                                    <div class="awsm-popup-content-main">
                                        <div class="awsm-image-main">
                                            <img src="images/t16.jpg" alt="img16">
                                        </div>
                                        <!-- .image-main -->
                                        <div class="awsm-popup-details">
                                            <div class="awsm-modal-content-inner">
                                                <h3>Advisor</h3>
                                                <h2>
                                                    Prof Neeta Awasthy
                                                </h2>
                                                <p>An Educationist, author, mentor, thought leader, intrapreneur, with ten years of experience as an entrepreneur; Dr. Neeta Awasthy came into academics twenty years back. Having done her Ph.D. in the area of “Artificial Neural Network”, she has guided more than a dozen scholars during their M.Tech and Ph.D. She is a regular speaker at conferences in India and abroad. Her works are being regularly published in acclaimed journals. She has published books on Placement, Soft Computing an Digital Signal Processing, She is a consultant in the field of Quality improvement of technical education, energy, innovations & Entrepreneurship, placements, apart from Artificial Neural Networks. An amalgamation of Electronics Engineering and Computer Science, she is the best fit for problems which are multidisciplinary, resource extensive and data extensive. An alumnus of HBTI, Kanpur, Prof. (Dr.) Neeta Awasthy completed her masters from Uttarakhand Technical University and Ph.D. from A.K.T.U.</p>
                                                <ul class="awsm-social-icons">
                                                    <li><a href="#"><i class="icon-linkedin" aria-hidden="true"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- .awsm-popup-details -->
                                    </div>
                                    <!-- .awsm-popup-content-main -->
                                </div>
                                <!-- .awsm-popup-content -->
                            </div>
                            <!-- .awsm-popup-item -->
                            <div id="popup-01-awsm01356017" class="awsm-popup-item">
                                <div class="awsm-popup-content">
                                    <div class="awsm-popup-content-main">
                                        <div class="awsm-image-main">
                                            <img src="images/t17.jpg" alt="img17">
                                        </div>
                                        <!-- .image-main -->
                                        <div class="awsm-popup-details">
                                            <div class="awsm-modal-content-inner">
                                                <h3>Associate</h3>
                                                <h2>
                                                    Swati Gupta
                                                </h2>
                                                <p>Swati is having experience of more than 7 years in Retail and Operations management. She brings in her 4 years of leadership experience as Store Operations Manager in Tommy Hilfiger. She is very much motivated by "Seven steps of transformation - Dream it, Envision it, Think it, Grow it, Become it, Live it and Own it"</p>
                                                <ul class="awsm-social-icons">
                                                    <li><a href="#"><i class="icon-linkedin" aria-hidden="true"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- .awsm-popup-details -->
                                    </div>
                                    <!-- .awsm-popup-content-main -->
                                </div>
                                <!-- .awsm-popup-content -->
                            </div>
                            <!-- .awsm-popup-item -->
                            <div id="popup-01-awsm01356018" class="awsm-popup-item">
                                <div class="awsm-popup-content">
                                    <div class="awsm-popup-content-main">
                                        <div class="awsm-image-main">
                                            <img src="images/t18.jpg" alt="img18">
                                        </div>
                                        <!-- .image-main -->
                                        <div class="awsm-popup-details">
                                            <div class="awsm-modal-content-inner">
                                                <h3>Data Science Trainee</h3>
                                                <h2>Gaurav</h2>
                                                <p></p>
                                                <ul class="awsm-social-icons">
                                                    <li><a href="#"><i class="icon-linkedin" aria-hidden="true"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- .awsm-popup-details -->
                                    </div>
                                    <!-- .awsm-popup-content-main -->
                                </div>
                                <!-- .awsm-popup-content -->
                            </div>
                            <!-- .awsm-popup-item -->
                            <div id="popup-01-awsm01356019" class="awsm-popup-item">
                                <div class="awsm-popup-content">
                                    <div class="awsm-popup-content-main">
                                        <div class="awsm-image-main">
                                            <img src="images/t19.jpg" alt="img19">
                                        </div>
                                        <!-- .image-main -->
                                        <div class="awsm-popup-details">
                                            <div class="awsm-modal-content-inner">
                                                <h3>Data Science Trainee</h3>
                                                <h2>
                                                    Nishant Ramaku
                                                </h2>
                                                <p></p>
                                                <ul class="awsm-social-icons">
                                                    <li><a href="#"><i class="icon-linkedin" aria-hidden="true"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- .awsm-popup-details -->
                                    </div>
                                    <!-- .awsm-popup-content-main -->
                                </div>
                                <!-- .awsm-popup-content -->
                            </div>
                            <!-- .awsm-popup-item -->
                            <a href="#" class="awsm-nav-item awsm-nav-right"></a>
                        </div>
                        <!-- .awsm-popup-items-main -->
                    </div>
                    <!-- .awsm-popup-items -->
                </div>
                <!-- .awsm-modal -->
            </div>
            <!-- .container -->
        </section>
    </main>
    <!-- Starts: Call To Action -->
    <section class="cta">
        <div class="container">
            <div class="row">
                <div class="col-md-12 cta-contents">
                    <h2>Join our team we're always looking for talent</h2>
                    <a href="javascript:void(Tawk_API.toggle())" class="btn btn-large">
                        Drop Your Resume
                        <span class="icon-link"></span>
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
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery-scrollspy.js"></script>
    <script src="js/jquery.gridder.min.js"></script>
    <script src="js/jquery.mCustomScrollbar.min.js"></script>
    <script src="js/awsm.modals.js"></script>
    <script>
        $(function () {
            $(".awsm-grid").gridderExpander({
                scrollOffset: 60,
                scrollTo: "panel", // "panel" or "listitem"
                animationSpeed: 400,
                closeText: '',
                animationEasing: "easeInOutExpo",
                onContent: function (object) {
                    $(object).find('.awsm-personal-details').mCustomScrollbar({
                        theme: "dark",
                        scrollInertia: 400
                    });
                },

            });
            AwsmModel.init();
            if (Modernizr.touchevents) {
                $('ul.grid > li > figure').on('touchend', function (e) {
                    if ($(e.target).is('ul.grid > li > figure a') || $(e.target).is('ul.grid > li > figure a *')) return;
                    e.preventDefault();
                    $(this).toggleClass('cs-hover');
                });
            }
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('.awsm-go-to').click(function (event) {
                var $anchor = $(this);
                $('html, body').stop().animate({
                    scrollTop: $($anchor.attr('href')).offset().top
                }, 1000);
                event.preventDefault();
                if ($(window).width() < 830) {
                    $('.nav-toggle').removeClass('open');
                    $('.main-nav').slideUp();
                }
            });
            $('.nav-toggle').click(function (e) {
                e.preventDefault();
                $(this).toggleClass('open');
                $('.main-nav').slideToggle();
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
</body>
</html>
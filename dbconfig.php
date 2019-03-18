<?php              
error_reporting(E_ALL);
include('admin/connect.php');
//.....................Index Page..........................
//(sitelogo)
$navbar1=mysql_query("select * from tblimages where id='5'");
//(header)
$navbar2=mysql_query("select * from tblheader where id='5'");
$navbar3=mysql_query("select * from tblheader where id='6'");
$navbar4=mysql_query("select * from tblheader where id='7'");
$navbar5=mysql_query("select * from tblheader where id='8'");
//(quickfacts)
$fact1=mysql_query("select * from tblcategory where id='1'");
$fact2=mysql_query("select * from tblcategory where id='41'");
$fact3=mysql_query("select * from tblcategory where id='11'");
$fact4=mysql_query("select * from tblcategory where id='12'");
$fact5=mysql_query("select * from tblcategory where id='13'");
$fact6=mysql_query("select * from tblcategory where id='14'");
$fact7=mysql_query("select * from tblcategory where id='15'");
//(clients)
$client1=mysql_query("select * from tblclient where id='6'");
$client2=mysql_query("select * from tblclient where id='7'");
$client3=mysql_query("select * from tblclient where id='8'");
$client4=mysql_query("select * from tblclient where id='9'");
$client5=mysql_query("select * from tblclient where id='10'");
$client6=mysql_query("select * from tblclient where id='11'");
$client7=mysql_query("select * from tblclient where id='12'");
$client8=mysql_query("select * from tblclient where id='13'");
$client9=mysql_query("select * from tblclient where id='14'");
$client10=mysql_query("select * from tblclient where id='15'");
$client11=mysql_query("select * from tblclient where id='16'");
$client12=mysql_query("select * from tblclient where id='17'");
//(footer)
$footer1=mysql_query("select * from tblfooter where id='1'");
$footer2=mysql_query("select * from tblfooter where id='2'");
$footer3=mysql_query("select * from tblfooter where id='3'");
$footer4=mysql_query("select * from tblfooter where id='5'");
//..........................................................
//........................LOC8..............................
//(header image)
$loco1=mysql_query("select * from tblimages where id='8'");
//(overview)
$loco2=mysql_query("select * from tblimages where id='10'");
//(features)
$feature1=mysql_query("select * from tblcategory where id='16'");
$feature2=mysql_query("select * from tblcategory where id='17'");
$feature3=mysql_query("select * from tblcategory where id='18'");
$feature4=mysql_query("select * from tblcategory where id='19'");
$feature5=mysql_query("select * from tblcategory where id='20'");
$feature6=mysql_query("select * from tblimages where id='12'");
//(what do expert say)
$expert1=mysql_query("select * from tblimages where id='13'");
$expert2=mysql_query("select * from tblimages where id='14'");
//............................................................
//......................OPINI8................................
//(header image)
$opini1=mysql_query("select * from tblimages where id='15'");
//(overview)
$opini2=mysql_query("select * from tblimages where id='16'");
//(features)
$ft1=mysql_query("select * from tblcategory where id='25'");
$ft2=mysql_query("select * from tblcategory where id='26'");
$ft3=mysql_query("select * from tblcategory where id='27'");
$ft4=mysql_query("select * from tblcategory where id='28'");
//(what do expert say)
$expt1=mysql_query("select * from tblimages where id='17'");
$expt2=mysql_query("select * from tblimages where id='18'");
//...........................................................
//......................WHO WE ARE...........................
$w1=mysql_query("select * from tblcategory where id='32'");
$w2=mysql_query("select * from tblcategory where id='33'");
$w3=mysql_query("select * from tblcategory where id='34'");
$w4=mysql_query("select * from tblcategory where id='35'");
$w5=mysql_query("select * from tblcategory where id='36'");
$w6=mysql_query("select * from tblcategory where id='37'");
//............................................................
//....................MEET THE TEAM...........................
$t1=mysql_query("select * from tblimages where id='19'");
$t2=mysql_query("select * from tblimages where id='20'");
$t3=mysql_query("select * from tblimages where id='21'");
$t4=mysql_query("select * from tblimages where id='22'");
$t5=mysql_query("select * from tblimages where id='23'");
$t6=mysql_query("select * from tblimages where id='24'");
$t7=mysql_query("select * from tblimages where id='25'");
$t8=mysql_query("select * from tblimages where id='26'");
$t9=mysql_query("select * from tblimages where id='27'");
$t10=mysql_query("select * from tblimages where id='28'");
$t11=mysql_query("select * from tblimages where id='29'");
$t12=mysql_query("select * from tblimages where id='30'");
$t13=mysql_query("select * from tblimages where id='31'");
$t14=mysql_query("select * from tblimages where id='32'");
$t15=mysql_query("select * from tblimages where id='33'");
$t16=mysql_query("select * from tblimages where id='34'");
$t17=mysql_query("select * from tblimages where id='35'");
$t18=mysql_query("select * from tblimages where id='36'");
$t19=mysql_query("select * from tblimages where id='37'");
//..........................................................
//.......................BANKING............................
$bank1=mysql_query("select * from tblimages where id='38'");
$bank2=mysql_query("select * from tblimages where id='39'");
$bank3=mysql_query("select * from tblimages where id='41'");
//...........................................................
//........................RETAIL.............................
$retail1=mysql_query("select * from tblimages where id='43'");
$retail2=mysql_query("select * from tblimages where id='44'");
$retail3=mysql_query("select * from tblimages where id='45'");
//...........................................................
//.......................TELECOM.............................
$tele1=mysql_query("select * from tblimages where id='46'");
$tele2=mysql_query("select * from tblimages where id='47'");
$tele3=mysql_query("select * from tblimages where id='48'");
//...........................................................
//......................INSURANCE............................
$ins1=mysql_query("select * from tblimages where id='49'");
$ins2=mysql_query("select * from tblimages where id='50'");
$ins3=mysql_query("select * from tblimages where id='51'");
//...........................................................
//.....................HEALTH CARE...........................
$health1=mysql_query("select * from tblimages where id='52'");
$health2=mysql_query("select * from tblimages where id='54'");
$health3=mysql_query("select * from tblimages where id='55'");
//............................................................
//....................MANUFACTURING...........................
$manu1=mysql_query("select * from tblimages where id='56'");
$manu2=mysql_query("select * from tblimages where id='57'");
$manu3=mysql_query("select * from tblimages where id='58'");
//...........................................................
//......................GOVERMENT............................
$govt1=mysql_query("select * from tblimages where id='59'");
$govt2=mysql_query("select * from tblimages where id='60'");
$govt3=mysql_query("select * from tblimages where id='61'");
//..........................................................
//..................BE A PART OF ALGO8.AI...................
$job1=mysql_query("select * from tblcategory where id='40'");
$job2=mysql_query("select * from tblcategory where id='39'");
//..........................................................
//......................BLOG-CLASSIC........................
$blog1=mysql_query("select * from tblblog where id='2'");
$blog2=mysql_query("select * from tblblog where id='3'");
$blog3=mysql_query("select * from tblblog where id='4'");
$blog4=mysql_query("select * from tblblog where id='5'");
//..........................................................















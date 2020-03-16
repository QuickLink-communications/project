
<!doctype html>
<html lang="en" class="no-js">
   <head>
      <title>iSMS Interactive School Management System </title>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
      <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,700,600,300' rel='stylesheet' type='text/css'>
      <link rel="stylesheet" type="text/css" href="css/bootstrap.css" media="screen">
      <link rel="stylesheet" type="text/css" href="css/font-awesome.css" media="screen">
      <link rel="stylesheet" type="text/css" href="css/style.css" media="screen">
      <link rel="stylesheet" type="text/css" href="css/responsive.css" media="screen">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
      <style>
         @media screen and (max-width: 1199px) {
         .mainLogo > img
         {
         width: 120px !important; 
         }
         }
         @media screen and (max-width: 1000px) {
         .mainLogo > img
         {
         width: 85px !important; 
         }
         }
         @media screen and (max-width: 767px) {
         .mainLogo > img
         {
         width: 75px !important; 
         }
         }
		 
		          h4
         {
         font-weight:400;
         font-family:Copperplate Gothic Light;
         }
         h5
         {
         font-weight:400;
         font-family:Copperplate Gothic Light;
         }
         p {
         color:black;
         font-family:Century Gothic;
         }
         #: hover{
         }
         button.navbarMenus:hover {
         background-color: #ed1c24 !important;
         color:#ffffff !important;
         border-color: #ed1c24 !important;
         }
         button.navbarMenuStartFree:hover {
         background-color: #ed1c24 !important;
		 
         }

		 		 .moduleDetail
		 {
			 background-image: url(images/bg/bg1.PNG);
			 background-position: center!important;
    background-repeat: no-repeat!important;
    background-size: cover!important;
		 }
		 .detailText
		 {
			     font-family: Raleway;
				font-size: 18px;
				line-height: 27px;
				font-weight: 500;
				letter-spacing: 0px;
				text-align: center;
				color: #797979;
		 }
		 .vertical-menu a
		 {
			     color: #202020;
				display: block;
				padding: 8px;
				text-decoration: none;
				border-style: solid;
				border-width: 0px 0px 0px 3px;
				border-color: transparent;
				font-weight: 600;
		 }
		 .vertical-menu a:hover
		 {
			color: #d71d2f;
			font-weight: 600;
			}
			.vertical-menu a.active
			{
				color: #d71d2f!important;
				font-weight: 600!important;
				background-color: #f0f0f0;
				border-color: #d71d2f!important;
			}
			.moduleTextDetail
			{
				font-family: Raleway;
				font-size: 18px;
				line-height: 27px;
				font-weight: 500;
				letter-spacing: 0px;
				text-align: center;
				color: #797979;
				text-align:justify;
			}
  
  
      </style>
   </head>
   <body>
      <!-- Container -->
      <div id="container">
         <!-- Header
            ================================================== -->
         <header class="clearfix">
            <!-- Static navbar -->
            <div class="navbar navbar-default navbar-fixed-top">
               <div class="top-line">
                  <div class="container">
                     <p>
                        <span><i class="fa fa-phone"></i>+92 (51) 843 8671</span>
                        <span><i class="fa fa-envelope-o"></i>info@ismspk.com</span>
                     </p>
                     <ul class="social-icons">
                        <li><a class="facebook" href="https://www.facebook.com/interactiveSMS"><i class="fa fa-facebook-square"></i></a></li>
                        <li><a class="linkedin" href="#"><i class="fa fa-linkedin-square"></i></a></li>
                        <li><a class="twitter" href="#"><i class="fa fa-twitter-square"></i></a></li>
                        <li><a class="pinterest" href="#"><i class="fa fa-pinterest-square"></i></a></li>
                        <li><a class="youtube" href="#"><i class="fa fa-youtube-square"></i></a></li>
                     </ul>
                  </div>
               </div>
               <div class="" style="margin-left:30px;margin-right:30px;">
                  <div class="navbar-header">
                     <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                     </button>
                      <a class="navbar-brand mainLogo" href="index.php" ><img class="headerLogo" alt="" src="images/mainLogo.PNG" style="margin-top:10px;"></a>
                  </div>
                  <div class="navbar-collapse collapse">
                     <ul class="nav navbar-nav navbar-right">
                        <li><a style="font-family: Raleway,sans-serif;text-transform:none;margin-top: -8px;padding-bottom: 0px;"   href="index.php" ><button id="" class="btn btn-info navbarMenus " style="background-color:transparent;font-weight: 700;color: #727272;font-size: 16px ;border-color: transparent;">Home</button></a></li>
                        <li><a style="font-family: Raleway,sans-serif;text-transform:none;margin-top: -8px;padding-bottom: 0px;"   href="productDetails.php" ><button id="" class="btn btn-info navbarMenus " style="background-color:transparent;font-weight: 700;color: #727272;font-size: 16px ;border-color: transparent;">Product</button></a></li>
                        <li><a style="font-family: Raleway,sans-serif;text-transform:none;margin-top: -8px;padding-bottom: 0px;"   href="Packages.php" ><button id="" class="btn btn-info navbarMenus " style="background-color:transparent;font-weight: 700;color: #727272;font-size: 16px ;border-color: transparent;">Packages</button></a></li>
                        <li><a style="font-family: Raleway,sans-serif;text-transform:none;margin-top: -8px;padding-bottom: 0px;"   href="#" ><button id="" class="btn btn-info navbarMenus " style="background-color:transparent;font-weight: 700;color: #727272;font-size: 16px ;border-color: transparent;">Demo</button></a></li>
                        <li><a style="font-family: Raleway,sans-serif;text-transform:none;margin-top: -8px;padding-bottom: 0px;"   href="contact.php" ><button id="" class="btn btn-info navbarMenus " style="background-color:transparent;font-weight: 700;color: #727272;font-size: 16px ;border-color: transparent;">Contact Us</button></a></li>
                        <li>
                           <a style="font-family: Raleway,sans-serif;text-transform:none;margin-top: -8px;padding-bottom: 0px;"   href="" ><button id="" class="btn btn-info navbarMenus " style="background-color:transparent;font-weight: 700;color: #727272;font-size: 16px ;border-color: transparent;">Support</button></a>
                           <ul class="drop-down">
                              <li style="margin-top:10px;"><a  href="master.pdf" target="blank">Help &nbsp;<i class="fa fa-file"></i></a></li>
                           </ul>
                        </li>
                        <li><a style="font-size: 16px ;font-family: Raleway,sans-serif;text-transform:none;margin-top: -8px;padding-bottom: 0px;"   href="Packages.php" ><button id="" class="btn btn-info navbarMenuStartFree " style="width: 132px;background-color:#ed1c24;font-weight: 700;border-color: #ed1c24;">START FREE</button></a></li>
                     </ul>
                  </div>
               </div>
            </div>
         </header>
         <!-- End Header -->
         <!-- content 
            ================================================== -->
                  <div id="content" style="height:1000px;background-color:#fafafa;">

		 <div class="moduleDetail" style="height:180px;text-align:center;">
		 <br><br>
		 <h1 style="font-weight: 600;">Communicate</h1>
		 <p class="detailText"> It works like a notice board basically a messaging system for communication to students, parents and teachers.</p>
		 
		 </div>
		 <br /><br /><br />
		 <div class="col-md-3">
		 <div class="vertical-menu">
		 <a href="#" class="firstOption">Notice Board</a>
		 <a href="#" class="secondOption">Send Message</a>
		 <a href="#" class="thirdOption">Send Email/SMS</a>
		 <a href="#" class="fourthOption">Email/SMS Log</a>
		
		 </div>
		 </div>
		 <div class="col-md-4" style="text-align:left;">
		 <h3 style="font-weight: 600;" id="moduleDetailHeading">Notice Board</h3>
		 
		 <p class=" moduleTextDetail" id="moduleTextDetail">
		 
			Notice Board here you can see all the posted messages.
		 
		 </p>
		 </div>
		 <div class="col-md-5">
		 <img alt="" id="change-image" src="images/moduleDetail/Communicate/1.PNG" style="width:100%;">
		 <!-- The Modal -->
			<div id="myModal" class="modal">
			  <span class="close">&times;</span>
			  <img class="modal-content" id="img01">
			  <div id="caption"></div>
			</div>
		 </div>
		 <br>
		 		
		 
		
			
			
		 
		 </div>
         <!-- End content -->
         <!-- footer 
            ================================================== -->
         <footer>
            <div class="up-footer">
               <div class="container">
                  <div class="row">
                     <div class="col-md-3">
                        <div class="widget footer-widgets text-widget" style="padding-bottom:67px;">
                          <img class="footerLogo" alt="" src="images/footerLogo.PNG" />
                           <p>iSMS is an Online school management system that adapts to the system and process of your institution.</p>
                        </div>
                     </div>
                     <div class="col-md-3">
                        <div class="widget footer-widgets tag-widget">
                           <h4>Why iSMS</h4>
                           <ul class="tag-widget-list">
                              <li><a href="#"><i class="fa fa-check-circle"></i> 22+ Secured Modules</a></li>
                              <li><a href="#"><i class="fa fa-check-circle"></i> 140+ Features</a></li>
                              <li><a href="#"><i class="fa fa-check-circle"></i> Education Simplified</a></li>
                              <li><a href="#"><i class="fa fa-check-circle"></i> Managing school 24/7</a></li>
                           </ul>
                        </div>
                     </div>
                     <div class="col-md-3">
                        <div class="widget footer-widgets info-widget">
                           <h4>Contact Us</h4>
                           <ul class="contact-list">
                              <li><a class="phone" href="#"><i class="fa fa-phone"></i> +92 (51) 843 8671</a></li>
                              <li><a class="mail" href="#"><i class="fa fa-envelope"></i>info@ismspk.com</a></li>
                              <li><a class="address" href="#"><i class="fa fa-home"></i> House No 892, Street 3-A, National &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Police Foundation, E-11/4, Islamabad.</a></li>
                           </ul>
                        </div>
                     </div>
                     <div class="col-md-3">
                        <div class="widget footer-widgets work-widget">
                           <h4>Working Hours</h4>
                           <p class="work-time"><span>Mon - Fri</span> : 9 AM to 5 PM</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="footer-line">
               <div class="container">
                  <p>&#169; 2018 Quicklink,  All Rights Reserved</p>
                  <a class="go-top" href="#"></a>
               </div>
            </div>
         </footer>
         <!-- End footer -->
      </div>
      <!-- End Container -->
	  	   <script type="text/javascript">
							  $(document).ready(function($){

						$('.firstOption').on({
							 'click': function(){
								 $('#change-image').attr('src','images/moduleDetail/Communicate/1.PNG');
								 $('#moduleDetailHeading').text('Notice Board');
								 $('#moduleTextDetail').text('Notice Board here you can see all the posted messages.');
							 }
						 });
						 
						$('.secondOption').on({
							 'click': function(){
								 
								$('#change-image').attr('src','images/moduleDetail/Communicate/2.PNG');
								$('#moduleDetailHeading').text('Send Message');
								$('#moduleTextDetail').text('Send Message enter Message Title, Message, Notice Date, Publish Date, Message To & click Save button. Note that, Notice Date is the date at which notice is being post & Publish Date is the date at which notice is being visible to Staff, Students & Parents.');
							 
							 }
						 });
						 
						$('.thirdOption').on({
							 'click': function(){
								 $('#change-image').attr('src','images/moduleDetail/Communicate/3.PNG');
								 $('#moduleDetailHeading').text('Send Email/SMS');
								 $('#moduleTextDetail').text('Send Email / SMS at this page there are three tabs Group, Individual and Class to select which users group you want to send email / sms. You can also send only Email or SMS or both at once.Open Group tab to send email / sms to all Students, Guardians and Staff enter message Title then select Send Through to send message through Email or SMS or both, then enter Message then select all those users groups (Students, Guardians and Staff) you want to send this Email / SMS then click to Send button. Here note that text entered in Title will not be sent through SMS, Title text will only send through email as email subject and Message text will be send as email body.Open Individual tab to send email / sms to individually selected Students, Guardians and Staff.Open Class tab to send email / sms to all students under selected Class-Section.');
							 
							 }
						 });
						 
						$('.fourthOption').on({
							 'click': function(){
								$('#change-image').attr('src','images/moduleDetail/Communicate/4.PNG');
								$('#moduleDetailHeading').text('Email/SMS Log');
								$('#moduleTextDetail').text('Email / SMS Log here you can see all the email / sms sent through Send Email / SMS.');
							 }
							 
						 });
						 
						});
	  </script>
      <script type="text/javascript" src="js/jquery.min.js"></script>
      <script type="text/javascript" src="js/jquery.migrate.js"></script>
      <script type="text/javascript" src="js/bootstrap.js"></script>
      <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
      <script type="text/javascript" src="js/gmap3.min.js"></script>
      <script type="text/javascript" src="js/retina-1.1.0.min.js"></script>
      <script type="text/javascript" src="js/plugins-scroll.js"></script>
      <script type="text/javascript" src="js/script.js"></script>
   </body>
</html>
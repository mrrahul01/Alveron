<?php
if($_POST) {
	$xml=simplexml_load_file("rate.xml");
	$xml->r[(int)$_POST['id']]->country = $_POST['country'];
	$xml->r[(int)$_POST['id']]->rate = $_POST['rate'];
	$xml->saveXML('rate.xml');
	header("Location: view_rate.php");
	die();
}
?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->  
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->  
<!--[if !IE]><!--> 
<html lang="en"> 
<!--<![endif]-->  
<head>
    <title>ALVERON</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
	<script>
	function confirmDialog() {
    return confirm("Are you sure you want to delete this record?")
	}
	</script>
    <!-- Favicon 
    <link rel="shortcut icon" href="http://htmlstream.com/preview/unify-v1.4/favicon.ico">
-->
    <!-- CSS Global Compulsory -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/style11.css">

    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="assets/css/line-icons.css">
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/flexslider.css"> 
    <link rel="stylesheet" href="assets/css/jquery.bxslider.css">             
    <link rel="stylesheet" href="assets/css/horizontal-parallax.css">

    <!-- CSS Theme -->    
    <link rel="stylesheet" href="assets/css/default.css" id="style_color">

    <!-- CSS Customization -->
    <link rel="stylesheet" href="assets/css/custom.css">
    <link rel="stylesheet" href="assets/css/app.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/box-shadows.css">
    <link rel="stylesheet" href="assets/css/css.css">
    <link rel="stylesheet" href="assets/css/plugins.css">
	
	
	<style>
		@media (min-width: 768px) {
			.navbar .navbar-nav {
				display: inline-block;
				float: none;
			}

			.navbar .navbar-collapse {
				text-align: right;
			}
		}
	</style>
	
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
	
</head> 

<body>
<!--=== End Style Switcher ===-->    

<div class="wrapper">
    <!--=== Header ===-->    
    <div class="header" style="border:none">
        <!-- Topbar -->
        <div class="topbar">
            <div class="container">
                <!-- Topbar Navigation -->
                <!-- End Topbar Navigation -->
            </div>
        </div>
        <!-- End Topbar -->
    
        <!-- Navbar -->
        <div class="navbar navbar-default" role="navigation">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="fa fa-bars"></span>
                    </button>
					<a class="navbar-brand" href="http://www.alveron.sg/">
                        <img id="logo-header" src="assets/img/LOGO-JPG.jpg" alt="Logo" width="120px">
                    </a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse navbar-responsive-collapse">
                    <ul class="nav navbar-nav">
                        <!-- Home -->
                      <!--  <li class="active">
                            <a href="index.html">
                                Homepage
                            </a>
                        </li> -->
                        <!-- End Home -->

                        <!-- Pages -->                        
                        <li class="dropdown">
                            <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
                                Product
                            </a>
							<ul class="dropdown-menu">
                                <li><a href="whole_sale_voice.html">Whole Sale Voice</a></li>
                                <li><a href="dialer.html">Dialer</a></li>
                                <li><a href="retail.html">RETAIL VOICE</a></li>
                            </ul>
                        </li>
                        <!-- End Pages -->

                        <!-- Features -->
						
						<!--<li class="dropdown">
                            <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
                                Affiliates
                            </a>
							<ul class="dropdown-menu">
                                <!--<li class="dropdown-submenu"><a href="mobile_apps.html">Mobile Application</a>
									<ul class="dropdown-menu">
										<li><a href="rahba_e_islam.html">Rahbar-E-Islam</a></li>
										<li><a href="bd_style.html">BD Style</a></li>
										<li><a href="bd_events.html">BD Events</a></li>
									</ul>
								</li>-->
                                <!--<li><a href="unified.html">Concerns</a></li>
                                <li><a href="rahba_e_islam.html">Partners</a></li>
                            </ul>
                        </li>--->
                        <!-- End Features -->

                        <!-- Portfolio -->
                        <li class="">
                            <a href="rate.html">
                                Rates
                            </a>
                        </li>
                        <!-- Ens Portfolio -->

                        <!-- Blog -->
                        <li>
                            <a href="support.html">
                                Support
                            </a>
							<!--<ul class="dropdown-menu">
                                <li><a href="blog_page.html">Outsourcing Model</a></li>
                                <li><a href="blog_page.html">ARRIVO Offers</a></li>-->
                            
                        </li>
						
						<li>
                            <a href="about_us.html">
                                About Us
                            </a>
                          <!---  <ul class="dropdown-menu">
								<li class="dropdown-submenu">
                                    <a href="javascript:void(0);">About ARRIVO</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="index.hmtl">Vision</a></li>
                                        <li><a href="index.hmtl">Mission</a></li>
                                    </ul>                                
                                </li>
                                <li><a href="blog_page.html">About ARRIVO</a></li>
                                <li><a href="blog_page.html">Partners</a></li>
                            </ul>--->
                        </li>
                        <!-- End Blog -->

                        <!-- Contacts -->
                        <li>
                            <a href="page_contact.html">
                                Contact Us
                            </a>
                        </li>             
                        <!-- End Contacts -->

                        <!-- Search Block -->
                        <!-- End Search Block -->
                    </ul>
                </div><!--/navbar-collapse-->
            </div>    
        </div>            
        <!-- End Navbar -->
    </div>
    <!--=== End Header ===-->    

    <!--=== Slider ===-->
    <!--<div id="sequence-theme" class="sequence-inner">
        <div id="sequence">
            <img class="prev" src="assets/img/bt-prev1.png" alt="Previous" />
            <img class="next" src="assets/img/bt-next1.png" alt="Next" />
            <ul>
                <li class="animate-in">
                    <div class="info">
                        <h2>Delivering Integrated Solution...</h2>
                        <p>With experienced Architects, Designers and Consultants we deliver a solution that seamlessly integrates to your Applications Framework.</p>
                    </div>
                    <img class="balloon" src="assets/img/ddd.png" alt="Balloon" />
                </li>
                <li>
                    <div class="info">
                        <h2>Equipped with Multi-faceted skills...</h2>
                        <p>With the help of our multi skilled team we handle our customer needs from concept to completion all under one roof.</p>
                    </div>
                    <img class="aeroplane" src="assets/img/multi.png" alt="Aeroplane" />
                </li>
                <li>
                    <div class="info">
                        <h2>Aligning to Customer needs....</h2>
                        <p>We make every attempt to completely understand the exact needs of our customers. This ensures that our customers ultimately get what they are looking for.</p>
                    </div>
                    <img class="aeroplane" src="assets/img/aaa.png" alt="Kite" />
                </li>
                <li>
                    <div class="info">
                        <h2>Striking Balance all the time...</h2>
                        <p>We always strive to achieve the right balance in providing Quality Deliverables in time and budget to our customers.</p>
                    </div>
                    <img class="aeroplane" src="assets/img/balance.png" alt="Aeroplane"/>
                </li>
            </ul>
        </div>
    </div>---><!--/sequence-theme-->
    <!--=== End Slider ===-->

    <!--=== Purchase Block ===-->
    <!----<div class="purchase">
        <div class="container">
            <div class="row">
                <div class="col-md-9 animated fadeInLeft">
                    <span>ARRIVO Delivering Technology Consultancy, Software Outsourcing and Software Development Services.</span>
                    <p>From Planning to Development to Deployment to Security to Systems Management, ARRIVO power innovation for businesses everywhere</p>
                </div> 
            </div>
        </div>
    </div>---><!--/row-->
    <!-- End Purchase Block -->
							<!---<div class="footer" style="background:#FCFCFC">
        <div class="container"  style="margin:0px;padding:0px;width:100%">
            <div class="row" style="margin:0px;padding:0px;width:100%">
                <div class="col-md-4 md-margin-bottom-40" style="height:250px;background:url('assets/img/design.png')">
                    <div class="headline" style="color:#FFFFFF"><h2  style="color:green">Design</h2></div>  
                    <p class="margin-bottom-25 md-margin-bottom-40"  style="color:#000000">Understanding your business processes, identify the right technology for you and implement them in an innovative way is our perspective of application development service.</p>
                    
                </div><!--/col-md-4-->  
                
                <!---<div class="col-md-4 md-margin-bottom-40" style="height:250px;">
                    <!-- Recent Blogs -->
                    
                    <!---<div class="headline"><h2 style="color:green">Develop</h2></div>  
                    <p class="margin-bottom-25 md-margin-bottom-40" style="color:#000000">We are strategically positioned to develop a technology infrastructure from the ground up – 
Concept to development to deployment to monitoring and measuring the implementation at every phase.  We specialize in Web & Mobile Technology.
</p>
                    <!-- End Recent Blogs -->                    
               <!--- </div><!--/col-md-4-->

                <!---<div class="col-md-4" style="height:250px;">
                    <!-- Contact Us -->
                    <!---<div class="headline"><h2 style="color:green">Deliver</h2></div>  
                    <p class="margin-bottom-25 md-margin-bottom-40"  style="color:#000000">We work closely with our customers as partners, we deliver and implement innovative software services across a wide range of technology and platforms</p>
                    <!-- End Social Links -->
               <!--- </div><!--/col-md-4-->
            <!---</div>
        </div> 
							</div>--->
							
				
				
				<!--<ul class="quarters" style="padding:0px;margin:0px;0px">
            <li style="background-image:url(./assets/img/design.png);background-size: cover" class="quarter"><a href="/us/intellicenter.aspx" class="q-action">
                    <span class="q-title casanslight"> <strong class="casansbold">Design</strong></span style="color:#999"> Understanding your business processes, identify the right technology for you and implement them in an innovative way is our perspective of application development service.<span class="q-arrow"></span></a>
            </li>
            <li style="background-image:url(./assets/img/develop.png)" class="quarter"><a href="/us/devcenter.aspx" class="q-action">
                    <span class="q-title casanslight"> <strong class="casansbold">Develop</strong></span> We are strategically positioned to develop a technology infrastructure from the ground up – <br/>
Concept to development to deployment to monitoring and measuring the implementation at every phase.  We specialize in Web & Mobile Technology.<span class="q-arrow"></span></a>
            </li>
            <li style="background-image:url(./assets/img/deliver.png)" class="quarter"><a href="/us/opscenter.aspx" class="q-action">
                    <span class="q-title casanslight"> <strong class="casansbold">Deliver</strong></span> We work closely with our customers as partners, we deliver and implement innovative software services across a wide range of technology and platforms<span class="q-arrow"></span></a>
            </li>-->
           <!--- <li style="background-image:url(./img/CA-Home-SecureCenter.jpg)" class="quarter"><a href="/us/securecenter.aspx" class="q-action">
                    <span class="q-title casanslight">ca <strong class="casansbold">Secure</strong>center</span> Provide convenient, secure access for the right users to the right applications, on any device, from anywhere.<span class="q-arrow"></span></a>
            </li>
        </ul>--->
							
							
							
							
							
						<!---<div class="footer-news"><div class="half"></div>
        <div class="container">
            <div class="row">
                <div class="span12">
                    <dl class="news-list text-center-sm">
                            <dt><a style="color:#FFFFFF" href="http://www.ca.com/us/it-management-news.aspx">From The Newsroom</a><span class="tri" style="
width: 0;
height: 0;
border-style: solid;
border-width: 23px 0 23px 20px;
border-color: transparent transparent transparent #53bbd4;
position: absolute;
top: 0;
left: 100%;"></span></dt>
                                    <dd class="trunc hide" style="word-wrap: break-word; white-space: normal; opacity: 0;"><a href="/us/news/press-releases/na/2014/ca-technologies-redefines-saas-based-it-service-management.aspx">ARRIVO team is attending GCCM 2014, Singapore.</a></dd>
                                    <dd class="trunc hide" style="word-wrap: break-word; white-space: normal; opacity: 0;"><a href="/us/news/press-releases/na/2014/seven-ca-technologies-executives-named-2014-crn-women-of-the-channel.aspx">Seven CA Technologies Executives Named 2014 CRN Women of the Channel</a></dd>
                                    <dd class="trunc" style="word-wrap: break-word; white-space: normal; opacity: 1;margin-top:0px;color:#FFFFFF"><a href="/us/news/press-releases/na/2014/ca-technologies-again-receives-strong-positive-rating-in-gartners-it-project.aspx">ARRIVO team is attending GCCM 2014, Singapore.</a></dd>
                    </dl>
                </div>
            </div>
        </div>
        
    </div>	--->
							
							
							
							
				<div style="margin:50px 120px;height:300px">
					<h2>Add Rate</h2>
	<hr/>
	<!----
	<?php /*
		if($_POST) {
			if(isset($message)) {
				echo "<p style='color:red;font-size:20px'>You already define a year if you want to change click <a href='".base_url()."administrator/editYear/".$this->session->userdata('year_id')."'>here</a></p>";
				} else {
				echo '<p style="color:green;font-size:20px">A year successfully added.</p>';
			}
			//	echo '<br/>';
		} */
	?>
	--->
	<?php
		//echo $i = $_GET['id'];
		$xml=simplexml_load_file("rate.xml");
	?>
	<form action="edit_rate.php" method="POST">
		<table>
		<tr>
			<td width="160px">Country Name</td>
			<td height="50px"><input type="text" name="country" value="<?php echo $xml->r[(int)$_GET['id']]->country; ?>"></td>
		</tr>
		<tr>
			<td>Rate</td>
			<td height="50px"><input type="text" name="rate" value="<?php echo $xml->r[(int)$_GET['id']]->rate; ?>"></td>
		</tr>
		<tr>
			<td></td>
			<td><br/><br/></td>
		</tr>
		<tr>
			<td><input type="hidden" name="id" value="<?php echo $_GET['id']; ?>"></td>
			<td><input type="submit" name="submit" value="Update"></td>
		</tr>
	</table>
	</form>	
				</div>
							
							
							
							
							
							
							
							
							

    <!--=== Footer ===-->
	<div class="container" style="padding:0px">
    <div class="footer">
        <div class="container">
            <div class="row" style="margin-left:25px">
                <div class="col-md-8 md-margin-bottom-40" style="margin-top:25px">
                    <!-- About -->
                    <span class="" style="margin:15px;"><a href="index.html">Home</a></span> |
                    <span class="" style="margin:15px;"><a href="#">Product</a></span> |
                    <span class="" style="margin:15px;"><a href="about_us.html">About</a></span> |
					<span class="" style="margin:15px;"><a href="page_contact.html">Contact Us</a></span>
                       
                    <!-- End About -->

                    <!-- Monthly Newsletter -->
                    
                    
                </div><!--/col-md-4-->  
                
                <!--/col-md-4-->

                <div class="col-md-4">
                    <!-- Contact Us -->
                     
                    
                    <!-- End Contact Us -->

                    <!-- Social Links -->
                    <div class="headline"><h2>Stay Connected</h2></div> 
                    <ul class="social-icons">
                        <li><a href="#" data-original-title="Feed" class="social_rss"></a></li>
                        <li><a href="#" data-original-title="Facebook" class="social_facebook"></a></li>
                        <li><a href="#" data-original-title="Twitter" class="social_twitter"></a></li>
                        <li><a href="#" data-original-title="Goole Plus" class="social_googleplus"></a></li>
                        <li><a href="#" data-original-title="Pinterest" class="social_pintrest"></a></li>
                        <li><a href="#" data-original-title="Linkedin" class="social_linkedin"></a></li>
                        <li><a href="#" data-original-title="Vimeo" class="social_vimeo"></a></li>
                    </ul>
                    <!-- End Social Links -->
                </div><!--/col-md-4-->
            </div>
        </div> 
    </div><!--/footer-->
    <!--=== End Footer ===-->

    <!--=== Copyright ===-->
    <div class="copyright">
        <div class="container">
            <div class="row" style="margin-left:25px">
				
               <!---- <div class="col-md-12" style="height: 24px;line-height: 10px">                     
                    <p>
                        2014 © ALVERON. ALL Rights Reserved. 
                       <!--- <a href="#">Privacy Policy</a> | <a href="#">Terms of Service</a>-->
                    
				<!---<p style="text-align:right;color:white">
						Powered by <a href="http://www.moneyplusltd.com">Money Plus
				</p>
					
					</p>
                </div>---->
				<div class="col-md-6">                     
                    <p>
                        2014 © ALVERON. ALL Rights Reserved. 
                    </p>
                </div>
				<div class="col-md-6" style="text-align:right">                     
                    <p>
                        Powered by <a href="http://www.moneyplusltd.com">Money Plus</a>
                    </p>
                </div>
                <div class="col-md-6">
                </div>
            </div>
        </div> 
    </div><!--/copyright--> 
    <!--=== End Copyright ===-->
</div><!--/End Wrapepr-->
</div><!--/End Wrapepr-->

<!-- JS Global Compulsory -->           
<script type="text/javascript" src="assets/plugins/bootstrap.min.js"></script> 
<!-- JS Implementing Plugins -->
<script type="text/javascript" src="assets/plugins/back-to-top.js"></script>
<script type="text/javascript" src="assets/plugins/jquery.parallax.js"></script>
<script type="text/javascript" src="assets/plugins/owl.carousel.js"></script>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script><script src="http://maps.gstatic.com/intl/en_us/mapfiles/api-3/17/3/main.js" type="text/javascript"></script>
<script type="text/javascript" src="assets/plugins/gmap.js"></script>
<!-- JS Page Level -->           
<script type="text/javascript" src="assets/plugins/app.js"></script>
<script type="text/javascript" src="assets/plugins/page_contacts.js"></script>
<script type="text/javascript" src="assets/plugins/owl-carousel/owl-carousel.js"></script>
<!--[if lt IE 9]>
    <script src="assets/plugins/respond.js"></script>
<![endif]-->

<script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-29166220-1']);
  _gaq.push(['_setDomainName', 'htmlstream.com']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>


 <div id="topcontrol" title="Scroll Back to Top" style="position: fixed; bottom: 5px; right: 5px; opacity: 0; cursor: pointer;"><img src="assets/img/up.png" style="width:51px; height:42px"></div></body></html>
<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ken Edmonds</title>
    
	<!--    Favicon  -->
	<link rel="icon" href="img/CIX.png" type="image/png" sizes="32x32">
    
    <!--    Stylesheet Files    -->
    <link rel="stylesheet" href="css/normalize.css" />
    <link rel="stylesheet" href="css/foundation.min.css" />
    <link rel="stylesheet" href="css/main.css" />


    <!--    Javascript files are placed before </body>    -->
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<?php include 'includes/GA.php'; ?>

	
  </head>
  
  <body>
    <!--  Start Hero Section  -->
    <section class="hero" id="toptop">
      <header>
        <div class="row">
          

          <nav class="top-bar" data-topbar role="navigation">
            
            <!--    Start Logo    -->
            <ul class="title-area">
              <li class="name">
                <a href="#" class="logo">
                  <h1>Kedmonds<span class="tld">.biz</span></h1>
                </a>
              </li>
                <span class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></span>
              </li>
            </ul>  
            <!--    End Logo    -->

            <!--    Start Navigation Menu    -->
            <section class="top-bar-section" id="mean_nav">
              <ul class="right">
                <li><a href="#services" class="pagego">services</a></li>
                <li><a href="testimonials.php" class="pagego">Testimonials</a></li>
                <li><a href="aboutken.php" class="pagego">About Ken</a></li>
                <li><a href="articles.php" class="pagego">Articles</a></li>
                <li><a href="events.php" class="pagego">Events</a></li>
                <li><a href="blog.php" class="pagego">BLOG</a></li>
                <li><a href="#connect" class="pagego">Connect</a></li>
              </ul>
            </section>
            <!--    End Navigation Menu    -->

          </nav>
        </div>
      </header>

      <!--    Start Hero Caption    -->
      <section class="caption">
        <div class="row">
          <h1 class="mean_cap">Service Management</hA>
          <h2 class="sub_cap">Coaching Services</h2>
<!--           <a href="#" class="btn_details"><span>See Coaching Plans</span> <!-- <img src="img/btn_arrow.png" alt="" src="" class="arrow"> </a>-->
        </div>
      </section>
      <!--    End Hero Caption    -->

    </section>
    <!--  End Hero Section  -->



    <!--  Start Services Section  -->
    <section class="services" id="services">     

      <!--    Start Services Titles    -->
      <div class="row">        
        <h1 class="mean_title">Coaching Services</h1>
        <h2 class="sub_title"><span style="text-transform: uppercase;">I<span/> proudly offer a variety of services which help companies improve their service departments and their company’s profitability.</h2> 
      </div>
      <!--    End Services Titles    -->

	  <?php
		  // listof services
		  $service1 = 'For dealers looking for new revenue streams and opportunities to expand beyond their current product offerings, I will evaluate the company’s strengths and weaknesses and what steps they will need to take to branch out.  I will work with the senior management in finding opportunities, and preparing your company for the dramatic changes that are on the horizon in our industry.  This can be done through an on-site visit, or remotely depending on the needs of the dealership.';
		  
		  $service2 = 'For companies that are looking for more in depth assistance, I offer a full-fledged program that involves several days of on-site evaluating all aspects of a company’s operations.  This review will include policies and procedures, disaster planning, hiring and compensation, and operational metrics.  This comprehensive review will identify areas where a dealership does not measure up to the Pro-Finance model, and provide a process for improvement.  In addition to the on-site evaluation, this option includes ongoing support for a monthly retainer.   For dealers that are contemplating a merger or sale, this review will help identify necessary changes to maximize a dealer’s valuation.';
		  
		  $service3 = 'For companies that want to address a specific challenge in their departments, I will evaluate the issue and provide suggestions on how to overcome the problem.  This service is available on a per issue basis, and the rate will include follow up to make sure that the recommendations resolved the concern.  This service will not normally require an on-site visit making it an affordable option for a specific issue.';
		  
		  $service4 = 'I will be offering a comprehensive training program for service supervisors, service managers, and directors of service helping them become highly skilled in their roles.  This training will be unique in that it feature live lecture and discussion over the internet.  The classes will typically meet twice a week for 1 hour.  There will be group assignments and assigned reading. The advantage to this approach is two-fold; first the students will not have to travel and can continue to handle their daily responsibilities in their department.  Second, the dealership will save the cost of travel and meals while they are in class. Total class time is significantly than the traditional 3 to 4 day course.
		  A written report at the end of the class outlines the students’ performance, participation, and a final grade for the course.  A separate course for each position will be offered.  Typically, the classes will be taught sequentially so that a student can take all three in a row, and there will be a tuition discount for multiple classes.
		  <hr />
		  <a href="training.php" class="button secondary">More</a>
		  ';
	  ?>
	  
      <!--    Start Services List    -->
      <div class="row services_list">
        <div class="small-12 medium-3 large-3 columns">
          <img src="img/icons/strategyIcon.png" alt="" title="" class="serv_icon"/>
<!--           <h2 class="title">Strategy and Planning</h2> -->
          <p class="text-justify"><?php echo $service1; ?></p>
        </div>

       
      <div class="small-12 medium-3 large-3 columns">
          <img src="img/icons/supportIcon.png" alt="" title="" class="serv_icon"/>
<!--           <h2 class="title">Support</h2> -->
          <p class="text-justify"><?php echo $service3; ?></p>
        </div>


	   

     

        <div class="small-12 medium-3 large-3 columns">
          <a href="training.php"><img src="img/icons/trainingIcon.png" alt="" title="" class="serv_icon"/></a>
<!--           <h2 class="title">Training</h2> -->
          <p class="text-justify"><?php echo $service4; ?></p>
        </div>
        
        <div class="small-12 medium-3 large-3 columns">
          <img src="img/icons/consultingIcon.png" alt="" title="" class="serv_icon"/>
<!--           <h2 class="title">Consulting</h2> -->
          <p class="text-justify"><?php echo $service2; ?></p>
        </div>
        
        
      </div>
      <!--    End Services List    -->

      <!--    Start Button    -->
      <div class="btn_holder">
        <a href="https://www.facebook.com/kedmonds.biz.7" class="btn_fancy">
          <div class="solid_layer"></div>
          <div class="border_layer"></div>
          <div class="text_layer">Get In Touch</div>
        </a>
      </div>
      <!--    End Button    -->

    </section>
    <!--  End Services Section  -->



    <!--  Start Quote Section  -->
    <section class="quote">
        <blockquote>
          <p>Ken Edmonds <span class="strong">Coaching</span> Services. </p>
          <hr/>
          <span class="author">For Managers</span>
        </blockquote>
    </section>
    <!--  End Quote Section  -->



    <!--  Start Testimonials Section  -->
    <section class="testimonials" id="testimonials">
      <div class="row">
        <div class="slider_container">
          <div id="carousel">
            
            <div class="tesimonial">              
			  <img src="img/icons/article.png" title="" alt="" width="100px">
              <p><h5>Article<h5/></p>
			  <p>A Call Center—When and Why<p/>             
              <span class="author"><a href="http://kedmonds.biz/articles.php?article=A Call Center—When and Why">Click here</a></span>
            </div>

            <div class="tesimonial">
			  <img src="img/icons/article.png" title="" alt="" width="100px">
              <p><h5>Article<h5/></p>
			  <p>Creating a Uniform Process for Your Business<p/>             
              <span class="author"><a href="http://kedmonds.biz/articles.php?article=Creating a Uniform Process for Your Business">Click here</a></span>
            </div>

            <div class="tesimonial">
             <img src="img/icons/article.png" title="" alt="" width="100px">
              <p><h5>Article<h5/></p>
			  <p>Customer Service Matters<p/>             
              <span class="author"><a href="http://kedmonds.biz/articles.php?article=Customer Service Matters">Click here</a></span>
            </div>
			
			 <div class="tesimonial">
             <img src="img/icons/article.png" title="" alt="" width="100px">
              <p><h5>Article<h5/></p>
			  <p>Don’t Spend $25 on $5 Work<p/>             
              <span class="author"><a href="http://kedmonds.biz/articles.php?article=Don’t Spend $25 on $5 Work">Click here</a></span>
            </div>
			
			 <div class="tesimonial">
             <img src="img/icons/article.png" title="" alt="" width="100px">
              <p><h5>Article<h5/></p>
			  <p>Notes from Recent Events<p/>             
              <span class="author"><a href="http://kedmonds.biz/articles.php?article=Notes from Recent Events">Click here</a></span>
            </div>
			
			 <div class="tesimonial">
             <img src="img/icons/article.png" title="" alt="" width="100px">
              <p><h5>Article<h5/></p>
			  <p>Protect the Power to Protect Your Bottom Line<p/>             
              <span class="author"><a href="http://kedmonds.biz/articles.php?article=Protect the Power to Protect Your Bottom Line">Click here</a></span>
            </div>
			
			 <div class="tesimonial">
             <img src="img/icons/article.png" title="" alt="" width="100px">
              <p><h5>Article<h5/></p>
			  <p>Why Customer Relations Training Is a Must for Technicians<p/>             
              <span class="author"><a href="http://kedmonds.biz/articles.php?article=Why Customer Relations Training Is a Must for Technicians">Click here</a></span>
            </div>

          </div>          
        </div>

        <!--    Start Testimonials Pagination    -->
        <nav class="pagination">
          <ul>
            <li><a href="#">1</a></li>
            <li><a href="#" class="selected">2</a></li>
            <li><a href="#">3</a></li>
          </ul>
        </nav>
        <!--    End Testimonials Pagination    -->

      </div>
    </section>
    <!--  End Testimonials Section  -->



    <!--  Start Call To Action Section  -->
    <section class="cta" id="Download">
      <div class="row">

        <!--    Start CTA Titles    -->
        <h1 class="title">Need Insights to improve your business?</h1>
        <h2 class="sub_title">Ken brings 30 years of experience to the table</h2>
        <!--    End CTA Titles    -->

        <!--    Start Button    -->
        <a href="https://www.facebook.com/kedmonds.biz.7" class="btn_fancy">
          <div class="solid_layer"></div>
          <div class="border_layer"></div>
          <div class="text_layer">Get It Now!</div>
        </a>
        <!--    End Button    -->

      </div>
    </section>
    <!--  End Call To Action Section  -->



  <?php //include 'includes/mapsection.php';?>



    <!--  Start Footer Section  -->
    <footer id="connect">
      <div class="row">
        
        <!--    Start Copyrights    -->
        <div class="small-12 medium-4 large-4 columns">
          <div class="copyrights">
            <a class="logo" href="#">
              <h1>kedmonds<span class="tld">.biz</span></h1>
            </a>
            <p>Copyright © 2017-2018</p>
          </div>
        </div>
        <!--    End Copyrights    -->


        <div class="small-12 medium-8 large-8 columns">
          <div class="contact_details right">
            <nav class="social">
              <ul class="no-bullet">
                <li><a href="https://www.facebook.com/kedmonds.biz.7" target="_blank">Facebook</a></li>
                <li><a href="https://www.linkedin.com/in/kedmonds-biz-893232156/" target="_blank">LinkedIn</a></li>
<!--
                <li><a href="http://instagram.com/kedmonds" target="_blank">Instagram</a></li>
                <li><a href="http://twitter.com/kedmonds" target="_blank">Twitter</a></li>
                <li><a href="http://plus.google.com/kedmonds" target="_blank">Google+</a></li>
-->
              </ul>
            </nav>

            <div class="contact">
              <div class="details">
                <p>Ken@kedmonds.biz</p>
                <p>336-653-3699</p>
              </div>

<!--
              <p class="adress">550 Hershell Hollow Road
              Johnson City, TN 37615</p>
-->
            </div>
          </div>
        </div>

      </div>
    </footer>
    <!--  End Footer Section  -->

    <!--    Start Back To Top    -->
    <a href="#toptop" class="btn_fancy" id="back_top">
      <div class="solid_layer"></div>
      <div class="border_layer"></div>
      <div class="text_layer"><img src="img/top_arrow.png" alt="Back to top" title="" class="top_arrow"></div>
    </a>
    <!--    End Back To Top    -->





    <!--    Javascript Files    -->
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/touchSwipe.min.js"></script>
    <script type="text/javascript" src="js/easing.js"></script>
    <script type="text/javascript" src="js/foundation.min.js"></script>
    <script type="text/javascript" src="js/foundation/foundation.topbar.js"></script>
    <script type="text/javascript" src="js/carouFredSel.js"></script>
    <script type="text/javascript" src="js/scrollTo.js"></script>
    <script type="text/javascript" src="js/map.js"></script>
    <script type="text/javascript" src="js/main.js"></script>

  </body>
</html>

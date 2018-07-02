<?php
	 
	 if(!empty($_GET['article'])){	
	 $artToGet = $_GET['article'];
	 }
	 ?>


<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ken Edmonds - </title>
    
	<!--    Favicon  -->
	<link rel="icon" href="img/CIX.png" type="image/png" sizes="32x32">
    
    <!--    Stylesheet Files    -->
    <link rel="stylesheet" href="css/normalize.css" />
    <link rel="stylesheet" href="css/foundation.min.css" />
    <link rel="stylesheet" href="css/main.css" />

    <!--    Javascript files are placed before </body>    -->
    <?php include 'includes/GA.php'; ?>
  </head>
  
  <body>
    <!--  Start Hero Section  -->
    <section class="hero_articles">
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
                <li><a href="index.php" class="homego">home</a></li>
               
              </ul>
            </section>
            <!--    End Navigation Menu    -->

          </nav>
        </div>
      </header>
      
      <hr />
      <div class="row">
        
        <!--    Start Articles    -->
        <div class="small-12 medium-4 large-12 columns">
	        
	        <div class="large-4 columns">
		        <?php include 'includes/sideNav.php';?>
	        </div>
			
			<div id="articles_here">
			
				<?php include 'articles/A Call Center—When and Why.html';?>
			
			</div>
			
		</div>
      
      </div>
      
          <!--  Start Footer Section  -->
  <!--  Start Footer Section  -->
    <footer>
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
    <a href="#" class="btn_fancy" id="back_top">
      <div class="solid_layer"></div>
      <div class="border_layer"></div>
      <div class="text_layer"><img src="img/top_arrow.png" alt="Back to top" title="" class="top_arrow"></div>
    </a>
    <!--    End Back To Top    -->





    <!--    Javascript Files    -->
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
    <script type="text/javascript" src="js/jquery.js"></script>
    
    <?php include 'includes/pagebase.php'; ?>
    
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
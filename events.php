<?php include 'includes/ewp.php';?>
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
    
    <script src="tinymce/js/tinymce/tinymce.min.js"></script>
	<script>tinymce.init({ selector:'textarea' });</script>
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
      </section>
      
      
      <hr />
      <div class="row">
	  <div class="large-4 columns">
	  <h4>Events</h4>		  
	  <ul class="side-nav">
		  
		  <?php 
			  
			  $getArticles = mysqli_query($con,"SELECT * FROM blog WHERE wheretopost='event'");
			  
			  while($a = mysqli_fetch_array($getArticles)){
			
			  echo '<li class="active"><a class="blogGet" href="#">'.$a['blog_title'].'</a></li>';
			  	
				  
			  }
			 echo '</ul>';
			 echo '</div>';
			   echo '<div id="blogTitle" class="large-8 columns">';

		   
		   echo '</div>';
			  
		  ?>
	      
	 
	  </div>

	 	  
	  


    
      </div>
      
      </hr>
      
     
      
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


          <?php include 'includes/socialMediaPlugs.php';?>
      
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
    <script type="text/javascript" src="js/touchSwipe.min.js"></script>
    <script type="text/javascript" src="js/easing.js"></script>
    <script type="text/javascript" src="js/foundation.min.js"></script>
    <script type="text/javascript" src="js/foundation/foundation.topbar.js"></script>
    <script type="text/javascript" src="js/carouFredSel.js"></script>
    <script type="text/javascript" src="js/scrollTo.js"></script>
    <script type="text/javascript" src="js/map.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
    
    <?php include 'includes/pagebase.php'; ?>

  </body>
</html>
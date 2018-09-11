<?php include 'includes/ewp.php';
	
	
	
	
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
    <link rel="stylesheet" href="FONTAWESOME/css/font-awesome.min.css"/>

    <!--    Javascript files are placed before </body>    -->
    
   
	
	
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
      
            
           <hr / style="border:0px;">
      
      <div class="row">
	  
	  <?php 
		 
		  $liveArticles = mysqli_query($con,"SELECT * FROM blog WHERE wheretopost='blog'");
		  $getArticles = mysqli_query($con,"SELECT * FROM blog WHERE wheretopost='blog'");
		 
		  echo '<div class="large-4 columns">';  
		  
		  echo '<h3>Blog</h3>';
		  
		  echo '<ul id="listofarticles" class="side-nav">';
		  
		  	$no = 1;
		    while($a = mysqli_fetch_array($getArticles)){
			
		  	echo '<li id="art_'.$no++.'x"> <a class="blogGet" href="">'.$a['blog_title'].'</a></li>';	  
			
			}
		 
		  echo '</ul>
		  
		  
		  </div>';
		  
		   echo '<div id="blogTitle" class="large-8 columns">';
		  
		   
		
			echo '</div>';
	  ?>
	      
	  
	 	  
	  
	  </div>
	  
	  
      <hr / style="border:0px;">    
      
      
      
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
    
    <script>
	
	$(document).ready(function(){
		var first_li = $('ul#listofarticles li').first().children('a').click();
		$(first_li).parent().attr('class','active');
		$(first_li).parent().css({'background':'#4d2665'});
		$('.blogGet').css('color','#4d2665');
		$(first_li).css({'color':'#fff'});
		
		
		
		$(document).on('click','.blogGet',function(){
		$('.blogGet').parent().attr('class','x');
		$('.blogGet').parent().css('background','');		
		$('.blogGet').css('color','#4d2665');
		$(this).css('color','#fff');
		$(this).parent().attr('class','active');
		$(this).parent().css('background','#4d2665');
		

		
		});
		
	});
	
	
		
	
	</script>
	
	
	
		
	<?php include('includes/loadGetBlog.php');?>
		
	    
    
    <script type="text/javascript" src="js/touchSwipe.min.js"></script>
    <script type="text/javascript" src="js/easing.js"></script>
    <script type="text/javascript" src="js/foundation.min.js"></script>
    <script type="text/javascript" src="js/foundation/foundation.topbar.js"></script>
    <script type="text/javascript" src="js/carouFredSel.js"></script>
    <script type="text/javascript" src="js/scrollTo.js"></script>
    <script type="text/javascript" src="js/map.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
    
    <?php //include 'includes/pagebase.php'; ?>

  </body>
</html>





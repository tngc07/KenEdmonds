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
			<script>
		tinymce.init({
  selector: 'textarea',
  height: 500,
  theme: 'modern',
  plugins: 'print preview fullpage  searchreplace autolink directionality  visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists textcolor wordcount  imagetools   contextmenu colorpicker textpattern help',
  toolbar1: 'formatselect | bold italic strikethrough forecolor backcolor | link | alignleft aligncenter alignright alignjustify  | numlist bullist outdent indent  | removeformat',
  image_advtab: true,
  file_browser_callback: function(field_name, url, type, win) {
    win.document.getElementById(field_name).value = 'my browser value';
  },
  content_css: [
    '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
    '//www.tinymce.com/css/codepen.min.css'
  ]
 });
	</script>
	
	
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
      
      <hr / style="border:0px;">
      <div class="row">
	
	
		      <div class="large-12 columns">
			      
			  <h2>New Article</h2>    
    
			  <form id="mainForm" action="includes/blogProcessor.php" method="post">   
				  
				  
		      <div class="large-4 columns" style="padding:0px;">
		      <label> Choose Page
		      <select name="sel_pagetopost">
			   	  <option value="" disabled="disabled">Site Pages</option>
			      <option value="blog">Blog</option>
			      <option value="articles">Articles</option>
			      <option value="event">Event</option>
			      <option value="px_event">Upcomming Event</option>
			      <option value="testimonials">Testimonials</option>
			      <option value="Bio">Bio</option>
			      <option value="training">Training</option>
		      </select>
		      </label>	
		        </div> 
		        
		      <hr / style="border:0px;">
		      
		      <div class="large-4 columns" style="padding:0px;">
			  <label> Title</label>			      
		      <input type="text" name="titleofBlog" >
		      </div>
		      
		    <!-- 		      <div class="dropzone"></div> -->
		      
		      <hr />
			  <label>Article</label>
		      <textarea id="textarea" name="BlogPost"></textarea>
		      
		       
		       <br />
		      <input type="hidden" name="rowtoedit" value="x">
		      <button id="submitForm" class="small">UPLOAD</button>
		      
		      </div>
		      
		      </form>
		      
		     
      
      
      </div>
      <hr / style="border:0px;">
      
      <div class="row">
	      
	      <table width="100%">
			  <thead>
			    <tr>
			      <th>Blog Title</th>
			      <th>WebPage</th>
			      <th>Edit</th>
			      <th class="right">Delete</th>
			    </tr>
			  </thead>
			  <tbody>
	  
	  <?php 
		  
		  $getArticles = mysqli_query($con,"SELECT * FROM blog ORDER BY wheretopost");
		  
		  while($a = mysqli_fetch_array($getArticles)){
			  
			  echo '
			    <tr>
			      <td>'.$a['blog_title'].'</td>
			      <td>'.$a['wheretopost'].'</td>
			      <td><input type="hidden" id="blogTitle" value="'.$a['blog_title'].'"><a class="large-12 columns editthisarticle button tiny" id="'.$a['blog_id'].'">Update</a></td>
			      <td><a class="deletethisitem button right alert tiny" id="'.$a['blog_id'].'">Delete</a></td>
			    </tr>';
		  }
		  
		  
		  
	  ?>
	      
	  
	 	    </tbody>
			</table>
	  
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


        <div class="small-12 medium-8 large-8 columns">
          <div class="contact_details right">
            <nav class="social">
              <ul class="no-bullet">
                <li><a href="http://facebook.com/kedmonds" target="_blank">Facebook</a></li>
                <li><a href="http://instagram.com/kedmonds" target="_blank">Instagram</a></li>
                <li><a href="http://twitter.com/kedmonds" target="_blank">Twitter</a></li>
                <li><a href="http://plus.google.com/kedmonds" target="_blank">Google+</a></li>
              </ul>
            </nav>

            <div class="contact">
              <div class="details">
                <p>Ken@kedmonds.biz</p>
                <p>555 555 555</p>
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
    <script type="text/javascript" src="js/touchSwipe.min.js"></script>
    <script type="text/javascript" src="js/easing.js"></script>
    <script type="text/javascript" src="js/foundation.min.js"></script>
    <script type="text/javascript" src="js/foundation/foundation.topbar.js"></script>
    <script type="text/javascript" src="js/carouFredSel.js"></script>
    <script type="text/javascript" src="js/scrollTo.js"></script>
    <script type="text/javascript" src="js/map.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
    <script type="text/javascript" src="js/dropzone.js"></script>
    
    
    <?php //include 'includes/pagebase.php'; ?>

	
  </body>
</html>

<script>

	$(document).on('click','.editthisarticle', function(){
		
		var getid = $(this).attr('id');
		var getTtl = $(this).siblings('input#blogTitle').val();
		
		$('input[name=rowtoedit]').val(getid);
		$('input[name=titleofBlog]').val(getTtl);
		$('#mainForm').attr('action','includes/updateArticle.php');
		tinyMCE.activeEditor.setContent('');
		$.post('getcontent.php',{rowtoedit:getid},function(data){
			
			
			tinymce.activeEditor.execCommand('mceInsertContent', false, data);
			//$('#textarea').text(data);
			
		});
		
		
	});

</script>

<!--
<script>
	
	// SET UP DROPZONES
	$("div.dropzone").dropzone({ 
    
    url: "includes/imgprocessor.php",
	paramName : "file"
	
/*
			init: function() {
					
					this.on("sending", function(file, xhr, formData) {
				      formData.append('clase_id',clase_id);
				      //add another 'formData'..if ya need it bro!! ;)
				    });
				    
				    this.on("queuecomplete", function(){
				    
				     //alert("All files have uploaded ");
				     $('#listTheFiles').load('includes/lec_ppt.php',{clase_id:clase_id});
				     $("div.dropLecPresHere").html('Archivos Arriba! Sube Mas Aqui.');
				     $('#dropfilesarea').slideUp();
					 $('#dropfileCenter').show();
				    });
			 }
*/
	
	});	
	
	</script>
-->
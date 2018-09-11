<?php include 'ewp.php';
	
if(!empty($_POST['BlogPost'])){
$text = $_POST['BlogPost'];	
}

if(!empty($_POST['titleofBlog'])){
$titleofBlog = $_POST['titleofBlog'];
}

if(!empty($_POST['title'])){
$title = $_POST['title'];
}

if(!empty($_POST['sel_pagetopost'])){
$wheretopost = $_POST['sel_pagetopost'];
}

if(!empty($_POST['pageLink'])){
	$pageLink = $_POST['pageLink'];
}


if(!empty($text)){

	$query = mysqli_query($con, "INSERT INTO blog(blog_txt,blog_title,wheretopost)VALUES('$text','$titleofBlog','$wheretopost')");	
		
	if($query){
		
		//echo 'uploaded';
		header('Location:http://kedmonds.biz/writer.php');
	
	}
}elseif(!empty($title)){
	$query = mysqli_query($con, "SELECT * FROM blog WHERE blog_title='$title'");
	while($b = mysqli_fetch_array($query)){
		echo '<div id="toptoptop"></div>';
		echo '<input type="hidden" id="copyTarget"  value="'.$pageLink.'?article='.$title.'">';
		echo '<a href="javascript:void(0)" class="copthisbtn right" id="copyButton" onclick="copy(\'#copyTarget\'); return false; "><i class="fa fa-share-alt fa-lg" aria-hidden="true" id></i></a>';
		
		echo '<h3>'.$b['blog_title'].' </h3>';
		
		echo $b['blog_txt'];
		
		echo '<br />';
		
		

	
		
		
		
				
	}	
}elseif(!empty($_POST['del'])){
	
	$del = $_POST['del'];
	$query = mysqli_query($con, "DELETE FROM blog WHERE blog_id='$del'");
	
	header('Location:http://kedmonds.biz/writer.php');
	
}

echo mysqli_error($con);
	
	
?>


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

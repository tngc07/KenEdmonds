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


if(!empty($text)){

	$query = mysqli_query($con, "INSERT INTO blog(blog_txt,blog_title,wheretopost)VALUES('$text','$titleofBlog','$wheretopost')");	
		
	if($query){
		
		//echo 'uploaded';
		header('Location:http://kedmonds.biz/writer.php');
	
	}
}elseif(!empty($title)){
	$query = mysqli_query($con, "SELECT * FROM blog WHERE blog_title='$title'");
	while($b = mysqli_fetch_array($query)){
		echo '<h3>'.$b['blog_title'].'</h3>';
		echo $b['blog_txt'];
		
	}	
}elseif(!empty($_POST['del'])){
	
	$del = $_POST['del'];
	$query = mysqli_query($con, "DELETE FROM blog WHERE blog_id='$del'");
	
	header('Location:http://kedmonds.biz/writer.php');
	
}

echo mysqli_error($con);
	
	
?>
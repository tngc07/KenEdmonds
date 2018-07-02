<?php include 'includes/ewp.php';
	
	
	if(!empty($_POST['rowtoedit'])){

		$id = $_POST['rowtoedit'];

		
		$getArticles = mysqli_query($con,"SELECT * FROM blog WHERE blog_id=$id");
		while($text = mysqli_fetch_array($getArticles)){
			echo $text['blog_txt'];
		}
	
	}
	
	if(!empty($_POST['getTitle'])){

		$id = $_POST['getTitle'];

		
		$getArticles = mysqli_query($con,"SELECT * FROM blog WHERE blog_id=$id");
		while($text = mysqli_fetch_array($getArticles)){
			echo $text['blog_title'];
		}
	
	}

	
	
?>
<?php include 'ewp.php';

if(!empty($_POST['rowtoedit'])){
echo $row = $_POST['rowtoedit'];	
}
	
if(!empty($_POST['BlogPost'])){
$text = $_POST['BlogPost'];	
}

if(!empty($_POST['titleofBlog'])){
$titleofBlog = $_POST['titleofBlog'];
}




if(!empty($text)){

	$query = mysqli_query($con, "UPDATE blog SET blog_txt = '$text' WHERE blog_id=$row ");	
		
	if($query){
		
		echo 'yep';	
	}else{
		echo 'nope';
	}
	
}

if(!empty($titleofBlog)){

	$query = mysqli_query($con, "UPDATE blog SET blog_title = '$titleofBlog' WHERE blog_id=$row ");

	if($query){
		
		echo 'yep';
	}else{
		echo 'nope';
	}


}
header('Location:http://kedmonds.biz/writer.php');
echo mysqli_error($con);
	

	
	
?>
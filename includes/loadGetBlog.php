	<?php 
		
	$actual_link = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];
	
	?>
	

	<script>

	var pageLink = '<?php echo $actual_link;?>';
		
	</script>
	
	<?php
		
	//This if Statments determines if an Article is already Set.
	if(!empty($_GET['article'])){
	$A_name = $_GET['article'];
	?>
	<script>
	$(document).ready(function(){

			var blogtoget = $("a:contains('<?php echo $A_name;?>')").click();
		
			var vid = $(blogtoget).parent().attr('id');
		
			
	});
	</script>
	<?php 
		}
	?>
	
<script>
$(document).ready(function(){
	
	var article = <?php echo $artToGet;?>.'.html';
	
	if(article != ''){
		$.post('articles/articleSwitch.php',{href:article}, function(data){
		
			$('#articles_here').html(data);	
		
		});
	}

});	
	</script>

	

$(document).ready(function(){
	

	/*  Foundation Init    */
	$(document).foundation();



	/*  carousel Init    */
	$('#carousel').carouFredSel({
	 	width : '670',
	 	pagination  : ".pagination",
	 	responsive : true,
	 	scroll :{
	 		fx : 'fade'
	 	},
	 	items :{
	 		visible : 1,
	 		width : '670'
	 	},
		swipe: {
			onMouse: true,
			onTouch: true
		}
    });
    
    });
    
    
    
    
    
    $('.articleGet').click(function(x){

	
	x.preventDefault();
	
	var href = $(this).attr('href');
	
	$.post('articles/articleSwitch.php',{href:href}, function(data){
	//alert(data);
		$('#articles_here').html(data);	
	
	});

	
	});
	
	 





	/*    Mean navigation menu scroll to    */
    $('#mean_nav ul li a').click(function(e){
    	e.preventDefault();
    	scrollTo($(this).attr('href'), 900, 'easeInOutCubic');
    });
    
    /*    Mean navigation menu scroll to    */
    $('li a.pagego').click(function(a){
    	//a.preventDefault();
    	var href = $(this).attr("href");
    	
    	window.location.href = href;
    });

	/*    Mean navigation menu scroll to    */
    $('li a.homego').click(function(a){
    	//a.preventDefault();
    	window.location.href = "http://kedmonds.biz";
    });

	



    /*    Back to top button    */
    var back_top = $('#back_top');

    back_top.click(function(e){
    	e.preventDefault();
    	scrollTo(0, 900, 'easeInOutCubic');
    	
    });

    function scrollTo(target, speed, ease){
    	$(window).scrollTo(target, speed, {easing:ease});
    }

    $(window).on('scroll', function(){    
	    if($(this).scrollTop()>749)
	    {
	    	back_top.stop().animate({opacity : 1}, 250);
	    }else
	    {
	    	back_top.stop().animate({opacity : 0}, 250);	    
	    }   
    });


	$('.blogGet').click(function(e){
		 
		var title = $(this).html();
		
		e.preventDefault();
		
		$.post('includes/blogProcessor.php',{title:title}, function(data){
		$('#blogTitle').html(data);	
		
	
		});
		
		 
	 });
	 
	 
	 $('.deletethisitem').click(function(e){
		 
		var del = $(this).attr('id');
		
		e.preventDefault();
		
		$.post('includes/blogProcessor.php',{del:del}, function(data){
		
		$('#blogTitle').html(data);	
		
	
		});
		
		 
	 });

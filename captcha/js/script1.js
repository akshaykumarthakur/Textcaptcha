jQuery(document).ready(function(){
	
	$(window).scroll(function(){
		$('.process-node').each(function(){
		  $t_event_r_t=$(this).attr('class');
$windowH=$(window).scrollTop();
if($t_event_r_t=='process-node '){
	$t_event_offset=$(this).offset().top;
  if($t_event_offset <= $windowH + 450){
	  $(this).animate({
		  opacity:1,
		  marginLeft:'0px'
	  })
  }
}
else{
$t_event_offset=$(this).offset().top;
 if($t_event_offset <= $windowH + 450){
	  $(this).animate({
		  opacity:1,
		  marginRight:'0px'
	  })
  }
}	
			})
			
		
	})
	
	 
	
})




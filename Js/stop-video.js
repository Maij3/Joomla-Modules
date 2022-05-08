(function($){
	$(document).ready(function(){
		// ---------------------------------------------
		// Initialization
		// ---------------------------------------------
		if(!$('.mod-slick-media').length) return;
		$('.jn-play').click(function(){
			  	if($(this).parent().hasClass('slick-active')){
					var src;
					$('.jn-play').find('iframe').removeAttr('src')
					$('iframe').map(function(){
						 src = $(this).attr("data-src");
					
					        $(this).attr("src", src);
						$(this).css({
							'display':'none '
						});
						
		  			});
				
				}     	
		});


		// ---------------------------------------------
		// Events
		// ---------------------------------------------

		// Example click
		$('.example').on('click', function(){

		});


		// ---------------------------------------------
		// Functions
		// ---------------------------------------------

		// Example function
		function example(){
			//
		}

	});
})(jQuery);

$(document).ready(function(){
	$('.header_burger').click(function(){
		$(this).toggleClass('open');
		$('.header_container').toggleClass('open_container');
	});

  


	// $('.swither_body-container').click(function(){
	// 	$(this).toggleClass('open');
	// })


	if (window.matchMedia('(max-width: 767px)').matches) {
		$('.header_language-switcher').click(function(){
			$(this).toggleClass('open');
		})
    }else{
		$('.header_language-switcher').hover(function(){
			$(this).toggleClass('open');
		})
		 
	}


	
	// changeCountry($('.language_switcher-body li')[0]); 
	$('.language_switcher-body li').click(function(){
		changeCountry(this)
	});

	function changeCountry(thisCountry){
		$('.language_switcher-body li').removeClass('change');
		$(thisCountry).addClass('change');
		let country = $(thisCountry).text();
		$('.language_switcher-header h3').text(country);
		$('.language_switcher-header').removeClass('open');
		$('.language_switcher-body').removeClass('open');

	}
});



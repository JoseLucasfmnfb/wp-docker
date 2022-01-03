$(document).ready(function() {
	$(document).on('click', '.scroll-to', function () {
		var target = $(this.getAttribute('href'));
		if( target.length ) {
			event.preventDefault();
			$('html, body').stop().animate({
				scrollTop: target.offset().top
			}, 1000);
		}
	});
    /* $(document).on('click', '#verInfo', function(){
        console.log('DEUCERTOESSAMERDADECLICK ->>');
    }); */
});
$(function(){
	$('.blogArea__blogPost').stellar({
  horizontalOffset: 40,
  verticalOffset: 150
	});
	$('.page__imageWrapper').stellar({
		horizontalOffset: 0,
		verticalOffset: 30
	});

	$('a[href*="#"]:not([href="#"])').click(function() {
	    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
	      var target = $(this.hash);
	      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
	      if (target.length) {
	        $('html, body').animate({
	          scrollTop: target.offset().top
	        }, 1000);
	        return false;
	      }
	    }
	  });
});
$(document).ready(function() {
 
	// For the Second level Dropdown menu, highlight the parent	
	$( ".dropdown-menu" )
	.mouseenter(function() {
		$(this).parent('li').addClass('active');
	})
	.mouseleave(function() {
		$(this).parent('li').removeClass('active');
	});
 
});

 var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

  $(function () {
    $('#myCarousel').carousel({
        interval: 2000
    });
    $('#myCarousel').on('slid.bs.carousel', function (e) {
        if ($('.carousel-inner .item:last').hasClass('active')) {
            $('#myCarousel').carousel('pause');
        }
        if ($('.carousel-inner .item:first').hasClass('active')) {
            $('#myCarousel').carousel('cycle');
        }
    });
});
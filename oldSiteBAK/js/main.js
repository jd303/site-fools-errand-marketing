$(document).ready(function()
{
	controls();
	window.scrollIndex = 1;
	
	var currentScroll = $(document).scrollTop();
	$("nav#main").css('top', 200+currentScroll+"px");
	
	positionMenu();
});


function
controls()
{
	$(".subnav a")
		.on	('click', function()
		{
			var parent = $(this).closest("section");
				onItem = $(this).attr("data-reveal");
				
			$(parent).find(".subsection, .subnav a").removeClass("on");
			
			var fadeTime = 0,
				fadeInc = 175,
				fadeDur = 600;
			
			$(parent).children(".subsection.sec"+onItem).addClass("on");
			$(this).addClass("on");
			
			$(parent).children(".subsection.sec"+onItem).children(".content").children("div, img").each(function()
			{
				fadeTime += fadeInc;
				
				$(this).transition({opacity:0, marginTop:'25px'}, 0);
				$(this).transition({opacity:1, marginTop:0, delay:fadeTime}, fadeDur, 'ease');
			});
			
			var fadeTime = 0;
			
			$(parent).children(".subsection.sec"+onItem).children(".content").children("p").each(function()
			{
				fadeTime += fadeInc;
				
				$(this).transition({opacity:0, marginTop:'1.5em'}, 0);
				$(this).transition({opacity:1, marginTop:'1em', delay:fadeTime}, fadeDur, 'ease');
			});
		});
		
	$("nav#main button")
		.on('click', function()
		{
			var scrollToVal = $(this).attr('data-scrollTo');
			var scrollToIndex = $(this).attr('data-scrollIndex');
			$.scrollTo(scrollToVal, 800);
		});
		
	$(window)
		.on('resize', function()
		{
			positionMenu();
		});
}


function
positionMenu()
{
	var rightPos = ($("body").width() - $("#margins").width()) / 2 + 20;
	$("nav#main").css("right", rightPos+"px");
}


$.easing.elasout = function(x, t, b, c, d) {
	var s=1.70158;var p=0;var a=c;
	if (t==0) return b;  if ((t/=d)==1) return b+c;  if (!p) p=d*.3;
	if (a < Math.abs(c)) { a=c; var s=p/4; }
	else var s = p/(2*Math.PI) * Math.asin (c/a);
	return a*Math.pow(2,-10*t) * Math.sin( (t*d-s)*(2*Math.PI)/p ) + c + b;
};
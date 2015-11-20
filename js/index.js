//EMBEDDED TWITTER FEED LOGIC
!function(d,s,id)
{
	var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';
	if(!d.getElementById(id))
	{
		js=d.createElement(s);
		js.id=id;
		js.src=p+"://platform.twitter.com/widgets.js";
		fjs.parentNode.insertBefore(js,fjs);
	}
}
(document,"script","twitter-wjs");
$(document).ready(
	function()
	{
	
		// cjoMatchHeights(".cjoMainContentHeader", 992);
		// cjoMatchHeights(".cjoMainHalf", 992);
		// cjoMatchHeights(".cjoParallaxBox", 768);
		
		
		
		$(".cjoMobileBackToTop").click(
			function()
			{
				$('html, body').animate({scrollTop: 0}, 500);
			}
		);
		$(".cjoHeaderMenuMobile").click(
			function()
			{
				$("#cjoMobileDropdownMenu").slideToggle();
			}
		);
		$("*").not("html, body, #cjoHeader, .container, .cjoHeaderMenuMobile").click(
			function()
			{
				var element = $(this);
				$("#cjoMobileDropdownMenu").slideUp();
			}
		);
		$("*").not("html, body, #cjoHeader, .container, .cjoHeaderMenuMobile").on("touchmove",
			function()
			{
				var element = $(this);
				$("#cjoMobileDropdownMenu").slideUp();
			}
		);
		$(".cjoAnimatedIcon").hover(
			function()
			{
				var imgSource = $(this).attr("src");
				imgSource = imgSource.replace("_once", "");
				$(this).attr("src", imgSource);
			},
			function()
			{
				var imgSource = $(this).attr("src");
				imgSource = imgSource.replace("GIF.gif", "GIF_once.gif");
				$(this).attr("src", imgSource);
			}
		);
	}
)
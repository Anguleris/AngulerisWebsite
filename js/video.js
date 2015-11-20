$(document).ready(
	function()
	{
		$("#cjoFormSubmit").click(getQuote);
	
		//cjoMatchHeights(".cjoRow1Match", 768);
		//cjoMatchHeights(".cjoMatch");
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
		
	}
)

var link = "https://youtu.be/SgbeuOyiakY?autoplay=1";
var element = $("<div id='cjoYoutubePopup'></div>").html("<iframe width='854' height='480' src='https://www.youtube.com/embed/SgbeuOyiakY?autoplay=1' frameborder='0' allowfullscreen id='cjoVideoIFrame'></iframe>");



$(document).ready(
	function()
	{
		$(".cjoBlackOverlay").click(
			function()
			{
				$(this).hide();
				$("#cjoYoutubePopup").remove();
				$("#cjoYoutubeImage").css("display", "block");
			}
		);
		$("#cjoYoutubeImage").click(
			function()
			{
				$("#cjoYoutubePopupContainer").append(element).hide();
				$("#cjoYoutubePopupContainer").show("explode");
				$("#cjoBlackOverlayVideo").show();
				$("#cjoYoutubeImage").css("display", "none");

			}
		);
		
	}
);
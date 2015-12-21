$(document).ready(
	function()
	{
		cjoMatchHeights(".cjoRow1Match", 768);
		cjoMatchHeights(".cjoRow2Match", 768);
		cjoMatchHeights(".cjoRow3Match", 768);
		cjoMatchHeights(".cjoStoveContent", 768);
		cjoMatchHeights(".cjoSpinnContent", 768);
		cjoMatchHeights(".cjoRow3");
		cjoMatchHeights(".cjoRow1");
		
		$("#cjoFormSubmit").click(getQuote);
		
		if(window.innerWidth >= 768)
		{
			$(".cjoSplitImage").attr("src", $(".cjoSplitImage").first().data("sourcethree"));//"images/content/splitImage3.jpg");
		}
				
				
		$(window).resize(
			function()
			{
				
				if(window.innerWidth >= 768)
				{
					$(".cjoSplitImage").attr("src", $(".cjoSplitImage").first().data("sourcethree"));//"images/content/splitImage3.jpg");
				}
				if(window.innerWidth < 768)
				{
					$(".cjoSplitImage").attr("src", $(".cjoSplitImage").first().data("sourcetwo"));//"images/content/splitImage2.jpg");
				}
			}
		);
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
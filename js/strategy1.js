$(document).ready(
	function()
	{
		cjoMatchHeights(".cjoRow1Match", 768);
		cjoMatchHeights(".cjoRow2Match", 768);
		cjoMatchHeights(".cjoRow3Match", 768);
		cjoMatchHeights(".cjoRow4Match", 768);
		cjoMatchHeights(".cjoStandardHalfContent", 992);
		cjoMatchHeights(".cjoParallaxBox", 768);
	
		$(window).resize(
			function()
			{
				var windowWidth = window.innerWidth;
				if(windowWidth >= 768)
					$(".cjoInternalLinkHeader").css("display", "block");
				else $(".cjoInternalLinkHeader").css("display", "none");
			}
		);
	
		$("#cjoFormSubmit").click(getQuote);
	
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
////////////
		var initialScrollPos = $(window).scrollTop();
		var currentScrollPos;
		var difference = 0;
		var clicked;
		//Hides internal link nav bar when an internal link is clicked.
		$(".cjoInternalLink").click(
			function()
			{
				$(".cjoInternalLinkHeader").hide();
				clicked = 0;
			}
		);
		//Shows the internal link nav bar when a scroll up occurs.
		$(window).scroll(
			function()
			{
				
				if( $(window).innerWidth() >= 768 )
				{					
					currentScrollPos = $(window).scrollTop();						
					if( (currentScrollPos - initialScrollPos) < difference && clicked == 1 )
						$(".cjoInternalLinkHeader").show();
					difference = currentScrollPos - initialScrollPos;
					clicked = 1;
				}
			}
		);
////////////
	}
)
$(document).ready(function(){
		$('.orthoCarouselDesktop').slick({
			infinite: true,
			slidesToShow: 5,
			slidesToScroll: 1,
			arrows: true,
			draggable: true,
			responsive:
			[
				{
					breakpoint: 992,
					settings:
					{
						slidesToShow: 3,
						slidesToScroll: 1,
						infinite: true
					}
				},
				{
					breakpoint: 768,
					settings:
					{
						slidesToShow: 1,
						slidesToScroll: 1,
						infinite: true
					}
				}
			]
		});
	});
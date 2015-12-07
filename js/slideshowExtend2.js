var slideshowWindowWidth = window.innerWidth;

$(document).ready(
	function()
	{
		registerCarouselImageEventHandlers();
		
		$(".cjoBlackOverlay").click(
			function()
			{
				$(".cjoCarouselImageExpanded").hide();
			}
		);
		
		$(".orthoCarouselDesktop").on('init', registerCarouselImageEventHandlers);
		
	}
);

function registerCarouselImageEventHandlers()
{
	$(".cjoCarouselImage").click(
		function()
		{
			var imageSource = $(this).data("large");
			$(".cjoBlackOverlay").show();
			$(".cjoCarouselImageExpanded").attr("src", imageSource).show("scale");
		}
	);
}
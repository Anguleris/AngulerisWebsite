function cjoMatchHeights(className, bottomThreshold)
{
	bottomThreshold = typeof bottomThreshold !== 'undefined' ? bottomThreshold : 0; 
	var windowWidth = window.innerWidth;
	
	if(windowWidth >= bottomThreshold)
		cjoMakeHeightsMatch(className);
	else $(className).each(
		function()
		{
			$(this).height("auto");
		}
	);
	
	$(window).resize(
		function()
		{
			var winWidth = window.innerWidth;
			if(winWidth >= bottomThreshold) cjoMakeHeightsMatch(className);
			else $(className).each(
				function()
				{
					$(this).height("auto");
				}
			);
		}
	)
	
}

function cjoMakeHeightsMatch(className)
{
	$(className).each(
		function()
		{
			$(this).height("auto");
		}
	);
	var largestHeight = 0;
	$(className).each(
		function()
		{
			var currentHeight = $(this).height();
			//console.log(currentHeight);
			if(currentHeight > largestHeight)
				largestHeight = currentHeight;
			
		}
	);
	//console.log("Tallest is: " + largestHeight);
	//console.log("resized");
	$(className).each(
		function()
		{
			$(this).height(largestHeight);
		}
	)

}
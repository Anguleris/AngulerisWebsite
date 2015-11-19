$(document).ready(
	function()
	{
		$(".cjoFormInput").each(
			function()
			{
				var width = $(this).parent().width();
				//console.log(width);
				//console.log("span width is: " + $(this).prev().width());
				var mySpan = $(this).prev();
				var inputWidth = width - $(this).prev().width();
				//console.log(inputWidth);
				$(this).width(inputWidth - 20);
			}
		);
		
		
		$(window).resize(
			function()
			{
				$(".cjoFormInput").each(
					function()
					{
						var width = $(this).parent().width();
						//console.log(width);
						var inputWidth = width - $(this).prev().width();
						//console.log(inputWidth);
						$(this).width(inputWidth - 20);
					}
				);
			}
		);
		
	
	
	}
);


function cjoVariableInputWidth()
{
	$(".cjoFormInput").each(
		function()
		{
			var width = $(this).parent().width();
			//console.log(width);
			//console.log("span width is: " + $(this).prev().width());
			var mySpan = $(this).prev();
			var inputWidth = width - $(this).prev().width();
			//console.log(inputWidth);
			$(this).width(inputWidth - 20);
		}
	);
}
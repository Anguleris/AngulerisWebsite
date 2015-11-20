var configFileBase = $("#wr360PlayerId").data("configurlbase");
var screenSize = window.innerWidth;//initialize screensize
var currentSpinn = 0;
var numberOfSpinns = 2;
var configFiles = [configFileBase + "/Publish/360_assets/Mailbox/mailbox.xml", configFileBase + "/Blender/360_assets/Blender Red/blender.xml"];
var filePaths = [configFileBase + "/Publish/imagerotator/html/img/thin", configFileBase + "/Blender/imagerotator/html/img/thin"];

$(document).ready(
	function()
	{
		$(window).resize(
			function()
			{
				//window.alert("Old: " + screenSize + " New: " + window.innerWidth);
				
				if(crossedBreakpoint(screenSize, window.innerWidth))
				{	
					console.log("Breakpoint crossed");
					_imageRotator.reload(configFiles[currentSpinn], filePaths[currentSpinn]);
				}
				screenSize = window.innerWidth;
			}
		);
		
		$("#cjoNextButton").click(
			function()
			{
				currentSpinn++;
				if(currentSpinn >= numberOfSpinns)
				{
					currentSpinn = 0;
				}
				_imageRotator.reload(configFiles[currentSpinn], filePaths[currentSpinn]);
			}
		);
		
		$("#cjoPrevButton").click(
			function()
			{
				currentSpinn--;
				if(currentSpinn < 0)
				{
					currentSpinn = numberOfSpinns - 1;
				}
				_imageRotator.reload(configFiles[currentSpinn], filePaths[currentSpinn]);
			}
		);
	}

);

function crossedBreakpoint(oldWidth, newWidth)
{
	if(oldWidth < 768 && newWidth >= 768)
		return true;
	if(oldWidth >= 768 && newWidth < 768)
		return true;
	if(oldWidth < 992 && newWidth >= 992)
		return true;
	if(oldWidth >= 992 && newWidth < 992)
		return true;
		
	return false;
}
	
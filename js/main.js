var screenSize = window.innerWidth;
$(document).ready(
	function()
	{
		$(".cjoInternalLinkHeaderMobileActivator").click(
			function(){
				$(".cjoInternalLinkHeader").slideToggle();}
		);
		
		$(".cjoInternalLinkCell").click(
			function()
			{
				if(window.innerWidth < 768)
					$(".cjoInternalLinkHeader").slideUp();
			}
		);
		
		$("#cjoPopupFormStep1Button").click(
			function()
			{
				$("#cjoPopupFormStep2Tab").hide();
				$("#cjoPopupFormStep1Tab").show();
				cjoVariableInputWidth();

				$(this).removeClass('cjoNoncurrentTab');
				$(this).addClass('cjoCurrentTab');
				$("#cjoPopupFormStep2Button").removeClass('cjoCurrentTab');				
				$("#cjoPopupFormStep2Button").addClass('cjoNoncurrentTab');
			}
		);
		
		$("#cjoPopupFormStep2Button, #cjoPopupFormNextStepButton").click(
			function()
			{
				$("#cjoPopupFormStep2Tab").show();
				$("#cjoPopupFormStep1Tab").hide();
				cjoVariableInputWidth();

				$("#cjoPopupFormStep2Button").removeClass('cjoNoncurrentTab');
				$("#cjoPopupFormStep2Button").addClass('cjoCurrentTab');
				$("#cjoPopupFormStep1Button").removeClass('cjoCurrentTab');				
				$("#cjoPopupFormStep1Button").addClass('cjoNoncurrentTab');
			}
		);
		
		setManufacturerImageSource();
		
		$(".cjoDatePicker").datepicker();
		
		$("#cjoLittleBlueBanner, .cjoLittleBlueBanner").click(
			function()
			{
				if(window.innerWidth >= 768)
				{
					$(".cjoBlackOverlay").show();
					$("#cjoBlackOverlayVideo").hide();
				}
				$(".cjoPopupForm").show();
				
				$("#cjoPopupFormStep2Tab").show();
				$("#cjoPopupFormStep1Tab").show();
				cjoVariableInputWidth();
				$("#cjoPopupFormStep2Tab").hide();

				$("#cjoPopupFormStep1Button").removeClass('cjoNoncurrentTab');
				$("#cjoPopupFormStep1Button").addClass('cjoCurrentTab');
				$("#cjoPopupFormStep2Button").removeClass('cjoCurrentTab');				
				$("#cjoPopupFormStep2Button").addClass('cjoNoncurrentTab');
			}
		);
		
		$(".cjoBlackOverlay").click(
			function()
			{
				$(this).hide();
				$(".cjoPopupForm").slideUp();								
			}
		);
		
		$(".cjoHeaderLink").hover(
			function()
			{
				
				var barIndex = $(".cjoHeaderLink").index(this);
				$(".cjoHeaderLinkBar").eq(barIndex).show();
			},
			function()
			{
				var barIndex = $(".cjoHeaderLink").index(this);
				$(".cjoHeaderLinkBar").eq(barIndex).hide();
			}
		);
		
		
		$(window).resize(
		 	function()
		 	{
		 		//Check for crossed breakpoint
		 		if(checkBreakPoint(screenSize, window.innerWidth))
		 		{
		 			$(".cjoPopupForm, .cjoBlackOverlay").hide();
		 			setManufacturerImageSource();
		 			$(".cjoCarouselImageExpanded").hide();
		 			
		 			if($("#cjoYoutubeImage").css("display") == "none")
		 				$("#cjoBlackOverlayVideo").show();
		 		}
		 		screenSize = window.innerWidth;
		 	}
		 );
		
		function setManufacturerImageSource()
		{
			if(window.innerWidth >= 550)
			{
				
				$(".cjoManufacturer").attr("src", $(".cjoManufacturer").first().data("manufacturerline"));//"images/logo/manufacturersLine.png");
			}
			else
			{
				
				$(".cjoManufacturer").attr("src", $(".cjoManufacturer").first().data("manufacturerstacked"));//"images/logo/manufacturersStacked.png");
			}
		}

		

	}
);

function checkBreakPoint(oldWidth, newWidth)
{
	if(oldWidth < 550)
	{
		if(newWidth >= 550)
			return true;
		else
			return false;
	}

	if(oldWidth >= 550 && oldWidth < 768)
	{
		if(newWidth < 550 || newWidth >= 768)
			return true;
		else
			return false;
	}

	if(oldWidth >= 768 && oldWidth < 992)
	{
		if(newWidth < 768 || newWidth >= 992 )
			return true;
		else
			return false;
	}

	if(oldWidth >= 992 && oldWidth < 1200)
	{
		if(newWidth < 992 || newWidth >= 1200 )
			return true;
		else
			return false;
	}
	
	if(oldWidth >= 1200)
	{
		if(newWidth < 1200)
			return true;
		else
			return false;
	}	
}


function clearFormFields(form)
{
	
	form.find("input").each(
		function()
		{
			$(this).val("");
		}
	);
}

function formIsFilledOut(form)
{
	isFilledOut = true;
	form.find("input[data-required='true'], textarea[data-required='true']").each(
		function()
		{
			if($(this).val() == "")
			{
				isFilledOut = false;
				//$(this).addClass("cjoEmptyRequiredField");
			}
		}
	);
	
	if(isFilledOut)
	{
		form.find("input").each(
			function()
			{
				//$(this).removeClass("cjoEmptyRequiredField");
			}
		);
	}
	return isFilledOut;
	
}

function emailIsValid(inputEmail)  
{  
	var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;  
	if(inputEmail.match(mailformat))  
	{   
		return true;  
	}  
	else  
	{   
		return false;  
	}  
}  

function phoneNumberIsValid(phone1, phone2, phone3)
{
	var isValid = true;
	if(!($.isNumeric(phone1.val()) && Math.floor(phone1.val()) == phone1.val()) || !($.isNumeric(phone2.val()) && Math.floor(phone2.val()) == phone2.val()) || !($.isNumeric(phone3.val()) && Math.floor(phone3.val()) == phone3.val()))
		isValid = false;
	
	var phone1Length = phone1.val().length;
	var phone2Length = phone2.val().length;
	var phone3Length = phone3.val().length;
	if(phone1Length != 3 || phone2Length != 3 || phone3Length != 4)
		isValid = false;
	
	return isValid;
}

function dateIsValid(input){
var validformat=/^\d{2}\/\d{2}\/\d{4}$/ //Basic check for format validity
var returnval=false
if (!validformat.test(input.val()))
	var dummy = 0;//alert("Invalid Date Format. Please correct and submit again.")
else{ //Detailed check for valid date ranges
var monthfield=input.val().split("/")[0]
var dayfield=input.val().split("/")[1]
var yearfield=input.val().split("/")[2]
var dayobj = new Date(yearfield, monthfield-1, dayfield)
if ((dayobj.getMonth()+1!=monthfield)||(dayobj.getDate()!=dayfield)||(dayobj.getFullYear()!=yearfield))
	var dummy = 0;//alert("Invalid Day, Month, or Year range detected. Please correct and submit again.")
else
returnval=true
}
//if (returnval==false) input.select()
return returnval
}
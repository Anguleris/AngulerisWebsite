var selectedFile;

$(document).ready(
	function()
	{
		cjoMatchHeights(".cjoStatsInnerBox");
		
		
		$("#cjoFormCountry").change(
			function()
			{
				if($(this).val() == "US")
					$("#cjoFormState").show();
				else $("#cjoFormState").hide();
			}
		);
		
		$("#cjoUploadResumeForm").submit(
			function()
			{
				return false;
			}
		)
		$("#cjoFormSubmit").click(
			function(event)
			{
				event.preventDefault();
				
				uploadResume();
			}
		);
		
		$(".cjoMailingListButton").click(
			function()
			{
				submitMailingListForm();
			}
		);
		
		$(".cjoMailingListInput").keypress(
			function(ev)
			{
				if(ev.which == 13)
				{
					submitMailingListForm();
				}
			}
		);
		
		$(window).resize(
			function()
			{
				var windowWidth = window.innerWidth;
				if(windowWidth >= 768)
					$(".cjoInternalLinkHeader").css("display", "block");
				else $(".cjoInternalLinkHeader").css("display", "none");
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
///////////
		var initialScrollPos = $(window).scrollTop();
		var currentScrollPos;
		var difference = 0;
		var clicked;
		//Hides internal link nav bar when an internal link is clicked.
		$(".cjoInternalLink").click(
			function()
			{
				$(".cjoInternalLinkHeader").css("display", "none");
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
						$(".cjoInternalLinkHeader").css("display", "block");
					difference = currentScrollPos - initialScrollPos;
					clicked = 1;
				}
			}
		);
////////////////
	}
)

function submitMailingListForm()
{
	var formActionURL = $("#cjoMailingListForm").data("url");
	var firstNameValue = $("#mailingListFirstName").val();
	var lastNameValue = $("#mailingListLastName").val();
	var emailValue = $("#mailingListEmail").val();

	if(allFieldsFilledOut())
	{
		if(emailAddressIsValid(emailValue))
		{
			$.post(formActionURL,
				{
					firstName: firstNameValue,
					lastName: lastNameValue,
					email: emailValue
				},
				function(data, status)
				{
					if(status == "success")
					{
						displayMessageFromAddToMailingList(data);
					}
					else window.alert("There was a server error, and we weren't able to add you to the mailing list");
				}
			);
		}
		else window.alert("The email address you entered is invalid.");
	}
	else window.alert("Please fill out all three fields");
}

function allFieldsFilledOut()
{
	var firstName = $("#mailingListFirstName").val();
	var lastName = $("#mailingListLastName").val();
	var email = $("#mailingListEmail").val();
	
	if(firstName == "" || lastName == "" || email == "")
		return false;
	else return true;
}

function displayMessageFromAddToMailingList(responseMessage)
{
	if(responseMessage == "ENTRY SUCCESSFUL")
		window.alert("Thank you. You have been added to our mailing list.");
		
	if(responseMessage == "UNDEFINED FAILURE")
		window.alert("This is embarrassing! Something went wrong while adding you to our mailing list. Please try again later.");
		
	if(responseMessage == "EMAIL ALREADY EXISTS")
		window.alert("That email address is already on our mailing list. But we appreciate your enthusiasm!");
}

function emailAddressIsValid(email)
{
	if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email))  
	{  
		return true;  
	}  
	 
	return false; 
}
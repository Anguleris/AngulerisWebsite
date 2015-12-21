function getQuote()
{
	if(formIsFilledOut($(".cjoPopupForm")))
	{	
		if(emailIsValid($("#cjoFormEmail").val()))
		{
			if((dateIsValid($(".cjoFormDate").first()) || $(".cjoFormDate").first().val() == "") && (dateIsValid($(".cjoFormDate").last()) || $(".cjoFormDate").last().val() == ""))
			{
				var getQuoteScriptURL = $("#cjoFormSubmit").data("formhandler");
				
				$("#cjoFormSubmit").prop("disabled", true);
				$("#cjoFormSubmit").css("cursor", "progress");
				var name = $("#cjoFormFirstName").val() + " " + $("#cjoFormLastName").val();
				var jobTitle = $("#cjoFormJobTitle").val();
				var companyName = $("#cjoFormCompanyName").val();
				var phone = $("#cjoFormPhone1").val() + "-" + $("#cjoFormPhone2").val() + "-" + $("#cjoFormPhone3").val();
				var email = $("#cjoFormEmail").val();
				var options = [];
				if($("#cjoFormCheckbox1").is(':checked'))
					options[options.length] = "BIM Content";
				else
					options[options.length] = "";
				if($("#cjoFormCheckbox2").is(':checked'))
					options[options.length] = "Training";
				else
					options[options.length] = "";
				if($("#cjoFormCheckbox3").is(':checked'))
					options[options.length] = "Videos";
				else
					options[options.length] = "";
				if($("#cjoFormCheckbox4").is(':checked'))
					options[options.length] = "3D Visualization";
				else
					options[options.length] = "";
				var interestLevel = $("#cjoFormLevelOfInterest").val();
				var date1 = $(".cjoFormDate").first().val();
				var date2 = $(".cjoFormDate").last().val();
				
				var additionalNotes = $("#cjoFormNotes").val();
				
				$.post(getQuoteScriptURL,
					{
						name: name,
						jobtitle: jobTitle,
						companyname: companyName,
						phonenumber: phone,
						emailaddress: email,
						option1: options[0],
						option2: options[1],
						option3: options[2],
						option4: options[3],
						interest: interestLevel,
						date1: date1,
						date2: date2,
						notes: additionalNotes
					},
					function(data, status)
					{
						if(status == "success")
						{
							if(data == "MESSAGE SENT")
							{
								$(".ui-datepicker").hide();
								window.alert("Thank you. Your request for a quote has been sent.");
								$(".cjoPopupForm, .cjoBlackOverlay").hide();
								//clearFormFields($(".cjoPopupForm"));
							}
							else window.alert("Sorry. There was an error, and your request was not submitted.");
						}
						else window.alert("Sorry. There was an error, and your request was not submitted.");
						$("#cjoFormSubmit").prop("disabled", false);
						$("#cjoFormSubmit").css("cursor", "pointer");
					}
				);
			}
			else window.alert("Date format is incorrect.")
		}
		else window.alert("The email address you entered is invalid.")
	}
	else window.alert("Please fill out all the required fields.");
	
}
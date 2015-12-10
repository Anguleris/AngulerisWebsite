var maxFileSize = 2000000;
var fileSize = 0;

if(document.getElementById("cjoPopupFormResumeFile").files[0])
{
	fileSize = document.getElementById("cjoPopupFormResumeFile").files[0].size;
	console.log(fileSize);
}

$(document).ready(
	function()
	{
		$("#cjoPopupFormResumeFile").change(
			function()
			{
				fileSize = this.files[0].size;				
				if(maxFileSize < fileSize)
					window.alert("File size must be less than 2MB");
				else
					$("#cjoLabel").text(this.files[0].name);		
			}
		);
	}
);

function uploadResume()
{
	if(fileSize < maxFileSize)
	{
		$("#cjoPopupFormIsAsync").val("true");
		var something = $("#cjoUploadResumeForm");
		var something2 = $("#cjoUploadResumeForm")[0];//$("form")[0];
		var formData = new FormData(something2);
	
		if(allResumeFieldsFilledOut($("#cjoUploadResumeForm")))
		{
			$("#cjoFormSubmit").text("Submitting...");
			$("#cjoFormSubmit").prop("disabled", true);
			$("#cjoFormSubmit").css("cursor", "progress");
			$.ajax(
				{
					url: $("#cjoUploadResumeForm").data("uploadscripturl"),//'php/uploadResume.php',
					type: "POST",
					success: function(data, text, xhr)
						{
							window.alert(data);
							$("#cjoFormSubmit").text("SUBMIT");
							$("#cjoFormSubmit").prop("disabled", false);
							$("#cjoFormSubmit").css("cursor", "pointer");
						},
					data: formData,
					cache: false,
					contentType: false,
					processData: false
				}
			);	
		}
		else window.alert("Please fill out all fields that are marked as required.");
	}
	else window.alert("File size must be less than 2MB");
	return false;
}

function allResumeFieldsFilledOut(formElement)
{

	var requiredFields = formElement.find("input[data-required='true'], textarea[data-required='true']");
	for(var x = 0; x < requiredFields.length; x++)
	{
		if(requiredFields[x].value == "")
			return false;
	}
	return true;
}
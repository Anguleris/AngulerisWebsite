<?php

require_once("php/globals.php");

function display_footer($scripts)
{
	global $urlbase;
	echo<<<_END
<div class="container visible-xs cjoMobileFooter">
	©2015 Anguleris Technologies - All rights reserved
</div>
<div class="container-fluid cjoFooterContainer" style="background-color: #eee;">
	<div class="container">
		<div class="row cjoFooterRow">
			<div class="col-md-6 col-md-push-6 cjoFooterColumn">
				<div class="cjoMobileSocialMediaTable">
					<a href="https://www.facebook.com/Anguleris" target="_blank"><img class="cjoMobileSocialMediaLink" src="$urlbase/images/socialMediaLinks/facebook.png"></a>
					<a href="#"><img class="cjoMobileSocialMediaLink" src="$urlbase/images/socialMediaLinks/instagram.png"></a>
					<a href="https://www.linkedin.com/company/anguleris-technologies" target="_blank"><img class="cjoMobileSocialMediaLink" src="$urlbase/images/socialMediaLinks/linkedin.png"></a>
					<a href="https://twitter.com/anguleris" target="_blank"><img class="cjoMobileSocialMediaLink" src="$urlbase/images/socialMediaLinks/twitter.png"></a>
					<a href="https://www.youtube.com/user/AngulerisTech" target="_blank"><img class="cjoMobileSocialMediaLink" src="$urlbase/images/socialMediaLinks/youtube.png"></a>
					<a href="https://plus.google.com/109532662513753771690/about" target="_blank"><img class="cjoMobileSocialMediaLink" src="$urlbase/images/socialMediaLinks/google.png"></a>
				</div>
			</div>
			<div class="col-md-6 col-md-pull-6 cjoFooterColumn cjoFooterCopyright">©2015 Anguleris Technologies - All rights reserved</div>
		</div>
	</div>
</div>
<img class="cjoMobileBackToTop" src="$urlbase/images/miscButtons/backTopMobile.png"></img>
_END;
	foreach($scripts as $script)
	{
		echo<<<_END

	<script src="$urlbase/$script"></script>
_END;
	}
	echo<<<_END
	
</body>
</html>
_END;
}

function display_header($title, $stylesheets)
{
	global $urlbase, $urlHomeRoute, $urlStrategyRoute, $urlVisualizationRoute, $urlVideoRoute, $urlTrainingRoute, $urlContactRoute;
	echo<<<_END
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Anguleris - $title</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<meta property="og:image" content="$urlbase/images/AngulerisFB.jpg">
	<meta property="og:image:width" content="1200">
	<meta property="og:image:height" content="1200">
	<meta property="og:url" content="$urlbase">
	<meta property="og:description" content="Industry leading BIM Strategies start here.">
	
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<script src="$urlbase/js/cjoMatchHeights.js"></script>
	<link rel="stylesheet" href="$urlbase/css/main.css">

	<link rel="prefetch" href="$urlbase/images/content/BIMsmithButtonText.png">
	<link rel="prefetch" href="$urlbase/images/content/BIMsmithButtonText.png">
_END;

	foreach($stylesheets as $stylesheet)
	{
		echo<<<_END
	
	<link rel="stylesheet" href="$urlbase/$stylesheet">	
_END;
	}
	

	echo<<<_END
	
	<link rel="shortcut icon" href="$urlbase/images/icons/Anguleris_tab_icon.png" type="image/png" />
</head>
<body>
<div class="cjoBlackOverlay"></div>
<div id="cjoTopAnchor"></div>
<div id="cjoHeader" class="container-fluid">
	<div class="container" style="position: relative; height: 75px;"><!50px>
	<a href="$urlbase"><img src="$urlbase/images/logo/anguleris.png" class="cjoHeaderLogo"></a>
	<img src="$urlbase/images/mobile/menu_button.png" class="cjoHeaderMenuMobile">
	<table class="cjoHeaderLinkTable">
		<tr>
			<td class="cjoHeaderLinkTableCell"><a class="cjoHeaderLink" href="$urlHomeRoute">HOME</a></td>
			<td class="cjoHeaderLinkTableCell"><a class="cjoHeaderLink" href="$urlStrategyRoute">BIM STRATEGY</a></td>
			<td class="cjoHeaderLinkTableCell"><a class="cjoHeaderLink" href="$urlVisualizationRoute">VISUALIZATION</a></td>
			<td class="cjoHeaderLinkTableCell"><a class="cjoHeaderLink" href="$urlVideoRoute">VIDEO</a></td>
			<td class="cjoHeaderLinkTableCell"><a class="cjoHeaderLink" href="$urlTrainingRoute">TRAINING</a></td>
			<td class="cjoHeaderLinkTableCell"><a class="cjoHeaderLink" href="$urlContactRoute">CONTACT</a></td>
		</tr>
		<tr>
			<td><div class="cjoHeaderLinkBar"></td>
			<td><div class="cjoHeaderLinkBar"></td>
			<td><div class="cjoHeaderLinkBar"></td>
			<td><div class="cjoHeaderLinkBar"></td>
			<td><div class="cjoHeaderLinkBar"></td>
			<td><div class="cjoHeaderLinkBar"></td>
		</tr>
	</table>
	</div>
	<hr class="cjoHeaderBottomRule">
</div>
<div id="cjoMobileDropdownMenu">
	<div class="cjoMobileDropdownOption"><a href="$urlHomeRoute">HOME</a></div>
	<div class="cjoMobileDropdownOption"><a href="$urlStrategyRoute">BIM STRATEGY</a></div>
	<div class="cjoMobileDropdownOption"><a href="$urlVisualizationRoute">VISUALIZATION</a></div>
	<div class="cjoMobileDropdownOption"><a href="$urlVideoRoute">VIDEO</a></div>
	<div class="cjoMobileDropdownOption"><a href="$urlTrainingRoute">TRAINING</a></div>
	<div class="cjoMobileDropdownOption"><a href="$urlContactRoute">CONTACT</a></div>
	<div class="cjoMobileSocialMediaTable">
			<a href="https://www.facebook.com/Anguleris" target="_blank"><img class="cjoMobileSocialMediaLink" src="$urlbase/images/socialMediaLinks/facebook.png"></a>
			<a href="#" target="_blank"><img class="cjoMobileSocialMediaLink" src="$urlbase/images/socialMediaLinks/instagram.png"></a>
			<a href="https://www.linkedin.com/company/anguleris-technologies" target="_blank"><img class="cjoMobileSocialMediaLink" src="$urlbase/images/socialMediaLinks/linkedin.png"></a>
			<a href="https://twitter.com/anguleris" target="_blank"><img class="cjoMobileSocialMediaLink" src="$urlbase/images/socialMediaLinks/twitter.png"></a>
			<a href="https://www.youtube.com/user/AngulerisTech" target="_blank"><img class="cjoMobileSocialMediaLink" src="$urlbase/images/socialMediaLinks/youtube.png"></a>
			<a href="https://plus.google.com/109532662513753771690/about" target="_blank"><img class="cjoMobileSocialMediaLink" src="$urlbase/images/socialMediaLinks/google.png"></a>
	</div>
</div>
_END;
}

function info_request_form()
{
	global $urlbase, $urlHomeRoute, $urlStrategyRoute, $urlVisualizationRoute, $urlVideoRoute, $urlTrainingRoute, $urlContactRoute;
	echo<<<_END
	
	<div class="cjoPopupForm">
		<div id="cjoPopupButtonContainer">
			<button id="cjoPopupFormStep1Button" class="cjoPopupFormStepButton cjoCurrentTab">Step 1</button>
			<button id="cjoPopupFormStep2Button" class="cjoPopupFormStepButton cjoNoncurrentTab">Step 2</button>
			
		</div>
		<div id="cjoPopupRequiredField">(<span class="cjoRequiredAsterisk">*</span>) indicates a required field</div>
		<div id="cjoPopupFormStep1Tab">
			
			<span>Name<span class="cjoRequiredAsterisk">*</span></span>
			<div class="cjoFormInput">
				<input id="cjoFormFirstName" type="text" class="cjoPopupFormInput cjoPopupFormName" placeholder="First name" data-required="true">
				<input id="cjoFormLastName" type="text" class="cjoPopupFormInput cjoPopupFormName" placeholder="Last name" data-required="true">
			</div>
			<br>
			<span>Job Title</span>
			<div class="cjoFormInput">
				<input id="cjoFormJobTitle" type="text" class="cjoPopupFormInput" placeholder="Job Title">
			</div>
			<br>
			<span>Company Name</span>
			<div class="cjoFormInput">
				<input id="cjoFormCompanyName" type="text" class="cjoPopupFormInput" placeholder="Company name">
			</div>
			<br>
			<span>Phone<span class="cjoRequiredAsterisk">*</span></span>
			<div class="cjoFormInput">
				<input id="cjoFormPhone1" type="text" class="cjoPopupFormInput cjoPopupFormPhoneNumber" placeholder="###" maxlength="3" data-required="true">-
				<input id="cjoFormPhone2" type="text" class="cjoPopupFormInput cjoPopupFormPhoneNumber" placeholder="###" maxlength="3" data-required="true">-
				<input id="cjoFormPhone3" type="text" class="cjoPopupFormInput cjoPopupFormPhoneNumber" placeholder="####" maxlength="4" data-required="true">
			</div>
			<br>
			<span>Email<span class="cjoRequiredAsterisk">*</span></span>
			<div class="cjoFormInput">
				<input id="cjoFormEmail" type="text" class="cjoPopupFormInput" placeholder="example@domain.com" data-required="true">
			</div>
			<br>
			<div style="width:100%;">
				<button id="cjoPopupFormNextStepButton" class="cjoPopupFormStepButton">NEXT</button>
			</div>
		</div>	
		<div id="cjoPopupFormStep2Tab">
			
			<div id="cjoCheckboxContainer" style="width: 100%;">
				Which services are you interested in?
				<div style="width: 100%;">
					<div class="cjoPopupFormCheckboxSpan"><input id="cjoFormCheckbox1" class="cjoPopupFormCheckbox" type="checkbox"> BIM Content</div>
					<div class="cjoPopupFormCheckboxSpan"><input id="cjoFormCheckbox2" type="checkbox"> Training</div>
					
					<div class="cjoPopupFormCheckboxSpan"><input id="cjoFormCheckbox3" type="checkbox"> Videos</div>
					<div class="cjoPopupFormCheckboxSpan"><input id="cjoFormCheckbox4" type="checkbox"> 3D Visualization</div>
				</div>
			</div>
			
		
			<div style="width: 100%;">
				Suggest some dates that work for you:<br>
				<div style="width:100%;height:10px;"></div>
				<span>Date<span class="cjoRequiredAsterisk">*</span></span>
				<div class="cjoFormInput">
					<input type="text" class="cjoPopupFormInput cjoDatePicker cjoFormDate" placeholder="mm/dd/yyyy" style="margin-bottom: 10px;" data-required="true">
				</div>
				<br>
				<span>Date</span>
				<div class="cjoFormInput">
					<input type="text" class="cjoPopupFormInput cjoDatePicker cjoFormDate" placeholder="mm/dd/yyyy">
				</div>
			</div>
			
			<span>Your level of interest:</span>
			<div class="cjoFormInput">
				<select id="cjoFormLevelOfInterest" class="cjoPopupFormSelect cjoPopupFormInput">
					<option val="Browsing/General Interest">Browsing/General Interest</option>
					<option val="Beginning Investigation">Beginning Investigation</option>
					<option val="Evaluating Vendors">Evaluating Vendors</option>
					<option val="Ready to Purchase">Ready to Purchase</option>
				</select>
			</div>
			
			<div style="width: 100%;">
				Anything else you would like us to know?
				<div>
					<textarea id="cjoFormNotes" class="cjoPopupFormTextarea" rows="5" maxlength="5000" data-required="true"></textarea>
				</div>
			</div>
			<button id="cjoFormSubmit" class="cjoPopupFormStepButton" data-formhandler="$urlbase/php/formhandlers/getquote.php">SUBMIT</button>
			
		</div>
	</div>
_END;
}




/********************************************************
*********************************************************
*********************************************************
*********************************************************
*********************************************************

ANGULERIS WEB SITE VIEWS

*********************************************************
*********************************************************
*********************************************************
*********************************************************
********************************************************/


function home_page_view()
{
	global $urlbase, $urlHomeRoute, $urlStrategyRoute, $urlVisualizationRoute, $urlVideoRoute, $urlTrainingRoute, $urlContactRoute;
	
	echo<<<_END
	

<div class="container-fluid cjoMainContainer">
	<div class="container cjoMainSubContainer">
		<div class="cjoPageMainTitleText">Industry leading BIM Strategies start here.</div>
		<div class="cjoPageMainSubtitleText">Your one stop BIM &amp; Visualization Department has arrived!</div>
	</div>
</div>
<div class="container-fluid cjoGreyRow">
	<div class="container">
		<div class="row">
			<div class="col-sm-4">
				<div class="cjoGreyRowBoxTitle">WHO WE ARE</div>
				<div class="cjoGreyRowBoxText">Our team is a mix of Building Industry 
					professionals with a variety of backgrounds including architecture, 
					engineering, and construction, as well as visualization and media.
				</div>
			</div>
			<div class="col-sm-4">
				<div class="cjoGreyRowBoxTitle">WHAT WE DO</div>
				<div class="cjoGreyRowBoxText">
					Anguleris Technologies is the building industry's virtual product 
					placement expert, providing building product manufacturers with 
					holistic Building Information Modeling (BIM) solutions through 
					the industry's foremost BIM platform, Autodesk Revit.
				</div>
			</div>
			<div class="col-sm-4">
				<div class="cjoGreyRowBoxTitle">LET'S ROLL</div>
				<div class="cjoGreyRowBoxText">
					Anguleris is the premier Certified Content Service Provider via 
					the Autodesk Seek Content Network. Hundreds of brands trust us, 
					you can too. Now, let's get down to business.
				</div>
			</div>
		</div>
	</div>
</div>

<div class="container-fluid cjoWhiteRow" >
	<div class="container">		
		<div class="row">
			<div class="col-sm-3">
				<a href="$urlStrategyRoute"><img class="cjoWhiteRowIcon cjoAnimatedIcon" src="$urlbase/images/Animation_GIFs/icon_compass_GIF_once.gif"></a>
				<div class="cjoWhiteRowBoxTitle">BIM STRATEGY</div>
				<div class="cjoWhiteRowBoxText">
					There is much more to BIM than just checking the box. We work 
					with your team to create a plan that allows you to put your 
					brand at the forefront of BIM workflows globally. Our strategies 
					streamline the process helping you see ROI soon after launch.
				</div>
			</div>
			<div class="col-sm-3">
				<a href="$urlVisualizationRoute"><img class="cjoWhiteRowIcon cjoAnimatedIcon" src="$urlbase/images/Animation_GIFs/icon_camera_new_GIF_once.gif"></a>
				<div id="cjoWhiteRowBoxTitleVisual" class="cjoWhiteRowBoxTitle">VISUALIZATION</div>
				<div class="cjoWhiteRowBoxText">
					Moving beyond the limitations of conventional photoshoots, the 
					Anguleris team creates 3D representations of your products that 
					allow you and your customers to see them in a product shot or 
					in finished spaces. This process reduces costs significantly 
					and gives your team the added flexibility of being able to make 
					changes on the fly.
				</div>
			</div>
			<div class="col-sm-3">
				<a href="$urlVideoRoute"><img class="cjoWhiteRowIcon cjoAnimatedIcon" src="$urlbase/images/Animation_GIFs/icon_movie-clapper_new_GIF_once.gif"></a>
				<div class="cjoWhiteRowBoxTitle">VIDEO MARKETING</div>
				<div class="cjoWhiteRowBoxText">
					From showcasing your products, to highlighting intricacies in 
					designs, our video marketing sets your product up to shine. 
					We expertly highlight your product and display it at its best.
				</div>
			</div>
			<div class="col-sm-3">
				<a href="$urlTrainingRoute"><img class="cjoWhiteRowIcon cjoAnimatedIcon" src="$urlbase/images/Animation_GIFs/icon_graduation-cap_GIF_once.gif"></a>
				<div class="cjoWhiteRowBoxTitle">TRAINING</div>
				<div class="cjoWhiteRowBoxText">
					Whether you are new to Autodesk Revit or just looking to improve 
					your mastery of the program, we can help. Our training combines 
					individual work with one-on-one attention to allow you to achieve 
					new skills in Revit.
				</div>
			</div>
		</div>
	</div>
</div>

<div class="container-fluid hidden-xs cjoScatterRow">
	<div class="container cjoScatterContainer" data-anchor-target=".cjoScatterRow" data-bottom-top="top: 300px;" data-bottom="top: 0px;">
		<div class="cjoScatterText">If your product goes into a building, <br> then we can make it BIM Ready.</div>
		<img class="cjoScatterImage cjoScatterTracklight" src="$urlbase/images/scatter/tracklight.png">
		<img class="cjoScatterImage cjoScatterFrames" src="$urlbase/images/scatter/frames.png" data-anchor-target=".cjoScatterContainer" data--100-bottom="left[swing]: 35%; top[swing]: 10%; width: 30%;" data-top="left: 20%; top: 0%; width: 0%;">
		<img class="cjoScatterImage cjoScatterFridge" src="$urlbase/images/scatter/fridge.png" data-anchor-target=".cjoScatterContainer" data--100-bottom="left[swing]: 13%; top[swing]: 12%; width: 10%; opacity: 1;" data-top="left: 13%; top: 0%; width: 0%; opacity: 0;">
		<img class="cjoScatterImage cjoScatterLamp" src="$urlbase/images/scatter/lamp.png">
		<img class="cjoScatterImage cjoScatterChair" src="$urlbase/images/scatter/chair.png" data-anchor-target=".cjoScatterContainer" data--100-bottom="left[swing]: 27%; bottom[swing]: 2%; width: 15%; opacity: 1;" data-top="left: 0%; bottom: 0%; width: 0%; opacity: 0;">
		<img class="cjoScatterImage cjoScatterDoor" src="$urlbase/images/scatter/door.png" data-anchor-target=".cjoScatterContainer" data--100-bottom="right[swing]: 10%; bottom[swing]: 35%; width: 15%; opacity: 1;" data-top="right: 0%; bottom: 50%; width: 0%; opacity: 0;">
		<img class="cjoScatterImage cjoScatterToilet" src="$urlbase/images/scatter/toilet.png" data-anchor-target=".cjoScatterContainer" data--100-bottom="right[swing]: 5%; bottom[swing]: 5%; width: 7%; opacity: 1;" data-top="right: 0%; bottom: 0%; width: 0%; opacity: 0;">
		<img class="cjoScatterImage cjoScatterCouch" src="$urlbase/images/scatter/couch.png" data-anchor-target=".cjoScatterContainer" data--100-bottom="right[swing]: 15%; bottom[swing]: 2%; width: 40%; opacity: 1;" data-top="right: 0%; bottom: 0%; width: 0%; opacity: 0;">
		<img class="cjoScatterImage cjoScatterPhone" src="$urlbase/images/scatter/phone.png" data-anchor-target=".cjoScatterContainer" data--100-bottom="right[swing]: 18%; bottom[swing]: 15%; width: 5%; opacity: 1;" data-top="right: 0%; bottom: 0%; width: 0%; opacity: 0;">
		<img class="cjoScatterImage cjoScatterSink" src="$urlbase/images/scatter/sink.png" data-anchor-target=".cjoScatterContainer" data--100-bottom="left[swing]: 1%; top[swing]: 32%; width: 10%; opacity: 1;" data-top="left: 0%; top: 32%; width: 0%; opacity: 0;">
		<img class="cjoScatterImage cjoScatterSpeakers" src="$urlbase/images/scatter/speakers.png" data-anchor-target=".cjoScatterContainer" data--100-bottom="left[swing]: 5%; bottom: 2%; width: 10%; opacity: 1;" data-top="left: 0%; bottom: 0%; width: 0%; opacity: 0;">
		<img class="cjoScatterImage cjoScatterWaterheater" src="$urlbase/images/scatter/waterheater.png" data-anchor-target=".cjoScatterContainer" data--100-bottom="top[swing]: 15%; width: 10%; opacity: 1;" data-top="top: 20%; width: 0%; opacity: 0;">
		<img class="cjoScatterImage cjoScatterWindow" src="$urlbase/images/scatter/window.png" data-anchor-target=".cjoScatterContainer" data--100-bottom="left[swing]: 2%; top[swing]: 7%; width: 8%;opacity: 1;" data-top="left: 0%; top: 0%; width: 0%; opacity: 0;">
	</div>
</div>

<div class="container-fluid cjoBottomContainer">
	<div class="row cjoRowInFluid">
		<div class="col-md-6 cjoMainHalf">
			<div class="cjoHalfInner">
				<div class="cjoMainContentHeader cjoFourSquare">
					<a href="https://www.bimsmith.com" target="_blank"><img src="$urlbase/images/content/BIMsmithButtonText.png" class="cjoMainContentImage cjoLeftContent"></a>
					<div class="cjoMainContentLine"></div>
				</div>
				<div class="cjoMainContentText cjoFourSquare cjoLeftContent">
						BIMsmith is a turnkey system that resides on your website. 
						It allows customers to configure your products and use them 
						in their design process.					
				</div>
			</div>
		</div>
		<div class="col-md-6 cjoMainHalf">
			<div class="cjoHalfInner">
				<div class="cjoMainContentHeader cjoFourSquare">
					<a href="$urlbase/spinn/index.html" target="_blank"><img src="$urlbase/images/content/360Spinn.png" class="cjoMainContentImage cjoRightContent" id="cjoSpinnImage" ></a>
					<div class="cjoMainContentLine"></div>
				</div>
				<div class="cjoMainContentText cjoFourSquare cjoRightContent">
					<p>
						Allow customers to virtually see a 360 degree view of your 
						product with 360 Spinn™. This technology allows you to go 
						above and beyond the viewer’s normal e-commerce experience. 
						Start now, and change your point of view. 
					</p>
				</div>
			</div>
		</div>
	</div>
	
	<div class="container">
		<div class="row cjoRevitInfoContainer">

			<div class="col-sm-3">
				<img class="cjoRevitImage" src="$urlbase/images/icons/icon_revit-purple.png">
			</div>
			<div class="col-sm-9 cjoRevitTextBlock" style="margin:-15px;">
					Revit is our jam, we're all <strike>recovering</strike> former architects and we love building product manufacturers. Its a match made in heaven. Talk to us about how leverage our industry experience with BIM to help you drive new revenues for your product while being closer than ever to the design process.
			</div>

		</div>
	</div>
	
	<div class="container-fluid cjoTwitter" id="cjoTwitterContainer">
		<div style="padding-top:40px; padding-bottom:40px;">
			<img src="$urlbase/images/icons/icon_twitter_feed.png" style="width:75px;">
		</div>		
		<a class="twitter-timeline"  href="https://twitter.com/Anguleris" data-widget-id="631893349692260353" data-chrome="noheader" data-tweet-limit="3">Tweets by @Anguleris</a>
					
		<div id="cjoTwitterFollow">
			<a href="https://twitter.com/intent/follow?screen_name=Anguleris"><div id="cjoTwitterFollowButton">FOLLOW</div></a>
		</div>		
	</div>
	
	<div class="container">
		<img class="cjoManufacturer" data-manufacturerstacked="$urlbase/images/logo/manufacturersStacked.png" data-manufacturerline="$urlbase/images/logo/manufacturersLine.png" src="$urlbase/images/logo/manufacturersStacked.png"></div>
</div>

_END;
}

function strategy_page_view()
{
	global $urlbase, $urlHomeRoute, $urlStrategyRoute, $urlVisualizationRoute, $urlVideoRoute, $urlTrainingRoute, $urlContactRoute;
	echo<<<_END
	
	<div id="topline" class="visible-xs cjoInternalLinkHeaderMobileActivator">
	<div class="cjoInternalLinkHeaderMobileActivatorLine"></div>
</div>
<div class="cjoInternalLinkHeader">
	<div class="container cjoInternalLinkContainer">
		<div class="row">
			<div class="col-xs-12 col-sm-2 col-sm-offset-1 cjoInternalLinkCell"><a class="cjoInternalLink" href="#cjoModelProductAnchor" style="color: #fff;">MODEL YOUR PRODUCT</a></div>
			<div class="col-xs-12 col-sm-2 cjoInternalLinkCell"><a class="cjoInternalLink" href="#cjoShareAnchor" style="color: #fff;">SHARE &amp; PUBLICIZE</a></div>
			<div class="col-xs-12 col-sm-2 cjoInternalLinkCell"><a class="cjoInternalLink" href="#cjoSpecifiedAnchor" style="color: #fff;">GET SPECIFIED</a></div>
			<div class="col-xs-12 col-sm-2 cjoInternalLinkCell"><a class="cjoInternalLink" href="#cjoStriveForAnchor" style="color: #fff;">WHAT WE STRIVE FOR</a></div>
			<div class="col-xs-12 col-sm-2 cjoInternalLinkCell"><a class="cjoInternalLink" href="#cjoBimsmithAnchor" style="color: #fff;">BIMSMITH</a></div>
		</div>
	</div>


<!--div id="bottomline" class="visible-xs cjoInternalLinkHeaderMobileActivator" style="display:none; top:216px;">
	<div class="cjoInternalLinkHeaderMobileActivatorLine"></div>
</div-->




</div>

<div class="container-fluid" id="cjoMainContainerFluid">
	<div class="container" id="cjoMainContainer">
		<div class="cjoCircleContainer"><img class="cjoCircleImage" src="$urlbase/images/icons/compass.png"></div>
		<div class="cjoPageMainTitleText">WHAT'S YOUR BIM STRATEGY?</div>
		<div class="cjoPageMainSubtitleText">Time to make your product line BIM ready? <br>You've come to the right place.</div>
	</div>
	<div class="container-fluid cjoMainInfoGrey" id="cjoModelProductAnchor">
		<div class="container cjoMainInfoInner">
			<div class="row cjoGreyRow">
				<div class="col-sm-4 col-sm-push-8 cjoMainInfoImageContainer cjoRow1Match">
					<img class="cjoMainInfoImage" src="$urlbase/images/icons/icon_laptop.png">
				</div>
				<div class="col-sm-8 col-sm-pull-4 cjoMainInfoTextBlock cjoRow1Match">
					<div class="cjoMainInfoTitle">MODEL YOUR PRODUCT</div>
					<div class="cjoMainInfoText">The first step in the BIM Content 
						Branding process is to work with you to develop a strategy 
						for how to take your BIM Content to market. Our team takes 
						the time to learn about your product and how it is specified. 
						This ensures the approach we take aligns with real world workflows.
					</div>
					<div class="cjoMainInfoText">
						The Anguleris team then models the product in Autodesk Revit 
						which is the same program that the end user (the architect, 
						engineer or designer) will use. Because the model is built in 
						the same program, it ensures that the model will appear 
						correctly in all views (plan, section, elevation, perspective 
						and schedules).
					<!/div>
					<!div class="cjoMainInfoText"><br>
						Anguleris ensures that all the models are accurate, data rich, 
						and highly parametric. These disciplines highly increase the 
						probability that the model will be used more than once by the 
						same architect, engineer, or designer.
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid cjoMainInfoWhite" id="cjoShareAnchor">
		<div class="container cjoMainInfoInner">
			<div class="row">
				<div class="col-sm-4 cjoMainInfoImageContainer cjoRow2Match">
					<img class="cjoMainInfoImage cjoNotepadImage" src="$urlbase/images/icons/notepad.png">
				</div>
				<div class="col-sm-8 cjoMainInfoTextBlock cjoRow2Match">
					<div class="cjoMainInfoTitle">SHARE &amp; PUBLICIZE</div>
					<div class="cjoMainInfoText" style="margin-bottom:25px;">
						Modeling a product line in Revit is only a part of the process. 
						In order for the models to be effective, they must be distributed 
						to those who will use them in actual projects. The Anguleris team 
						knows just what to do to make your products readily accessible 
						to the people that use them in designs and blueprints. 
					</div>
					<div class="row">
						<div class="col-sm-6">
							<div class="cjoMainInfoTitle">Manufacturer Website</div>
							<div class="cjoMainInfoText">
								One key place that branded content should always appear 
								is on the manufacturer's website. This provides an 
								invaluable resource to the architects who are specifying 
								the products and have the ability to choose your products 
								for their designs. By allowing us to create this resource, 
								you add another avenue for your products to be selected. 
							</div>
						</div>
						<div class="col-sm-6">
							<div class="cjoMainInfoTitle">Autodesk Seek</div>
							<div class="cjoMainInfoText">
								The Autodesk Seek web service enables designers to 
								discover, preview, and download BIM models, drawings, 
								and specifications. For manufacturers, it's a unique 
								way to connect with designers and consumers who 
								specify or recommend building products. By allowing 
								the Anguleris team to create and add your products 
								to Autodesk Seek, you ensure that your products are 
								available to be selected and specified early in the 
								design process.
							</div>
						</div>
					</div>
					<div class="cjoMainInfoLinks">
						<a href="http://seek.autodesk.com/" target="_blank">Browse Autodesk Seek</a><br><br>
						<a href="$urlVideoRoute" target="_blank">Promote your BIM Strategy with a Video</a><br><br>
						<a href="$urlVideoRoute" target="_blank">Video Marketing for BIM Strategies</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="container-fluid cjoNoPadding">
	<div class="container-fluid cjoMainInfoGrey" id="cjoSpecifiedAnchor">
		<div class="container cjoMainInfoInner">
			<div class="row">
				<div class="col-sm-4 col-sm-push-8 cjoMainInfoImageContainer cjoRow3Match">
					<img class="cjoMainInfoImage" src="$urlbase/images/icons/puzzle.png">
				</div>
				<div class="col-sm-8 col-sm-pull-4 cjoMainInfoTextBlock cjoRow3Match">
					<div class="cjoMainInfoTitle">GET SPECIFIED</div>
					<div class="cjoMainInfoText">
						Branded BIM Content gives the manufacturer direct access to real project drawings. Never before have
						Building Product Manufacturers had such a direct path to specification. All Anguleris BIM content
						exceeds industry standards for data, making sure that your specifiers have the data they need at their
						fingertips, slingshotting your products right into schedules.
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="container-fluid cjoMainInfoLightGrey" id="cjoStriveForAnchor">
	<div class="container cjoMainInfoInner">
		<div class="cjoMainInfoTitle cjoStriveForTitle">WE STRIVE FOR</div>
		<div class="row">
			<div class="col-sm-6 col-sm-push-6 cjoStriveForImageContainer cjoRow4Match">
				<img class="cjoMainInfoThisNotThatImage" src="$urlbase/images/icons/icon_this-not-this_text.png">
			</div>
			<div class="col-sm-6 col-sm-pull-6 cjoMainInfoTextBlock cjoStriveForText cjoRow4Match">
				Lorem Ipsum is simply dummy text of
				the printing and typesetting industry.
				Lorem Ipsum has been the industry's
				standard dummy text ever since the
				1500s, when an unknown printer took
				a galley of type and scrambled it to
				make a type specimen book. It has
				survived not only five centuries, but
				also the leap into electronic typesetting,
				remaining essentially unchanged.
				It was popularised in the 1960s with
				the release of
			</div>
		</div>
	</div>
</div>

<div class="container-fluid">
	<div class="container" id="cjoBimTowerContainer">
		<img class="hidden-xs cjoBimTowerImage" src="$urlbase/images/content/BIMtower.png">
		<img class="visible-xs cjoBimTowerImage" src="$urlbase/images/content/BIMtower_mobile.png">
	</div>
</div>

<div class="cjoCarouselContainer">
	<img class="cjoCarouselImageExpanded" src="">
	<div class="orthoCarouselDesktop">
		<div><img class="cjoCarouselImage" src="$urlbase/images/Slideshow images/slideshow_drink-fountain.png"></div>	
		<div><img class="cjoCarouselImage" src="$urlbase/images/Slideshow images/slideshow_table.png"></div>	
		<div><img class="cjoCarouselImage" src="$urlbase/images/Slideshow images/slideshow_couch.png"></div>		
		<div><img class="cjoCarouselImage" src="$urlbase/images/Slideshow images/slideshow_heater.png"></div>		
		<div><img class="cjoCarouselImage" src="$urlbase/images/Slideshow images/slideshow_window.png"></div>		
		<div><img class="cjoCarouselImage" src="$urlbase/images/Slideshow images/slideshow_phone.png"></div>		
		<div><img class="cjoCarouselImage" src="$urlbase/images/Slideshow images/slideshow_sink.png"></div>		
		<div><img class="cjoCarouselImage" src="$urlbase/images/Slideshow images/slideshow_drain.png"></div>		
		<div><img class="cjoCarouselImage" src="$urlbase/images/Slideshow images/slideshow_white-object.png"></div>	
		<div><img class="cjoCarouselImage" src="$urlbase/images/Slideshow images/slideshow_water-heater.png"></div>		
	</div>
</div>

<div class="container-fluid">
	<div class="container">
		<div class="row cjoRevitInfoContainer">
			<div class="col-sm-3">
				<img class="cjoRevitImage" src="$urlbase/images/icons/icon_revit-purple.png">
			</div>
			<div class="col-sm-9 cjoRevitTextBlock">
				Revit is our jam, we're all <strike>recovering</strike> former architects and we love building product manufacturers. Its a match made in heaven. Talk to us about how leverage our industry experience with BIM to help you drive new revenues for your product while being closer than ever to the design process.
			</div>
		</div>
	</div>
</div>

<div class="container-fluid cjoStrategyContainer">
	
	<div class="row cjoRowInFluid" id="cjoBimsmithAnchor">
		<div class="col-md-6 cjoStandardHalfContent">
			<div class="cjoContentHeader">
			<a href="http://www.bimsmith.com" target="_blank"><img src="$urlbase/images/content/BIMsmithButtonText.png" class="cjoContentImage"></a>
			</div>
			<div class="cjoContentSpacer"></div>
		</div>
		<div class="col-md-6 cjoStandardHalfContent">
			<div class="cjoContentText" style="color: #999;"> 
				<p>You say you already have a blooming BIM strategy? Perfect! It's time for you
					to check out the next evolution of BIM Strategy for Building Product Manufacturers, BIMsmith.
					<a href="http://www.bimsmith.com" target="_blank" style="color: #7CCFD7; font-weight: 800;">Let's take this thing to the next level.</a>
				</p>
			</div>
		</div>
	</div>
	
	<div id="cjoBottomInfoContainer">
		<p>For Building Product Manufacturers of all kinds.</p>
		<div id="cjoLittleBlueBanner">LET'S START STRATEGIZING</div>
	</div>
_END;

	info_request_form();

	echo<<<_END
	
	<div class="container" style="padding-bottom: 50px;">
		<img class="cjoManufacturer" data-manufacturerstacked="$urlbase/images/logo/manufacturersStacked.png" data-manufacturerline="$urlbase/images/logo/manufacturersLine.png" src="$urlbase/images/logo/manufacturersStacked.png"></div>
	</div>
</div>
_END;
}

function visualization_page_view()
{
	global $urlbase, $urlHomeRoute, $urlStrategyRoute, $urlVisualizationRoute, $urlVideoRoute, $urlTrainingRoute, $urlContactRoute;
	echo<<<_END
	
	<div class="container-fluid" id="cjoMainContainerOuter">
	<div class="container" id="cjoMainContainer">
		<div class="cjoCircleContainer"><img class="cjoCircleImage" style="left:50%; margin-left:-70px; top: 50%; margin-top: -70px; width: 140px; position: relative;" src="$urlbase/images/icons/camera.png"></div>
		<div class="cjoPageMainTitleText">BRING YOUR PRODUCT TO LIFE</div>
		<div class="cjoPageMainSubtitleText">3D Visualization is the way to go these days. <br>Great quality, less hassle.</div>
		
	</div>
	<div class="container-fluid cjoMainInfoGrey">
		<div class="container cjoMainInfoInner">
			<div class="row cjoGreyRow">
				<div class="col-sm-4 col-sm-push-8 cjoMainInfoImageContainer cjoRow1Match">
					<img class="cjoMainInfoImage" src="$urlbase/images/icons/icon_thought-bubble.png">
				</div>
				<div class="col-sm-8 col-sm-pull-4 cjoMainInfoTextBlock cjoRow1Match">
					<div class="cjoMainInfoTitle">HOW DO I?</div>
					<div class="cjoMainInfoText">If you can dream it, we can make it 
						happen. Our team works with yours to collect all available 
						product data and engineering files to create a virtual 
						representation of your product. Even if your product is not 
						yet built or prototyped, we can show your customers what it 
						will look like, in twenty colors, all without picking up a camera.
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid cjoMainInfoWhite">
		<div class="container cjoMainInfoInner">
			<div class="row">
				<div class="col-sm-4 cjoMainInfoImageContainer cjoRow2Match">
					<img class="cjoMainInfoImage" src="$urlbase/images/icons/money.png">
				</div>
				<div class="col-sm-8 cjoMainInfoTextBlock cjoRow2Match">
					<div class="cjoMainInfoTitle">WHY SHOULD I?</div>
					<div class="cjoMainInfoText">
						Let's face it, photoshoots are expensive, time consuming, 
						and impossible to tweak after the fact. With Anguleris 
						Visualization, you'll save money by not having to build sets 
						or rent out mansions in Beverly Hills. Best of all, once 
						your digital sets and products are built by the Anguleris 
						team, you can just sit back and listen to the beautiful sound 
						of increasing ROI.
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="container-fluid cjoMainInfoGrey">
	<div class="container cjoMainInfoInner">
		<div class="row cjoGreyRow">
			<div class="col-sm-4 col-sm-push-8 cjoMainInfoImageContainer cjoRow3Match">
				<img class="cjoMainInfoImage hidden-xs" src="$urlbase/images/icons/wand.png">
				<img class="cjoMainInfoImage visible-xs" src="$urlbase/images/icons/wand_grey.png">
			</div>
			<div class="col-sm-8 col-sm-pull-4 cjoMainInfoTextBlock cjoRow3Match">
				<div class="cjoMainInfoTitle">LET'S DO THIS!</div>
				<div class="cjoMainInfoText">Whether it's product shots or in context 
					scenes, our team will make your product look gorgeous, just like 
					it does in real life. Talk with us to make it happen.
				</div>
			</div>
		</div>
	</div>
</div>


<div class="container-fluid cjoStrategyContainer" id="cjoStoveContainer">
	<div class="container">
		<div class="row">
			<div class="col-sm-6 cjoVisContent cjoStoveContent">
				<div id="cjoStove">
					<img src="$urlbase/images/content/stove.png" class="cjoVisContentImage">
				</div>
			</div>
			<div class="col-sm-6 cjoVisContent cjoStoveContent">
				<div style="color: #999;"> 
					<p style="color: #7CCFD7; font-weight: bold;">Product Shots</p>
					<p>We create virtual representations of your product that are 
						realistic, and at a fraction of the cost. Your product looks 
						great, and it is ready to start generating revenue. 
					</p>
					<p style="color: #7CCFD7; padding-top:25px; font-weight: bold;">In Context Scenes</p>
					<p>Curious what your product will look like in relation to the 
						rest of a room? The Anguleris designers create custom virtual 
						spaces that show how your product looks and interacts in a 
						real-world environment. Even before your product is finished, 
						we can help you showcase it.
					</p>
				</div>
			</div>
		</div>
	</div>
</div>	
<div class="container-fluid cjoStrategyContainer" id="cjoSplitContainer">	
	<div class="container">
		<div class="col-xs-12" style="padding: 0;"><img class="cjoSplitImage" src="$urlbase/images/content/splitImage2.jpg" data-sourcetwo="$urlbase/images/content/splitImage2.jpg" data-sourcethree="$urlbase/images/content/splitImage3.jpg"></div>
	</div>
</div>
<div class="container-fluid cjoStrategyContainer"  id="cjoSpinnContainer">
	<div class="container">
		<div class="row">
			<div class="col-sm-6 cjoVisContent cjoSpinnContent" style="margin:0px;">
				<a href="$urlbase/spinn/index.html" target="_blank">
					<img src="$urlbase/images/content/360Spinn.png" class="cjoVisContentImage cjoSpinnImage"  style="width:85%;">
				</a>
				
			</div>
			<div class="col-sm-6 cjoVisContent cjoSpinnContent">
				<div style="color: #999;"> 
					<p style="color: #999;">TAKE VISUALIZATION TO THE NEXT LEVEL</p>
					<p>Allow customers to interact with your product in 360 degrees 
						with Spinn™. This technology allows you to go above and 
						beyond the viewer's normal e-commerce experience. 
						<a href="$urlbase/spinn/index.html" target="_blank" style="color: #7CCFD7;">
							Click here to learn more.
						</a>
					</p>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="container-fluid cjoStrategyContainer"  id="cjoBlueRibbonContainer">
	<div id="cjoBottomInfoContainer">
		<div id="cjoLittleBlueBanner">LET'S START VISUALIZING</div>
	</div>
_END;

	info_request_form();
	
	echo<<<_END
	
	<div class="container" style="padding-bottom: 50px;"><img class="cjoManufacturer" data-manufacturerstacked="$urlbase/images/logo/manufacturersStacked.png" data-manufacturerline="$urlbase/images/logo/manufacturersLine.png" src="$urlbase/images/logo/manufacturersStacked.png"></div>
		
</div>
_END;
}

function video_page_view()
{
	global $urlbase, $urlHomeRoute, $urlStrategyRoute, $urlVisualizationRoute, $urlVideoRoute, $urlTrainingRoute, $urlContactRoute;
	
	echo<<<_END
	
	<div id="cjoBlackOverlayVideo" class="cjoBlackOverlay"></div>
	<div class="container-fluid" id="cjoMainContainer">
	<div class="cjoCircleContainer"><img class="cjoCircleImage" src="$urlbase/images/icons/movie-clapper.png"></div>
	<div class="cjoPageMainTitleText">EXPAND YOUR HORIZON <br class="visible-xs">WITH VIDEO MARKETING</div>
	<div class="cjoPageMainSubtitleText">Video Marketing is a great way to engage 
		your customers by telling your story in a captivating way.
	</div>
	<div class="container-fluid cjoMainInfoGrey">
		<div class="container cjoMainInfoInner">
			<div class="row">
				<div class="col-sm-4 cjoMainInfoImageContainer cjoRow1Match">
					<img class="cjoMainInfoImage" src="$urlbase/images/icons/icon_video-camera.png">
				</div>
				<div class="col-sm-8 cjoMainInfoTextBlock cjoRow1Match">
					<div class="cjoMainInfoTitle">VIDEO MARKETING</div>
					<div class="cjoMainInfoText">
						Gain a competitive edge in the market place by showing your 
						product, software, or business in a dynamic promotional video.
					</div>
					<div class="cjoMainInfoText" style="padding-top:20px;">
						From custom animation to high definition screen captured 
						demonstrations, Anguleris provides a fresh, bold, and polished 
						look to any project, helping you better tell your product’s story.
					</div>
					<div class ="cjoMainInfoText" style="padding-top:20px;">
					BIM Strategy Videos<br>Software Demo Videos<br>Installation Guide Videos
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="container-fluid cjoVideoRow" style="margin-bottom:50px;">
	<div class="container cjoVideoContainer">
		<div class="embed-responsive embed-responsive-16by9" id="cjoYoutubePopupContainer">
			<img src="$urlbase/images/content/youtubepicExample.png" id="cjoYoutubeImage" style="width:100%;">
		</div>
	</div>
</div>

<div class="container-fluid cjoStrategyContainer">
	
	<div class="row cjoRowInFluid">
		<div class="col-sm-6 col-sm-push-6 cjoNoPadding cjoYoutubeColumn cjoMatch">
			<a href="https://www.youtube.com/user/AngulerisTech" target="_blank"><img class="cjoYoutubeImage" src="$urlbase/images/content/youtube.png"></a><br>
			<div class="cjoContentText cjoOneLineText visible-xs">For more videos</div>
		</div>
		<div class="col-sm-6 col-sm-pull-6 cjoNoPadding cjoMatch cjoTextColumn" style="width: 49%;">
			<div class="cjoContentText" id="cjoYouTubeText">
			
				<span class="hidden-xs">For more videos, visit our <a style="color: #7CCFD7;" href="https://www.youtube.com/user/AngulerisTech" target="_blank">
					Youtube Channel.</a><br>
				</span>
			</div>
		</div>
	</div>
	
	
	<div class="cjoLittleBlueBanner" id="cjoLittleBlueBanner">LET'S MAKE A VIDEO</div>
_END;

	info_request_form();

	echo<<<_END
	
	
	<div class="container" style="padding-bottom: 50px;"><img class="cjoManufacturer" data-manufacturerstacked="$urlbase/images/logo/manufacturersStacked.png" data-manufacturerline="$urlbase/images/logo/manufacturersLine.png" src="$urlbase/images/logo/manufacturersStacked.png"></div>
_END;
}

function training_page_view()
{
	global $urlbase, $urlHomeRoute, $urlStrategyRoute, $urlVisualizationRoute, $urlVideoRoute, $urlTrainingRoute, $urlContactRoute;
	
	echo<<<_END
	
	<div class="container-fluid" id="cjoMainContainer">

	<div class="cjoCircleContainer"><img class="cjoCircleImage" src="$urlbase/images/icons/graduation.png"></div>
	<div class="cjoPageMainTitleText">AUTODESK REVIT TRAINING<br> AND IMPLEMENTATION</div>
	<div class="cjoPageMainSubtitleText" id="cjoRevitTrainingBox">Time to train up!</div>
	
	<div class="container-fluid cjoMainInfoWhite">
		<div class="container cjoMainInfoInner">
			<div class="row">
				<div class="hidden-xs col-sm-4 col-sm-8-push cjoMainInfoImageContainer cjoRow1Match">
					<img class="cjoMainInfoImage" src="$urlbase/images/icons/icon_apple_diploma.png">
				</div>
				<div  class="col-sm-8 col-sm-4-pull cjoMainInfoTextBlock cjoRow1Match">
					<div class="cjoMainInfoTitle">AUTODESK REVIT TRAINING</div>
					<div class="cjoMainInfoText" id="cjoRevitTrainingText">
						Anguleris Technologies’ BIM curriculum provides one-on-one and small group training in
						Autodesk Revit, the industry leader in BIM technology. The training system is designed
						to convert someone with a drafting background (or no drafting background at all) into a
						fully proficient and knowledgeable Revit draftsman. Our training prepares the participant
						to take, and pass, the Autodesk Revit proficiency exams.
					</div>
					<div class="visible-xs col-sm-4 col-sm-8-push cjoMainInfoImageContainer cjoRow1Match">
						<img class="cjoMainInfoImage" src="$urlbase/images/icons/icon_apple_diploma.png" id="cjoAppleImage">
					</div>
				</div>
			</div>
		</div>
	</div>
	
</div>

<div class="container-fluid cjoMainInfoTri">
	<div class="container cjoMainInfoInner">
		<div class="row">
			<div class="col-sm-4 cjoMainInfoTextBlockTri">
				<div class="cjoMainInfoTitle cjoMainInfoTriTitle">INTRODUCTORY</div>
				<div class="cjoMainInfoText">
					Our Introductory Revit Course covers a basic overview of the Revit interface,
					terminology, and concepts. It covers the process of creating elements such as walls,
					floors, doors, windows, and other basic components of a building structure.
				</div>
			</div>
			<div class="col-sm-4 cjoMainInfoTextBlockTri">
				<div class="cjoMainInfoTitle cjoMainInfoTriTitle">INTERMEDIATE</div>
				<div class="cjoMainInfoText">
					Want to take your basic understanding of Autodesk Revit to the next level? The
					intermediate sequence is for you! 
					<br><br>
					This course builds on the introductory module by introducing System Families,
					Structural Systems, massing, and detail components. It introduces more advanced
					aspects of view creation and manipulation such as cut planes, view range, and
					viewports.
				</div>
			</div>
			<div class="col-sm-4 cjoMainInfoTextBlockTri">
				<div class="cjoMainInfoTitle cjoMainInfoTriTitle">ADVANCED</div>
				<div class="cjoMainInfoText">
					The catalog of advanced Revit courses cover a variety of specialized Revit skills such
					as BIM Workflow Management, Advanced Rendering, Advanced Collaboration, and
					Construction Document Management.
				</div>
			</div>
		</div>
	</div>
</div>

<div class="container-fluid cjoBubbleContainer">
	<div class="container cjoBubbleContainerInner">
		Our Students Say...
		<img class="cjoBubble1" src="$urlbase/images/content/speech_bubble_1.png">
		<img class="cjoBubble2" src="$urlbase/images/content/speech_bubble_2.png">
	</div>
</div>

<div class="container-fluid">
	<div class="cjoLittleBlueBanner center-block" id="cjoButton" style="">START YOUR TRAINING NOW</div>
_END;

	info_request_form();

	echo<<<_END
	
	
</div>
_END;
}

function contact_page_view()
{
	global $urlbase, $urlHomeRoute, $urlStrategyRoute, $urlVisualizationRoute, $urlVideoRoute, $urlTrainingRoute, $urlContactRoute;
	
	echo<<<_END
	
	<div class="visible-xs cjoInternalLinkHeaderMobileActivator">
	<div class="cjoInternalLinkHeaderMobileActivatorLine"></div>
</div>
<div class="cjoInternalLinkHeader">
	<div class="container cjoInternalLinkContainer">
		<div class="row">
			<div class="col-xs-12 col-sm-2 col-sm-offset-1 cjoInternalLinkCell"><a class="cjoInternalLink" href="#cjoTopAnchor" style="color: #fff;">CONTACT</a></div>
			<div class="col-xs-12 col-sm-2 cjoInternalLinkCell"><a class="cjoInternalLink" href="#cjoCareerAnchor" style="color: #fff;">CAREER</a></div>
			<div class="col-xs-12 col-sm-2 cjoInternalLinkCell"><a class="cjoInternalLink" href="#cjoAboutAnchor" style="color: #fff;">ABOUT</a></div>
			<div class="col-xs-12 col-sm-2 cjoInternalLinkCell"><a class="cjoInternalLink" href="#cjoResourcesAnchor" style="color: #fff;">RESOURCES</a></div>
			<div class="col-xs-12 col-sm-2 cjoInternalLinkCell"><a class="cjoInternalLink" href="#cjoBlogComingSoon" style="color: #fff;">BLOG</a></div>
		</div>
	</div>
</div>


<div class="container-fluid cjoContainer1">
	<div class="container">
		<div class="row">
			<div class="col-sm-6 cjoNoPadding cjoContactInfoColumn" id="cjoContactAnchor">
				<div class="cjoContactHeader">LET'S TALK</div>
				<table class="cjoContactTable">
					<tr>
						<td class="cjoPhoneCell">
							<a href="tel://1-224-834-3632"><img class="cjoPhoneIcon" src="$urlbase/images/miscButtons/phone.png"></a><br>
							<a href="tel://1-224-834-3632" style="color: #fff; text-decoration: none;">1 (224) 484-8896</a>
						</td>
						<td class="cjoEmailCell">
							<a href="mailto:info@anguleris.com"><img class="cjoEmailIcon" src="$urlbase/images/miscButtons/email.png"></a><br>
							<a href="mailto:info@anguleris.com" style="color: #fff; text-decoration: none;">info@anguleris.com</a>
						</td>
					</tr>
				</table>
				11 West Main Street - Suite 301<br>
				Carpentersville, IL 60110
				<div class="cjoContactSocialMediaTable">
					<a href="https://www.facebook.com/Anguleris" target="_blank"><img class="cjoContactSocialMediaLink" src="$urlbase/images/socialMediaLinks/facebook.png"></a>
					<img class="cjoContactSocialMediaLink" src="$urlbase/images/socialMediaLinks/instagram.png">
					<a href="https://www.linkedin.com/company/anguleris-technologies" target="_blank"><img class="cjoContactSocialMediaLink" src="$urlbase/images/socialMediaLinks/linkedin.png"></a>
					<a href="https://twitter.com/anguleris" target="_blank"><img class="cjoContactSocialMediaLink" src="$urlbase/images/socialMediaLinks/twitter.png"></a>
					<a href="https://www.youtube.com/user/AngulerisTech" target="_blank"><img class="cjoContactSocialMediaLink" src="$urlbase/images/socialMediaLinks/youtube.png"></a>
					<a href="https://plus.google.com/109532662513753771690/about" target="_blank"><img class="cjoContactSocialMediaLink" src="$urlbase/images/socialMediaLinks/google.png"></a>
				</div>
			</div>
			<div class="col-sm-6 cjoNoPadding cjoMailingListColumn">
				<div class="cjoContactHeader2">JOIN OUR MAILING LIST</div>
				<form action="$urlbase/php/formhandlers/mailingList.php" method="post">
					<input class="cjoMailingListInput" type="text" id="mailingListFirstName" name="mailingListFirstName" maxlength="100" placeholder="First Name" required><br>
					<input class="cjoMailingListInput" type="text" id="mailingListLastName" name="mailingListLastName" maxlength="100" placeholder="Last Name" required><br>
					<input class="cjoMailingListInput" type="email" id="mailingListEmail" name="mailingListEmail" maxlength="250" placeholder="Email" required><br>
				</form>
				<button class="btn cjoMailingListButton" name="mailingListSubmitButton">JOIN</button>
			</div>
		</div>
	</div>
</div>

<div class="container-fluid cjoBlueContainer" id="cjoCareerAnchor">
	<div class="container cjoBlueInnerCont">
		<div class="cjoBlueHeader">
			LOVE THE BIM AND THE BUILDING INDUSTRY?<br>
			SAME.<br><br>
		</div>
		At Anguleris, we focus on the customer. We want each and every person we work with
		to have complete satisfaction. We believe that if we work together, we can accomplish
		anything.
		<br><br>BECOME AN ANGULERIAN<br>
		Our team is made up of former AEC professionals with a passion for BIM. We strive for
		excellence and know the importance of hard work. We enjoy a group oriented
		environment, and the freedom to use creativity and innovation to achieve amazing
		results.
<br><br>We are always hiring, so if you are interested in joining our team, fill out our inquiry form <span id="cjoLittleBlueBanner"><u>here.</u></span>
		
		<!--div id="cjoLittleBlueBanner">UPLOAD RESUME</div-->
_END;
	upload_resume_form();
	echo<<<_END
	
	</div>
	
</div>

<div class="container-fluid cjoTeamPhotoContainer">
</div>

<div class="container-fluid cjoContainer3" id="cjoAboutAnchor">
	<div class="container cjoContainer3Text">
		<div class="cjoContainer3Header" style="padding-bottom: 50px;">ABOUT OUR TEAM</div>
		Anguleris is dedicated to solutions in Autodesk Revit and Visualization for Building
Product Manufacturers. By modeling your products and distributing them to design and
construction professionals, Anguleris provides a foot in the door to new projects via
what we call "virtual product placement". 
		<br><br>
		Our offices are located on the third floor of the historic former Illinois Iron and Bolt
factory, a fully renovated industrial building from 1844. Our state of the art facilities
boast a beautiful view of the Fox River
	</div>
	
</div>


<div class="container-fluid cjoStatsContainer">
<div class="container">
	<div class="cjoStatsMainHeader">SOME STATS ABOUT OUR TEAM</div>
		<div class="cjoStatsMainSubHeader">It may or may not be completely useless information
		</div>
		<div class="row" style="padding: 50px 0px;">
			<div class="col-xs-6 col-sm-3 cjoStatBoxEight"><img class="cjoStatBoxImage cjoStatLeft" src="$urlbase/images/content/stats/1.png"></div>
			<div class="col-xs-6 col-sm-3 cjoStatBoxEight"><img class="cjoStatBoxImage cjoStatRight" src="$urlbase/images/content/stats/2.png"></div>
			<div class="col-xs-6 col-sm-3 cjoStatBoxEight"><img class="cjoStatBoxImage cjoStatLeft" src="$urlbase/images/content/stats/3.png"></div>
			<div class="col-xs-6 col-sm-3 cjoStatBoxEight"><img class="cjoStatBoxImage cjoStatRight" src="$urlbase/images/content/stats/4.png"></div>
			<div class="col-xs-6 col-sm-3 cjoStatBoxEight"><img class="cjoStatBoxImage cjoStatLeft" src="$urlbase/images/content/stats/5.png"></div>
			<div class="col-xs-6 col-sm-3 cjoStatBoxEight"><img class="cjoStatBoxImage cjoStatRight" src="$urlbase/images/content/stats/6.png"></div>
			<div class="col-xs-6 col-sm-3 cjoStatBoxEight"><img class="cjoStatBoxImage cjoStatLeft" src="$urlbase/images/content/stats/7.png"></div>
			<div class="col-xs-6 col-sm-3 cjoStatBoxEight"><img class="cjoStatBoxImage cjoStatRight" src="$urlbase/images/content/stats/stats_years_NEW_2.jpg"></div>
		</div>
	</div>
	<img class="cjoMobileBackToTop" src="$urlbase/images/miscButtons/backTopMobile.png"></img>
</div>


<div class="container-fluid cjoResourcesContainer" id="cjoResourcesAnchor">
	<div class="container">
		<div class="cjoResourcesTitle">RESOURCES YOU MAY FIND HANDY</div>
		<div class="cjoResourcesText">
			<a href="$urlbase/files/Revit Model Content Style Guide.pdf" target="_blank">Revit Model Content Style Guide</a><br>
			<a href="$urlbase/files/Revit Master Shared Parameters.txt" target="_blank">Master Shared Parameters</a><br>
			<a href="$urlbase/files/BusinessSideOfBim.pdf" target="_blank">The Business Side of BIM</a><br>
		</div>
	</div>
</div>

<div class="container-fluid" id="cjoBlogComingSoon">
	<div class="container" style="font-size: 150%; margin-top: 30px;">BIM IT OUT<br><span style="font-size: 140%;"><span style="font-weight: bold;"> ANGULERIS</span> BLOG - Coming Soon!</span></div>
</div>
_END;
}

function upload_resume_form()
{
	global $urlbase, $urlHomeRoute, $urlStrategyRoute, $urlVisualizationRoute, $urlVideoRoute, $urlTrainingRoute, $urlContactRoute;
	echo<<<_END
	
		<div class="cjoPopupForm">
		<form action="$urlbase/php/formhandlers/uploadResume.php" method="post" id="cjoUploadResumeForm" enctype="multipart/form-data" data-uploadscripturl="$urlbase/php/formhandlers/uploadResume.php">
			<div id="cjoPopupButtonContainer">
				<button id="cjoPopupFormStep1Button" class="cjoPopupFormStepButton">Step 1</button>
				<button id="cjoPopupFormStep2Button" class="cjoPopupFormStepButton">Step 2</button>
			</div>

			<div id="cjoPopupRequiredField">(<span class="cjoRequiredAsterisk">*</span>) indicates a required field</div>

			<div id="cjoPopupFormStep1Tab">
				<br>
				<span class="cjoPopupFormLabel">Name<span class="cjoRequiredAsterisk">*</span></span>
				<div class="cjoFormInput">
					<input type="text" class="cjoPopupFormInput" id="cjoFormFirstName" name="firstName" style="width:49%;" placeholder="First" data-required="true"/>
					<input type="text" id="cjoFormLastName" class="cjoPopupFormInput" name="lastName" style="width:49%;" placeholder="Last" data-required="true"/>		
				</div>
				<br>
				<span class="cjoPopupFormLabel">Position Desired<span class="cjoRequiredAsterisk">*</span></span>
				<div class="cjoFormInput">
					<input type="text" id="cjoFormDesiredPosition" class="cjoPopupFormInput" name="desiredPosition" data-required="true">
				</div>
				<br>
				<span>Phone<span class="cjoRequiredAsterisk">*</span></span>
				<div class="cjoFormInput">
					<input id="cjoFormPhone1" name="phone1" type="text" class="cjoPopupFormInput cjoPopupFormPhoneNumber" maxlength="3" placeholder="###" data-required="true">-
					<input id="cjoFormPhone2" name="phone2" type="text" class="cjoPopupFormInput cjoPopupFormPhoneNumber" maxlength="3" placeholder="###" data-required="true">-
					<input id="cjoFormPhone3" name="phone3" type="text" class="cjoPopupFormInput cjoPopupFormPhoneNumber" maxlength="4" placeholder="####" data-required="true">
				</div>
				<br>
				<span class="cjoPopupFormLabel">Email<span class="cjoRequiredAsterisk">*</span></span>
				<div class="cjoFormInput">
					<input type="text" class="cjoPopupFormInput" id="cjoFormEmail" data-required="true"/>
				</div>
				<br>
				<span class="cjoPopupFormLabel">Address<span class="cjoRequiredAsterisk">*</span></span>
				<div class="cjoFormInput">
					<input type="text" class="cjoPopupFormInput" id="cjoFormAddress1" name="address1" placeholder="Street Address" data-required="true">
					<input type="text" class="cjoPopupFormInput" id="cjoFormAddress2" name="address2" placeholder="(Optional) Street Address Line 2">
					<input type="text" id="cjoFormCity" name="city" class="cjoPopupFormInput cjoPopupFormAddressHalf" placeholder="City" data-required="true">
					<select id="cjoFormCountry" name="country" class="cjoPopupFormAddressHalf">
						<option value="US" selected="true">United States</option>
						<option value="AF">Afghanistan</option>
						<option value="AX">Åland Islands</option>
						<option value="AL">Albania</option>
						<option value="DZ">Algeria</option>
						<option value="AS">American Samoa</option>
						<option value="AD">Andorra</option>
						<option value="AO">Angola</option>
						<option value="AI">Anguilla</option>
						<option value="AQ">Antarctica</option>
						<option value="AG">Antigua and Barbuda</option>
						<option value="AR">Argentina</option>
						<option value="AM">Armenia</option>
						<option value="AW">Aruba</option>
						<option value="AU">Australia</option>
						<option value="AT">Austria</option>
						<option value="AZ">Azerbaijan</option>
						<option value="BS">Bahamas</option>
						<option value="BH">Bahrain</option>
						<option value="BD">Bangladesh</option>
						<option value="BB">Barbados</option>
						<option value="BY">Belarus</option>
						<option value="BE">Belgium</option>
						<option value="BZ">Belize</option>
						<option value="BJ">Benin</option>
						<option value="BM">Bermuda</option>
						<option value="BT">Bhutan</option>
						<option value="BO">Bolivia, Plurinational State of</option>
						<option value="BQ">Bonaire, Sint Eustatius and Saba</option>
						<option value="BA">Bosnia and Herzegovina</option>
						<option value="BW">Botswana</option>
						<option value="BV">Bouvet Island</option>
						<option value="BR">Brazil</option>
						<option value="IO">British Indian Ocean Territory</option>
						<option value="BN">Brunei Darussalam</option>
						<option value="BG">Bulgaria</option>
						<option value="BF">Burkina Faso</option>
						<option value="BI">Burundi</option>
						<option value="KH">Cambodia</option>
						<option value="CM">Cameroon</option>
						<option value="CA">Canada</option>
						<option value="CV">Cape Verde</option>
						<option value="KY">Cayman Islands</option>
						<option value="CF">Central African Republic</option>
						<option value="TD">Chad</option>
						<option value="CL">Chile</option>
						<option value="CN">China</option>
						<option value="CX">Christmas Island</option>
						<option value="CC">Cocos (Keeling) Islands</option>
						<option value="CO">Colombia</option>
						<option value="KM">Comoros</option>
						<option value="CG">Congo</option>
						<option value="CD">Congo, the Democratic Republic of the</option>
						<option value="CK">Cook Islands</option>
						<option value="CR">Costa Rica</option>
						<option value="CI">Côte d'Ivoire</option>
						<option value="HR">Croatia</option>
						<option value="CU">Cuba</option>
						<option value="CW">Curaçao</option>
						<option value="CY">Cyprus</option>
						<option value="CZ">Czech Republic</option>
						<option value="DK">Denmark</option>
						<option value="DJ">Djibouti</option>
						<option value="DM">Dominica</option>
						<option value="DO">Dominican Republic</option>
						<option value="EC">Ecuador</option>
						<option value="EG">Egypt</option>
						<option value="SV">El Salvador</option>
						<option value="GQ">Equatorial Guinea</option>
						<option value="ER">Eritrea</option>
						<option value="EE">Estonia</option>
						<option value="ET">Ethiopia</option>
						<option value="FK">Falkland Islands (Malvinas)</option>
						<option value="FO">Faroe Islands</option>
						<option value="FJ">Fiji</option>
						<option value="FI">Finland</option>
						<option value="FR">France</option>
						<option value="GF">French Guiana</option>
						<option value="PF">French Polynesia</option>
						<option value="TF">French Southern Territories</option>
						<option value="GA">Gabon</option>
						<option value="GM">Gambia</option>
						<option value="GE">Georgia</option>
						<option value="DE">Germany</option>
						<option value="GH">Ghana</option>
						<option value="GI">Gibraltar</option>
						<option value="GR">Greece</option>
						<option value="GL">Greenland</option>
						<option value="GD">Grenada</option>
						<option value="GP">Guadeloupe</option>
						<option value="GU">Guam</option>
						<option value="GT">Guatemala</option>
						<option value="GG">Guernsey</option>
						<option value="GN">Guinea</option>
						<option value="GW">Guinea-Bissau</option>
						<option value="GY">Guyana</option>
						<option value="HT">Haiti</option>
						<option value="HM">Heard Island and McDonald Islands</option>
						<option value="VA">Holy See (Vatican City State)</option>
						<option value="HN">Honduras</option>
						<option value="HK">Hong Kong</option>
						<option value="HU">Hungary</option>
						<option value="IS">Iceland</option>
						<option value="IN">India</option>
						<option value="ID">Indonesia</option>
						<option value="IR">Iran, Islamic Republic of</option>
						<option value="IQ">Iraq</option>
						<option value="IE">Ireland</option>
						<option value="IM">Isle of Man</option>
						<option value="IL">Israel</option>
						<option value="IT">Italy</option>
						<option value="JM">Jamaica</option>
						<option value="JP">Japan</option>
						<option value="JE">Jersey</option>
						<option value="JO">Jordan</option>
						<option value="KZ">Kazakhstan</option>
						<option value="KE">Kenya</option>
						<option value="KI">Kiribati</option>
						<option value="KP">Korea, Democratic People's Republic of</option>
						<option value="KR">Korea, Republic of</option>
						<option value="KW">Kuwait</option>
						<option value="KG">Kyrgyzstan</option>
						<option value="LA">Lao People's Democratic Republic</option>
						<option value="LV">Latvia</option>
						<option value="LB">Lebanon</option>
						<option value="LS">Lesotho</option>
						<option value="LR">Liberia</option>
						<option value="LY">Libya</option>
						<option value="LI">Liechtenstein</option>
						<option value="LT">Lithuania</option>
						<option value="LU">Luxembourg</option>
						<option value="MO">Macao</option>
						<option value="MK">Macedonia, the former Yugoslav Republic of</option>
						<option value="MG">Madagascar</option>
						<option value="MW">Malawi</option>
						<option value="MY">Malaysia</option>
						<option value="MV">Maldives</option>
						<option value="ML">Mali</option>
						<option value="MT">Malta</option>
						<option value="MH">Marshall Islands</option>
						<option value="MQ">Martinique</option>
						<option value="MR">Mauritania</option>
						<option value="MU">Mauritius</option>
						<option value="YT">Mayotte</option>
						<option value="MX">Mexico</option>
						<option value="FM">Micronesia, Federated States of</option>
						<option value="MD">Moldova, Republic of</option>
						<option value="MC">Monaco</option>
						<option value="MN">Mongolia</option>
						<option value="ME">Montenegro</option>
						<option value="MS">Montserrat</option>
						<option value="MA">Morocco</option>
						<option value="MZ">Mozambique</option>
						<option value="MM">Myanmar</option>
						<option value="NA">Namibia</option>
						<option value="NR">Nauru</option>
						<option value="NP">Nepal</option>
						<option value="NL">Netherlands</option>
						<option value="NC">New Caledonia</option>
						<option value="NZ">New Zealand</option>
						<option value="NI">Nicaragua</option>
						<option value="NE">Niger</option>
						<option value="NG">Nigeria</option>
						<option value="NU">Niue</option>
						<option value="NF">Norfolk Island</option>
						<option value="MP">Northern Mariana Islands</option>
						<option value="NO">Norway</option>
						<option value="OM">Oman</option>
						<option value="PK">Pakistan</option>
						<option value="PW">Palau</option>
						<option value="PS">Palestinian Territory, Occupied</option>
						<option value="PA">Panama</option>
						<option value="PG">Papua New Guinea</option>
						<option value="PY">Paraguay</option>
						<option value="PE">Peru</option>
						<option value="PH">Philippines</option>
						<option value="PN">Pitcairn</option>
						<option value="PL">Poland</option>
						<option value="PT">Portugal</option>
						<option value="PR">Puerto Rico</option>
						<option value="QA">Qatar</option>
						<option value="RE">Réunion</option>
						<option value="RO">Romania</option>
						<option value="RU">Russian Federation</option>
						<option value="RW">Rwanda</option>
						<option value="BL">Saint Barthélemy</option>
						<option value="SH">Saint Helena, Ascension and Tristan da Cunha</option>
						<option value="KN">Saint Kitts and Nevis</option>
						<option value="LC">Saint Lucia</option>
						<option value="MF">Saint Martin (French part)</option>
						<option value="PM">Saint Pierre and Miquelon</option>
						<option value="VC">Saint Vincent and the Grenadines</option>
						<option value="WS">Samoa</option>
						<option value="SM">San Marino</option>
						<option value="ST">Sao Tome and Principe</option>
						<option value="SA">Saudi Arabia</option>
						<option value="SN">Senegal</option>
						<option value="RS">Serbia</option>
						<option value="SC">Seychelles</option>
						<option value="SL">Sierra Leone</option>
						<option value="SG">Singapore</option>
						<option value="SX">Sint Maarten (Dutch part)</option>
						<option value="SK">Slovakia</option>
						<option value="SI">Slovenia</option>
						<option value="SB">Solomon Islands</option>
						<option value="SO">Somalia</option>
						<option value="ZA">South Africa</option>
						<option value="GS">South Georgia and the South Sandwich Islands</option>
						<option value="SS">South Sudan</option>
						<option value="ES">Spain</option>
						<option value="LK">Sri Lanka</option>
						<option value="SD">Sudan</option>
						<option value="SR">Suriname</option>
						<option value="SJ">Svalbard and Jan Mayen</option>
						<option value="SZ">Swaziland</option>
						<option value="SE">Sweden</option>
						<option value="CH">Switzerland</option>
						<option value="SY">Syrian Arab Republic</option>
						<option value="TW">Taiwan, Province of China</option>
						<option value="TJ">Tajikistan</option>
						<option value="TZ">Tanzania, United Republic of</option>
						<option value="TH">Thailand</option>
						<option value="TL">Timor-Leste</option>
						<option value="TG">Togo</option>
						<option value="TK">Tokelau</option>
						<option value="TO">Tonga</option>
						<option value="TT">Trinidad and Tobago</option>
						<option value="TN">Tunisia</option>
						<option value="TR">Turkey</option>
						<option value="TM">Turkmenistan</option>
						<option value="TC">Turks and Caicos Islands</option>
						<option value="TV">Tuvalu</option>
						<option value="UG">Uganda</option>
						<option value="UA">Ukraine</option>
						<option value="AE">United Arab Emirates</option>
						<option value="GB">United Kingdom</option>
						<option value="UM">United States Minor Outlying Islands</option>
						<option value="UY">Uruguay</option>
						<option value="UZ">Uzbekistan</option>
						<option value="VU">Vanuatu</option>
						<option value="VE">Venezuela, Bolivarian Republic of</option>
						<option value="VN">Viet Nam</option>
						<option value="VG">Virgin Islands, British</option>
						<option value="VI">Virgin Islands, U.S.</option>
						<option value="WF">Wallis and Futuna</option>
						<option value="EH">Western Sahara</option>
						<option value="YE">Yemen</option>
						<option value="ZM">Zambia</option>
						<option value="ZW">Zimbabwe</option>
					</select>
					<select id="cjoFormState" name="state" class="cjoPopupFormAddressHalf">
							<option value="AL" selected="true">Alabama</option>
							<option value="AK">Alaska</option>
							<option value="AZ">Arizona</option>
							<option value="AR">Arkansas</option>
							<option value="CA">California</option>
							<option value="CO">Colorado</option>
							<option value="CT">Connecticut</option>
							<option value="DE">Delaware</option>
							<option value="DC">District Of Columbia</option>
							<option value="FL">Florida</option>
							<option value="GA">Georgia</option>
							<option value="HI">Hawaii</option>
							<option value="ID">Idaho</option>
							<option value="IL">Illinois</option>
							<option value="IN">Indiana</option>
							<option value="IA">Iowa</option>
							<option value="KS">Kansas</option>
							<option value="KY">Kentucky</option>
							<option value="LA">Louisiana</option>
							<option value="ME">Maine</option>
							<option value="MD">Maryland</option>
							<option value="MA">Massachusetts</option>
							<option value="MI">Michigan</option>
							<option value="MN">Minnesota</option>
							<option value="MS">Mississippi</option>
							<option value="MO">Missouri</option>
							<option value="MT">Montana</option>
							<option value="NE">Nebraska</option>
							<option value="NV">Nevada</option>
							<option value="NH">New Hampshire</option>
							<option value="NJ">New Jersey</option>
							<option value="NM">New Mexico</option>
							<option value="NY">New York</option>
							<option value="NC">North Carolina</option>
							<option value="ND">North Dakota</option>
							<option value="OH">Ohio</option>
							<option value="OK">Oklahoma</option>
							<option value="OR">Oregon</option>
							<option value="PA">Pennsylvania</option>
							<option value="RI">Rhode Island</option>
							<option value="SC">South Carolina</option>
							<option value="SD">South Dakota</option>
							<option value="TN">Tennessee</option>
							<option value="TX">Texas</option>
							<option value="UT">Utah</option>
							<option value="VT">Vermont</option>
							<option value="VA">Virginia</option>
							<option value="WA">Washington</option>
							<option value="WV">West Virginia</option>
							<option value="WI">Wisconsin</option>
							<option value="WY">Wyoming</option>
						</select>
						
					<input id="cjoFormZip" name="zip" class="cjoPopupFormInput cjoPopupFormAddressHalf" placeholder="Zip Code" data-required="true">
				</div>
				<br>
				<button id="cjoPopupFormNextStepButton" class="cjoPopupFormStepButton">NEXT</button>
			</div>
			<div id="cjoPopupFormStep2Tab">
				<span class="cjoPopupFormLabel">Upload Resume<span class="cjoRequiredAsterisk">*</span></span>
				<div class="cjoFormInput">
					<input id="cjoPopupFormResumeFile" name="resumeFile" type="file" class="cjoPopupFormInput" data-required="true">
				</div>
				<br>
				<div style="width: 100%;">
					Message:<span class="cjoRequiredAsterisk">*</span>
					<div>
						<textarea id="cjoFormNotes" name="additionalNotes" class="cjoPopupFormTextarea" rows="5" maxlength="5000" data-required="true"></textarea>
					</div>
				</div>
				<br>
				<input type="hidden" id="cjoPopupFormIsAsync" name="cjoIsAsync" value="false">
				<button id="cjoFormSubmit">SUBMIT</button>
			</div>
		</form>
	</div>
_END;
}

?>
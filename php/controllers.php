<?php
require_once("php/views.php");
require_once("php/globals.php");

function home_page_controller()
{
	global $cssFilePaths;
	global $javascriptFilePaths;
	
	$scripts = array("js/skrollr.js", "js/parallax.js", $javascriptFilePaths["main"], $javascriptFilePaths["index"]);
	display_header("Home", array($cssFilePaths["index"]), 0);
	home_page_view();
	display_footer($scripts);
}

function strategy_page_controller()
{
	global $cssFilePaths;
	global $javascriptFilePaths;
	
	$scripts = array("slick/slick.js", $javascriptFilePaths["variableInputWidth"], $javascriptFilePaths["main"], $javascriptFilePaths["slideShowExtend"], $javascriptFilePaths["getQuote"], $javascriptFilePaths["strategy"]);
	display_header("Strategy", array($cssFilePaths["strategy"], "slick/slick.css", "slick/slick-theme.css"), 1);
	strategy_page_view();
	display_footer($scripts);
}

function visualization_page_controller()
{
	global $cssFilePaths;
	global $javascriptFilePaths;
	
	$scripts = array($javascriptFilePaths["variableInputWidth"], $javascriptFilePaths["main"], $javascriptFilePaths["getQuote"], $javascriptFilePaths["visualization"]);
	display_header("Visualization", array($cssFilePaths["visualization"]), 2);
	visualization_page_view();
	display_footer($scripts);
}

function video_page_controller()
{
	global $cssFilePaths;
	global $javascriptFilePaths;
	
	$scripts = array($javascriptFilePaths["variableInputWidth"], $javascriptFilePaths["main"], $javascriptFilePaths["getQuote"], $javascriptFilePaths["video"]);
	display_header("Video", array($cssFilePaths["video"]), 3);
	video_page_view();
	display_footer($scripts);
}

function training_page_controller()
{
	global $cssFilePaths;
	global $javascriptFilePaths;
	
	$scripts = array($javascriptFilePaths["variableInputWidth"], $javascriptFilePaths["main"], $javascriptFilePaths["getQuote"], $javascriptFilePaths["training"]);
	display_header("Training", array($cssFilePaths["training"]), 4);
	training_page_view();
	display_footer($scripts);
}

function contact_page_controller()
{
	global $cssFilePaths;
	global $javascriptFilePaths;
	
	$scripts = array($javascriptFilePaths["variableInputWidth"], $javascriptFilePaths["main"], $javascriptFilePaths["uploadResume"], $javascriptFilePaths["contact"]);
	display_header("Contact", array($cssFilePaths["contact"]), 5);
	contact_page_view();
	display_footer($scripts);
}

function spinn_page_controller()
{
	global $cssFilePaths;
	global $javascriptFilePaths;
	
	$scripts = array($javascriptFilePaths["spinn"]);
	display_header_spinn("Spinn", array($cssFilePaths["spinn"]));
	spinn_page_view();
	display_footer_spinn($scripts);
}
?>
<?php
require_once("php/views.php");

function home_page_controller()
{
	$scripts = array("js/skrollr.js", "js/parallax.js", "js/main.js", "js/index.js");
	display_header("Home", array("css/index.css"));
	home_page_view();
	display_footer($scripts);
}

function strategy_page_controller()
{
	$scripts = array("slick/slick.js", "js/cjoVariableInputWidth.js", "js/main.js", "js/slideshowExtend.js", "js/getQuote.js", "js/strategy.js");
	display_header("Strategy", array("css/strategy.css", "slick/slick.css", "slick/slick-theme.css"));
	strategy_page_view();
	display_footer($scripts);
}

function visualization_page_controller()
{
	$scripts = array("js/cjoVariableInputWidth.js", "js/main.js", "js/getQuote.js", "js/visualization.js");
	display_header("Visualization", array("css/visualization.css"));
	visualization_page_view();
	display_footer($scripts);
}

function video_page_controller()
{
	$scripts = array("js/cjoVariableInputWidth.js", "js/main.js", "js/getQuote.js", "js/video.js");
	display_header("Video", array("css/video.css"));
	video_page_view();
	display_footer($scripts);
}

function training_page_controller()
{
	$scripts = array("js/cjoVariableInputWidth.js", "js/main.js", "js/getQuote.js", "js/training.js");
	display_header("Training", array("css/training.css"));
	training_page_view();
	display_footer($scripts);
}

function contact_page_controller()
{
	$scripts = array("js/cjoVariableInputWidth.js", "js/main.js", "js/uploadResume.js", "js/contact.js");
	display_header("Contact", array("css/contact.css"));
	contact_page_view();
	display_footer($scripts);
}

function spinn_page_controller()
{
	$scripts = array("js/spinn.js");
	display_header_spinn("Spinn", array("css/spinn.css"));
	spinn_page_view();
	display_footer_spinn($scripts);
}
?>
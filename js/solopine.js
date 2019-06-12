jQuery(document).ready(function($) {

	"use strict";
	
	// Menu
	$('#nav-wrapper .menu').slicknav({
		prependTo:'#slick-mobile-menu',
		label:'Menu',
		allowParentLinks: true
	});
	
	$('#featured-area .bxslider').bxSlider({
		adaptiveHeight: false,
		mode: 'fade',
		pager: ($(".bxslider div.feat-item").length > 1) ? true: false,
		pagerType: 'short',
		auto: true,
		pause: 6000,
		autoHover: true,
		nextText: 'Next <i class="fa fa-angle-right"></i>',
		prevText: '<i class="fa fa-angle-left"></i> Prev',
		onSliderLoad: function(){
			$(".sideslides").css("visibility", "visible");
		}
	});
	
	$('.post-img .bxslider').bxSlider({
	  adaptiveHeight: true,
	  mode: 'fade',
	  pager: false,
	  captions: true,
	  nextText: '<i class="fa fa-angle-right"></i>',
	  prevText: '<i class="fa fa-angle-left"></i>',
	  onSliderLoad: function(){
			$(".sideslides").css("visibility", "visible");
		}
	});
	
	$('.desk-top-search a, .mobile-top-search a').on('click', function ( e ) {
		e.preventDefault();
    	$('.desk-show-search, .mobile-show-search').animate({width:'toggle'});
    });
	$('.desk-show-search a, .mobile-show-search a').on('click', function ( e ) {
		e.preventDefault();
    	$('.desk-show-search, .mobile-show-search').animate({width:'toggle'});
    });
	
	// Fitvids
	$(document).ready(function(){
		$(".sp-container").fitVids();
	});
	
});
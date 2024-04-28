jQuery.noConflict()(function($) {
	'use strict';

	$(document).ready(function () {

	

		$('a[href^="#"]').on('click', function() {
		   $('a[href^="#"]').removeClass('active');
		    var id = $(this).attr('href');
		    $(this).addClass('active');
		    scrollToAnchor(id);

		    return false;

		});

		function scrollToAnchor(aid){
		    var aTag = $(aid);
		    $('html,body').animate({scrollTop: aTag.offset().top},'slow');
		}


	});


});

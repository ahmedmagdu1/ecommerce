
 

$(function(){
	'use strict';
	
	 // Calls selectBoxIt on your select box
  $("select").selectBoxIt({
	  autoWidth:false
  });
  
	// Hide Place Holder On Form Focus //
$('[placeholder]').focus(function (){
	$(this).attr('data-text', $(this).attr('placeholder'));
	$(this).attr('placeholder', '');
    }).blur(function(){
		$(this).attr('placeholder', $(this).attr('data-text'));
	});
	/* Add Astrisk on required field
	$('input').each(function(){
		if($(this).attr('required') === 'reqiered'){
			$(this).after('<span class="asterisk">*</span>');
		}
	}); */
	
	// Confirmation Delete Button
	
	$('.confirm').click(function(){
		return confirm('Are You Sure?');
	});
});


	$(document).ready(function(){
  $(".owl-carousel").owlCarousel();
});


$('.loop').owlCarousel({
    center: false,
    items:20,
    loop:true,
    margin:5,
	autoWidth:true,
    responsive:{
        1000:{
            items:4
        }
    }
});







$(document).ready(function () {
    //Initialize tooltips
    $('.nav-tabs > li a[title]').tooltip();
    
    //Wizard
    $('a[data-toggle="tab"]').on('show.bs.tab', function (e) {

        var $target = $(e.target);
    
        if ($target.parent().hasClass('disabled')) {
            return false;
        }
    });

    $(".next-step").click(function (e) {

        var $active = $('.wizard .nav-tabs li.active');
        $active.next().removeClass('disabled');
        nextTab($active);

    });
    $(".prev-step").click(function (e) {

        var $active = $('.wizard .nav-tabs li.active');
        prevTab($active);

    });
});

function nextTab(elem) {
    $(elem).next().find('a[data-toggle="tab"]').click();
}
function prevTab(elem) {
    $(elem).prev().find('a[data-toggle="tab"]').click();
}


//according menu

$(document).ready(function()
{
    //Add Inactive Class To All Accordion Headers
    $('.accordion-header').toggleClass('inactive-header');
	
	//Set The Accordion Content Width
	var contentwidth = $('.accordion-header').width();
	$('.accordion-content').css({});
	
	//Open The First Accordion Section When Page Loads
	$('.accordion-header').first().toggleClass('active-header').toggleClass('inactive-header');
	$('.accordion-content').first().slideDown().toggleClass('open-content');
	
	// The Accordion Effect
	$('.accordion-header').click(function () {
		if($(this).is('.inactive-header')) {
			$('.active-header').toggleClass('active-header').toggleClass('inactive-header').next().slideToggle().toggleClass('open-content');
			$(this).toggleClass('active-header').toggleClass('inactive-header');
			$(this).next().slideToggle().toggleClass('open-content');
		}
		
		else {
			$(this).toggleClass('active-header').toggleClass('inactive-header');
			$(this).next().slideToggle().toggleClass('open-content');
		}
	});
	

	
	
	
	
	$('.live-name').keyup(function(){
		$('.live-preview .caption h5').text($(this).val());
	});
	
	$('.live-price').keyup(function(){
		$('.live-preview span').text($(this).val());
	});
	
		return false;
});


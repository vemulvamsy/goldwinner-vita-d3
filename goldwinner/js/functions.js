jQuery(function() {
 /* $('[class^="btn-"')
    .on('mouseenter', function(e) {
    	$(this).removeClass('hovered');
    })
    .on('mouseout', function(e) {
    	$(this).addClass('hovered');
    });*/

  $('.btn-6')
    .on('mouseenter', function(e) {
			var parentOffset = $(this).offset(),
      		relX = e.pageX - parentOffset.left,
      		relY = e.pageY - parentOffset.top;
			$(this).find('span').css({top:relY, left:relX})
    })
    .on('mouseout', function(e) {
			var parentOffset = $(this).offset(),
      		relX = e.pageX - parentOffset.left,
      		relY = e.pageY - parentOffset.top;
    	$(this).find('span').css({top:relY, left:relX})
    });
  $('[href=#]').click(function(){return false});
});

jQuery(document).ready(function(){
  $('.button.product_type_grouped').append('<span></span>');
  $('.wpcf7-submit').append('<span></span>');
  //$('a.buybtn').append('<span></span>');
});

jQuery(document).ready(function(){

	$nav_list = $('#nav-toggle');
	$nav_list.click(function() {
		$('#nav-toggle').toggleClass('active');
    $('.pushmenu-left').toggleClass('pushmenu-active');
		$('.pushmenu-push').toggleClass('menu-body');
	});

	});
/*
 jQuery(function() {
    jQuery('ul.products li').matchHeight( {
    property: 'height',
    target: null,
    remove: false});

})
*/


//menu navigation button
function myFunction(x) {
    x.classList.toggle("change");
}


$(document).ready(function(){
	
	$('.i-nav').click(function(){
		$('nav.main-nav').toggleClass('show');
		//alert("hello");

	});
/*
	$(".vertical-blocks").hover(function(){
		$(".vertical-blocks").toggleClass("vertical-white");
		$(this).addClass("vertical-block");
		$(this).removeClass("vertical-white");
	});
*/
});


/*
document.addEventListener("DOMContentLoaded", function(event) {
	var gauge3 = new JustGage({
		id: "gauge3"
	});
});
*/


//accordion footer
$(document).ready(function() {
    $('[data-behavior=accordion]').simpleAccordion({cbOpen:accOpen, cbClose:accClose});
});


function accClose(e, $this) {
    $this.find('span').fadeIn(200);
}

function accOpen(e, $this) {
    $this.find('span').fadeOut(200)
}




function init() {
window.addEventListener('scroll', function(e){
  var distanceY = window.pageYOffset || document.documentElement.scrollTop,
    shrinkOn = (window.innerHeight )/9,
    header = document.querySelector("header");
  if (distanceY > shrinkOn) {
    classie.add(header,"smaller");
  } else {
    if (classie.has(header,"smaller")) {
      classie.remove(header,"smaller");
    }
  }
});
}
window.onload = init();

//-------------------------------------




 

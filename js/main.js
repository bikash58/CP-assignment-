/*
* Upload image and preview
*/
function resetImagePreview(action) {
	switch(action){
		case 'reset':
			for (var i = 0; i < 5; i++) {
				$('.thumb-sub-'+i+' img').attr('src','');
			}
			break;
		case 'hide':
			for (var i = 0; i < 5; i++) {
				$('.thumb-sub-'+i+'-file').hide();
			}
			break;
		default:
	}
}

resetImagePreview('hide');

function readURL(input,val) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    reader.onload = function (e) {
      $(val).attr('src', e.target.result);
    }

    try {
    	reader.readAsDataURL(input.files[0]);
    }catch(e){
    	alert('error');
    }

  }
}

$("#imgInp").change(function(){
  readURL(this, "#product-image-preview");
});

$('#product-image-preview').click(function() {
	$('#imgInp').click();
});

function inputChange(className, inputName){
	var attachTo = className+' img';
	
	$(inputName).change(function() {
		readURL(this, attachTo);
	});

	$(inputName).click();
}

$('.product-thumbnail-sub').click(function(e) {
	var className = '.'+$(this).attr('class').substr(22);
	var inputName = className+'-file';
	inputChange(className,inputName);
});


/* submiting form */
$('#upload').click(function(e) {
	$('#form-vendor-additem').submit();
});

$('.alert.alert-success').css('display', 'none');
$('.alert.alert-danger').css('display', 'none');

function clearForm() {
	$('imgInp').val('asd');
	$('#form-vendor-additem')[0].reset();
	$('#product-image-preview').attr('src', '');
	resetImagePreview('reset');
}

/* customized alert message function */
function showCustomAlert(showOn, thisText) {
	try {
		$(showOn).css('display', 'inline-block');
		$(showOn).text(thisText);
		$(showOn).fadeOut(2000);
	} catch(e) {}
}



// submitting a new product form
$(document).on('submit', 'form#form-vendor-additem', function(e) {
	// prevent reloading of current page
	e.preventDefault();

	// at least one image needed
	if($('#imgInp').get(0).files.length === 0){ 
		showCustomAlert('.alert-custom-danger','Please select at least one image');
		return;
	}

	//get form object and pass it on to formdata
	var objForm = $('#form-vendor-additem')[0];
	var formData = new FormData(objForm);

	// actual ajax implementation
	$.ajax({
		type: 'post',
		url: 'vendor/uploadimage',
		data: formData,
		contentType: false,
		processData: false,
		success: function(data) {
			clearForm();
			showCustomAlert('.alert-custom-success', 'Product added successfully.');
		},
		error: function(data) {
			showCustomAlert('.alert-custom-danger', 'An error occured Please try again later.');
		}
	});
})

/* horizontal scrolling */
$(document).ready(function() {
	$().on('click', function(){

	});
});

/* google maps */
$(document).ready(function() {
	if (document.getElementById('map-canvas')){
 
	  var markerLatLng = new google.maps.LatLng(27.702438, 85.342117);

	  var mapOptions = {
	    zoom: 15,
	    center: markerLatLng,
	    mapTypeId: google.maps.MapTypeId.ROADMAP
	  };
	  
	  var map = new google.maps.Map(document.getElementById("map-canvas"), mapOptions);

	  var markerIcon = {
	        url: 'http://image.flaticon.com/icons/svg/252/252025.svg',
	        scaledSize: new google.maps.Size(80, 80),
	        origin: new google.maps.Point(0, 0),
	        anchor: new google.maps.Point(32,65),
	        labelOrigin:  new google.maps.Point(40,33),
	      };
	  
	  var markerLabel = 'We Are Here!';
	  var marker = new google.maps.Marker({
	    map: map,
	    animation: google.maps.Animation.DROP,
	    position: markerLatLng,
	    icon: markerIcon,
	    label: {
	      text: markerLabel,
	      color: "#000000",
	      fontSize: "16px",
	      fontWeight: "bold"
	    }
	  });
	 
	}
});


// function to scroll horizontal
function horizontalScroller(name, factor) {

  $('.next').on('click',function() {
    // get current position of div(s)

    var currentPos = $(this).prev($(name)).scrollLeft();
    $(this).prev($(name)).stop().animate({scrollLeft: currentPos+=factor}, 500);

  });

  $('.prev').on('click',function() {
  	// get current position of div(s)

    var currentPos = $(this).next($(name)).scrollLeft();
    $(this).next($(name)).stop().animate({scrollLeft: currentPos-=factor}, 500);

  });

}

// product horizontal scroller
$(document).ready(function(){
	horizontalScroller('.horizontal-scroll-holder .content', 300);
});

// Simple sticky scrolling effect
// Create a clone of the menu, right next to original.

//scrollIntervalID = setInterval(stickIt, 10);
//$('.sticky-nav').css({'position':'fixed','left':0+'px','right':'0px','top':'0px','z-index':9999,'margin':'0'});
$(document).ready(function() {

	$('.sticky-nav').addClass('original').clone().insertAfter('.sticky-nav')
	.addClass('cloned').css('position','fixed').css('top','0').css('z-index','500').removeClass('original').hide();

	$(window).on('scroll', function() {
		stickIt();	
	})
});

function stickIt() {

  var orgElementPos = $('.original').offset();
  orgElementTop = orgElementPos.top;               

  if ($(window).scrollTop() >= (orgElementTop)) {

    orgElement = $('.original');
    coordsOrgElement = orgElement.offset();
    leftOrgElement = coordsOrgElement.left;
    widthOrgElement = orgElement.css('width');
    $('.cloned').css('width',orgElement.width()+'px').show();
    $('.original').css('visibility','hidden');

  } else {
    $('.cloned').hide();
    $('.original').css('visibility','visible');
  }
}

// loading image before page load
$(window).on('load', function() {	
	$('.preloader').fadeOut(1000);
});
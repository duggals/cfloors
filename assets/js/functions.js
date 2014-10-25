
jQuery(document).ready(function(){	


	 $("#phone").keydown(function (e) {
        // Allow: backspace, delete, tab, escape, enter and .
        if ($.inArray(e.keyCode, [32,46, 8, 9, 27, 13, 110, 190]) !== -1 ||
             // Allow: Ctrl+A
            (e.keyCode == 65 && e.ctrlKey === true) || 
             // Allow: home, end, left, right
            (e.keyCode >= 35 && e.keyCode <= 39)) {
                 // let it happen, don't do anything
                 return;
        }
        // Ensure that it is a number and stop the keypress
        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
            e.preventDefault();
        }
    });




	$( ".wpcf7-form" ).submit(function( event ) {

		if(jQuery("#name").val()==""){
			jQuery("#name").addClass("notvalid");
		}else{
			jQuery("#name").removeClass("notvalid");
		}

		if(jQuery("#email").val()==""){
			jQuery("#email").addClass("notvalid");
		}else{
			    if (!isValidEmailAddress(jQuery("#email").val( ))) {
			    	jQuery("#email").addClass("notvalid");
			    }else{
			    	jQuery("#email").removeClass("notvalid");
			    }
		}

		if(jQuery("#phone").val()==""){
			jQuery("#phone").addClass("notvalid");
		}else{
			jQuery("#phone").removeClass("notvalid");
		}

		if(jQuery("#message").val()==""){
			jQuery("#message").addClass("notvalid");
		}else{
			jQuery("#message").removeClass("notvalid");
		}

		if($(".wpcf7-form input, .wpcf7-form textarea").hasClass("notvalid")){
			event.preventDefault();
		}else{
			return true;
		}
  		
	});
});

jQuery(function(){
	jQuery('.sf-menu').mobileMenu({defaultText: "Navigate to..."});
});

// Init navigation menu
jQuery(function(){
	// main navigation init
	jQuery('ul.sf-menu').superfish({
	delay: 1000, // the delay in milliseconds that the mouse can remain outside a sub-menu without it closing
	animation: {
		opacity: "show",
		height: "show"
		}, // used to animate the sub-menu open
		speed: "normal", // animation speed 
		autoArrows: true, // generation of arrow mark-up (for submenu)
		disableHI: true // to disable hoverIntent detection
		});

		//Zoom fix
		//IPad/IPhone
		var viewportmeta = document.querySelector && document.querySelector('meta[name="viewport"]'),
			ua = navigator.userAgent,
				gestureStart = function () {
					viewportmeta.content = "width=device-width, minimum-scale=0.25, maximum-scale=1.6, initial-scale=1.0";
				},
				scaleFix = function () {
				if (viewportmeta && /iPhone|iPad/.test(ua) && !/Opera Mini/.test(ua)) {
				viewportmeta.content = "width=device-width, minimum-scale=1.0, maximum-scale=1.0";
				document.addEventListener("gesturestart", gestureStart, false);
			}
		};
	scaleFix();
})


jQuery(function() {
	var myCamera = jQuery('#camera53ab8bad09aa9');
	if (!myCamera.hasClass('motopress-camera')) {
		myCamera.addClass('motopress-camera');
		myCamera.camera({
			alignment           : 'topCenter', //topLeft, topCenter, topRight, centerLeft, center, centerRight, bottomLeft, bottomCenter, bottomRight
			autoAdvance         : true, //true, false
			mobileAutoAdvance   : true, //true, false. Auto-advancing for mobile devices
			barDirection        : 'leftToRight', //'leftToRight', 'rightToLeft', 'topToBottom', 'bottomToTop'
			barPosition         : 'top', //'bottom', 'left', 'top', 'right'
			cols                : 12,
			easing              : 'easeOutQuad', //for the complete list http://jqueryui.com/demos/effect/easing.html
			mobileEasing        : '', //leave empty if you want to display the same easing on mobile devices and on desktop etc.
			fx                  : "simpleFade", //'random','simpleFade', 'curtainTopLeft', 'curtainTopRight', 'curtainBottomLeft',          'curtainBottomRight', 'curtainSliceLeft', 'curtainSliceRight', 'blindCurtainTopLeft', 'blindCurtainTopRight', 'blindCurtainBottomLeft', 'blindCurtainBottomRight', 'blindCurtainSliceBottom', 'blindCurtainSliceTop', 'stampede', 'mosaic', 'mosaicReverse', 'mosaicRandom', 'mosaicSpiral', 'mosaicSpiralReverse', 'topLeftBottomRight', 'bottomRightTopLeft', 'bottomLeftTopRight', 'bottomLeftTopRight'
											//you can also use more than one effect, just separate them with commas: 'simpleFade, scrollRight, scrollBottom'
			mobileFx            : '', //leave empty if you want to display the same effect on mobile devices and on desktop etc.
			gridDifference      : 250, //to make the grid blocks slower than the slices, this value must be smaller than transPeriod
			height              : '40.85%', //here you can type pixels (for instance '300px'), a percentage (relative to the width of the slideshow, for instance '50%') or 'auto'
			imagePath           : 'images/', //he path to the image folder (it serves for the blank.gif, when you want to display videos)
			loader              : "no", //pie, bar, none (even if you choose "pie", old browsers like IE8- can't display it... they will display always a loading bar)
			loaderColor         : '#ffffff',
			loaderBgColor       : '#eb8a7c',
			loaderOpacity       : 1, //0, .1, .2, .3, .4, .5, .6, .7, .8, .9, 1
			loaderPadding       : 0, //how many empty pixels you want to display between the loader and its background
			loaderStroke        : 3, //the thickness both of the pie loader and of the bar loader. Remember: for the pie, the loader thickness must be less than a half of the pie diameter
			minHeight           : '114px', //you can also leave it blank
			navigation          : true, //true or false, to display or not the navigation buttons
			navigationHover     : false, //if true the navigation button (prev, next and play/stop buttons) will be visible on hover state only, if false they will be visible always
			pagination          : false,
			playPause           : false, //true or false, to display or not the play/pause buttons
			pieDiameter         : 33,
			piePosition         : 'rightTop', //'rightTop', 'leftTop', 'leftBottom', 'rightBottom'
			portrait            : true, //true, false. Select true if you don't want that your images are cropped
			rows                : 8,
			slicedCols          : 12,
			slicedRows          : 8,
			thumbnails          : false,
			time                : 7000, //milliseconds between the end of the sliding effect and the start of the next one
			transPeriod         : 1500, //lenght of the sliding effect in milliseconds

							////////callbacks

			onEndTransition     : function(){}, //this callback is invoked when the transition effect ends
			onLoaded            : function(){}, //this callback is invoked when the image on a slide has completely loaded
			onStartLoading      : function(){}, //this callback is invoked when the image on a slide start loading
			onStartTransition   : function(){} //this callback is invoked when the transition effect starts
		});
	}
});

function isValidEmailAddress(emailAddress) {
    var pattern = new RegExp(/^(("[\w-+\s]+")|([\w-+]+(?:\.[\w-+]+)*)|("[\w-+\s]+")([\w-+]+(?:\.[\w-+]+)*))(@((?:[\w-+]+\.)*\w[\w-+]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][\d]\.|1[\d]{2}\.|[\d]{1,2}\.))((25[0-5]|2[0-4][\d]|1[\d]{2}|[\d]{1,2})\.){2}(25[0-5]|2[0-4][\d]|1[\d]{2}|[\d]{1,2})\]?$)/i);
    return pattern.test(emailAddress);
};





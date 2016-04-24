;(function () {
	
	'use strict';

	// iPad and iPod detection	
	var isiPad = function(){
	  return (navigator.platform.indexOf("iPad") != -1);
	};

	var isiPhone = function(){
    return (
      (navigator.platform.indexOf("iPhone") != -1) || 
      (navigator.platform.indexOf("iPod") != -1)
    );
	};

	// Mobile Menu Clone ( Mobiles/Tablets )
	var mobileMenu = function() {
		if ( $(window).width() < 769 ) {
			$('html,body').addClass('overflow');

			if ( $('#mobile-menu').length < 1 ) {
				
				var clone = $('#primary-menu').clone().attr({
					id: 'mobile-menu-ul',
					class: ''
				});
				var cloneLogo = $('#logo').clone().attr({
					id : 'logo-mobile',
					class : ''
				});

				$('<div id="logo-mobile-wrap">').append(cloneLogo).insertBefore('#header-section');
				$('#logo-mobile-wrap').append('<a href="#" id="mobile-menu-btn"><i class="ti-menu"></i></a>');
				$('<div id="mobile-menu">').append(clone).insertBefore('#header-section');

				$('#header-section').hide();
				$('#logo-mobile-wrap').show();
			} else {
				$('#header-section').hide();
				$('#logo-mobile-wrap').show();
			}

		} else {

			$('#logo-mobile-wrap').hide();
			$('#header-section').show();
			$('html,body').removeClass('overflow');
			if ( $('body').hasClass('mobile-menu-visible')) {
				$('body').removeClass('mobile-menu-visible');
			}
		}
	};

	// Click outside of the Mobile Menu
	var mobileMenuOutsideClick = function() {
		$(document).click(function (e) {
	    var container = $("#mobile-menu, #mobile-menu-btn");
	    if (!container.is(e.target) && container.has(e.target).length === 0) {
	      $('body').removeClass('mobile-menu-visible');
	    }
		});
	};


	// Mobile Button Click
	var mobileBtnClick = function() {
		// $('#mobile-menu-btn').on('click', function(e){
		$(document).on('click', '#mobile-menu-btn', function(e){
			e.preventDefault();
			if ( $('body').hasClass('mobile-menu-visible') ) {
				$('body').removeClass('mobile-menu-visible');
			} else {
				$('body').addClass('mobile-menu-visible');
			}
			
		});
	};


	// Main Menu Superfish
	var mainMenu = function() {

		$('#primary-menu').superfish({
			delay: 0,
			animation: {
				opacity: 'show'
			},
			speed: 'fast',
			cssArrows: true,
			disableHI: true
		});

	};

	// Superfish Sub Menu Click ( Mobiles/Tablets )
	var mobileClickSubMenus = function() {

		$('body').on('click', '.sub-ddown', function(event) {
			event.preventDefault();
			var $this = $(this),
				li = $this.closest('li');
			li.find('> .sub-menu').slideToggle(200);
		});

	};

	// Window Resize
	var windowResize = function() {
		$(window).resize(function(){
			mobileMenu();
		});

	};

	// Window Scroll
	var windowScroll = function() {
		$(window).scroll(function() {

			var scrollPos = $(this).scrollTop();
			if ( $('body').hasClass('mobile-menu-visible') ) {
				$('body').removeClass('mobile-menu-visible');
			}

			if ( $(window).scrollTop() > 70 ) {
				$('#header-section').addClass('scrolled');
			} else {
				$('#header-section').removeClass('scrolled');
			}


			// Parallax
			$('.header-image-intro').css({
	      'opacity' : 1-(scrollPos/300)
	    });

		});
	};

	// Fast Click for ( Mobiles/Tablets )
	var mobileFastClick = function() {
		if ( isiPad() && isiPhone()) {
			FastClick.attach(document.body);
		}
	};

	// Easy Repsonsive Tabs
	var responsiveTabs = function(){
		
		$('#tab-feature').easyResponsiveTabs({
      type: 'default',
      width: 'auto', 
      fit: true, 
      inactive_bg: '',
      active_border_color: '',
      active_content_border_color: '',
      closed: 'accordion',
      tabidentify: 'hor_1'
            
    });
    $('#tab-feature-center').easyResponsiveTabs({
      type: 'default',
      width: 'auto',
      fit: true, 
      inactive_bg: '',
      active_border_color: '',
      active_content_border_color: '',
      closed: 'accordion', 
      tabidentify: 'hor_1' 
      
    });
    $('#tab-feature-vertical').easyResponsiveTabs({
      type: 'vertical',
      width: 'auto',
      fit: true,
      inactive_bg: '',
      active_border_color: '',
      active_content_border_color: '',
      closed: 'accordion',
      tabidentify: 'hor_1'
    });
	};

	// Owl Carousel
	var owlCrouselFeatureSlide = function() {
		
		var owl2 = $('.owl-carousel-2');
		owl2.owlCarousel({
				items: 1,
		    loop: true,
		    margin: 0,
		    lazyLoad: true,
		    responsiveClass: true,
		    nav: true,
		    dots: true,
		    smartSpeed: 500,
		    navText: [
		      "<i class='ti-arrow-left owl-direction'></i>",
		      "<i class='ti-arrow-right owl-direction'></i>"
	     	],
		    responsive: {
		        0: {
		          items: 1,
		          nav: true
		        },
		        600: {
		          items: 1,
		          nav: true
		        },
		        1000: {
		          items: 1,
		          nav: true
		        }
	    	}
		});
	};

	// MagnificPopup
	var magnifPopup = function() {
		$('.image-popup').magnificPopup({
			type: 'image',
		  gallery:{
		    enabled:true
		  }
		});
	};

    // Handling submitted forms
    function handleFormSubmit(event) {

        // Stop from submitting normally
        event.preventDefault();

        // Get the values submitted in the form
        var formData = getFormData(event.target.id);
        var url = event.target.action;

        // Submit the form with the encoded data and retrieve the json response
        var xhttp = new XMLHttpRequest();

        xhttp.open("POST", url, true);
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.onreadystatechange = function() {

            if (xhttp.readyState == 4 && xhttp.status == 200) {

                var response = $.parseJSON(xhttp.responseText);

                // If we have a 200 response, cycle through and decide what to do
                // based on the specific form that is being submitted.
                if(response['status_code'] == '200'){

                    switch(event.target.id)
                    {
                        case 'schedule-form':
                                document.getElementById('schedule_thanks_message').style.display = 'none';
                                document.getElementById('schedule_mandatory_message').style.display = 'none';
                                document.getElementById('schedule_help_message').style.display = 'none';
                                document.getElementById('schedule-form').style.display = 'none';
                                document.getElementById('schedule_return_message_container').style.display = 'block';
                                document.getElementById('schedule_return_message').innerHTML = '<h3>' + response['response_message'] + '</h3>';

                            break;

                        case 'contact-form':

                            document.getElementById('contact-form').style.display = 'none';
                            document.getElementById('contact_return_message').innerHTML = '<h3>' + response['response_message'] + '</h3>';

                            break;

                        case 'services-form-hearings':

                            document.getElementById('services-form-hearings').style.display = 'none';
                            document.getElementById('services_hearings_return_message').innerHTML = '<h3>' + response['response_message'] + '</h3>';

                            break;

                        case 'services-form-statements':

                            document.getElementById('services-form-statements').style.display = 'none';
                            document.getElementById('services_statements_return_message').innerHTML = '<h3>' + response['response_message'] + '</h3>';

                            break;

                        case 'services-form-conference':

                            document.getElementById('services-form-conference').style.display = 'none';
                            document.getElementById('services_conference_return_message').innerHTML = '<h3>' + response['response_message'] + '</h3>';

                            break;

                        case 'services-form-depositions':

                            document.getElementById('services-form-depositions').style.display = 'none';
                            document.getElementById('services_depositions_return_message').innerHTML = '<h3>' + response['response_message'] + '</h3>';

                            break;

                        default:
                            break;
                    }
                }
                //
                // If we have a 422 response code, give missing parameter advice
                //
                if(response['status_code'] == '422'){

                    var amountOfErrors = response['response_errors'].length;
                    var formElements;
                    if(event.target.id == 'schedule-form') formElements = ['name', 'email', 'phone'];
                    else if(event.target.id == 'contact-form') formElements = ['name', 'email', 'message'];
                    else if(event.target.id == 'services-form-depositions') formElements = ['name', 'email', 'messageDepositions'];
                    else if(event.target.id == 'services-form-hearings') formElements = ['name', 'email', 'messageHearings'];
                    else if(event.target.id == 'services-form-conference') formElements = ['name', 'email', 'messageConference'];
                    else if(event.target.id == 'services-form-statements') formElements = ['name', 'email', 'messageStatements'];

                    // Restore defaults to form elements that have been successfully updated.
                    for (var j = 0; j < formElements.length; j++)
                    {

                        if(!isInArray(formElements[j], response['response_errors'])){

                            document.getElementById(formElements[j]).style.border = "2px solid #ccc";
                            document.getElementById(formElements[j]).placeholder = formElements[j].charAt(0).toUpperCase() + formElements[j].slice(1) + ' *';
                        }

                    }

                    // Detect form elements that need changes by the user.
                    for (var i = 0; i < amountOfErrors; i++)
                    {
                        document.getElementById(response['response_errors'][i]).style.border = "2px solid #FF9494";
                        document.getElementById(response['response_errors'][i]).placeholder = "Please enter a valid " +
                            response['response_errors'][i]  + ".";
                    }

                    // Animate up to specific element.
                    if(event.target.id == 'schedule-form') animate('#schedule_thanks_message');
                    if(event.target.id == 'contact-form') animate('#contact-form');

                }
            }

            // Check if value is in an array.
            function isInArray(value, array) {
                return array.indexOf(value) > -1;
            }
        };

        // url encode form data for sending as post data
        var encoded = Object.keys(formData).map(function(k) {
            return encodeURIComponent(k) + '=' + encodeURIComponent(formData[k])
        }).join('&');

        xhttp.send(encoded);
    }

    // Animate to a specific element on a page
    function animate(id){

        $('html, body').animate({
            scrollTop: $(id).offset().top
        }, 1500);
    }

    // Get all data in form and return object
    function getFormData(formName) {
        var elements = document.getElementById(formName).elements; // all form elements
        var fields = Object.keys(elements).filter(function(k){
            return k.length > 1 && elements[k].name && elements[k].name.length > 0 ;
        });
        var data = {};
        fields.forEach(function(k){
            data[k] = elements[k].value;
        });
        console.log(data);
        return data;
    }

    function loaded() {

        // This is where we deal with what happens after a form is submitted.
        console.log('contact form submission handler loaded successfully');

        if(location.pathname.substring(location.pathname.lastIndexOf("/") + 1) == 'scheduleonline.php')
        {
            // Schedule form: bind to the submit event of our form
            var scheduleForm = document.getElementById('schedule-form');
            scheduleForm.addEventListener("submit", handleFormSubmit, false);
        }
        else if(location.pathname.substring(location.pathname.lastIndexOf("/") + 1) == 'services.php')
        {
            // Services forms: hearing, statements, conference, depositions; bind to the submit event of these forms.
            var servicesFormHearings = document.getElementById('services-form-hearings');
            servicesFormHearings.addEventListener("submit", handleFormSubmit, false);

            var servicesFormStatements = document.getElementById('services-form-statements');
            servicesFormStatements.addEventListener("submit", handleFormSubmit, false);

            var servicesFormConference = document.getElementById('services-form-conference');
            servicesFormConference.addEventListener("submit", handleFormSubmit, false);

            var servicesFormDepositions = document.getElementById('services-form-depositions');
            servicesFormDepositions.addEventListener("submit", handleFormSubmit, false);
        }
        else
        {
            // Contact Form: bind to the submit event of our form
            var contactForm = document.getElementById('contact-form');
            contactForm.addEventListener("submit", handleFormSubmit, false);
        }

    }

    function hoverChangeCss(id, dataTarget, classHover, classNormal){

        $(id).hover(function() {

            // On hover, change color to same shade as highlighted button
            document.getElementById(dataTarget).className = classHover;

        }, function() {

            // On hover end, reset background color to white
            document.getElementById(dataTarget).className = classNormal;
        });
    }


    // When buttons are hovered over in the main page, this function changes the above icons colours
    function highlightIcons(){

        if(location.pathname.substring(location.pathname.lastIndexOf("/") + 1) == 'index.php') {

            var buttons = document.getElementsByClassName("btn btn-primary btn-sm");

            for (var i = 0; i < buttons.length; i++) {

                var id = "#" + buttons[i].id;
                var dataTarget = $(id).attr('data-target');

                hoverChangeCss(id, dataTarget, 'feature-icon-btn-hover circle', 'feature-icon circle');

            }
        }

    }

    // Auto populate each message box on the services page, with an auto response text
    function populateServiceFormsText(){

        if(location.pathname.substring(location.pathname.lastIndexOf("/") + 1) == 'services.php') {

            // Derive elements
            var classes = document.getElementsByClassName("form-control input-lg text-center");
            var idElements = [];

            // Get todays date
            var today = new Date();
            var dd = today.getDate();
            var mm = today.getMonth()+1; //January is 0!
            var yyyy = today.getFullYear();

            if(dd<10) {
                dd='0'+dd
            }

            if(mm<10) {
                mm='0'+mm
            }

            today = mm+'/'+dd+'/'+yyyy;

            // Cycle through elements to select the ones we need (because for some reason the getElementsByIds method is fiddly and strange).
            for(var i = 0; i < classes.length; i++){

                if(classes[i].id == 'messageConference'){ idElements.push(classes[i]) } else
                if(classes[i].id == 'messageDepositions'){ idElements.push(classes[i]) } else
                if(classes[i].id == 'messageStatements'){ idElements.push(classes[i]) } else
                if(classes[i].id == 'messageHearings') idElements.push(classes[i])
            }

            // Change the default text of the message boxes on the services page to RE: *service name* / *date*
            for(var j = 0; j < idElements.length; j++){

                var elementValue = '';

                switch(idElements[j].name){

                    case 'messageConference': elementValue = "RE: Conference rooms, to take place on " + today + "."; break;
                    case 'messageDepositions': elementValue = "RE: Depositions, to take place on " + today + "."; break;
                    case 'messageStatements': elementValue = "RE: Statements, to take place on " + today + "."; break;
                    case 'messageHearings': elementValue = "RE: Hearings to take place on " + today + "."; break;
                    default: break;
                }

                idElements[j].value = elementValue;
            }
        }
    }

    $(function(){

        mobileFastClick();
        responsiveTabs();
        mobileMenu();
        mainMenu();
        magnifPopup();
        mobileBtnClick();
        mobileClickSubMenus();
        mobileMenuOutsideClick();
        owlCrouselFeatureSlide();
        windowResize();
        windowScroll();
        highlightIcons();
        populateServiceFormsText();

    });

    // After the page has loaded, assign the form event listeners
    document.addEventListener('DOMContentLoaded', loaded, false);

}());
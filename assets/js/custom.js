jQuery(document).on('ready',function() {

	 "use strict";
	 
/*-------------------------------------------
		Responsive Expandable Navigation
-------------------------------------------*/
	$( ".has-sub-menu" ).append("<button class='plus'>+</button><button class='minus'>-</button>");
	$( ".has-sub-menu > .minus" ).hide();
	if ( matchMedia( 'only screen and (max-width: 991px)' ).matches ) {
		$( ".has-sub-menu > .sub-menu" ).hide();
	}
	
	$('.has-sub-menu > .plus').each(function() {
		$(this).on('click',function() {
			$(this).parent().children(".sub-menu").slideToggle( "slow", function() {
				$(this).parent().children( ".plus" ).hide();
				$(this).parent().children( ".minus" ).show();
			});
		});
	});
	
	$('.has-sub-menu > .minus').each(function() { 
		$(this).on('click',function() {
			$(this).parent().children(".sub-menu").slideToggle( "slow", function() {
				$(this).parent().children( ".minus" ).hide();
				$(this).parent().children( ".plus" ).show();
			});
		});
	});
/*--------------------------------------
		Counter Settings
----------------------------------------*/
	$('.counter-section').waypoint(function(direction) {
		$('.timer').countTo({
			speed: 3500
		});
		this.destroy()
	}, {
		offset: 'bottom-in-view'
	});
	
	$('.project-counter-area').waypoint(function(direction) {
		$('.timer').countTo({
		speed: 3500
		});
		this.destroy()
		}, {
		offset: 'bottom-in-view'
	});
	
/*--------------------------------------
		Client Testimonial Settings
----------------------------------------*/
	$("#client_testimonial").owlCarousel({
		items : 2,
		nav: true,
		navText: false,
		loop: true,
		autoPlay: true,
		slideSpeed : 500,
		paginationSpeed : 600,
		pagination: false,
		responsive: {
			1024: {
				items: 2
			},
			768: {
				items: 1
			},
			736: {
				items: 1
			},
			667: {
				items: 1
			},
			568: {
				items: 1
			},
			414: {
				items: 1
			},
			375: {
				items: 1
			},
			320: {
				items: 1
			}
		}
 
	});
	
	$("#testimonial_two").owlCarousel({
		items : 1,
		nav: true,
		navText: false,
		loop: true,
		autoPlay: true,
		slideSpeed : 500,
		paginationSpeed : 600,
		pagination: false
 
	});
	
	$("#testimonial_three").owlCarousel({
		items : 1,
		nav: true,
		navText: false,
		loop: true,
		autoPlay: true,
		slideSpeed : 500,
		paginationSpeed : 600,
		pagination: false
 
	});
	
	$(function(){
		$('#project_filter').mixItUp();
	});
	
	/*--------------------------------------
			Slide Search Settings
	----------------------------------------*/
	$('.search').on('click',function (e) {
		e.preventDefault();
		if($('.search-btn').hasClass('fa-search')){
			$('.search-open').fadeIn(500);
			$('.search-btn').removeClass('fa-search');
			$('.search-btn').addClass('fa-times');
		} else {
			$('.search-open').fadeOut(500);
			$('.search-btn').addClass('fa-search');
			$('.search-btn').removeClass('fa-times');
		}   
	});
	
	/*--------------------------------------
			Main Slider  Settings
	----------------------------------------*/
	var revapi;	
	revapi = $("#rev_slider_1").revolution({
		sliderType:"standard",
		sliderLayout:"auto",
		responsiveLevels:[4096,1280,991,480],
		delay:9000,
		navigation: {
			touch:{
				touchenabled:"on",
				swipe_threshold: 75,
				swipe_min_touches: 1,
				swipe_direction: "horizontal",
				drag_block_vertical: false,
				tmp:''
			},
			arrows:{
					enable: true,
					hide_onmobile: false,
					hide_onleave: true,
					tmp: '',
					left: {
					  h_align: "left",
					  v_align: "center",
					  h_offset: 0,
					  v_offset: 40
					},
					right: {
					  h_align: "right",
					  v_align: "center",
					  h_offset: -40,
					  v_offset: 40
					}
				},
			bullets:{
				enable:false
			}			
		},			
		gridwidth:[1140,930,720,300],
		gridheight:[625,500,500,400]		
	});

	/*-----------------------------------------------------------
	MagnificPopup Settings
	--------------------------------------------------------------*/
	$('.play-btn').magnificPopup({
		type: 'iframe'
	});
	$.extend(true, $.magnificPopup.defaults,{
		iframe: {
			patterns: {
			   youtube: {
				  index: 'youtube.com/', 
				  id: 'v=', 
				  src: 'http://www.youtube.com/embed/%id%?autoplay=1' 
			  }
			}
		}
	});
	
	$('.map-hyperlink').magnificPopup({
		type: 'iframe'
	});  
	/*-----------------------------------------------
            Skillbar Settings
	------------------------------------------------- */
	$('.skillbar').waypoint(function(direction) {
		$('.skillbar[data-percent]').each(function () {
			var skillbarWrapper = $(this);
			var progress = $(this).find('span.skill-bar-percent');
			var percentage = Math.ceil($(this).attr('data-percent'));
				$({countNum: 0}).animate({countNum: percentage}, {
				  duration: 3000,
				  step: function() {
					// What todo on every count
				  var pct = '';
				  if(percentage == 0){
					pct = Math.floor(this.countNum) + '%';
				  }else{
					pct = Math.floor(this.countNum+1) + '%';
				  }
				  progress.text(pct) && skillbarWrapper.find('.skillbar-bar').css('width',pct);
				  }
				});
			  })
			this.destroy()
		}, {
		offset: 'bottom-in-view'
	});
/*-----------------------------------------------
		Newletter Subscribe Settings
------------------------------------------------- */
	$(".newsletter-signup").ajaxChimp({
		callback: mailchimpResponse,
		url: "http://codepassenger.us10.list-manage.com/subscribe/post?u=6b2e008d85f125cf2eb2b40e9&id=6083876991" // Replace your mailchimp post url inside double quote "".  
	});
	function mailchimpResponse(resp) {
		 if(resp.result === 'success') {
		 
			$('.newsletter-success').html(resp.msg).fadeIn().delay(3000).fadeOut();
			
		} else if(resp.result === 'error') {
			$('.newsletter-error').html(resp.msg).fadeIn().delay(3000).fadeOut();
		}  
	};
	/*-----------------------------------------------
			Ajax Contact Form
	------------------------------------------------- */
	function isValidEmail(emailAddress) {
	var pattern = new RegExp(/^(("[\w-\s]+")|([\w-]+(?:\.[\w-]+)*)|("[\w-\s]+")([\w-]+(?:\.[\w-]+)*))(@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][0-9]\.|1[0-9]{2}\.|[0-9]{1,2}\.))((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\.){2}(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\]?$)/i);

		return pattern.test(emailAddress);

	};
	$("#contact-form").on('submit', function(e) {
		e.preventDefault();
		var data = {
			name: $("#name").val(),
			phone: $("#phone").val(),
			email: $("#email").val(),
			subject: $("#subject").val(),
			message: $("#message").val()
		};

		if (isValidEmail(data['email']) && (data['message'].length > 1) && (data['name'].length > 1) ) {
			$.ajax({
				type: "POST",
				url: "sendmail.php",
				data: data,
				success: function() {
					$('#contact-form .input-success').delay(500).fadeIn(1000);
					$('#contact-form .input-error').fadeOut(500);
				}
			});
		} else {
			$('#contact-form .input-error').delay(500).fadeIn(1000);
			$('#contact-form .input-success').fadeOut(500);
		}

		return false;
	});
	
});

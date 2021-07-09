$(function() {

    (function() { // Resize functionality

        $(window).resize(function() {
            $('[data-resize]').each(function() {
            	var ratio = parseFloat($(this).data('resize')) || 1;
                $(this).css('height', Math.round($(this).outerWidth() * ratio));
            });
        }).trigger('resize');

        var i = 0;
        var timer = window.setInterval(function() {
        	$(window).resize();
        	(++i > 15) && window.clearInterval(timer);
        }, 25);

    })();

  	// Menu Navigation
  	$('.hamburger').click(function(e){
  		e.preventDefault();
  		$('body').toggleClass('nav-open');
  		$(this).toggleClass('is-active');
  	});

    (function() { // Footer functionality
        $(window).resize(function() {
	    	var windowHeight = $(window).height();
	    	var footerHeight = $('footer').outerHeight();
	    	var mainOffset = $('main').offset().top;
	    	var mainHeight = $('main').outerHeight();
	        if(windowHeight > mainHeight + mainOffset + footerHeight) {
	        	$('footer').addClass('fixed');
	        } else {
	        	$('footer').removeClass('fixed');
	        }
        }).resize();
    })();

    (function() { // Accordions
    	var animating = false;
	    $(document).on('click', '.content-accordion-title', function() {
    		if(animating) return false;
    		animating = true;
    		var entry = $(this).closest('.content-accordion');
    		if($(this).hasClass('active')) {
    			$(this).removeClass('active');
    			$('.content-accordion-content', entry).slideUp(400, function() {
    				animating = false;
    				$(window).trigger('resize');
    			});
    		} else {
    			$(this).addClass('active');
    			$('.content-accordion-content', entry).slideDown(400, function() {
    				animating = false;
    				$(window).trigger('resize');
    			});
    		}
    		return false;
    	});
    })();

    (function() { // Content Slider functionality
	    $('.content-slider').each(function() {
	        var self = this;
	        var autoslide = $(self).data('autoslide');
	        $('.content-slide', self).first().addClass('active').show();
	        $('.content-slides-buttons li', self).first().addClass('active');

	        var speed = 400;
	        var isAnimating = false;
	        $('.content-slides-buttons li', self).click(function() {
	            if(isAnimating) return;
	            var newButton = $(this);
	            var index = newButton.data('index');
	            var newSlide = $('.content-slide', self).filter('[data-index=' + index + ']');
	            if(newSlide.hasClass('active')) return;
	            var currentSlide = $('.content-slide', self).filter('.active');

	            isAnimating = true;
	            currentSlide.fadeOut(speed, function() {
	                currentSlide.removeClass('active');
	                newSlide.addClass('active').fadeIn(speed, function() {
	                    isAnimating = false;
	                });
	                $('.content-slides-buttons li', self).removeClass('active');
	                newButton.addClass('active');
	            });

	            if(autoslide) {
		            window.clearInterval(timer);
		            timer = window.setInterval(function() {
			            var buttons = $('.content-slides-buttons li', self);
			            var currentIndex = buttons.filter('.active').data('index');
			            buttons.eq((currentIndex + 1) % buttons.length).trigger('click');
			        }, autoslide * 1000);
	            }
	        });

			if(autoslide) {
		        var timer = window.setInterval(function() {
		            var buttons = $('.content-slides-buttons li', self);
		            var currentIndex = buttons.filter('.active').data('index');
		            buttons.eq((currentIndex + 1) % buttons.length).trigger('click');
		        }, autoslide * 1000);
			}

			$('.slider-prev', self).click(function() {
	            var slides = $('.content-slide', self);
	            var currentSlide = slides.filter('.active');
	            var currentIndex = parseInt(currentSlide.data('index'));
	            var newIndex = (currentIndex - 1 + slides.length) % slides.length;
	            $('.content-slides-buttons li', self).filter('[data-index=' + newIndex + ']').trigger('click', true);
				return false;
			});

			$('.slider-next', self).click(function() {
	            var slides = $('.content-slide', self);
	            var currentSlide = slides.filter('.active');
	            var currentIndex = parseInt(currentSlide.data('index'));
	            var newIndex = (currentIndex + 1 + slides.length) % slides.length;
	            $('.content-slides-buttons li', self).filter('[data-index=' + newIndex + ']').trigger('click', true);
				return false;
			});

	    });
	})();

    $('form.form-newsletter').submit(function() {
    	var thisform = $(this);
    	var email = $.trim($('input[type="email"]', thisform).val());
        if(email.length) {

        	var form = $('#newsletter-form form');
        	$('input[type="email"]', form).val(email);

	        if("createEvent" in document) {
	            var evt4 = document.createEvent("HTMLEvents");
	            evt4.initEvent("change", true, true);
	            $('input[type="email"]', form)[0].dispatchEvent(evt4);
	        } else {
	            $('input[type="email"]', form).fireEvent("onchange");
	        }

        	$('input[type="submit"]', thisform).val('Sent').addClass('disabled').attr('disabled', 'disabled');
        	$('input[type="email"]', thisform).attr('disabled', 'disabled');

        	$('input[type="button"]', form).click();
        }
    	return false;
    });

});

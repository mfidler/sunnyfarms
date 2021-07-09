<?php
/**
 * Template Name: Contact Page Template
 */
get_header(); ?>

<script>

	$(function() {
	    $('form.form-contact').submit(function() {
	    	var thisform = $(this);
	    	var first = $.trim($('input[name="first"]', thisform).val());
	    	var last = $.trim($('input[name="last"]', thisform).val());
	    	var email = $.trim($('input[name="email"]', thisform).val());
	    	var phone = $.trim($('input[name="phone"]', thisform).val());
	    	var message = $.trim($('textarea[name="message"]', thisform).val());
	        if(first.length && last.length && email.length && message.length) {

	        	var form = $('#contact-form form');
	        	$('input[type="text"]', form).eq(0).val(first);
	        	$('input[type="text"]', form).eq(1).val(last);
	        	$('input[type="email"]', form).val(email);
	        	$('input[type="tel"]', form).val(phone);
	        	$('textarea', form).val(message);

		        if("createEvent" in document) {
		            var evt1 = document.createEvent("HTMLEvents");
		            evt1.initEvent("change", true, true);
		            $('input[type="text"]', form).eq(0)[0].dispatchEvent(evt1);
		            var evt2 = document.createEvent("HTMLEvents");
		            evt2.initEvent("change", true, true);
		            $('input[type="text"]', form).eq(1)[0].dispatchEvent(evt2);
		            var evt3 = document.createEvent("HTMLEvents");
		            evt3.initEvent("change", true, true);
		            $('input[type="email"]', form)[0].dispatchEvent(evt3);
		            var evt4 = document.createEvent("HTMLEvents");
		            evt4.initEvent("change", true, true);
		            $('input[type="tel"]', form)[0].dispatchEvent(evt4);
		            var evt5 = document.createEvent("HTMLEvents");
		            evt5.initEvent("change", true, true);
		            $('textarea', form)[0].dispatchEvent(evt5);
		        } else {
		            $('input[type="text"]', form).eq(0).fireEvent("onchange");
		            $('input[type="text"]', form).eq(1).fireEvent("onchange");
		            $('input[type="email"]', form).fireEvent("onchange");
		            $('input[type="tel"]', form).fireEvent("onchange");
		            $('textarea', form).fireEvent("onchange");
		        }

	        	$('input[type="submit"]', thisform).val('Submitting').addClass('disabled').attr('disabled', 'disabled');
	        	var timer = window.setInterval(function() {
	        		if($('.nf-response-msg').find('p').length) {
	        			var html = $('.nf-response-msg').html();
	        			$('.form-sent').html(html);
	        			$('.form-row', thisform).fadeOut(250, function() {
	        				$('.form-sent').fadeIn(250);
	        			});
	        			window.clearInterval(timer);
	        		}
	        	}, 50);

	        	$('input[type="button"]', form).click();
	        }
	    	return false;
	    });
	});

</script>

<main>

    <?php $image = get_field('background_image'); if($image) { ?>
		<div class="background-image" style="background-image: url(<?php echo $image['url']; ?>);"></div>
	<?php } ?>
	
	<div class="section1">
		<div class="wrapper clearfix">
			<div class="section-container clearfix">
				<h1 class="text-header"><?php echo get_field('header_text'); ?></h1>

				<form class="form-contact">
					<div class="form-row clearfix">
						<div class="form-input clearfix">
							<input type="text" name="first" placeholder="First name" required>
						</div>
						<div class="form-input clearfix">
							<input type="text" name="last" placeholder="Last name" required>
						</div>
					</div>
					<div class="form-row clearfix">
						<div class="form-input clearfix">
							<input type="email" name="email" placeholder="Email" required>
						</div>
					</div>
					<div class="form-row clearfix">
						<div class="form-input clearfix">
							<input type="text" name="phone" placeholder="Phone">
						</div>
						<div class="form-input clearfix"></div>
					</div>
					<div class="form-row clearfix">
						<div class="form-input clearfix">
							<textarea name="message" placeholder="Message" required></textarea>
						</div>
					</div>
					<div class="form-row clearfix">
						<div class="form-input clearfix">
							<div class="g-recaptcha" data-sitekey="6LeLkooUAAAAAH_yTGWJyK6R3Q3E_o8dS6ag7e1-"></div>
						</div>
					</div>
					<div class="form-row clearfix">
						<div class="form-input clearfix">
							<input type="submit" name="submit" value="Submit" style="background-color: <?php echo get_field('submit_button_color'); ?>;">
						</div>
					</div>
					<div class="form-sent clearfix" style="display: none;"></div>
				</form>

				<div class="content-container clearfix" style="background-color: <?php echo get_field('sidebar_color'); ?>;">
					<div class="content-wysiwyg clearfix"><?php echo get_field('sidebar_content'); ?></div>
				</div>

				<div id="contact-form" style="display: none !important;">
					<?php echo do_shortcode('[ninja_form id=1]'); ?>
				</div>

			</div>
		</div>
	</div>

</main>

<?php get_footer(); ?>
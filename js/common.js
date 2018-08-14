$(function() {

	$(document).ready(function(){
		$('.navbar-toggler').click(function() {
			$(this).find('i').toggleClass('la-bars');
			$(this).find('i').toggleClass('la-close');
			$(this).parent().toggleClass('active');
			$(this).next().slideToggle();
		});
		$("form .checkbox-box .wpcf7-list-item").append("<label></label>");
		$('.colors .items li a').click(function(){
			$(".colors .items li a").removeClass("active");
			$(this).addClass("active");
			return false;
		});
		$('.materials .items li a').click(function(){
			$(".materials .items li a").removeClass("active");
			$(this).addClass("active");
			return false;
		});
		$(document).on('click', function(event) {
			if($(".top-menu.active").length>0){
			if (!$(event.target).closest('.navbar-toggler').length)  {
				$(".navbar-toggler")[0].click();
			}
			}

		});
		if($(window).width() > 800 ){
			$(".products .box .sm-item").click(function(){
				$(".products .box .item").addClass("sm-item");
				$(".products .box .item").removeClass("item");
				$(this).removeClass("sm-item");
				$(this).addClass('item');
			});
			$(".products .box .sm-item a.title").click(function(){
				return false;
			});
		}
		$(".menu-item-type-custom a").wrap("<span></span>")
		function arrowsNav(){
			var t = $('section.main .contact-slider .img-box').height() - 50;
			$("section.main .contact-slider .owl-nav").css("top", t);
			console.log(t);
		}
		function menuTop(){
			var t = $("header .container").height();
			$("header .top-menu .sub-menu").css("top", t);
		}

		setTimeout(function() { menuTop(); }, 300);
		$(window).resize(function() {
			setTimeout(function() { menuTop(); }, 300);
		});

		if($("section.main .contact-slider").length > 0){
			setTimeout(function() { arrowsNav(); }, 300);
			$(window).resize(function() {
				setTimeout(function() { arrowsNav(); }, 300);
			});
		}
		// $('.slider .owl-carousel').owlCarousel({
         //    autoPlay : 5000,
		//     loop:true,
		//     margin:0,
		//     nav:true,
		// 	    navText: ['<i class="la la-angle-left"></i>','<i class="la la-angle-right"></i>'],
		// 	    items:1
		// });
		$('.contact-slider.owl-carousel').owlCarousel({
            autoplay:true,
            autoplayTimeout:6000,
		    loop: true,
		    margin: 0,
		    nav: true,
				navText: ['<i class="la la-angle-left"></i>','<i class="la la-angle-right"></i>'],
				items:1
		});
		$('.category-slider.owl-carousel').owlCarousel({
            autoplay:true,
            autoplayTimeout:6000,
		    loop: true,
		    margin: 0,
		    nav: true,
				navText: ['<i class="la la-angle-left"></i>','<i class="la la-angle-right"></i>'],
				dots: false,
				items:1
		});
		$('.product-subs .owl-carousel').owlCarousel({
            autoplay:true,
            autoplayTimeout:6000,
		    loop: true,
		    margin: 0,
		    nav: true,
				navText: ['<i class="la la-angle-left"></i>','<i class="la la-angle-right"></i>'],
				dots: false,
				items:1
		});
		$('.single-slider.owl-carousel').owlCarousel({
            autoplay:true,
            autoplayTimeout:6000,
		    loop: true,
		    margin: 0,
		    nav: true,
				navText: ['<i class="la la-angle-left"></i>','<i class="la la-angle-right"></i>'],
				dots: false,
				items:1,
		});

		function productSlider_sm() {
			$(".product-subs .items .owl-item .item").unwrap();
			$('.product-subs .owl-carousel').trigger('destroy.owl.carousel');
			var $owl = $('.product-subs .owl-carousel').owlCarousel({
                autoplay:true,
                autoplayTimeout:6000,
                loop: true,
					margin: 0,
					nav: true,
					navText: ['<i class="la la-angle-left"></i>','<i class="la la-angle-right"></i>'],
					dots: false,
					items:1,
			});


			$owl.trigger('refresh.owl.carousel');
		}
		function productSlider_b() {
			$('.product-subs .owl-carousel').trigger('destroy.owl.carousel');
			//$(".product-subs .items .item").unwrap();
			var i = 0;
			$(".product-subs .items .item").each(function(index) {
				if(i % 2 == 0) {
					console.log(i);
					$(this).next('.item').andSelf().wrapAll("<div class='box' />");
			    }
			i++;
			});
			var $owl = $('.product-subs .owl-carousel').owlCarousel({
					loop: true,
					margin: 0,
					nav: true,
					navText: ['<i class="la la-angle-left"></i>','<i class="la la-angle-right"></i>'],
					dots: false,
					items:1,
                      autoplay:true,
                      autoplayTimeout:6000,
			});
			$owl.trigger('refresh.owl.carousel');
		}
		if($(".product-subs").length > 0){
			if ($(window).width() < 800) {
				productSlider_sm();
				console.log("sm");
			}
			$(window).resize(function() {
	      if ($(window).width() < 800) {
					if($(".product-subs .box").length > 0){
		        productSlider_sm();
						console.log("sm");
					}
	      } else {
	       productSlider_b();
				 console.log("bg");
	      }
	    });
		}

        $('.slider .owl-carousel').owlCarousel({
            items:1,
            loop:true,
            dots:true,
            autoplay:true,
            autoplayTimeout:6000,
            margin:0,
            nav:true,
            navText: ['<i class="la la-angle-left"></i>','<i class="la la-angle-right"></i>'],
        });
	});

});

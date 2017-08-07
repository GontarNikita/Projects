$(function() {

	//SVG Fallback
	if(!Modernizr.svg) {
		$("img[src*='svg']").attr("src", function() {
			return $(this).attr("src").replace(".svg", ".png");
		});
	};

	//E-mail Ajax Send
	//Documentation & Example: https://github.com/agragregra/uniMail
	$("form").submit(function() { //Change
		var th = $(this);
		$.ajax({
			type: "POST",
			url: "mail.php", //Change
			data: th.serialize()
		}).done(function() {
			alert("Thank you!");
			setTimeout(function() {
				// Done Functions
				th.trigger("reset");
			}, 1000);
		});
		return false;
	});

	//Chrome Smooth Scroll
	try {
		$.browserSelector();
		if($("html").hasClass("chrome")) {
			$.smoothScroll();
		}
	} catch(err) {

	};

	$("img, a").on("dragstart", function(event) { event.preventDefault(); });

});

$(".characteristic_text a").on("click", function(e){
	$(".characteristic_text a").removeClass("active_price");
	if($(this).hasClass("active_price")){
		$(this).removeClass("active_price");
	}else{
		$(this).addClass("active_price");
	}
})
$(document).ready(function(){
  $(".certificates_slider").owlCarousel({
  		autoPlay: 5000,
		navigation: true,
		slideSpeed: 300,
		paginationSpeed: 400,
		items: 3,
		navigationText: ['<span class="prev_button"></span>', '<span class="next_button"></span>']
  })
});

$(document).ready(function(){
  $(".differences_slider").owlCarousel({
  		autoPlay: 5000,
		navigation: true,
		slideSpeed: 300,
		paginationSpeed: 400,
		items: 2,
		navigationText: ['<span class="prev_button"></span>', '<span class="next_button"></span>']
  })
	$(".slider_wrapper").owlCarousel({
  		autoPlay: 5000,
		navigation: true,
		slideSpeed: 300,
		paginationSpeed: 400,
		items: 1,
		navigationText: ['<span class="prev_button"></span>', '<span class="next_button"></span>']
  })
});

jQuery(window).on("load", function () {
	let carousels = document.querySelectorAll(".elementor-widget-image-carousel.auto-width");
	[...carousels].forEach(function (elem) {
		let container = elem.querySelector(".elementor-image-carousel-wrapper");

		if (container !== null) {
			container.swiper.params.slidesPerView = "auto";
			container.swiper.params.centeredSlides = true;
			container.swiper.params.freeMode = true;
			container.swiper.params.loop = true;
			container.swiper.update();
		}
	});
});

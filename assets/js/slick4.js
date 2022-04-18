/*----------------------------------
    //------ SLICK CAROUSEL ------//
-----------------------------------*/
	$('.slick-lancers').slick({
		infinite: false,
		slidesToShow: 1,
		slidesToScroll: 1,
		dots: false,
		arrows: true,
		adaptiveHeight: true,

		autoplay:true,
  		autoplaySpeed:1500,
  		
		responsive: [
		    {
		      breakpoint: 1292,
		      settings: {
		        dots: false,
		    	arrows: true
		      }
		    },
		    {
		      breakpoint: 993,
		      settings: {
		        slidesToShow: 2,
		        slidesToScroll: 2,
		        dots: false,
		    	arrows: true
		      }
		    },
		    {
		      breakpoint: 769,
		      settings: {
		        slidesToShow: 1,
		        slidesToScroll: 1,
		        dots: false,
		   		arrows: true
		      }
		    }
	  ]
	});
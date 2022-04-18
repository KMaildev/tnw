/*----------------------------------
    //------ SLICK CAROUSEL ------//
-----------------------------------*/
	// $('.slick-lancers').slick({
	// 	infinite: false,
	// 	slidesToShow: 3,
	// 	slidesToScroll: 3,
	// 	dots: false,
	// 	arrows: true,
	// 	adaptiveHeight: true,

	// 	variableWidth: true,

	// 	autoplay:true,
 //  		autoplaySpeed:1500,
  		
	// 	responsive: [
	// 	    {
	// 	      breakpoint: 1292,
	// 	      settings: {
	// 	        dots: false,
	// 	    	arrows: false,
	// 	    	slidesToShow: 3,
	// 			slidesToScroll: 3,
	// 	      }
	// 	    },
	// 	    {
	// 	      breakpoint: 993,
	// 	      settings: {
	// 	        slidesToShow: 2,
	// 	        slidesToScroll: 2,
	// 	        dots: false,
	// 	    	arrows: false
	// 	      }
	// 	    },
	// 	    {
	// 	      breakpoint: 769,
	// 	      settings: {
	// 	        slidesToShow: 1,
	// 	        slidesToScroll: 3,
	// 	        dots: false,
	// 	   		arrows: false
	// 	      }
	// 	    }
	//   ]
	// });


	$('.slick-lancers').slick({
	  dots: false,
	  infinite: true,
	  speed: 300,
	  slidesToShow: 4,
      slidesToScroll: 4,
      variableWidth: true,

    //   	autoplay:true,
  		// autoplaySpeed:1500,

	  responsive: [
	    {
	      breakpoint: 1024,
	      settings: {
	        slidesToShow: 4,
	        slidesToScroll: 4,
	        infinite: true,
	        dots: true
	      }
	    },
	    {
	      breakpoint: 600,
	      settings: {
	        slidesToShow: 2,
	        slidesToScroll: 2
	      }
	    },
	    {
	      breakpoint: 480,
	      settings: {
	        slidesToShow: 1,
	        slidesToScroll: 1
	      }
	    }
	  ]
	});

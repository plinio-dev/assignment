
document.addEventListener( 'DOMContentLoaded', function () {
	new Splide( '.splide', {
      arrows: false,
      pagination: false,
		cover      : true ,
      height     : 90,
      type     : 'loop',
	   perPage  : 5,
      perMove: 1,
		rewind    : true, 
      gap       : 10, 
      focus: 'center',
         breakpoints: {
         768: {
            perPage: 1,
            height: 180,
         },
         640: {
            perPage: 1,
            height: 180,
         },
      },
      autoplay : true,
      clones: 2,

	} ).mount();
} );


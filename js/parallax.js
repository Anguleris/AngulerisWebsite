( function( $ ) {
    
    var s = skrollr.init({
		forceHeight: false,
		easing: {
			sin: function(p) {
				return (Math.sin(p * Math.PI * 2 - Math.PI/2) + 1) / 2;
			},
			cos: function(p) {
				return (Math.cos(p * Math.PI * 2 - Math.PI/2) + 1) / 2;
			},
		},
        render: function(data) {
            
            //console.log(data.curTop);
        }
    });
	if(s.isMobile())
		s.destroy();
} )( jQuery );

$("#iframe").fancybox({
    type: 'iframe',
		//maxWidth: 800,
		//maxHeight: 600,
		fitToView: false,
		width: '90%',
		height: '90%',
		autoSize: false,
		closeClick: false,
		openEffect: 'none',
		//openSpeed  : 1200,
		closeEffect: 'none', 	
		//openSpeed: 1200,    	
    //padding : 0,
    helpers:  {
        overlay: {
	       speedIn : 0,
	       speedOut: 300,
	       opacity : 0.4,
	       css: {
		      cursor : 'pointer'
	       },
	       closeClick: true
      }
    }		
});

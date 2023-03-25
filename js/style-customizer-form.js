jQuery(document).ready(function($) {

    /*************************
                Right sidebar
        *************************/
    style_switcher = $('.iq-customizer'),
        panelWidth = style_switcher.outerWidth(true);
    $('.iq-customizer .opener').on("click", function() {
        var $this = $(this);
        if ($(".iq-customizer.closed").length > 0) {
            style_switcher.animate({
                "right": "0px"
            });
            $(".iq-customizer.closed").removeClass("closed");
            $(".iq-customizer").addClass("opened");
            
        } else {
            $(".iq-customizer.opened").removeClass("opened");
            $(".iq-customizer").addClass("closed");
            style_switcher.animate({
                "right": '-' + panelWidth
            });
        }
                    $(".iq-customizer").click( function(e) {
                e.stopPropagation(); // this stops the event from bubbling up to the body
            });
        /* User click anywhere to close register form */
        $(document.body).click(function(){
             $(".iq-customizer.opened").removeClass("opened");
            $(".iq-customizer").addClass("closed");
            style_switcher.animate({
                "right": '-' + panelWidth
            });
            $(".iq-customizer").click( function(e) {
                e.stopPropagation(); // this stops the event from bubbling up to the body
            });
        });
        return false;
    });
	
	//$('.iq-customizer .amitabh').on("click", function() {
//		   //alert("Amitabh");
//           //$(".iq-customizer.closed").removeClass("closed");
//            //$(".iq-customizer").addClass("opened");
//			return false;
//    });
	
	//$('#amitabh').on("click", function() {
//            $(".iq-customizer.opened").removeClass("opened");
//            $(".iq-customizer").addClass("closed");
//            style_switcher.animate({
//                "right": '-' + panelWidth
//            });
//    });
	
		

    /*************************
             style change 
        *************************/
    var link = $('link[data-style="styles"]'),
        link_no_cookie = $('link[data-style="styles-no-cookie"]');
});






jQuery(document).ready(function($) {

    /*************************
                Right sidebar
        *************************/
    style_switcher = $('.iq-customizer'),
        panelWidth = style_switcher.outerWidth(true);
    $('.iq-customizer1 .opener1').on("click", function() {
        var $this = $(this);
        if ($(".iq-customizer.closed").length > 0) {
            style_switcher.animate({
                "right": "0px"
            });
            $(".iq-customizer.closed").removeClass("closed");
            $(".iq-customizer").addClass("opened");
        } else {
            $(".iq-customizer.opened").removeClass("opened");
            $(".iq-customizer").addClass("closed");
            style_switcher.animate({
                "right": '-' + panelWidth
            });
        }
        return false;
    });
	
	
    /*************************
             style change 
        *************************/
    var link = $('link[data-style="styles"]'),
        link_no_cookie = $('link[data-style="styles-no-cookie"]');
});
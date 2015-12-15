/**
 * Created by Touqeer Shafi.
 * Email: touqeer.shafi@gmail.com
 * Website: touqeershafi.com
 * Date: 12/15/15
 * Time: 1:50 PM
 */

(function ($) {
    $('body').on('click', '.notifications-menu', function (event) {

    });

    function fetch_notifications() {

    }


    $.fn.notify = function( options ) {

        var settings = $.extend({
            url: "",
            interval: 3600
        }, options );


        setInterval(function(){
            $.ajax({
                url : settings.url,
                'method': 'GET',
                'success' : function(response){

                }
            })
        }, settings.interval);
    };

})(jQuery);


/**
 * End of file
 */
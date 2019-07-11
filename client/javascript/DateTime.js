jQuery.noConflict();

(function($) {

    $('input.datetime').entwine({

        onfocusin: function() {

            $('input.datetime').datetimepicker({
                format: 'Y-m-d H:i:s',
                timepicker: true,
            });
            

        }

    });

}(jQuery));

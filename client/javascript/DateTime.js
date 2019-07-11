jQuery.noConflict();

(function($) {

    $('input.time').entwine({

        onfocusin: function() {

            $('input.time').datetimepicker({
                format: 'H:i',
                datepicker: false,
                timepicker: true,
            });


        }

    });

    $('input.date').entwine({

        onfocusin: function() {

            $('input.date').datetimepicker({
                format: 'Y-m-d',
                datepicker: true,
                timepicker: false,
            });


        }

    });



    $('input.datetime').entwine({

        onfocusin: function() {

            $('input.datetime').datetimepicker({
                format: 'Y-m-d H:i:s',
                timepicker: true,
            });


        }

    });

}(jQuery));

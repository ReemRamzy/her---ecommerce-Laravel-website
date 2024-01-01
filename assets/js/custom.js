$(document).ready( function() {

    loadcart();
    loadcartsecond();

    $.ajaxSetup({
        headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
      });

    function loadcart() {

        $.ajax({
            method: "GET",
            url: "load-cart-data",
            success: function (response) {

                $('.cart-count').html('');
                $('.cart-count').html(response.count);
               console.log(response.count);

            }
        });
    }

    $.ajaxSetup({
        headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
      });

    function loadcartsecond() {

        $.ajax({
            method: "GET",
            url: "../load-cart-data",
            success: function (response) {

                $('.cart-count').html('');
                $('.cart-count').html(response.count);
               console.log(response.count);

            }
        });
    }




});

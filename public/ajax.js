$(document).ready(function () {
    $('#bkshNumber').hide();
    $(document).on('change','#payment_method',function () {
        var payment_method = $(this).val();
        if(payment_method == 'Bkash'){
            $('#bkshNumber').show();
        }else{
            $('#bkshNumber').hide();
        }
    });

    $('#paymentForm').on('submit',function (e) {
        e.preventDefault();
        var value = $('#trndId').val();
        var payment_method = $('#payment_method').val();
        if(value == '' && payment_method == 'Bkash'){
            $('#error').text('Field must not be empty.');
        }
    })

})
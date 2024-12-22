require('./bootstrap');
var reservationUrl = typeof reservationUrl !== 'undefined' ? reservationUrl : '/rezevarcija';
var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
console.log(CSRF_TOKEN);
$(document).ready(function () {
    $('#reservation-form').on('submit', function (e) {
        e.preventDefault();

        $('#error-messages').addClass('d-none').html('');

        $.ajax({
            headers: {
                'X-CSRF-TOKEN': CSRF_TOKEN
            },
            url: reservationUrl,
            method: "POST",
            data: $(this).serialize(),
            success: function (response) {
                $('#success-message').removeClass('d-none').text(response.message);
                $('#reservation-form')[0].reset();
            },
            error: function (xhr) {
                console.log( xhr.responseJSON);
                if (xhr.status === 422) {
                    const errors = xhr.responseJSON.errors;
                    let errorHtml = '<ul>';
                    $.each(errors, function (key, value) {
                        errorHtml += `<li>${value[0]}</li>`;
                    });
                    errorHtml += '</ul>';
                    $('#error-messages').removeClass('d-none').html(errorHtml);
                }
            }
        });
    });
});

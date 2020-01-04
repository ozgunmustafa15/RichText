function send_email(formId){
    var data=$(formId).serialize();
    //serialize form içindeki tüm elemanları alır.
    $.post(api_url + '/send-email' , data, function (response) {
        if (response.error){
            setTimeout(function () {
                $('#contact-error-answer').slideToggle(50).html(response.error);
            });
            setTimeout(function () {
                $('#contact-error-answer').slideUp(50);
            },6000);
        }
        else {

            $('#contact-success-answer').slideToggle(300).html('<i class="fas fa-clipboard-list"></i><br>'+ response.success);
            $('#contact-success-answer').show().html(response.success);
            setTimeout(function () {
                $('#contact-success-answer').slideUp(300);
            },5000);
            $(formId + ' input, ' + formId + ' textarea').val('');
        }
    },'json');
}



/*

*/


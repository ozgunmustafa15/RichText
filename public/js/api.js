function contact(formId){
    var data=$(formId).serialize();
    //serialize form içindeki tüm elemanları alır.
    $.post(api_url + '/contact' , data, function (response) {
        if (response.error){

            setTimeout(function () {
                $('#contact-error-msg').slideDown(300).html('<i class="fas fa-exclamation-circle fa-2x"></i><br>'+ response.error);
            });




            setTimeout(function () {
                $('#contact-error-msg').slideUp(300);
            },3000);




        }else {

            $('#contact-success-msg').slideDown(300).html('<i class="fas fa-clipboard-list"></i><br>'+ response.success);


            $('#contact-success-msg').show().html(response.success);
            setTimeout(function () {
                $('#contact-success-msg').slideUp(300);
            },5000);
            $(formId + ' input, ' + formId + ' textarea').val('');



        }
    },'json');
}



/*

*/


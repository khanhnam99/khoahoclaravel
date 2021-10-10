jQuery( document ).ready(function( $ ) {


jQuery(document).on('click', '#SignIn',function( event ) {


    var email = jQuery('#email').val();
    var password = jQuery('#password').val();

    if(email.trim().length <=0) {
        jQuery('#email').attr('placeholder','Vui long nhap email')
        jQuery('#email').focus();
        return false;
    }else if(password.trim().length <=0) {
        jQuery('#password').attr('placeholder','Vui long nhap password')
        jQuery('#password').focus();
        return false;
    }else {
        jQuery('#fLogin').submit();
    }
});





});

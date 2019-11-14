$(document).ready(function () {

    $('.form-control').each(function() {        
        $(this).bind('focusout',   validateForm);
    });

    $('.btnLogin').unbind().bind('click', () =>{
        validateForm();
        $("form").attr('action', 'controller/login.php');        
        $("form").submit();
    });

    
});

validateForm = () => {
    var contErro  = 0;
    $('.form-control').each(function() {
        //console.log($(this).val() + ':' + $(this).attr('type'));

        if ($(this).val() === '') {
            document.querySelector('.msg-' + $(this).attr('name') ).innerHTML = '*';            
            contErro++;        
        }
        else
            document.querySelector('.msg-' + $(this).attr('name') ).innerHTML = '';
        
    });    
}
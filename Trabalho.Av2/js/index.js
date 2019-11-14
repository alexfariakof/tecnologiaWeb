$(document).ready(function () {

    $('.form-control').each(function () {
        $(this).bind('focusout', validateForm);
    });

    $('.btnLogin').unbind().bind('click', () => {
        if (validateForm() == false)
            return false;
        $("form").attr('action', 'controller/login.php');
        $("form").submit();
    });

    $('.btnLogOff').unbind().bind('click', () => {
        $("form").attr('action', 'controller/logoff.php');
        $("form").submit();
    });
    
    
    if ( $('#tableContato').length )
        $('#tableContato').DataTable();

});

validateForm = () => {
    var contErro = 0;
    $('.form-control').each(function () {
        //console.log($(this).val() + ':' + $(this).attr('type'));

        if ($(this).val() === '') {
            document.querySelector('.msg-' + $(this).attr('name')).innerHTML = '*';
            contErro++;
        }
        else
            document.querySelector('.msg-' + $(this).attr('name')).innerHTML = '';

        if ($(this).val() === '') {
            document.querySelector('.msg-' + $(this).attr('name')).innerHTML = '*';
            contErro++;
        }
        else
            document.querySelector('.msg-' + $(this).attr('name')).innerHTML = '';
    });

    if (contErro > 0)   return false;


}
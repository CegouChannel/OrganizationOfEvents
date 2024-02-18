$(function(){
    $('#emailInput').focus(function(){
        $('#emailP').addClass('active');
        $('#emailInput').addClass('active');
        $('#emailP').removeAttr('style');
        $('#emailInput').removeAttr('style');
    });
});

$(function(){
    $('#emailInput').blur(function(){
        $emailValue=$('#emailInput').val();
        if($emailValue == ""){
            $('#emailP').removeClass('active');
            $('#emailInput').removeClass('active');
        }else if($emailValue != ""){
            $('#emailP').css('color', '#858585');
            $('#emailInput').css('border-color', '#858585');
        }
    });
});

$(function(){
    $('#emailP').click(function(){
        $('#emailInput').focus();
    });
});

$(function(){
    $('#PasswordInput').focus(function(){
        $('#PasswordP').addClass('active');
        $('#PasswordInput').addClass('active');
        $('#PasswordP').removeAttr('style');
        $('#PasswordInput').removeAttr('style');
    });
});

$(function(){
    $('#PasswordInput').blur(function(){
        $PasswordValue=$('#PasswordInput').val();
        if($PasswordValue == ""){
            $('#PasswordP').removeClass('active');
            $('#PasswordInput').removeClass('active');
        }else if($emailValue != ""){
            $('#PasswordP').css('color', '#858585');
            $('#PasswordInput').css('border-color', '#858585');
        }
    });
});

$(function(){
    $('#PasswordP').click(function(){
        $('#PasswordInput').focus();
    });
});
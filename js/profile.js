$(function(){
    $('.avatar_profile button').click(function(){
        $('.name input, .profile2 input, .profile2_info>div>input').removeAttr('disabled');
        $('.name input, .profile2 input, .profile2_info>div>input').css('border-bottom-color', '#3DD495');
    });
});

$(function(){
    $('#phone').mask("+7-999-999-99-99");
});
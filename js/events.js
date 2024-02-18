document.addEventListener("DOMContentLoaded", ()=>{
    let add_person = document.querySelector(".add_comp")
    let black_bg = document.querySelector(".black_background")
    let modal_person = document.querySelector("div[name='window_add_person']")
    add_person.addEventListener('click', ()=>{
        modal_person.style.display = "block"
        black_bg.style.display = "block"
    })

    let close_window = document.querySelector("img[alt='close']")
    close_window.addEventListener("click", ()=>{
        console.log("123")
        modal_person.style.display = "none"
        black_bg.style.display = "none"
    })

    let brd = document.querySelector("input[name='brd']")
    $("input[name='brd']").mask("99.99.9999", {autoclear:false});
    $("input[name='phone']").mask("+7 (999) 999-99-99", {autoclear:false});

    $(function () {
        $('#number-roomInput').focus(function () {
            $('#number-roomP').addClass('active');
            $('#number-roomInput').addClass('active');
            $('#number-roomP').removeAttr('style');
            $('#number-roomInput').removeAttr('style');
        });
    });
    
    $(function () {
        $('#number-roomInput').blur(function () {
            $emailValue = $('#number-roomInput').val();
            if ($emailValue == "") {
                $('#number-roomP').removeClass('active');
                $('#number-roomInput').removeClass('active');
            } else if ($emailValue != "") {
                $('#number-roomP').css('color', '#858585');
                $('#number-roomInput').css('border-color', '#858585');
            }
        });
    });
    
    $(function () {
        $('#number-roomP').click(function () {
            $('#number-roomInput').focus();
        });
    });
    
    $(function () {
        $('#floorInput').focus(function () {
            $('#floorP').addClass('active');
            $('#floorInput').addClass('active');
            $('#floorP').removeAttr('style');
            $('#floorInput').removeAttr('style');
        });
    });
    
    $(function () {
        $('#floorInput').blur(function () {
            $emailValue = $('#floorInput').val();
            if ($emailValue == "") {
                $('#floorP').removeClass('active');
                $('#floorInput').removeClass('active');
            } else if ($emailValue != "") {
                $('#floorP').css('color', '#858585');
                $('#floorInput').css('border-color', '#858585');
            }
        });
    });
    
    $(function () {
        $('#floorP').click(function () {
            $('#floorInput').focus();
        });
    });
    
    $(function () {
        $('#responsibleInput').focus(function () {
            $('#responsibleP').addClass('active');
            $('#responsibleInput').addClass('active');
            $('#responsibleP').removeAttr('style');
            $('#responsibleInput').removeAttr('style');
        });
    });
    
    $(function () {
        $('#responsibleInput').blur(function () {
            $emailValue = $('#responsibleInput').val();
            if ($emailValue == "") {
                $('#responsibleP').removeClass('active');
                $('#responsibleInput').removeClass('active');
            } else if ($emailValue != "") {
                $('#responsibleP').css('color', '#858585');
                $('#responsibleInput').css('border-color', '#858585');
            }
        });
    });
    
    $(function () {
        $('#responsibleP').click(function () {
            $('#responsibleInput').focus();
        });
    });
    
    $(function () {
        $('#dutyInput').focus(function () {
            $('#dutyP').addClass('active');
            $('#dutyInput').addClass('active');
            $('#dutyP').removeAttr('style');
            $('#dutyInput').removeAttr('style');
        });
    });
    
    $(function () {
        $('#dutyInput').blur(function () {
            $emailValue = $('#dutyInput').val();
            if ($emailValue == "") {
                $('#dutyP').removeClass('active');
                $('#dutyInput').removeClass('active');
            } else if ($emailValue != "") {
                $('#dutyP').css('color', '#858585');
                $('#dutyInput').css('border-color', '#858585');
            }
        });
    });
    
    $(function () {
        $('#dutyP').click(function () {
            $('#dutyInput').focus();
        });
    });
    
    
    
    
    $(function () {
        $('#bpInput').focus(function () {
            $('#bpP').addClass('active');
            $('#bpInput').addClass('active');
            $('#bpP').removeAttr('style');
            $('#bpInput').removeAttr('style');
        });
    });
    
    $(function () {
        $('#bpInput').blur(function () {
            $emailValue = $('#bpInput').val();
            if ($emailValue == "") {
                $('#bpP').removeClass('active');
                $('#bpInput').removeClass('active');
            } else if ($emailValue != "") {
                $('#bpP').css('color', '#858585');
                $('#bpInput').css('border-color', '#858585');
            }
        });
    });
    
    $(function () {
        $('#bpP').click(function () {
            $('#bpInput').focus();
        });
    });
    
    
    $(function () {
        $('#hddInput').focus(function () {
            $('#hddP').addClass('active');
            $('#hddInput').addClass('active');
            $('#hddP').removeAttr('style');
            $('#hddInput').removeAttr('style');
        });
    });
    
    $(function () {
        $('#hddInput').blur(function () {
            $emailValue = $('#hddInput').val();
            if ($emailValue == "") {
                $('#hddP').removeClass('active');
                $('#hddInput').removeClass('active');
            } else if ($emailValue != "") {
                $('#hddP').css('color', '#858585');
                $('#hddInput').css('border-color', '#858585');
            }
        });
    });
    
    $(function () {
        $('#hddP').click(function () {
            $('#hddInput').focus();
        });
    });
    
    
    $(function () {
        $('#motherInput').focus(function () {
            $('#motherP').addClass('active');
            $('#motherInput').addClass('active');
            $('#motherP').removeAttr('style');
            $('#motherInput').removeAttr('style');
        });
    });
    
    $(function () {
        $('#motherInput').blur(function () {
            $emailValue = $('#motherInput').val();
            if ($emailValue == "") {
                $('#motherP').removeClass('active');
                $('#motherInput').removeClass('active');
            } else if ($emailValue != "") {
                $('#motherP').css('color', '#858585');
                $('#motherInput').css('border-color', '#858585');
            }
        });
    });
    
    $(function () {
        $('#motherP').click(function () {
            $('#motherInput').focus();
        });
    });
    
    
    $(function () {
        $('#ozuInput').focus(function () {
            $('#ozuP').addClass('active');
            $('#ozuInput').addClass('active');
            $('#ozuP').removeAttr('style');
            $('#ozuInput').removeAttr('style');
        });
    });
    
    $(function () {
        $('#ozuInput').blur(function () {
            $emailValue = $('#ozuInput').val();
            if ($emailValue == "") {
                $('#ozuP').removeClass('active');
                $('#ozuInput').removeClass('active');
            } else if ($emailValue != "") {
                $('#ozuP').css('color', '#858585');
                $('#ozuInput').css('border-color', '#858585');
            }
        });
    });
    
    $(function () {
        $('#ozuP').click(function () {
            $('#ozuInput').focus();
        });
    });
    
    
    
    $(function () {
        $('#settings1').click(function () {
            $('#settings1').toggleClass('active');
            $CheckSettingsClass = $('#settings1').attr('class');
            if ($CheckSettingsClass == 'dot_content active') {
                $('.settings_panel').show();
            } else {
                $('.settings_panel').hide();
            }
        });
    });
    
    $(function () {
        $('#full_info').on('click', function () {
            $('.computers_info_background').show()
        });
    });
    
    $(function () {
        $('#close_info_background').on('click', function () {
            $('.computers_info_background').hide();
        });
    });
    
    $(function () {
        $('.hover_about').hover(
            function () {
                $(this).parent().children('.about_device').show();
            }, function () {
                $(this).parent().children('.about_device').hide();
            });
    });
    
    $(function () {
        $('#point_table_settings').click(function () {
            $(this).children('img').toggleClass('active');
            $a = $(this).parent().children('.settings_panel');
            $i = $(this).children('img').attr('class');
            if ($i == 'active') {
                $($a).show();
            } else {
                $($a).hide();
            }
        });
    });
    
    $(function () {
        $('#input_checkbox_all').on('click', function () {
            if ($('#input_checkbox_all').prop('checked') == true) {
                $('#points_table1>div>input').prop('checked', true);
                $('#input_checkbox_all').prop('checked', true);
            } else if ($('#input_checkbox_all').prop('checked') == false) {
                $('#points_table1>div>input').prop('checked', false);
                $('#input_checkbox_all').prop('checked', false);
            }
    
        });
    });
    
    $(function () {
        $('#points_table1>div>input').on('click', function () {
            if ($('#input_checkbox_all').prop('checked') == false) {
                $('#input_checkbox_all').prop('checked', false);
            } else if ($('#input_checkbox_all').prop('checked') == true) {
                $('#input_checkbox_all').prop('checked', false);
            }
        });
    });
    
    $(function () {
        $('#responsibleInput').mask('99/99/9999', { autoclear: false });
        $('#bpInput').mask('+7 999 999 99 99', { autoclear: false });
        $('#hddInput').mask('9999 999999', { autoclear: false });
        $('#ozuInput').mask('99/99/9999', { autoclear: false });
    });
    
    $(function () {
        $('.deleteFromDB').click(function () {
            $blurClass = $('.right').children();
            $blurClass.not('.window_sumbit').addClass('blur');
            $('.window_sumbit').show();
            $('.wrapper').css('overflow', 'hidden');
            $('.settings_panel').hide();
            $('#point_table_settings>img').removeClass('active');
        });
    
        $('#no_delete').click(function () {
            $blurClass = $('.right').children();
            $blurClass.not('.window_sumbit').removeClass('blur');
            $('.window_sumbit').hide();
            $('.wrapper').css('overflow', 'auto');
        });
    
        $('#yes_delete').click(function () {
            $('.window_sumbit>p').text('Удаление прошло успешно!');
            $('.buttons_change').css('display', 'none');
            setTimeout(function () {
                $('.right').children().removeClass('blur');
                $('.window_sumbit').hide();
                $('.wrapper').css('overflow', 'auto');
                $('.buttons_change').css('display', 'block');
                $('.window_sumbit>p').text('Вы уверены, что хотите удалить сотрудника ФИО?');
            }, 1000);
        });
    });
})



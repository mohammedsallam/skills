$(document).ready(function () {

    var hideRobot = window.location.href.indexOf('After');

    if(hideRobot > -1) {
        $('.navbar-brand').click(function () {

            $('.robot_modal .modal-body').html('<span class="text-center d-block bg-dark text-light p-3">Sorry <span class="text-success font-weight-bold">ROBOT</span> cant be here</span>');
        })
    }

    $('.overlay').height($(document).height());

    $('.loading, .overlay').fadeOut();

    $('.finish_msg').css({
        top: '70%'
    });

    // slider
    var leftArrow  = $('.arrows .left_arrow'),
        rightArrow = $('.arrows .right_arrow');

    leftArrow.click(function(){

        $('.moderator .block').each(function(){

            if ($(this).hasClass('active')) {
                $(this).delay(200).fadeOut(300, function(){
                    $(this).removeClass('active').addClass('d-none').next().addClass('active').removeClass('d-none').fadeIn(300);
                });

                if ($(this).is(':last-of-type')) {
                    $(this).fadeOut(200, function(){
                        $(this).removeClass('active').addClass('d-none');
                        $('.moderator .block').eq(0).addClass('active').removeClass('d-none').fadeIn(300);

                    })
                };

                // End Second if
            };

            // End First if

        });

    });

    rightArrow.click(function(){

        $('.moderator .block').each(function(){

            if ($(this).hasClass('active')) {
                $(this).delay(200).fadeOut(300, function(){
                    $(this).removeClass('active').addClass('d-none').prev().addClass('active').removeClass('d-none').fadeIn(300);
                });

                if ($(this).is(':first-child')) {
                    $(this).fadeOut(300, function(){
                        $(this).removeClass('active').addClass('d-none');
                        $('.moderator .block:last-of-type').addClass('active').removeClass('d-none').fadeIn(300);

                    })
                };

                // End Second if
            };

            // End First if

        });

    });

    // (function(){
    //     var app;
    //     $(document).ready(function(){
    //         return app.init();
    //     });
    //     app = {
    //         text: $('.masthead span.text_type').html(),
    //         index: 0,
    //         chars: 0,
    //         speed: 100,
    //         container: '.masthead .intro-heading',
    //         init: function(){
    //             this.chars = this.text.length;
    //             return this.write();
    //         },
    //         write: function(){
    //             $(this.container).append(this.text[this.index]);
    //             if(this.index<this.chars){
    //                 this.index++;
    //                 return window.setTimeout(function(){
    //                     return app.write();
    //                 }, this.speed);
    //             }
    //
    //             $('header.masthead  p').slideDown(200);
    //             $('.login, .register, header.masthead  p').slideDown(700);
    //         }
    //     };
    //
    // }.call(this));

    var inputLogin = $('.sign_in_modal input:not(input[type=checkbox], input[type=radio])'),
        inputRegister = $('.sign_up_modal input:not(input[type=checkbox], input[type=radio])'),
        inputProfile = $('.profile_modal .modal-body .profile_form input');
        inputLogin.focus(function () {
        $(this).css('borderBottom', 'none').next().css({
            width: '100%',
            background: 'orange',
        }).siblings('label').css({
            transform: 'translate(0, 10px)',
            fontSize: '12px',
            color: 'orange'
        }).siblings('i').css('color', 'orange');

    });


    inputLogin.blur(function () {
        $(this).css('borderBottom', '2px solid #eeeeee').next().css({
            width: '0',
            background: 'transparent',
        });

        if ($(this).val() !== ''){
            $(this).siblings('label').css({
                transform: 'translate(257px, 10px)',
                fontSize: '12px',
                fontWeight: 'bold',
                color: '#28a745'
            }).siblings('i').css({
                color: '#28a745',
                fontWeight: 'bold'
            });
        } else {
            $(this).siblings('label').css({
                transform: 'translate(0, 40px)',
                fontSize: '15px',
                fontWeight: 'normal',
                color: '#757575'
            }).siblings('i').css({
                color: '#757575',
                fontWeight: 'normal'
            });
        }
    });
    inputRegister.focus(function () {
        $(this).css('borderBottom', 'none').next().css({
            width: '100%',
            background: 'orange',
        }).siblings('label').css({
            transform: 'translate(0, 10px)',
            fontSize: '12px',
            color: 'orange'
        }).siblings('i').css('color', 'orange');
    });
    inputRegister.blur(function () {
        $(this).css('borderBottom', '2px solid #eeeeee').next().css({
            width: '0',
            background: 'transparent',
        });

        if ($(this).val() !== ''){
            $(this).siblings('label').css({
                transform: 'translate(257px, 10px)',
                fontSize: '12px',
                fontWeight: 'bold',
                color: '#007bff'
            }).siblings('i').css({
                color: '#007bff',
                fontWeight: 'bold'
            });
        } else {
            $(this).siblings('label').css({
                transform: 'translate(0, 40px)',
                fontSize: '15px',
                fontWeight: 'normal',
                color: '#757575'
            }).siblings('i').css({
                color: '#757575',
                fontWeight: 'normal'
            });
        }
    });
    inputProfile.focus(function () {
        $(this).css('borderBottom', 'none').next().css({
            width: '100%',
            background: 'orange',
        }).siblings('i').css('color', 'orange');
    });
    inputProfile.blur(function () {
        $(this).css('borderBottom', '2px solid #eeeeee').next().css({
            width: '0',
            background: 'transparent',
        });

        if ($(this).val() !== ''){
            $(this).siblings('i').css({
                color: '#007bff',
                fontWeight: 'bold'
            });
        } else {
            $(this).siblings('i').css({
                color: '#757575',
                fontWeight: 'normal'
            });
        }
    });


    // Show user form

    // $('.intro-text a').click(function () {
    //
    //     $.ajax({
    //         url: $(this).data('href'),
    //         type: 'post',
    //         crossDomain: true,
    //     }).done(function (data) {
    //         $('.sign_in_up_modal .modal-body').html(data)
    //     })
    // })

    // Register new member

    $('.sign_up_modal .sign_up_form button').click(function (e) {
        e.preventDefault();

        var fullName = $('#full_name'),
            email = $('#user_email'),
            confEmail = $('#confirm_email'),
            password = $('#user_password'),
            confPassword = $('#confirm_password');


        if (fullName.val() === ''){
            fullName.focus();
            return false;
        }

        if (email.val() === ''){
            email.focus();
            return false;
        }

        if (confEmail.val() === ''){
            confEmail.focus();
            return false;
        }

        var pattern = "^[a-z0-9._-]+@[a-z]+.[a-z]{3}$";

        if (!email.val().match(pattern)) {
            alert('Email syntax error');
            email.focus();
            return false;
        }

        if (!confEmail.val().match(pattern)) {
            alert('Email syntax error');
            confEmail.focus();
            return false;
        }

        if (email.val() !== confEmail.val()){
            alert('Email not matched');
            email.focus();
            confEmail.focus();
            return false;
        }

        if (password.val() === ''){
            password.focus();
            return false;
        }

        if (confPassword.val() === ''){
            confPassword.focus();
            return false;
        }

        if (password.val() !== confPassword.val()){
            alert('Passwords not matches');
            password.focus();
            confPassword.focus();
            return false;
        }

        if (password.val().length < 8 || confPassword.val().length < 8){
            alert('Passwords at least 8 characters');
            return false;
        }

        var form = $('.sign_up_modal form'),
            formData = new FormData(form[0]);

        $.ajax({
            url: form.attr('action'),
            type: 'post',
            data: formData,
            // cache: false,
            processData: false,
            contentType: false,
            dataType: 'JSON',
            crossDomain: true
        }).done(function (data) {
            if (data.status === 'success'){
                $('.sign_up_modal .success_msg').removeClass('d-none').slideDown();
                $('.sign_up_modal .success_msg strong').html(data.msg);
                $('.sign_up_modal .error_msg').addClass('d-none').slideUp()
                $('.sign_up_modal .error_msg strong').html(data.msg);

                formData.forEach(function (value, index) {
                    $('#'+index).val('');
                });

                var buffer = setInterval(function () {
                    window.location.reload();
                    clearInterval(buffer);
                }, 1000)

            } else {
                $('.sign_up_modal .error_msg').removeClass('d-none').slideDown()
                $('.sign_up_modal .error_msg strong').html(data.msg);
                $('.sign_up_modal .success_msg').addClass('d-none').slideUp()
                $('.sign_up_modal .success_msg strong').html(data.msg);
            }

        });
    });

    // Login for user

    $('.sign_in_modal .sign_in_form button').click(function (e) {
        e.preventDefault();

        var email = $('#login_email'),
            password = $('#login_password');

        if (email.val() === ''){
            email.focus();
            return false;
        }

        var pattern = "^[a-z0-9._-]+@[a-z]+.[a-z]{3}$";

        if (!email.val().match(pattern)) {
            alert('Email syntax error');
            email.focus();
            return false;
        }

        if (password.val() === ''){
            password.focus();
            return false;
        }

        var form = $('.sign_in_modal form'),
            formData = new FormData(form[0]);

        $.ajax({
            url: form.attr('action'),
            type: 'post',
            data: formData,
            // cache: false,
            processData: false,
            contentType: false,
            dataType: 'JSON',
            crossDomain: true
        }).done(function (data) {
            if (data.status === 'success'){
                $('.sign_in_modal .success_msg').removeClass('d-none').slideDown();
                $('.sign_in_modal .success_msg strong').html(data.msg);
                $('.sign_in_modal .error_msg').addClass('d-none').slideUp()
                $('.sign_in_modal .error_msg strong').html(data.msg);

                formData.forEach(function (value, index) {
                    $('#'+index).val('');
                });

                var buffer = setInterval(function () {
                    window.location.reload();
                    clearInterval(buffer);
                }, 1000)

            } else {
                $('.sign_in_modal .error_msg').removeClass('d-none').slideDown()
                $('.sign_in_modal .error_msg strong').html(data.msg);
                $('.sign_in_modal .success_msg').addClass('d-none').slideUp()
                $('.sign_in_modal .success_msg strong').html(data.msg);
            }

        });


    });

    // Edit profile
    $('button#edit_profile').click(function (e) {
        e.preventDefault();
        ;

        var username = $('.profile_modal #edit_full_name'),
            email = $('.profile_modal #edit_user_email'),
            confEmail = $('.profile_modal #edit_confirm_email'),
            password = $('.profile_modal #edit_user_password'),
            confPassword = $('.profile_modal #edit_confirm_password');

        if (username.val() === ''){
            username.focus();
            return false;
        }

        if (email.val() === ''){
            email.focus();
            return false;
        }

        if (confEmail.val() === ''){
            confEmail.focus();
            return false;
        }

        var pattern = "^[a-z0-9._-]+@[a-z]+.[a-z]{3}$";

        if (!email.val().match(pattern)) {
            alert('Email syntax error');
            email.focus();
            return false;
        }

        if (!confEmail.val().match(pattern)) {
            alert('Email syntax error');
            confEmail.focus();
            return false;
        }

        if (email.val() !== confEmail.val()){

            alert('Emails not matches');
            email.focus();
            confEmail.focus();
            return false;
        }

        if (password.val() !== ''){

            if (confPassword.val() === ''){
                confPassword.focus();
                return false;
            }


            if (password.val() !== confPassword.val()){

                alert('Passwords not matches');
                password.focus();
                confPassword.focus();
                return false;
            }

            if (password.val().length < 8 || confPassword.val().length < 8){
                alert('Passwords must be at least 8 characters');
                return false;
            }
        }

        if (confPassword.val() !== ''){
                password.focus();
                return false;
        }


        var form = $('.profile_form form'),
            formData = new FormData(form[0]);

        $.ajax({
            url: form.attr('action'),
            type: 'post',
            data: formData,
            // cache: false,
            processData: false,
            contentType: false,
            dataType: 'JSON',
            crossDomain: true
        }).done(function (data) {
            if (data.status === 'success'){
                $('.profile_modal .success_msg').removeClass('d-none').slideDown();
                $('.profile_modal .success_msg strong').html(data.msg);
                $('.profile_modal .error_msg').addClass('d-none').slideUp()
                $('.profile_modal .error_msg strong').html(data.msg);

                var buffer = setInterval(function () {
                    window.location.reload();
                    clearInterval(buffer);
                }, 1000)

            } else {
                $('.profile_modal .error_msg').removeClass('d-none').slideDown()
                $('.profile_modal .error_msg strong').html(data.msg);
                $('.profile_modal .success_msg').addClass('d-none').slideUp()
                $('.profile_modal .success_msg strong').html(data.msg);
            }

        });
    });

    // Save surface answers

    $('.answer_form form:first-child').removeClass('d-none');

    var saveLink = $('a.save_surface_answer').attr('href');

    $('select.select_answer').change(function () {

        // $(this).after('<i class="fa fa-check"></i>');

        if($(this).val() == ''){
            $(this).siblings('i.fa-check').addClass('fa-close').css('color', 'red');
        } else {
            $(this).addClass('answered');
            $(this).siblings('i.fa-check').removeClass('fa-close').css({
                opacity: 1,
                color: 'green'
            });
            $('a.save_surface_answer').attr('href', '');

            $(this).parents('form').next('form').removeClass('d-none');
        }



            if ($(this).parents('form').is(':last-of-type') && $(this).hasClass('answered')){
                $('a.save_surface_answer').removeClass('d-none').attr('href', saveLink);
            }


            var formClass = $(this).parents('form').attr('class'),
                form = $('form.'+formClass),
                formData = new FormData(form[0]);

            $.ajax({
                url: form.attr('action'),
                type: 'post',
                data: formData,
                // cache: false,
                processData: false,
                contentType: false,
                dataType: 'JSON',
                crossDomain: true
            }).done(function (data) {});

        });

    $('input[type=radio].answer_check').change(function () {

        $(this).addClass('answered');
        $(this).siblings('i.fa-check').css('opacity', '1');
        $('a.save_surface_answer').attr('href', '');

        $(this).parents('form').next('form').removeClass('d-none');

        if ($(this).parents('form').is(':last-of-type') && $(this).hasClass('answered')){
            $('a.save_surface_answer').removeClass('d-none').attr('href', saveLink);
        }


        var formClass = $(this).parents('form').attr('id'),
            form = $('form#'+formClass),
            formData = new FormData(form[0]);

        $.ajax({
            url: form.attr('action'),
            type: 'post',
            data: formData,
            // cache: false,
            processData: false,
            contentType: false,
            dataType: 'JSON',
            crossDomain: true
        }).done(function (data) {});

    });


    $('.list_side .list-group-item:first-of-type a').addClass('non_disabled').attr('href', 'javascript:void;')

    // Surface track

    var navListItems = $('div.surface_Track div a'),
        allWells = $('.setup-content-2'),
        allNextBtn = $('.nextBtn-2'),
        allPrevBtn = $('.prevBtn-2');

    allWells.hide();

    navListItems.click(function (e) {
        e.preventDefault();
        var $target = $($(this).attr('href')),
            $item = $(this);

        if (!$item.hasClass('disabled')) {
            // navListItems.removeClass('btn-amber').addClass('btn-blue-grey');
            // $item.addClass('btn-amber');
            allWells.hide();
            $target.show();
            $target.find('input:eq(0)').focus();
        }
    });

    allPrevBtn.click(function(){
        var curStep = $(this).closest(".setup-content-2"),
            curStepBtn = curStep.attr("id"),
            prevStepSteps = $('div.surface_Track div a[href="#' + curStepBtn + '"]').parent().prev().children("a");

        prevStepSteps.removeAttr('disabled').trigger('click');
    });

    allNextBtn.click(function(){
        var curStep = $(this).closest(".setup-content-2"),
            curStepBtn = curStep.attr("id"),
            nextStepSteps = $('div.surface_Track div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
            curInputs = curStep.find("input[type='text'],input[type='url']");

        if (!nextStepSteps.hasClass('clicked')){
            var $target = $(nextStepSteps.attr('href'));
            $target.hide();
            alert('Please Click on previous lesson')
            return false;
        }

        if (nextStepSteps.hasClass('clicked')){
            $(this).parents('.steps-step-2').next('.steps-step-2').children('a').addClass('clicked');
            var isValid = true;
        }

        $(".form-group").removeClass("has-error");
        for(var i=0; i< curInputs.length; i++){
            if (!curInputs[i].validity.valid){
                isValid = false;
                $(curInputs[i]).closest(".form-group").addClass("has-error");
            }
        }

        if (isValid)
            nextStepSteps.removeAttr('disabled').trigger('click');
    });

    $('div.surface_Track div a.btn-amber').trigger('click');

    $('.surface_Track .steps-step-2:not(first-of-type) a').click(function (e) {
        e.preventDefault();
        if (!$(this).hasClass('clicked')){
            var $target = $($(this).attr('href'));
            $target.hide();
            alert('You must see previous lesson')
            return false;
        }

        if ($(this).hasClass('clicked')){
            $(this).parents('.steps-step-2').next('.steps-step-2').children('a').addClass('clicked');
        }

    });

    $('.surface_Track .steps-step-2:first-of-type a').click(function (e) {
        e.preventDefault();
        $(this).parents('.steps-step-2').next('.steps-step-2').children('a').addClass('clicked');

    })

    // Deep track

    var navListItems = $('div.deep_Track div a');
        allNextBtn = $('.deep-nextBtn-2'),
        allPrevBtn = $('.deep-prevBtn-2');

        navListItems.click(function (e) {
        e.preventDefault();
        var $target = $($(this).attr('href')),
            $item = $(this);

        if (!$item.hasClass('disabled')) {
            // navListItems.removeClass('btn-amber').addClass('btn-blue-grey');
            // $item.addClass('btn-amber');
            allWells.hide();
            $target.show();
            $target.find('input:eq(0)').focus();
        }
    });
        allPrevBtn.click(function(){
            var curStep = $(this).closest(".setup-content-2"),
                curStepBtn = curStep.attr("id"),
                prevStepSteps = $('div.surface_Track div a[href="#' + curStepBtn + '"]').parent().prev().children("a");

            prevStepSteps.removeAttr('disabled').trigger('click');
        });

        allNextBtn.click(function(){
    var curStep = $(this).closest(".setup-content-2"),
        curStepBtn = curStep.attr("id"),
        nextStepSteps = $('div.deep_Track div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
        curInputs = curStep.find("input[type='text'],input[type='url']"),
        isValid = true;

    $(".form-group").removeClass("has-error");
    for(var i=0; i< curInputs.length; i++){
        if (!curInputs[i].validity.valid){
            isValid = false;
            $(curInputs[i]).closest(".form-group").addClass("has-error");
        }
    }

    if (isValid)
        nextStepSteps.removeAttr('disabled').trigger('click');
});

    $('div.deep_Track div a.btn-amber').trigger('click');


    // Execute coder

    $('.coder button').click(function () {
        $('.coder #output').html($('.coder #input').val())
    })

    $('.coder #clear').click(function () {
        $('.coder #output').html('')
    })

    $('.steps-step-2').click(function () {
        var divIndex = $(this).index();

        $('.list_side ul li').eq(divIndex).addClass('list_side_color').siblings().removeClass('list_side_color');
        $('.list_side ul li').eq(divIndex).children('span').removeClass('d-none').siblings().children('span').addClass('d-none')

    })

    // Robot

    $('.robot_form form').submit(function (e) {
        e.preventDefault();

    });

    $('.get_all_chat').click(function (e) {
        e.preventDefault();

        if ($('#student_id').val() === ''){
            $('.robot_modal .result').html('PLEASE SIGN IN FIRST TO WAKE UP HHM !').css({
                textAlign: 'center',
            }).addClass('text-warning');
            return false;
        }

        $.ajax({
            url: $(this).attr('href'),
            type: 'post',
            // cache: false,
            processData: false,
            contentType: false,
            crossDomain: true,
        }).done(function (data) {
            $('.robot_modal .result').html(data);
            $('.replay').css({
                opacity: 1
            })
        });
    })

    $('.clear_all_chat').click(function () {
        $('.robot_modal .result').html('');
    })

    $('.robot_modal .robot_form input').keyup(function (e) {

        var form = $('.robot_modal .robot_form form'),
            formData = new FormData(form[0]);

        if (e.keyCode === 13){

            if ($('#student_id').val() === ''){
                $('.robot_modal .result').html('PLEASE SIGN IN FIRST TO WAKE UP HHM !').css({
                    textAlign: 'center',
                }).addClass('text-warning');
                return false;
            }

            $.ajax({
                url: form.attr('action'),
                type: 'post',
                // cache: false,
                processData: false,
                contentType: false,
                crossDomain: true,
                data: formData,
            }).done(function (data) {
                $('.robot_modal .result').html(data);
                setTimeout(function () {
                    $('.replay').css({
                        opacity: 1
                    })
                }, 600)
            });

            $(this).val('');
        }
    });

    var paragraphContent = $('.robot_modal .result p').html();

    $('.robot_modal .result span').hide();

    $('.navbar img').click(function () {
        counter = 0;
        $('.result span').delay(800).fadeIn();
        var buffer = setInterval(function () {
            counter++;
            $('.robot_modal .result span').html(paragraphContent.slice(0, counter));
            if (counter === paragraphContent.length) {
                clearInterval(buffer)
            }
        },150)
    });

    var counter = $('.counter');

    $('.contact_form #message').keypress(function () {

        var messageLength = $(this).val().length + 1;
        if (messageLength == 255){
            counter.addClass('text-danger');
            return false;
        } else {
            counter.html(messageLength + '/255');
            counter.addClass('text-success').removeClass('text-danger');
        }
    });

    $('#send_message').click(function (e) {
        e.preventDefault();

        var fullName = $('#contact_full_name'),
            email = $('#contact_user_email');


        if (fullName.val() === ''){
            alert('Please Login');
            return false;
        }

        if (email.val() === ''){
            alert('Please Login');
            return false;
        }


        var form = $('form#contact_form'),
            formData = new FormData(form[0]);

        $.ajax({
            url: form.attr('action'),
            type: 'post',
            data: formData,
            // cache: false,
            processData: false,
            contentType: false,
            dataType: 'JSON',
            crossDomain: true
        }).done(function (data) {
            if (data.status === 'success'){
                $('.contact .success_msg').removeClass('d-none').slideDown();
                $('.contact .success_msg strong').html(data.msg);
                $('.contact .error_msg').addClass('d-none').slideUp()
                $('.contact .error_msg strong').html(data.msg);

                formData.forEach(function (value, index) {
                    $('#'+index).val('');
                });

                // var buffer = setInterval(function () {
                //     window.location.reload();
                //     clearInterval(buffer);
                // }, 1000)

            } else {
                $('.contact .error_msg').removeClass('d-none').slideDown()
                $('.contact .error_msg strong').html(data.msg);
                $('.contact .success_msg').addClass('d-none').slideUp()
                $('.contact .success_msg strong').html(data.msg);
            }

        });
    });

    $('.lesson_question_form input[type=radio]').change(function () {

        if ($(this).val() === '0') {
            $(this).parents('.custom-radio').siblings('.custom-radio').children('label.right_answer').css({
                background: 'green'
            })

            $(this).siblings('label').css({
                background: 'red'
            })
        } else {
            $(this).siblings('label').css({
                background: 'green'
            })
        }
    });

    $('.lesson_question_deep_form input[type=radio]').change(function () {

        if ($(this).val() === '0') {
            $(this).next().css({
                background: 'red'
            })

        } else {
            $(this).siblings('label').css({
                background: 'green'
            })
        }
    })


});


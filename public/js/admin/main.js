$(document).ready(function () {

    // Login for admin
    $('#admin_login').click(function (e) {
        e.preventDefault();

        var email = $('#admin_email'),
            password = $('#admin_password');



        if (email.val() === ''){
            email.css({
                borderBottom: '1px solid #ff4f4f'
            });

            email.focus(function () {
                email.css({
                    borderBottom: '1px solid #d2d6de'
                });
            });
            return false;
        }

        var pattern = "^[a-z0-9._-]+@[a-z]+.[a-z]{3}$";

        if (!email.val().match(pattern)) {
            alert('Email syntax error');
            email.css({
                borderBottom: '1px solid #ff4f4f'
            });
            email.prev('span').css({
                color: '#ff4f4f'
            });

            email.focus(function () {
                email.css({
                    borderBottom: '1px solid #d2d6de'
                });
                email.prev('span').css({
                    color: '#777'
                });
            });
            return false;
        }

        if (password.val() === ''){
            password.css({
                borderBottom: '1px solid #ff4f4f'
            });

            password.focus(function () {
                password.css({
                    borderBottom: '1px solid #d2d6de'
                });
            });
            return false;
        }

        var form = $('form#admin_sign_in'),
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
                $('.success_msg').removeClass('hidden').slideDown();
                $('.success_msg .span_msg').html(data.msg);
                $('.error_msg').addClass('hidden').slideUp()
                $('.error_msg .span_msg').html(data.msg);

                formData.forEach(function (value, index) {
                    $('#'+index).val('');
                });

                var buffer = setInterval(function () {
                    window.location.reload();
                    clearInterval(buffer);
                }, 1000)

            } else {
                $('.error_msg').removeClass('hidden').slideDown()
                $('.error_msg .span_msg').html(data.msg);
                $('.success_msg').addClass('hidden').slideUp()
                $('.success_msg .span_msg').html(data.msg);
            }

        });


    });

    // Edit profile
    $('button#edit_admin').click(function (e) {
        e.preventDefault();

        var fullName = $('.admin_edit_modal #full_name'),
            adminEmail = $('.admin_edit_modal #admin_email'),
            confEmail = $('.admin_edit_modal #confirm_email'),
            adminPassword = $('.admin_edit_modal #admin_password'),
            confPassword = $('.admin_edit_modal #confirm_password');

        if (fullName.val() === ''){
            fullName.css({
                borderBottom: '1px solid #ff4f4f'
            });

            fullName.focus(function () {
                fullName.css({
                    borderBottom: '1px solid #d2d6de'
                });
            });
            return false;
        }

        if (adminEmail.val() === ''){
            adminEmail.css({
                borderBottom: '1px solid #ff4f4f'
            });

            adminEmail.focus(function () {
                adminEmail.css({
                    borderBottom: '1px solid #d2d6de'
                });
            });
            return false;
        }

        if (confEmail.val() === ''){
            confEmail.css({
                borderBottom: '1px solid #ff4f4f'
            });

            confEmail.focus(function () {
                confEmail.css({
                    borderBottom: '1px solid #d2d6de'
                });
            });
            return false;
        }

        var pattern = "^[a-z0-9._-]+@[a-z]+.[a-z]{3}$";

        if (!adminEmail.val().match(pattern)) {
            alert('Email syntax error');
            adminEmail.css({
                borderBottom: '1px solid #ff4f4f'
            });

            adminEmail.focus(function () {
                adminEmail.css({
                    borderBottom: '1px solid #d2d6de'
                });
            });
            return false;
        }

        if (!confEmail.val().match(pattern)) {
            alert('Email syntax error');
            confEmail.css({
                borderBottom: '1px solid #ff4f4f'
            });
            confEmail.prev('span').css({
                color: '#ff4f4f'
            });

            confEmail.focus(function () {
                confEmail.css({
                    borderBottom: '1px solid #d2d6de'
                });
                confEmail.prev('span').css({
                    color: '#777'
                });
            });
            return false;
        }

        if (adminEmail.val() !== confEmail.val()){

            alert('Emails not matches');

            adminEmail.css({
                borderBottom: '1px solid #ff4f4f'
            });

            adminEmail.focus(function () {
                adminPassword.css({
                    borderBottom: '1px solid #d2d6de'
                });
            });

            confEmail.css({
                borderBottom: '1px solid #ff4f4f'
            });

            confEmail.focus(function () {
                confEmail.css({
                    borderBottom: '1px solid #d2d6de'
                });


            });

            return false;
        }

        if (adminPassword.val() !== ''){

            if (confPassword.val() === ''){
                confPassword.css({
                    borderBottom: '1px solid #ff4f4f',
                });

                confPassword.focus(function () {
                    confPassword.css({
                        borderBottom: '1px solid #d2d6de',
                    });
                });
                return false;
            }


            if (adminPassword.val() !== confPassword.val()){

                alert('Passwords not matches');

                adminPassword.css({
                    borderBottom: '1px solid #ff4f4f',
                });

                adminPassword.focus(function () {
                    adminPassword.css({
                        borderBottom: '1px solid #d2d6de',
                    });
                });

                confPassword.css({
                    borderBottom: '1px solid #ff4f4f',
                });

                confPassword.focus(function () {
                    confPassword.css({
                        borderBottom: '1px solid #d2d6de',
                    });
                });

                return false;
            }

            if (adminPassword.val().length < 8 || confPassword.val().length < 8){
                alert('Passwords must be at least 8 characters');
                return false;
            }
        }

        if (confPassword.val() !== ''){

            if (adminPassword.val() === ''){
                adminPassword.css({
                    borderBottom: '1px solid #ff4f4f',
                    background: '#ffb9b9'
                });

                adminPassword.focus(function () {
                    adminPassword.css({
                        borderBottom: '1px solid #d2d6de',
                        background: '#fff'
                    });
                });

                return false;
            }

        }


        var form = $('.admin_edit_modal form#edit_admin_form'),
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
                $('.admin_edit_modal .success_msg').removeClass('hidden').slideDown();
                $('.admin_edit_modal .success_msg .span_msg').html(data.msg);
                $('.admin_edit_modal .error_msg').addClass('hidden').slideUp();
                $('.admin_edit_modal .error_msg .span_msg').html(data.msg);

                var bufferr = setInterval(function () {
                    window.location.reload();
                    clearInterval(bufferr);
                }, 1000)

            } else {
                $('.admin_edit_modal.error_msg').removeClass('hidden').slideDown();
                $('.admin_edit_modal .error_msg .span_msg').html(data.msg);
                $('.admin_edit_modal .success_msg').addClass('hidden').slideUp();
                $('.admin_edit_modal .success_msg .span_msg').html(data.msg);
            }

        });
    });

    // Active and non active
    $(document).on('click', 'button.approve_user', function (e) {
        e.preventDefault();

        $(this).toggleClass('active non-active btn-success btn-warning');

        if ($(this).hasClass('active')){
            $(this).html('DES ACTIVE');
            $.ajax({
                url: $(this).data('href'),
                type: 'post',
                data: {
                    user_id: $(this).data('user-id'),
                    approve: 0
                }
            })
        }

        if ($(this).hasClass('non-active')){
            $(this).html('ACTIVE');
            $.ajax({
                url: $(this).data('href'),
                type: 'post',
                data: {
                    user_id: $(this).data('user-id'),
                    approve: 1
                }
            })
        }

    });

    // Delete user
    $(document).on('click', 'button.delete_user', function (e) {
        e.preventDefault();

        if (confirm('Are you sure to delete this student ?')){

            $.ajax({
            url: $(this).data('href'),
            type: 'post',
            dataType: 'JSON',
            crossDomain: true,
            data: {
                user_id: $(this).data('user-id'),
            }
        }).done(function (data) {
            if (data.status === 'success'){
                $('.success_msg').removeClass('hidden').slideDown();
                $('.success_msg .span_msg').html(data.msg);
                $('.error_msg').addClass('hidden').slideUp();
                $('.error_msg .span_msg').html(data.msg);
            } else {
                $('.error_msg').removeClass('hidden').slideDown();
                $('.error_msg .span_msg').html(data.msg);
                $('.success_msg').addClass('hidden').slideUp();
                $('.success_msg .span_msg').html(data.msg);
            }

        });

            $(this).parents('tr.tr_'+$(this).data('user-id')).remove();
        }

    });
    
    // Show incident form
    $('.show_incident_modal').click(function () {

        $.ajax({
            url: $(this).data('href'),
            type: 'post',
            crossDomain: true,
            data:{
                incident_id: $(this).data('incident-id')
            }
        }).done(function (data) {
            $('.incident_edit_modal .modal-body').html(data)
        })
    });

    // Update incident
    $('button#edit_incident').click(function (e) {
        e.preventDefault();

        var desc = $('.modal #description'),
            subject = $('.modal #subject'),
            solution = $('#solution');


        if (desc.val() === ''){
            desc.css({
                border: '1px solid #ff4f4f'
            });

            desc.focus(function () {
                desc.css({
                    border: '1px solid #d2d6de'
                });
            });
            return false;
        }

        if (subject.val() === ''){
            subject.css({
                border: '1px solid #ff4f4f'
            });

            subject.focus(function () {
                subject.css({
                    border: '1px solid #d2d6de'
                });
            });
            return false;
        }

        if (solution.val() === ''){
            solution.css({
                border: '1px solid #ff4f4f'
            });

            solution.focus(function () {
                solution.css({
                    border: '1px solid #d2d6de'
                });
            });
            return false;
        }


        var form = $('form#edit_incident_form'),
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
                $('.success_msg').removeClass('hidden').slideDown();
                $('.success_msg .span_msg').html(data.msg);
                $('.error_msg').addClass('hidden').slideUp();
                $('.error_msg .span_msg').html(data.msg);
                
                var buffer = setInterval(function () {
                    window.location.reload();
                    clearInterval(buffer);
                }, 1000)

            } else {
                $('.error_msg').removeClass('hidden').slideDown();
                $('.error_msg .span_msg').html(data.msg);
                $('.success_msg').addClass('hidden').slideUp();
                $('.success_msg .span_msg').html(data.msg);
            }

        });
    });

    // Delete incident

    $('button#delete_incident').click(function () {

        if (confirm('Are you sure to delete this incident ?')){
            $(this).parents('.tr_'+$(this).data('incident-id')).remove();
            $.ajax({
                url: $(this).data('href'),
                type: 'post',
                dataType: 'JSON',
                data: {
                    incident_id: $(this).data('incident-id')
                }
            }).done(function (data) {
                $('.success_msg_delete').removeClass('hidden').slideDown();
                $('.success_msg_delete .span_msg').html(data.msg);
            });
        }
    });

    // Add incident

    $('#add_incident').click(function (e) {
        e.preventDefault();

        var subject = $('#subject'),
            description = $('#description'),
            solution = $('#solution');

        if (subject.val() === ''){
            subject.css({
                borderBottom: '1px solid #ff4f4f'
            });

            subject.focus(function () {
                subject.css({
                    borderBottom: '1px solid #d2d6de'
                });
            });
            return false;
        }

        if (description.val() === ''){
            description.css({
                borderBottom: '1px solid #ff4f4f'
            });

            description.focus(function () {
                description.css({
                    borderBottom: '1px solid #d2d6de'
                });
            });
            return false;
        }

        if (solution.val() === ''){
            solution.css({
                borderBottom: '1px solid #ff4f4f'
            });

            solution.focus(function () {
                solution.css({
                    borderBottom: '1px solid #d2d6de'
                });
            });
            return false;
        }

        var form = $('form#add_incident_form'),
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
                $('.success_msg_incident').removeClass('hidden').slideDown();
                $('.success_msg_incident .span_msg').html(data.msg);
                $('.error_msg_incident').addClass('hidden').slideUp();
                $('.error_msg_incident .span_msg').html(data.msg);

                formData.forEach(function (value, index) {
                    $('#'+index).val('');
                });

            } else {
                $('.error_msg_incident').removeClass('hidden').slideDown();
                $('.error_msg_incident .span_msg').html(data.msg);
                $('.success_msg_incident').addClass('hidden').slideUp();
                $('.success_msg_incident .span_msg').html(data.msg);
            }

        });


    });

});

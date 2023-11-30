(function ($) {
    "use strict";

    $('.alert-success').hide();

    $('.input-field').each(function () {
        $(this).on('blur', function () {
            if ($(this).val().trim() != "") {
                $(this).addClass('has-val');
            } else {
                $(this).removeClass('has-val');
            }
        })
    })
    var name = $('.validate-input input[name="name"]');
    var email = $('.validate-input input[name="email"]');
    var password = $('.validate-input input[name="password"]');
    $('.validate-form').on('submit', function (e) {
        e.preventDefault();
        $('.alert-success').hide();
        var check = true;
        if ($(name).val().trim() == '') {
            showValidate(name);
            check = false;
        }
        if ($(email).val().trim().match(/^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{1,5}|[0-9]{1,3})(\]?)$/) == null) {
            showValidate(email);
            check = false;
        }
        if ($(password).val().trim() == '') {
            showValidate(password);
            check = false;
        }

        if (check) {
            $.ajax({
                type: 'POST',
                url: 'processa_formulario.php',
                data: $(this).serialize(),
                dataType: 'json',
                success: function (response) {
                    if (response.success) {
                        $('.alert-success').html(response.message).show();
                    } else if (response.errors && response.errors.length > 0) {
                        for (var i = 0; i < response.errors.length; i++) {
                            if (response.errors[i] === 'name') {
                                showValidate(name);
                            } else if (response.errors[i] === 'email') {
                                showValidate(email);
                            }
                        }
                    }
                }
            });
        }

        return false;
    });
    $('.validate-form .input-field').each(function () {
        $(this).focus(function () {
            hideValidate(this);
        });
    });

    function showValidate(input) {
        var thisAlert = $(input).parent();
        $(thisAlert).addClass('alert-validate');
    }

    function hideValidate(input) {
        var thisAlert = $(input).parent();
        $(thisAlert).removeClass('alert-validate');
    }

    $(document).on('click', '.close-btn', function () {
        var div = $(this).parent();
        div.css('opacity', '0');
        setTimeout(function () {
            div.hide();
        }, 600);
    });
})(jQuery);
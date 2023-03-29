//window.$ = window.jQuery = require('jquery');

$(document).ready(function(e) {
    initTogglePasswordFields();
    initFormBlocker();
});

/**
 * Disable a form to avoid it being submitted twice
 */
function initFormBlocker() {
    $('form.submit-lock').on('submit', function (e) {
        $(this).find('.btn-save').hide();
        $(this).find('.btn-wait').show();

        return true;
    });
}

/**
 * Show/Hide password field helpers
 */
function initTogglePasswordFields() {
    var passwordField = $('#password');
    var passwordToggleIcon = $('.toggle-password-icon');
    $('.toggle-password').on('click', function(e) {
        e.preventDefault();
        if (passwordField.prop('type') === 'text') {
            passwordField.prop('type', 'password');
            passwordToggleIcon.removeClass('fa-eye-slash').addClass('fa-eye')
        } else {
            passwordField.prop('type', 'text');
            passwordToggleIcon.removeClass('fa-eye').addClass('fa-eye-slash');
        }
        return false;
    });
}

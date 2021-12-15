$(function() {
    $('#form_42718').submit(function (event) {
        event.preventDefault();
        var name = $('#name_42718').val();
        var email = $('#email_42718').val();
        var message = $('#message_42718').val();
        var formData = {
            name: name,
            email: email,
            message: message
        };
        $.ajax({
            url: "./includes/form.php",
            type: "POST",
            data: formData,
            cache: false,
            success: function (result) // Success
            {
                console.log(result);
            },
            error: function (e) // Fail
            {
                console.log(e);
            },
        });
    });
});
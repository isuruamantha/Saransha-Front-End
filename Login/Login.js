$(document).ready(function () {
    $("#login-button").click(function () {

        if ($('#login-username').val() == "" || $('#login-password').val() == "") {
            alert("Please fill the required fields")
        } else {
            $.ajax({
                url: 'http://localhost:5000/login',
                type: 'post',
                contentType: 'application/json',
                data: JSON.stringify({
                    "userName": $('#login-username').val(),
                    "userPassword": $('#login-password').val()

                }),
                success: function (data) {
                    localStorage.setItem("isValidSession", true);
                    alert(data);
                    window.location.href = 'dashboard.php';
                },
                error: function (jqXhr, textStatus, errorThrown) {
                    alert("Request Failed");
                }
            });
        }

    });

    $("#register-button").click(function () {

        if ($('#register-username').val() == "" || $('#register-password').val() == "" || $('#register-email').val() == "") {
            alert("Please fill the required fields")
        } else {
            $.ajax({
                url: 'http://localhost:5000/signup',
                type: 'post',
                contentType: 'application/json',
                data: JSON.stringify({
                    "userName": $('#login-username').val(),
                    "userPassword": $('#login-password').val(),
                    "userEmail": $('#login-password').val()

                }),
                success: function (data) {
                    alert("Register Successful!")

                },
                error: function (jqXhr, textStatus, errorThrown) {
                    alert(errorThrown);
                }
            });
        }

    });

});



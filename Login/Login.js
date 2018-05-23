$(document).ready(function () {
    $("#login-button").click(function (event) {
        event.preventDefault();
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
                    console.log(data[0]);
                    if (data[0] == "fail") {
                        alert("Login Unsuccessful !")
                    } else {
                        localStorage.setItem("isValidSession", true);
                        localStorage.setItem("userName", data[1]);
                        localStorage.setItem("userId", data[2]);
                        window.location.href = 'Dashboard/dashboard.php';
                    }

                },
                error: function (jqXhr, textStatus, errorThrown) {
                    alert("Login Unsuccessful");
                }
            });
        }

    });

    $("#register-button").click(function () {
        event.preventDefault();
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



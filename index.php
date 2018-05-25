<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>සාරාංශා - Sārānshā</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.0/css/bootstrap-theme.css"></script>
    <script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
    <link rel="stylesheet" href="Login/login.css">
    <script src="Login/Login.js"></script>
</head>
<body>

<div class="container">
    <div class="row">
        <div class="pen-title">
            <h1>සාරාංශා - Sārānshā</h1>
        </div>
        <div class="container">
            <div class="card"></div>
            <div class="card">
                <h1 class="title">Login</h1>
                <form>
                    <div class="input-container">
                        <input type="text" id="login-username" required="required"/>
                        <label for="login-username">පරිශීලක නාමය / Username</label>
                        <div class="bar"></div>
                    </div>
                    <div class="input-container">
                        <input type="password" id="login-password" required="required"/>
                        <label for="login-password">මුරපදය / Password</label>
                        <div class="bar"></div>
                    </div>
                    <div class="button-container">
                        <button id="login-button"><span>Login</span></button>
                    </div>
                </form>
            </div>
            <div class="card alt">
                <div class="toggle"></div>
                <h1 class="title">Register
                    <div class="close"></div>
                </h1>
                <form>
                    <div class="input-container">
                        <input type="text" id="register-username" required="required"/>

                        <label for="register-username">පරිශීලක නාමය / Username</label>
                        <div class="bar"></div>
                    </div>
                    <div class="input-container">
                        <input type="password" id="register-password" required="required"/>
                        <label for="register-password">මුරපදය / Password</label>
                        <div class="bar"></div>
                    </div>
                    <div class="input-container">
                        <input type="text" id="register-email" required="required"/>
                        <label for="register-email">ඊමේලය / Email</label>
                        <div class="bar"></div>
                    </div>
                    <div class="button-container">
                        <button id="register-button"><span>Register</span></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<script>
    $(document).ready(function () {
        $('.toggle').on('click', function () {
            $('.container').stop().addClass('active');
        });

        $('.close').on('click', function () {
            $('.container').stop().removeClass('active');
        });

    });
</script>
</body>
</html>
<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
<link rel="stylesheet" href="about.css">
<script src="../Dashboard/dashboard.js"></script>
<link rel="stylesheet" href="../Dashboard/dashboard.css">
<body>

<div class="sidenav">

    <span><h3 style="color: white; margin-left: 12px">HI, <span id="user-name"></span></h3></span>
    <script>
        document.getElementById('user-name').innerHTML = localStorage.getItem("userName")
    </script>
    <a href="../Dashboard/dashboard.php">Dashboard</a>
    <a href="../History/history.php">History</a>
    <a href="../About/about.php">About</a>


</div>

<div class="main">

    <div class="container text-center">
        <div class="row">
            <div class="col-lg-12">

                <div class="card hovercard">
                    <div class="cardheader">

                    </div>
                    <div class="avatar">
                        <img alt="" src="../assets/profile.png">
                    </div>
                    <div class="info">
                        <div class="title">
                            <a target="_blank" href="http://isuruamantha.me/">ඉසුරු අමන්ත සිරිවර්ධන </a>
                        </div>
                        <div class="desc">Software Engineer</div>
                    </div>
                    <div class="bottom">
                        <a class="btn btn-primary btn-twitter btn-sm" href="https://twitter.com/isuruamantha">
                            <i class="fa fa-twitter"></i>
                        </a>
                        <a class="btn btn-danger btn-sm" rel="publisher"
                           href="https://plus.google.com/+IsuruAmantha">
                            <i class="fa fa-google-plus"></i>
                        </a>
                        <a class="btn btn-primary btn-sm" rel="publisher"
                           href="https://www.facebook.com/isuru.amantha">
                            <i class="fa fa-facebook"></i>
                        </a>
                        <a class="btn btn-warning btn-sm" rel="publisher" href="https://plus.google.com/isuruamantha">
                            <i class="fa fa-behance"></i>
                        </a>
                    </div>
                </div>

            </div>

        </div>
    </div>

</div>
</body>
</div>

</html>

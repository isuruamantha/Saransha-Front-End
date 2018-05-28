<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
<link rel="stylesheet" href="history.css">
<script src="../Dashboard/dashboard.js"></script>
<link rel="stylesheet" href="../Dashboard/dashboard.css">
<script src="History.js"></script>
<script src="https://unpkg.com/i18next/i18next.js"></script>
<body>

<div class="sidenav">

    <div class="text-center">
        <div class="btn-group">
            <button type="button" class="btn btn-primary"
                    onclick="i18next.changeLanguage('en'); changeAppLanguage('en')"><img
                        src="../assets/uk_flak.jpg" width="26"/></button>
            <button type="button" class="btn btn-primary"
                    onclick="i18next.changeLanguage('de'); changeAppLanguage('de')"><img
                        src="../assets/sri_lanka_flag.png" width="40"/></button>
        </div>
    </div>

    <span><h3 style="color: white; margin-left: 12px"><span id="localization-hi">HI</span>, <span id="user-name"></span></h3></span>
    <script>
        document.getElementById('user-name').innerHTML = localStorage.getItem("userName")
    </script>
    <a href="../Dashboard/dashboard.php"><span id="localization-dasbhoard">Dashboard</span></a>
    <a href="../History/history.php"><span id="localization-history">History</span></a>
    <a href="../About/about.php"><span id="localization-about">About</span></a>
</div>

<div class="main">
    <div class="container">
        <div class="row col-md-12 custyle">
            <table class="table table-striped custab" id="history-table">
                <thead>

                <tr>
                    <th>Created date</th>
                    <th>Summary</th>
                </tr>
                </thead>

            </table>
        </div>
    </div>

</div>
<script src="../localizations.js"></script>
</body>
</div>

</html>

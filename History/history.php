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
    <div class="container">
        <div class="row col-md-12 custyle">
            <table class="table table-striped custab" id="history-table">
                <thead>

                <tr>
                    <th>Created date</th>
                    <th>Summary</th>
                    <th class="text-center">Action</th>
                </tr>
                </thead>

            </table>
        </div>
    </div>

</div>
</body>
</div>

</html>

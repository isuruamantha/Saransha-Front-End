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
<body>

<div class="sidenav">

    <span><h3 style="color: white; margin-left: 12px">HI, Isuru</h3></span>
    <a href="../Dashboard/dashboard.php">Dashboard</a>
    <a href="history.php">History</a>
    <a href="../About/about.php">About</a>
</div>

<div class="main">
    <div class="container">
        <div class="row col-md-6 col-md-offset-2 custyle">
            <table class="table table-striped custab">
                <thead>

                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Parent ID</th>
                    <th class="text-center">Action</th>
                </tr>
                </thead>
                <tr>
                    <td>1</td>
                    <td>News</td>
                    <td>News Cate</td>
                    <td class="text-center"><a class='btn btn-info btn-xs' href="#"><span
                                    class="glyphicon glyphicon-edit"></span> Edit</a> <a href="#"
                                                                                         class="btn btn-danger btn-xs"><span
                                    class="glyphicon glyphicon-remove"></span> Del</a></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Products</td>
                    <td>Main Products</td>
                    <td class="text-center"><a class='btn btn-info btn-xs' href="#"><span
                                    class="glyphicon glyphicon-edit"></span> Edit</a> <a href="#"
                                                                                         class="btn btn-danger btn-xs"><span
                                    class="glyphicon glyphicon-remove"></span> Del</a></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Blogs</td>
                    <td>Parent Blogs</td>
                    <td class="text-center"><a class='btn btn-info btn-xs' href="#"><span
                                    class="glyphicon glyphicon-edit"></span> Edit</a> <a href="#"
                                                                                         class="btn btn-danger btn-xs"><span
                                    class="glyphicon glyphicon-remove"></span> Del</a></td>
                </tr>
            </table>
        </div>
    </div>

</div>
</body>
</div>

</html>
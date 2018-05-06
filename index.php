<!DOCTYPE html>
<meta charset="utf-8">
<head>
    <link rel="stylesheet" type="text/css" href="stylesheet.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>

<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="http://d3js.org/d3.v3.min.js"></script>
<script src="dndTree.js"></script>
<body>
<div class="container">
    <div class="panel panel-default" style="margin-top: 20px;">
        <div class="panel-heading">Enter your text here</div>
        <div class="panel-body">
            <form action="index.php"" method="POST">
                <div class="form-group">
                    <textarea class="form-control" name="data" rows="5" id="source-text"></textarea>
                </div>
                            <button type="submit" value="submit" name="submit" class="btn btn-primary btn pull-right" id="create-mindmap">Process</button>
            </form>
        </div>
    </div>

        <div class="panel panel-default" style="margin-top: 20px;">
            <div class="panel-heading">Generated Summary</div>
            <div class="panel-body">
                <form action="index.php"" method="POST">
                    <div class="form-group">
                        <textarea class="form-control" name="data" rows="5" id="generated-text"></textarea>
                    </div>
                </form>
            </div>
        </div>

    <!--<button type="button" class="btn btn-primary" id="save-button">Save</button>-->
    <div id="tree-container"></div>
</body>
</div>

</html>

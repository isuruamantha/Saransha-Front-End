<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>

<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="assets/go.js"></script>
<script src="summarization.js"></script>
<script type="text/javascript" src="bower_components/d3/d3.js"></script>
<script type="text/javascript" src="bower_components/d3-cloud/d3.layout.cloud.js"></script>
<body>
<script src="mindmap.js"></script>
<div class="container">
    <div class="panel panel-default" style="margin-top: 20px;">
        <div class="panel-heading">Enter your text Sinhala here</div>
        <div class="panel-body">
            <form action="" method="POST">
                <div class="form-group">
                    <textarea class="form-control" name="data" rows="5" id="source-text"></textarea>
                </div>
                <button type="button" value="submit" name="submit" class="btn btn-primary btn pull-right"
                        onclick="init();update()"
                        id="create-mindmap">Process
                </button>
            </form>
        </div>
    </div>
    <hr>

    <div class="panel panel-default" style="margin-top: 20px;">
        <div class="panel-heading">Generated Sinhala Summary</div>
        <div class="panel-body">
            <form action="dashboard.php"
            " method="POST">
            <div class="form-group">
                <textarea class="form-control" name="data" rows="5" id="generated-text"></textarea>
            </div>
            </form>
        </div>
    </div>
    <hr>

    <div id="sample">
        <div id="myDiagramDiv" style="border: solid 1px black; width:100%; height:300px;"></div>
        <br>

        <div align="center">
            <button class="btn btn-primary btn" id="SaveButton" onclick="save()">Save</button>
            <button class="btn btn-primary btn" onclick="load()">Load</button>
            <button class="btn btn-primary btn" onclick="layoutAll()">Re-arrange</button>
            <br/>
        </div>
        <hr>


        <div id="vis"></div>
        <script type="text/javascript" src="word-cloud.js"></script>


</body>
</div>

</html>

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
<body onload="init()">
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
                        id="create-mindmap">Process
                </button>
            </form>
        </div>
    </div>

    <div class="panel panel-default" style="margin-top: 20px;">
        <div class="panel-heading">Generated Sinhala Summary</div>
        <div class="panel-body">
            <form action="index.php"
            " method="POST">
            <div class="form-group">
                <textarea class="form-control" name="data" rows="5" id="generated-text"></textarea>
            </div>
            </form>
        </div>
    </div>

    <div id="sample">
        <div id="myDiagramDiv" style="border: solid 1px black; width:100%; height:300px;"></div>

        <button id="SaveButton" onclick="save()">Save</button>
        <button onclick="load()">Load</button>
        <button onclick="layoutAll()">Layout</button>
        <br/>
    </div>


    <div id="vis"></div>
    <script type="text/javascript" src="word-cloud.js"></script>


</body>
</div>

</html>

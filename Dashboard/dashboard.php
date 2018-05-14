<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="../assets/go.js"></script>
<script src="../summarization.js"></script>
<script src="dashboard.js"></script>
<script type="text/javascript" src="../bower_components/d3/d3.js"></script>
<script type="text/javascript" src="../bower_components/d3-cloud/d3.layout.cloud.js"></script>
<link rel="stylesheet" href="dashboard.css">
<body>
<script src="../mindmap.js"></script>

<div class="sidenav">

    <span><h3 style="color: white; margin-left: 12px">HI, Isuru</h3></span>
    <a href="dashboard.php">Dashboard</a>
    <a href="../History/history.php">History</a>
    <a href="#">About</a>
</div>

<div class="main">
    <div class="container">
        <div class="panel panel-default" style="margin-top: 20px;">
            <div class="panel-heading">Enter your text Sinhala here</div>
            <div class="panel-body">
                <form action="" method="POST">
                    <div class="form-group">
                        <textarea class="form-control" name="data" rows="5" id="source-text"></textarea>
                    </div>

                    Number of lines in the summary
                    <div class="center-plus-minus"><p></p>
                        <div class="input-group">
                        <span class="input-group-btn">
                            <button type="button" class="btn btn-default btn-number" disabled="disabled"
                                    data-type="minus" data-field="quant[1]">
                          <span class="glyphicon glyphicon-minus"></span></button></span>
                            <input type="text" name="quant[1]" id="line-count" class="form-control input-number"
                                   value="5" min="1" max="10" style="z-index: 0 !important;">
                            <span class="input-group-btn">
                      <button type="button" class="btn btn-default btn-number" data-type="plus" data-field="quant[1]">
                          <span class="glyphicon glyphicon-plus"></span>
                      </button>
                  </span></div>
                    </div>
                    <br>

                    Number of keywords in the word cloud
                    <div class="center-plus-minus"><p></p>
                        <div class="input-group">
                        <span class="input-group-btn">
                            <button type="button" class="btn btn-default btn-number" disabled="disabled"
                                    data-type="minus" data-field="quant[2]">
                          <span class="glyphicon glyphicon-minus"></span></button></span>
                            <input type="text" name="quant[2]" id="keyword-count" class="form-control input-number"
                                   value="20"
                                   min="1" max="30">
                            <span class="input-group-btn">
                      <button type="button" class="btn btn-default btn-number" data-type="plus" data-field="quant[2]">
                          <span class="glyphicon glyphicon-plus"></span>
                      </button>
                  </span></div>
                    </div>


                    <button type="button" value="submit" name="submit" class="btn btn-primary btn pull-right"
                            onclick="init();update()" id="create-mindmap">Process
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
                <!--            <button class="btn btn-primary btn" id="SaveButton" onclick="save()">Save</button>-->
                <button class="btn btn-primary btn" onclick="load()">Load</button>
                <button class="btn btn-primary btn" onclick="layoutAll()">Re-arrange</button>
                <br/>
            </div>
            <hr>

            <div id="vis"></div>
            <script type="text/javascript" src="../word-cloud.js"></script>

        </div>
    </div>
</body>
</div>

</html>

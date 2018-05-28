<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="../assets/go.js"></script>
<script src="../summarization.js"></script>
<script src="dashboard.js"></script>
<script type="text/javascript" src="../bower_components/d3/d3.js"></script>
<script type="text/javascript" src="../bower_components/d3-cloud/d3.layout.cloud.js"></script>
<script src="../bower_components/jssocials/dist/jssocials.min.js"></script>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<link rel="stylesheet" href="dashboard.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
<link rel="stylesheet" type="text/css" href="../bower_components/jssocials/dist/jssocials.css"/>
<link rel="stylesheet" type="text/css" href="../bower_components/jssocials/dist/jssocials-theme-flat.css"/>
<script src="https://unpkg.com/i18next/i18next.js"></script>

<body>
<script src="../mindmap.js"></script>

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
        <div class="panel panel-default" style="margin-top: 20px;">
            <div class="panel-heading clearfix"><span id="localization_enter_your_sinhala_text">Enter your text Sinhala here</span>
                <div class="pull-right">
                    <form action="" method="post" enctype="multipart/form-data" id="isuru">
                        <label style="display: inline-block" for="file"><span
                                    id="localization_upload_file">Upload file:</span></label> <input
                                class="btn btn-primary btn"
                                style="display: inline-block" type="file" name="file" id="file"/>
                        <input class="btn btn-primary btn" style="display: inline-block" type="submit" value="Submit">
                    </form>
                </div>
            </div>
            <div class="panel-body">
                <form action="" method="POST">
                    <div class="form-group">
                        <textarea class="form-control" name="data" rows="5" id="source-text">
                            <?php
                            error_reporting(E_ERROR | E_PARSE);
                            $fp = fopen($_FILES['file']['tmp_name'], 'rb');
                            while (($line = fgets($fp)) !== false) {
                                echo "$line";
                            }
                            fclose($fp);
                            ?>
                        </textarea>
                    </div>
                    <span id="localization_number_of_line_in_summary">Number of lines in the summary</span>
                    <div class="center-plus-minus"><p></p>
                        <div class="input-group">
                        <span class="input-group-btn">
                            <button type="button" class="btn btn-default btn-number" disabled="disabled"
                                    data-type="minus" data-field="quant[1]">
                          <span class="glyphicon glyphicon-minus"></span></button></span>
                            <input type="text" name="quant[1]" id="line-count" class="form-control input-number"
                                   value="3" min="1" max="10" style="z-index: 0 !important;">
                            <span class="input-group-btn">
                      <button type="button" class="btn btn-default btn-number" data-type="plus" data-field="quant[1]">
                          <span class="glyphicon glyphicon-plus"></span>
                      </button>
                  </span></div>
                    </div>
                    <br>
                    <span id="localization_number_of_keywords_in_the_word_cloud">Number of keywords in the word cloud</span>

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
                    <button style="margin-right: 10px" value="submit" type="button"
                            class="btn btn-primary btn pull-right"
                            id="reset-button">Reset
                    </button>
                </form>
            </div>
        </div>
        <hr>

        <div class="panel panel-default" style="margin-top: 20px;">
            <div class="panel-heading"><span
                        id="localization_generated_sinhala_summary">Generated Sinhala Summary</span></div>
            <div class="panel-body">
                <form action="dashboard.php" method="POST">
                    <div class="form-group">
                        <textarea class="form-control" name="data" rows="5" id="generated-text"></textarea>
                    </div>
                </form>
                <span class="text-center" id="share"></span>
                <script>
                    $("#share").jsSocials({
                        showLabel: false,
                        showCount: false,
                        shareIn: "popup",
                        text: "Sinhala Summarization",
                        shares: ["email", "twitter", "facebook", "googleplus", "linkedin", "whatsapp"]
                    });
                </script>
                <button type="button" value="submit" name="submit" class="btn btn-primary btn pull-right"
                        onclick="" id="save-summary">Save summary
                </button>
            </div>
        </div>
        <hr>

        <div class="col-md-12">
            <div class="panel with-nav-tabs panel-primary">
                <div class="panel-heading">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#tab2primary" data-toggle="tab"><span
                                        id="localization_generated_mindmap">Generated Mind map</span></a></li>
                        <li><a href="#tab3primary" data-toggle="tab"><span id="localization_geneerated_word_cloud">Generated Word cloud</span></a>
                        </li>
                        <li><a href="#tab4primary" data-toggle="tab"><span id="localization_frequent_words">Frequent words</span></a>
                        </li>
                    </ul>
                </div>
                <div class="panel-body">
                    <div class="tab-content">
                        <div class="tab-pane fade in active" id="tab2primary">

                            <div id="myDiagramDiv" style="border: solid 1px black; width:100%; height:300px;"></div>
                            <br>

                            <div align="center" onload="load()">
                                <button class="btn btn-primary btn" onclick="load()">Load</button>
                                <button class="btn btn-primary btn" onclick="layoutAll()">Re-arrange</button>
                                <br/>
                            </div>

                        </div>

                        <div class="tab-pane fade" id="tab3primary">
                            <div id="vis"></div>
                        </div>

                        <div class="tab-pane fade" id="tab4primary">
                            <div id="barchart_material" style="width: 900px; height: 500px; margin-top: 20px"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="../word-cloud.js"></script>
    <script src="../dashboard_localizations.js"></script>
</body>
</div>

</html>

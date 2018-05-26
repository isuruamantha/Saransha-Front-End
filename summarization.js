
$(document).ready(function () {

    $("#reset-button").click(function () {
        $('#source-text').val('');
        location.reload();
    });

    $("#create-mindmap").click(function () {

        // Identify the whether the input is sinhala or not
        var language = $('#source-text').val();
        var english = /^[A-Za-z0-9]*$/;

        if (english.test(language)) {
            alert("Please Enter a Sinhala Paragraph")
        } else {
            // Request for summarizing
            $.ajax({
                url: 'http://localhost:5000/summarizer',
                type: 'post',
                contentType: 'application/json',
                data: JSON.stringify({
                    "data": $('#source-text').val(),
                    "sentences_count": $('#line-count').val(),
                    "keyword_count": $('#keyword-count').val()
                }),
                success: function (data) {
                    console.log(data);
                    // $('#generated-text').val("");
                    $('#generated-text').append(data);
                    $("#share").jsSocials("option", "text",data);
                    $("#share").jsSocials("refresh");

                },
                error: function (jqXhr, textStatus, errorThrown) {
                    alert("Summarization Request Failed");
                }
            });



            google.charts.load('current', {'packages': ['bar']});
            google.charts.setOnLoadCallback(drawChart);


                console.log("beg");
                $.ajax({
                    url: 'http://localhost:5000/keywordsforbarchart',
                    type: 'post',
                    contentType: 'application/json',
                    data: JSON.stringify({
                        "data": $('#source-text').val(),
                        "sentences_count": $('#line-count').val(),
                        "keyword_count": $('#keyword-count').val()
                    }),
                    success: function (data) {
                        console.log(data)
                    },
                    error: function (jqXhr, textStatus, errorThrown) {
                        alert("Word Request Failed");
                    }
                });

            function drawChart() {
                // console.log(jsonData);

                // var data = google.visualization.arrayToDataTable([
                //     ['Year', 'Sales'],
                //     ['2014', 1000],
                //     ['2015', 1170],
                //     ['2016', 660],
                //     ['2017', 1030]
                // ]);


                // var data = new google.visualization.DataTable(jsonData);
                //
                // var options = {
                //     bars: 'vertical'
                // };
                //
                // var chart = new google.charts.Bar(document.getElementById('barchart_material'));
                //
                // chart.draw(data, google.charts.Bar.convertOptions(options));

                console.log("end");
            }




        }

    });

    $("#save-summary").click(function () {
        $.ajax({
            url: 'http://localhost:5000/savesummary',
            type: 'post',
            contentType: 'application/json',
            data: JSON.stringify({
                "userId": localStorage.getItem("userId"),
                "summary": $('#generated-text').val()
            }),
            success: function (data) {
                alert("Successfully Saved! ")
            },
            error: function (jqXhr, textStatus, errorThrown) {
                alert("Summarization Request Failed");
            }
        });
    });


});

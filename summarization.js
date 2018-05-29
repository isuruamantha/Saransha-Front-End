$(document).ready(function () {

    $("#reset-button").click(function () {
        $('#source-text').val('');
        location.reload();
    });

    $("#create-mindmap").click(function (e) {
        e.preventDefault();

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
                    $("#share").jsSocials("option", "text", data);
                    $("#share").jsSocials("refresh");

                },
                error: function (jqXhr, textStatus, errorThrown) {
                    alert("Summarization Request Failed");
                }
            });


            // google.charts.load('current', {'packages': ['bar']});
            // google.charts.setOnLoadCallback(drawChart);


            // console.log("beg");
            // $.ajax({
            //     url: 'http://localhost:5000/keywordsforbarchart',
            //     type: 'post',
            //     contentType: 'application/json',
            //     data: JSON.stringify({
            //         "data": $('#source-text').val(),
            //         "sentences_count": $('#line-count').val(),
            //         "keyword_count": $('#keyword-count').val()
            //     }),
            //     success: function (data) {
            //         console.log("this is woring")
            //         console.log(data)
            //     },
            //     error: function (jqXhr, textStatus, errorThrown) {
            //         alert("Word Request Failed");
            //     }
            // });

            // function drawChart() {
            //
            //     var data = google.visualization.arrayToDataTable([
            //         ['Year', 'Sales'],
            //         ['2014', 1000],
            //         ['2015', 1170],
            //         ['2016', 660],
            //         ['2017', 1030]
            //     ]);
            //
            //
            //     var data = new google.visualization.DataTable(data);
            //
            //     var options = {
            //         bars: 'vertical'
            //     };
            //
            //     var chart = new google.charts.Bar(document.getElementById('barchart_material'));
            //     chart.draw(data, google.charts.Bar.convertOptions(options));
            // }


            google.charts.load('current', {packages: ['bar', 'corechart']});
            google.charts.setOnLoadCallback(drawBasic);

            function drawBasic() {

                var data = google.visualization.arrayToDataTable([
                    ['City', '2010 Population',],
                    ['New York City, NY', 8175000],
                    ['Los Angeles, CA', 3792000],
                    ['Chicago, IL', 2695000],
                    ['Houston, TX', 2099000],
                    ['Philadelphia, PA', 1526000]
                ]);

                var options = {
                    bars: 'vertical'
                                };

                var chart = new google.visualization.BarChart(document.getElementById('barchart_material'));
                console.log(data);

                chart.draw(data, options);
            }




            $.ajax({
                url: 'http://localhost:5000/keywordextraction',
                type: 'post',
                contentType: 'application/json',
                data: JSON.stringify({
                    "data": $('#source-text').val(),
                    "sentences_count": $('#line-count').val(),
                    "keyword_count": $('#keyword-count').val()
                }),
                success: function (data) {

                    d3.wordcloud()
                        .size([$(window).width(), $(window).height()])
                        .fill(d3.scale.ordinal().range(["#884400", "#448800", "#888800", "#444400"]))
                        .words(data)
                        .onwordclick(function(d, i) {
                            if (d.href) { window.location = d.href; }
                        })
                        .start();
                },
                error: function (jqXhr, textStatus, errorThrown) {
                    alert("Mind map Request Failed");
                }
            });


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

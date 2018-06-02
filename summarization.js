$(document).ready(function () {

    $("#reset-button").click(function () {
        $('#source-text').val('');
        location.reload();
        window.location.href;
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

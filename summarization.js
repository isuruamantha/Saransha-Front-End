
$(document).ready(function () {

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
                    $('#generated-text').append(data)
                },
                error: function (jqXhr, textStatus, errorThrown) {
                    alert("Summarization Request Failed");
                }
            });
        }

    });


});

$(document).ready(function () {

    $.ajax({
        url: 'http://localhost:5000/history',
        type: 'post',
        contentType: 'application/json',
        data: JSON.stringify({
            // "userId": $('#login-username').val()
            "userId": localStorage.getItem("userId")

        }),
        success: function (data) {
            // alert(JSON.stringify(data));
            for (i = 0; i < data.length; i++) {
                document.getElementById('history-table').innerHTML +=
                    '<tr><td>'+data[i]["created date"] +'</td><td>' + data[i]["value"] + '</td></tr></tr>';
            }
        },
        error: function (jqXhr, textStatus, errorThrown) {
            alert("Request Failed");
        }
    });

});



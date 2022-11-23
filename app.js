$(document).ready(function() {

    $.ajax({
        type: "GET",
        url: "connect.php",
        dataType: "html",
        success: function (data) {
            $('#user-data').html(data);
        }
    })
});
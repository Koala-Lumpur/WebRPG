$(document).ready(function() {

    $.ajax({
        type: "GET",
        url: "leaderboard.php",
        dataType: "html",
        success: function (data) {
            $('#user-data').html(data);
        }
    });

    $('#name-feedback').load('leaderboard.php').show();
});
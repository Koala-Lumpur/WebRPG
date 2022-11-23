$(function() {

    $.ajax({
        type: "GET",
        url: "leaderboard.php",
        dataType: "html",
        success: function (data) {
            $('#user-data').html(data);
        }
    });

    $('#name-feedback').load('namecheck.php').show();

    $('#username-input').keyup(function() {
        $.post('namecheck.php', { username: form.username.value }, 
        function(result) {
            $('#name-feedback').html(result).show();
        });
    });
});
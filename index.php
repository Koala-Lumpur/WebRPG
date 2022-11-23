<!doctype html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>WebRPG</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet" href="styles.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="app.js"></script>
</head>

<body>
    <nav>
        <h1 class="logo"><a href="#">WebRPG</a></h1>
        <ul class="navbar__list">
            <li><a href="#">Leaderboard</a></li>
            <li><a href="#">About</a></li>
        </ul>
    </nav>
    <div class="login__container">
        <h1>Welcome to WebRPG!</h1>
        <form name="form">
            <label for="username">Username</label><br>
            <input type="text" id="username-input" name="username">
            <div id="name-feedback">In here</div>
            <input class="login__button" type="button" value="Log in">
        </form>
    </div>
    <table class="leaderboard"> 
        <tr>
            <th>ID</th>
            <th>Username</th>
        </tr>

        <tbody id="user-data">
            
        </tbody>
    </table>
</body>
</html>
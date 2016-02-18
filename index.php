<!DOCTYPE html>
<html>
<head>

    <title>P2</title>
    <meta charset = 'utf-8'>

    <link rel='stylesheet' href='theme.css' type ='text/css'>


</head>
<body>
    <div id = generator>
        <h3>PASSWORD GENERATOR</h3>
        <form method='GET' action='index.php'>
            Choose Characters<br>
            <input maxlength=1 type='text' name='number_words' value ='4'><br>
            <input type='checkbox' name='add_number' id='add_number' unchecked>
            <label for='add_number'>Add a number</label><br>
            <input type='checkbox' name='add_symbol' id='add_symbol' unchecked>
            <label for='add_symbol'>Add a symbol</label><br>
            <input type='submit' class='btn btn-info'value='Generate!'><br>
        </form>
    </div>

    <p class='password'>  <?php require('logic.php'); ?> </p>
    <a href='http://xkcd.com/936/'>
        <img class='comic' src='http://imgs.xkcd.com/comics/password_strength.png' alt='xkcd style passwords'>
    </a>
    <!-- Google Font -->
    <link href='http://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css' />
    <!-- bootstrap -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    </html>

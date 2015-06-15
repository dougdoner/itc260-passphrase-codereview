<?php
$correctPass = "testPassword";

if (!isset($_SESSION)) {
    session_start();
}

if (!isset($_SESSION["passPhrase"])) {
    $_SESSION["passPhrase"] = "";
}

if ($_POST) {
    $_SESSION["passPhrase"] = $_POST["passPhrase"];
}

if ($_SESSION["passPhrase"] != $correctPass) {
    echo '
        <!doctype html>
        <html>
            <head>
                <meta charset="utf-8">
                <title>Enter your pass-phrase</title>
            </head>
            <body>
                <form method="post">
                    <label>Enter Pass Phrase</label>
                    <input type="text" name="passPhrase" placeholder="Enter passphrase">
                    <input type="submit" value="Submit">
                </form>
            </body>
        </html>
    ';
    die;
}
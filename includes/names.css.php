<?php
header('Content-Type: text/css');
require_once ('constants.php');
?>
html {
    padding-top: 25px;
    background-image: url('images/bg_page.png');
}

body {
    width: 80%;
    padding: 20px;
    margin: 0 auto;
    margin-bottom: 30px;
    border-radius: 10px;
    box-shadow: 10px 10px 10px rgba(0,0,0,.5);
    background-color: #e1edeb;
}

a {
    font-family: "Palatino Linotype", Baskerville, serif;
    font-size: 1.25em;
    color: #6a94cc;
    text-decoration: none;
}

a:hover {
    color: #F6B6BD;
}

p {
    font-family: "Palatino Linotype", Baskerville, serif;
    font-size: 1.25em;
    color: #616161;
    line-height: 150%;
    margin-top: 10px;
    margin-left: 60px;
}

address {
    font-family: "Palatino Linotype", Baskerville, serif;
    font-size: 1em;
    color: #616161;
    line-height: 100%;
    margin-top: 10px;
}

h1 {
    color: #6a94cc;
    font-family: 'Varela Round', 'Arial Black' , serif;
    font-size: 3em;
    font-weight: normal;
    margin:0;
    margin-left: 60px;
}

h2 {
    background: url(images/head-icon.png) no-repeat 10px 10px;
    border-bottom: 2px white solid;
    color: #b1967c;
    font-family: 'Varela Round', 'Arial Black', serif;
    font-size: 2.2em;
    font-weight: normal;
    padding: 0 0 2px 60px;
    margin: 0;
}

.intro {
    color: #666666;
    font-family: 'Varela Round', Helvetica, sans-serif;
    font-size: 1.2em;
    margin-left: 0;
    margin-bottom: 25px;
}

img {
    height: 350px;
    float: right;
    border-radius: 10px;
    box-shadow: 2px 2px 2px rgba(0,0,0,.5);
    margin-right: 60px;
    }

input[type=submit] {
    background-color: #FDF0F2;
    border: 1px solid #F6B6BD;
    color: #000000;
    padding: 15px 32px;
    border-radius: 10px;
    box-shadow: 2px 2px 2px rgba(0,0,0,.5);
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px 10px 60px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #F6B6BD;
    border: 1px solid #F6B6BD;
    color: #ffffff;
    box-shadow: 0px 0px 0px;
}

table {
    width: 100%;
    border: 1px solid black;
    border-spacing: 0px;
}

td, th {
    border: 1px solid black;
    text-align: center;
    font-family: "Palatino Linotype", Baskerville, serif;
}

h1 {
    text-align: center;
    font-family: "Palatino Linotype", Baskerville, serif;
    padding-bottom: 10px;
}
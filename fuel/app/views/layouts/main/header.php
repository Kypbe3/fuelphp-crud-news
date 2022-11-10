<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Новости</title>
    <?php echo Asset::css('bootstrap.css'); ?>
    <style>
        html {
            width: 100%;
            height: 100%;
        }
        body {
            width: 100%;
            height: 100%;
            display: flex;
            flex-direction: column;
        }
        .main-container {
            flex: 1;
            display: flex;
            flex-direction: column;
        }
        .flex-1 {
            flex: 1;
        }
        .navbar > .container {
            display: flex;
        }
        .navbar > .container .navbar-header {
            flex: 1;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="/">Главная</a>
            <a class="navbar-brand" href="<?php echo \Fuel\Core\Router::get('frontend.news') ?>">Новости</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <a class="navbar-brand" href="<?php echo \Fuel\Core\Router::get('backend.index') ?>">Админка</a>
        </div><!--/.navbar-collapse -->
    </div>
</nav>
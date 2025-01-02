<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Set checker</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
    <link rel="manifest" href="site.webmanifest">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="index.php"><img src="favicon/logo.png" width="60"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="index.php">Set checker (12 cards)</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle active" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Other Checkers (15, 9, 6, 3)
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item active" href="18.php">Set checker 18 (!!)</a></li>
                        <li><a class="dropdown-item" href="15.php">Set checker 15</a></li>
                        <li><a class="dropdown-item" href="9.php">Set checker 9</a></li>
                        <li><a class="dropdown-item" href="6.php">Set checker 6</a></li>
                        <li><a class="dropdown-item" href="3.php">Set checker 3 (is it really a set!?)</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container my-5">
    <h1>Set checker!</h1>
    <div class="col-lg-8 px-0">
        <p>Enter the cards currently on your table to check if there is a set (assumes there are 18 cards on your table).</p>

        <form action="submit.php" method="post">
            <?php $i = 1; while ($i < 16) { ?>
            <div class="input-group">
                <span class="input-group-text">Card <?php echo $i; ?></span>
                <select name="count<?php echo $i; ?>" class="form-select" aria-label="Count">
                    <option value="0">One</option>
                    <option value="1">Two</option>
                    <option value="2">Three</option>
                </select>
                <select name="color<?php echo $i; ?>" class="form-select" aria-label="Color">
                    <option value="0">Green</option>
                    <option value="1">Red</option>
                    <option value="2">Purple</option>
                </select>
                <select name="fill<?php echo $i; ?>" class="form-select" aria-label="Fill">
                    <option value="0">Empty</option>
                    <option value="1">Shaded</option>
                    <option value="2">Solid</option>
                </select>
                <select name="shape<?php echo $i; ?>" class="form-select" aria-label="Shape">
                    <option value="0">Diamond</option>
                    <option value="1">Pill</option>
                    <option value="2">Squiggle</option>
                </select>
            </div>
            <?php
                if ($i % 3 === 0) {
                    echo "<hr>";
                }
                ?>
            <?php $i++; } ?>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        <p align="right">Source code on <a href="https://github.com/balsama/sets">GitHub</a></p>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="main.js"></script>
</body>
</html>
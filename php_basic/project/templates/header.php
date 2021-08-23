<?php
session_start();
if ($_SERVER['QUERY_STRING'] == 'noname') {
    unset($_SESSION['name']);
    session_unset();
}
if (isset($_SESSION['name'])) {
    $name = $_SESSION['name'];
} else {
    $name = '';
}

?>

<head>
    <title>Ninja Pizza</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <style>
        .brand {
            background-color: #cbb09c !important;
        }

        .brand-text {
            color: #cbb09c !important;
        }

        form {
            max-width: 460px;
            margin: 20px auto;
            padding: 20px;
        }

        .pizza {
            width: 100px;
            margin: 40px auto -30px;
            display: block;
            position: relative;
            top: -30px;
        }
    </style>
</head>

<body class="grey lighten-4">
    <nav class="white z-depth-0">
        <div class="container">
            <a href="index.php" class="brand-logo brand-text">Ninja Pizza</a>
            <ul id="nav-mobile" class="right hide=on-small-and-down">
                <?php if ($name) : ?>
                    <li class="grey-text">HELLO <?= htmlspecialchars($name) ?></li>
                <?php endif; ?>
                <li><a href="add.php" class="btn brand z-depth-0">Add a pizza</a></li>
            </ul>
        </div>
    </nav>
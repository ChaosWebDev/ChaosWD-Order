<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/assets/styles.css">
    <link rel="manifest" href="/assets/favicons/manifest.json">
    <link rel="shortcut icon" href="/assets/favicons/favicon.ico" type="image/x-icon">
    <!--
    <script src='/assets/scripts/___.js'></script>
    -->
</head>

<body>
    <?php
    $router->dispatcher($_SERVER['REQUEST_URI'], $_SERVER['REQUEST_METHOD']);
    ?>
</body>

</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css">
    <title>CRUD | This is a CRUD project</title>
    <style>
        body {
            margin-top: 30px;
        }
        form input[type="text"], form input[type="number"] {
            width: 70%;
            display: inherit;
        }
        form label {
            width: 30%;
            display: inherit;
            float: left;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="column column-60 column-offset-20">
                <h1>This is my first CRUD project.</h1>
                <p>I have started a new CRUD project in PHP programming language with <strong>Hasin Hayder</strong>  </p>
            </div>
        </div>
        <div class="row">
            <div class="column column-67 column-offset-20">  
                <?php if(file_exists('inc/templates/nav.php')){ include_once('inc/templates/nav.php');} ?>
            </div>
        </div>
        <div class="row">
            <div class="column column-60 column-offset-20">
            <?php if(file_exists('inc/templates/form.php')){ include_once('inc/templates/form.php');} ?>

            </div>
        </div>
    </div>
</body>
</html>
<?php 
    if(file_exists('inc/functions.php')){require_once('inc/functions.php');}
    $info  = '';
    $task  = $_GET['task'] ?? 'report';

    if ( 'seed' == $task ) {
        seed();
        $info = "Seeding is complete";
    }
    if(isset($_POST['submit'] )){
        $svc = filter_input( INPUT_POST, 'svc', FILTER_SANITIZE_STRING );
        $name = filter_input( INPUT_POST, 'name', FILTER_SANITIZE_STRING );
        $age  = filter_input( INPUT_POST, 'age', FILTER_SANITIZE_STRING );
        $trade  = filter_input( INPUT_POST, 'trade', FILTER_SANITIZE_STRING );
        $bname  = filter_input( INPUT_POST, 'bname', FILTER_SANITIZE_STRING );
        $slen  = filter_input( INPUT_POST, 'slen', FILTER_SANITIZE_STRING );
        if ( $svc != '' && $name != '' && $age != '' ) {
            addEmployee( $svc, $name, $age, $trade, $bname, $slen );
        }
    } 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css">
    <link rel="stylesheet" href="inc/fonts/styles.css">
    <title>CRUD | This is a CRUD project</title>
    <style>
        body {
            margin-top: 30px;
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
        <?php if ( 'report' == $task ): ?>
            <div class="row">
                <div class="column column-60 column-offset-20">
                    <?php generateReport(); ?>
                </div>
            </div>
        <?php endif; ?>
        <?php if('create'==$task){ ?>
            <div class="row">
                <div class="column column-75 column-offset-20">
                <?php if(file_exists('inc/templates/form.php')){ include_once('inc/templates/form.php');} ?>

                </div>
            </div>
        <?php } ?>
        <?php if('update'==$task){ ?>
            <div class="row">
                <div class="column column-75 column-offset-20">
                <?php 
                    if(file_exists('inc/templates/form.php')){ 
                        include_once('inc/templates/upform.php');
                    } 
                ?>

                </div>
            </div>
        <?php } ?>
    </div>
</body>
</html>
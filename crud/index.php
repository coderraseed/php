<?php 
    if(file_exists('inc/functions.php')){require_once('inc/functions.php');}
    if(file_exists('inc/home.php')){require_once('inc/home.php');}
    
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
                <p style="color:red;">
                    <?php if ( 'seed' == $task ) { echo $info;} ?>
                </p>
            </div>
        </div>
        <div class="row">
            <div class="column column-67 column-offset-20" style="text-align: center;">  
                <?php if(file_exists('inc/templates/nav.php')){ include_once('inc/templates/nav.php');} ?>
            </div>
        </div>
        <?php if ( '1' == $error): ?>
            <div class="row">
                <div class="column column-60 column-offset-20">
                    <blockquote>Duplicate Service Number</blockquote>
                </div>
            </div>
        <?php endif; ?>
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
        <?php 
            if('edit'==$task){ 
            $id = filter_input( INPUT_GET, 'id', FILTER_SANITIZE_STRING );
            $student = getemployee( $id );
                if($student){
        ?>
                    <div class="row">
                        <div class="column column-75 column-offset-20">
                        <?php 
                            if(file_exists('inc/templates/form.php')){ 
                                include_once('inc/templates/upform.php');
                            } 
                        ?>

                        </div>
                    </div>
        <?php 
                }
            } 
        ?>
    </div>
<script type="text/javascript" src="assets/script.js"></script>

</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="views/bootstrap-3.3.7/jquery-1.9.1.js"></script>
    <script src="views/bootstrap-3.3.7/list.js"></script>
    <link href="views/bootstrap-3.3.7/css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
    <link href="views/bootstrap-3.3.7/style.css" rel="stylesheet" type="text/css" media="all">
    <title>Document</title>
    
</head>
<body data-gr-c-s-loaded="true">
    <div class="container">
        <legend class="header">
            <?php
                if( $data['page'] !== 'login' &&  $data['page'] !== 'register'){
            ?>
                 <a href="http://localhost/MVC_lesson/MVC_project/index.php?action=login" class="pull-right">Log out</a>
            <?php
                }
            ?>
            <h3 class="pull">Employee Manager</h3>
            
        </legend>
        <?php 
        include "views/".$data['page'].".php";
        ?>
    </div>
</body>
</html>
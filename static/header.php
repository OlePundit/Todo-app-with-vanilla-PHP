<?php include_once('libs/session.php');?>
<!DOCTYPE html>
<html lang ="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Todo Maker</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"/>
    <style>
    <?php include "css/style.css"; ?>
    </style>
    <script type="text/javascript" src="jquery/jquery-ui.min.js"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
    <script>
    $( function() {
        $( "#due_date" ).datepicker({
            dateFormat: 'yy-mm-dd'
        });
    } );
    </script>
    <script>
    $( function() {
        var CurrentValue = $('#progress_value').val();
        $( "#seekbar" ).slider({
        range: "max",
        min: 0,
        max: 100,
        value: CurrentValue,
        slide: function( event, ui ) {
            $( "#progress" ).html( ui.value + ' %' );
            $( "#progress_value" ).val( ui.value );
            
        }
        });
       // $( "#progress_value" ).val( $( "#seekbar" ).slider( "value" ) );
    } );
    </script>
    <script type = "text/javascript">
        $(function(){
            $('#show_register').click(function(){
                $('.login_form').hide();
                $('.register_form').show();
                return false;
            });
        });
        $(function(){
            $('#show_login').click(function(){
                $('.login_form').show();
                $('.register_form').hide();
                return false;
            });
        });
    </script>
</head>
<body>
    <div id="mainWrapper">
    <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Todo Maker</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="add_new.php">Create</a>
                    </li>
                    <li class="nav-item dropdown">
                    <a class="nav-link" href="add_new.php">About</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="add_new.php">Contact us</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
                </div>
            </div>
        </nav>
       <div id="td_container" class="clearfix">
            <div id="sidebar">   
                <div class="offcanvas offcanvas-start" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel">
                    <div class="offcanvas-body">
                        <ul class=no-bullets>
                            <li><a href="index.php?label=inbox">Inbox</a></li>
                            <li><a href="index.php?label=Read later">Read Later</a></li>
                            <li><a href="index.php?label=important">Important</a></li>
                            <li><a href="logout.php">Logout</a></li>
                        </ul>
                    </div>
                </div>
            </div>
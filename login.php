<?php include_once('libs/login_users.php');?>

<!DOCTYPE html>
<html lang ="en">
<head>
    <meta charset="utf-8">
    <title>Todo Maker</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css"/>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
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
                    <li class="nav-item mx-3">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="add_new.php">Create</a>
                    </li>
                </ul>
                <form class="d-flex mx-3" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                    <a class="nav-link" href="add_new.php">About</a>
                    </li>
                    <li class="nav-item mx-3">
                    <a class="nav-link" href="add_new.php">Contact us</a>
                    </li>
                </ul>
                </div>
            </div>
        </nav>
        <div id="content">
            <?php
                if(isset($error)) {echo ' <div class="alert alert-error">'.$error.'</div>';}
            ?>
            <div class="login_form">
                <h2>Login Here</h2>
                <div id ="form">
                    <form method="post" action="login.php">                     
                        <div class="form_elements">
                            <label for="Username" class="form-label">Username</label>
                            <input type="text" name="login_username" class="form-control form-control-lg" id="username"/>
                        </div>

                        <div class="form_elements mb-3">
                            <label for="Username" class="form-label">Password</label>
                            <input type="password" name="login_password" class="form-control form-control-lg" id="password"/>
                        </div>

                        <div class="form_elements">
                            <input type="submit" name="login" id="login" class="btn btn-success" value="login"/>
                        </div>
                        <br/>
                        <a href="#" id="show_register"> Don't have an account?</a>
                    </form>
                </div>
            </div>
            <div class="register_form">
                <h2>Register Here</h2>
                <div id ="form">
                    <form method="post" action="login.php">  
                        <div class="form_elements">
                            <label for="Username" class="form-label">Username</label>
                            <input type="text" name="username" class="form-control form-control-lg" id="username"/>
                        </div>

                        <div class="form_elements">
                            <label for="Username" class="form-label">Email</label>
                            <input type="email" name="email" class="form-control form-control-lg" id="email"/>
                        </div>

                        <div class="form_elements">
                            <label for="Username" class="form-label">Password</label>
                            <input type="password" name="password" class="form-control form-control-lg" id="password"/>
                        </div>

                        <div class="form_elements mb-3">
                            <label for="Username" class="form-label">Re-Password</label>
                            <input type="password" name="repassword" class="form-control form-control-lg" id="repassword"/>
                        </div>

                        <div class="form_elements">
                            <input type="submit" name="register" class="form-control form-control-lg" id="register" class="btn btn-success" value="register"/>
                        </div>
                    </form>
                    <br/>
                    <a href="#" id="show_login"> Already have an account?</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
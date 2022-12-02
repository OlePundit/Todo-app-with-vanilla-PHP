<?php

    include_once('classes/class.ManageTodo.php');
    include_once('session.php');
    
    $init = new ManageTodo();

    if(isset($_POST['create_todo']))
    {
        $title = $_POST['title'];
        $description = $_POST['description'];
        $due_date = $_POST['due_date'];
        $label = $_POST['label_under'];

        if(empty($title) || empty($due_date) || empty($label))
        {
            $error =  'All fields are required except option 1';
        }
        else
        {
            $title = strip_tags($title);
            $description= strip_tags($description);

            $username = $session_name;
            $created_on = date("Y-m-d");

            $create_todo = $init->createTodo($username,$title,$description,$due_date,$created_on,$label);
            if($create_todo== 1)
            {
                $success = 'Todo Created Successfully';
            }
            else
            {
                $error = 'There was an error';
            }
        }
    }

?>
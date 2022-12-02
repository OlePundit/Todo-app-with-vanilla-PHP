<?php 

include_once('static/header.php');
include_once('libs/create_todo.php');

?>

<div id="mainContent">
    <div id="head">
        <h2> Create Todo </h2>
    </div>
    <form method="post" action="add_new.php">
        <div id="mainBody">
            <?php
                if(isset($error)) {echo ' <div class="alert alert-error">'.$error.'</div>';}
            ?>
            <?php
                if(isset($success)) {echo ' <div class="alert alert-success">'.$success.'</div>';}
            ?>
            <div class="form_field">
                <label for="Title" class="form-label">Title</label>
                <input type="text" name="title" class="form-control form-control-lg" id="title"/>
            </div>
            <div class="form_field">
                <label for="Title" class="form-label">Description<small>(Optional)</small></label>
                <input type="text" name="description" class="form-control form-control-lg" id="description"/>
            </div>
            <div class="form_field mb-5">
                <label for="Title" class="form-label">Due Date</label>
                <input type="text" name="due_date" class="form-control form-control-lg" id="due_date"/>
            </div>
            <div class="form_field">
                <label for="Title" class="form-label">Label Under</label>
                <select name="label_under" id="label_under" class="form-select col-md-6">
                    <option value=""></option>
                    <option value="Inbox">Inbox</option>
                    <option value="Read Later">Read Later</option>
                    <option value="Important">Important</option>
                </select>
            </div>
            <div class="form_field">
                <input type="submit" name="create_todo" value="Create" id="create_todo" class="btn btn-info"/>
            </div>
        </div>
    </form>
    
</div>
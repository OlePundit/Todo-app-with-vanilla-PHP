<?php 

include_once('static/header.php');
include_once('libs/list_todo.php');
include_once('libs/edit_todo.php');

?>

<div id="mainContent">
    <div id="head">
        <h2> Edit Todo </h2>
    </div>
    <form method="post" action="edit.php?id=<?php echo $_GET['id'];?>">
        <div id="mainBody">
            <?php
                if(isset($error)) {echo ' <div class="alert alert-error">'.$error.'</div>';}
            ?>
            <?php
                if(isset($success)) {echo ' <div class="alert alert-success">'.$success.'</div>';}
            ?>
            <?php foreach($list_todo as $td) 
            { 
                $given_array = array("inbox","Read Later","Important");
                $selected_array = array($td['label']);
                $array_remaining = array_diff($given_array, $selected_array);
                
                ?>
            <div class="form_field">
                <label for="Title" class="form-label">Title</label>
                <input type="text" name="title" class="form-control form-control-lg" id="title" value="<?php echo $td['title'];?>"/>
            </div>
            <div class="form_field">
                <label for="Title" class="form-label">Description<small>(Optional)</small></label>
                <input type="text" name="description" class="form-control form-control-lg" id="description" value="<?php echo $td['description'];?>"/>
            </div>
            <div class="form_field mb-5">
                <label for="Title" class="form-label">Due Date</label>
                <input type="text" name="due_date" class="form-control form-control-lg" id="due_date" value="<?php echo $td['due_date'];?>"/>
            </div>
            <div class="form_field">
                <label for="Title" class="form-label">Label Under</label>
                <select name="label_under" id="label_under" class="form-select col-md-6">
                    <?php echo '<option value="'.$td['label'].'">'.$td['label'].'</option>';
                     foreach($array_remaining as $ar)
                     {
                        echo '<option value="'.$ar.'">'.$ar.'</option>';
                     }
                    ?>
                </select>
            </div>
            <div class="form_field">
                <div id="seekbar"></div>
                <div id="progress"><?php echo $td['progress'];?> %</div>
                <input type="hidden" name="progress_value" value="<?php echo $td['progress'];?>" id="progress_value" class="btn btn-info"/>
            </div>
            <div class="form_field">
                <input type="submit" name="edit_todo" value="Edit" id="edit_todo" class="btn btn-info"/>
            </div>
        <?php } ?>
        </div>
    </form>
    
</div>
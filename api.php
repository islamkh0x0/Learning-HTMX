<?php

switch($_GET['action']) {
    case "add-post":

?>
<div class="col">
    <div class="card mt-5" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title"><?php echo $_POST['title'] ?></h5>
            <p class="card-text"><?php echo $_POST['content'] ?></p>
            <a href="#" class="btn btn-danger">Delet Post</a>
            <a href="#" class="btn btn-success">Edit Post</a>
        </div>
    </div>
</div>
<?php
    break;
    default:
        echo "invalid action";
}

?>

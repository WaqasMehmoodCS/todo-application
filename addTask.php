<?php
include 'db.php';
if (isset($_POST['submit'])) {
    $task = $_POST['task'];
    $status = 'pending';
    $result = $con->query("INSERT INTO `task`(`task`, `status`) VALUES ('$task','$status')");
    if (!$result) {
        die("Query failed: " . $con->error);
    }else{
        header('location:index.php');
    }
}
?>

<form method="post" action='addTask.php'>
    <div class="d-flex m-auto flex-column">
        <label for="task" class="form-label w-75 m-auto">Task Name</label>
        <div class="d-flex justify-content-center align-items-center gap-2 w-75 m-auto">
            <input class="form-control" placeholder="Enter Task" name="task" id="task" />
            <button class="btn btn-outline-light" name="submit"><i class="fa-solid fa-plus"></i></button>
        </div>
    </div>
</form>
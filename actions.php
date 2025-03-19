<?php
include './db.php';

if (isset($_POST["delete"])) {
    $id = $_POST['deleteID'];  // Get ID from the form
    $result = $con->query("DELETE FROM `task` WHERE `id`='$id'");
    if (!$result) {
        die("Query failed: " . $con->error);
    }
    header('location: index.php');
    exit();
}

if (isset($_POST["updateStatus"])) {
    $id = $_POST['updateStatusID'];  // Get ID from the form
    $task = $_POST['task'];
    $status = $_POST['status'];
    $result = $con->query("UPDATE `task` SET `task`='$task',`status`='$status' WHERE `id` = '$id'");
    if (!$result) {
        die("Query failed: " . $con->error);
    }
    header('location: index.php');
    exit();
}

if (isset($_POST["update"])) {
    $id = $_POST['updateID'];  // Get ID from the form
    $result = $con->query("SELECT `id`,`task`, `status` FROM `task` WHERE `id`='$id'");

    if (!$result) {
        die("Query failed: " . $con->error);
    }


    $row = $result->fetch_assoc();
    $id = $row["id"];
    $task = $row["task"];
    $status = $row["status"];
    include './header.php';
    if ($row) {
        ?>
        <div class="container-md bg-primary bg-gradient flex-grow-1 overflow-hidden p-0">
            <h1 class="text-light fw-bolder text-center text-uppercase user-select-none bg-dark py-4">
                Todo Application
            </h1>

            <form action="actions.php" method="post">
                <div class="w-50 m-auto d-flex flex-column gap-4">
                    <div>
                        <label class="form-label">Task</label>
                        <input placeholder="<?php echo $task ?>" name="task" class="form-control">
                    </div>
                    <div>
                        <label class="form-label">Status</label>
                        <input placeholder="<?php echo $status ?>" name="status" class="form-control" />
                    </div>
                    <button class="btn btn-success mt-2" name="updateStatus">
                        <input type="hidden" name="updateStatusID" value="<?php echo $id; ?>">
                        <div class="d-flex justify-content-center align-items-center gap-2">
                            <p class="m-0 p-0">Update</p>
                            <i class="fa-solid fa-pen"></i>
                        </div>
                    </button>
                </div>
            </form>

            <?php

    } else {
        echo "No task found with ID: $id";
    }
}
?>
    <?php include './footer.php' ?>
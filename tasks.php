<?php
include './db.php';

// Fetch data
$result = $con->query('SELECT * FROM `task`');

if (!$result) {
    die("Query failed: " . $con->error);
}



?>
<div class="p-1 mt-3 rounded-1 flex-grow-1 overflow-auto m-auto" style="height: calc(100vh - 200px);">
    <div class="table-responsive user-select-none">

        <table class="table table-striped table-hover table-borderless table-primary align-middle">
            <thead class="table-light">

                <tr>
                    <th class="text-center">Sr. No</th>
                    <th class="text-center">Task Description</th>
                    <th class="text-center">Status</th>
                    <th class="text-center">Actions</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                <?php
                // Display data
                while ($row = $result->fetch_assoc()) {
                    $id = $row['id'];
                    $task = $row['task'];
                    $status = $row['status'];

                    ?>
                    <tr class="table-primary text-center">

                        <td scope="row"><?php echo $id; ?></td>
                        <td><?php echo $task ?></td>
                        <td><?php echo $status ?></td>


                        <td class="d-flex justify-content-center align-items-center gap-3">
                            <form method="post" action="./actions.php">
                                <button class="btn btn-sm btn-success" name="update"
                                    style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">
                                    <input type="hidden" name="updateID" value="<?php echo $id; ?>">
                                    <div class="d-flex justify-content-center align-items-center gap-1">
                                        <p class="m-0 p-0">Update</p>
                                        <i class="fa-solid fa-pen"></i>
                                    </div>
                                </button>
                            </form>
                            <form method="post" action="./actions.php">
                                <button class="btn btn-sm btn-danger" name="delete"
                                    style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">
                                    <input type="hidden" name="deleteID" value="<?php echo $id; ?>">
                                    <div class="d-flex justify-content-center align-items-center gap-1">
                                        <p class="m-0 p-0">Delete</p>
                                        <i class="fa-solid fa-trash"></i>
                                    </div>
                                </button>
                            </form>

                        </td>
                    </tr>
                    <?php
                }
                ?>
            </tbody>
        </table>

    </div>
</div>
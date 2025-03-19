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
                    ?>
                    <tr class="table-primary text-center">

                        <td scope="row"><?php echo $row['id'] ?></td>
                        <td><?php echo $row['task'] ?></td>
                        <td><?php echo $row['status'] ?></td>


                        <td class="d-flex justify-content-center align-items-center gap-3">
                            <button class="btn btn-sm btn-success"
                                style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">
                                <div class="d-flex justify-content-center align-items-center gap-1">
                                    <p class="m-0 p-0">Update</p>
                                    <i class="fa-solid fa-pen"></i>
                                </div>
                            </button>
                            <button class="btn btn-sm btn-danger"
                                style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">
                                <div class="d-flex justify-content-center align-items-center gap-1">
                                    <p class="m-0 p-0">Delete</p>
                                    <i class="fa-solid fa-trash"></i>
                                </div>
                            </button>
                        </td>
                    </tr>
                    <?php
                }
                ?>
            </tbody>
        </table>
    </div>
</div>
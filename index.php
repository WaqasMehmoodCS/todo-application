<?php
include './header.php';
?>
<div class="container-md bg-primary bg-gradient flex-grow-1 overflow-hidden p-0">
  <h1 class="text-light fw-bolder text-center text-uppercase user-select-none bg-dark py-4">
    Todo Application
  </h1>
  <?php include './addTask.php';
  include './tasks.php';
  ?>

</div>
<?php include './footer.php' ?>
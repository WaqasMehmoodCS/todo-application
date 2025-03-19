<?php include './header.php' ?>
<div class="container-md bg-primary bg-gradient flex-grow-1 overflow-hidden p-0">
  <h1 class="text-light fw-bolder text-center text-uppercase user-select-none bg-dark py-4">
    Todo Application
  </h1>
  <form>
    <div class="d-flex m-auto flex-column">
      <label for="task" class="form-label w-75 m-auto">Task Name</label>
      <div class="d-flex justify-content-center align-items-center gap-2 w-75 m-auto">
        <input class="form-control" placeholder="Enter Task" name="task" id="task" />
        <button class="btn btn-outline-light"><i class="fa-solid fa-plus"></i></button>
      </div>
    </div>
  </form>

  <div class="p-1 mt-3 rounded-1 flex-grow-1 overflow-auto m-auto"
    style="height: calc(100vh - 200px); max-width: 60%;">


    <div class="table-responsive user-select-none">
      <table class="table table-striped table-hover table-borderless table-primary align-middle">
        <thead class="table-light">

          <tr>
            <th class="text-center">Sr. No</th>
            <th class="text-center">Task Description</th>
            <th class="text-center"  colspan="2">Actions</th>
          </tr>
        </thead>
        <tbody class="table-group-divider">
          <tr class="table-primary">
            <td scope="row">Item</td>
            <td>Item</td>
            <td>Item</td>
            <td>Item</td>
          </tr>
          

        </tbody>
        <!-- <tfoot>
          
        </tfoot> -->
      </table>
    </div>


  </div>
</div>
<?php include './footer.php' ?>
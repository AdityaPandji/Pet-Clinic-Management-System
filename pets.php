<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Pet Management</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
  <h2 class="mb-4 text-center">🐾 Pet Management</h2>

  <table id="petsTable" class="table table-striped table-bordered">
    <thead class="table-dark">
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Species</th>
        <th>Age</th>
        <th>Owner</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php
      include "db.php";
      $result = $conn->query("SELECT * FROM pets");
      while ($row = $result->fetch_assoc()) {
          echo "<tr>
                <td>{$row['id']}</td>
                <td>{$row['name']}</td>
                <td>{$row['species']}</td>
                <td>{$row['age']}</td>
                <td>{$row['owner']}</td>
                <td>
                  <button class='btn btn-sm btn-warning editBtn' data-id='{$row['id']}'>Edit</button>
                  <button class='btn btn-sm btn-danger deleteBtn' data-id='{$row['id']}'>Delete</button>
                </td>
                </tr>";
      }
      ?>
    </tbody>
  </table>
</div>

<div class="modal fade" id="editModal" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-warning">
        <h5 class="modal-title">Edit Pet</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <form id="editForm">
        <div class="modal-body">
          <input type="hidden" name="id" id="editId">
          <div class="mb-3">
            <label>Name</label>
            <input type="text" name="name" id="editName" class="form-control" required>
          </div>
          <div class="mb-3">
            <label>Species</label>
            <input type="text" name="species" id="editSpecies" class="form-control" required>
          </div>
          <div class="mb-3">
            <label>Age</label>
            <input type="number" name="age" id="editAge" class="form-control" required>
          </div>
          <div class="mb-3">
            <label>Owner</label>
            <input type="text" name="owner" id="editOwner" class="form-control" required>
          </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-success">Update</button>
        </div>
      </form>
    </div>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>

<script>
$(document).ready(function() {
  $('#petsTable').DataTable();

  $(".editBtn").click(function() {
    let row = $(this).closest("tr");
    $("#editId").val($(this).data("id"));
    $("#editName").val(row.find("td:eq(1)").text());
    $("#editSpecies").val(row.find("td:eq(2)").text());
    $("#editAge").val(row.find("td:eq(3)").text());
    $("#editOwner").val(row.find("td:eq(4)").text());
    $("#editModal").modal("show");
  });

  $("#editForm").submit(function(e) {
    e.preventDefault();
    $.post("update_pet.php", $(this).serialize(), function() {
      location.reload();
    });
  });

  $(".deleteBtn").click(function() {
    if (confirm("Are you sure you want to delete this pet?")) {
      $.post("delete_pet.php", { id: $(this).data("id") }, function() {
        location.reload();
      });
    }
  });
});
</script>

</body>
</html>

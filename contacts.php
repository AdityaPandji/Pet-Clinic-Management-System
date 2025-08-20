<?php
include 'db.php';
$result = $conn->query("SELECT * FROM contacts ORDER BY created_at ASC");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Admin Panel - Contact Messages</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">

  <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
  <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>

  <style>
      body {
          background-color: #f8f9fa;
      }
      .container {
          margin-top: 40px;
      }
      .table-container {
          background: #fff;
          padding: 25px;
          border-radius: 12px;
          box-shadow: 0px 3px 8px rgba(0,0,0,0.1);
      }
      h2 {
          color: #343a40;
          margin-bottom: 20px;
          font-weight: 600;
      }
  </style>
</head>
<body>
  <div class="container">
      <div class="table-container">
          <h2>📩 Contact Messages</h2>
          <table id="contactsTable" class="table table-striped table-bordered">
              <thead class="table-dark">
                  <tr>
                      <th>ID</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Message</th>
                      <th>Date</th>
                  </tr>
              </thead>
              <tbody>
                  <?php while($row = $result->fetch_assoc()) { ?>
                  <tr>
                      <td><?= $row['id'] ?></td>
                      <td><?= htmlspecialchars($row['name']) ?></td>
                      <td><?= htmlspecialchars($row['email']) ?></td>
                      <td><?= htmlspecialchars($row['message']) ?></td>
                      <td><?= $row['created_at'] ?></td>
                  </tr>
                  <?php } ?>
              </tbody>
          </table>
      </div>
  </div>

  <script>
    $(document).ready(function () {
        $('#contactsTable').DataTable({
            "pageLength": 5,
            "lengthMenu": [5, 10, 20],
            "order": [[ 0, "asc" ]]
        });
    });
  </script>
</body>
</html>

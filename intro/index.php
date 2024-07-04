<?php require('../includes/header.php'); ?>

<?php require('../includes/navbar.php'); ?>
<?php require('../includes/sidebar.php'); ?>
<section>
  <div class="container py-5">
    <div class="table-responsive">
      <a class="btn btn-primary btn-sm " href="create.php" role="button"> add</a>
      <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          <?php
          if (isset($_GET['msg'])) {
            $msg = $_GET['msg'];
            if ($msg == 'success') {
              echo "<p class='text-success'>Data is DELETED.</p>";
              header('Refresh:2; URL=index.php');
            }
          
          }

            $select = "SELECT *FROM users";
            $result = mysqli_query($con, $select);
            $i = 1;
            while ($row = mysqli_fetch_array($result)) {
            ?>
              <tr>
                <th scope="row"> <?php echo $i++; ?> </th>

                <td> <?php echo $row['name']; ?> </td>

                <td><?php echo $row['email']; ?></td>
                <td>
                   
                  <a class="btn btn-info btn-sm " href="show.php?id=<?php echo $row['id']; ?>" role="button"> Show</a>
                  <a class="btn btn-danger btn-sm " onclick="return confirm(' Do you want to delete this data?')"  href="delete.php?id=<?php echo $row['id']; ?>" role="button"> Delete</a>
                </td>
              </tr>
            <?php


            }

          ?>
        </tbody>
      </table>
    </div>
  </div>
</section>


<?php require('../includes/footer.php'); ?>


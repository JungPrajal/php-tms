<?php require('../includes/header.php'); ?>

<?php require('../includes/navbar.php'); ?>


<div class="container mt-5">
    <div class="card mx-auto" style="max-width: 400px;">
        <div class="card-header bg-white">
            <h5 class="card-title text-center mb-0">Add User</h5>
            <a class="btn btn-primary btn-sm " href="index.php" role="button"> Manage Users</a>
        </div>
        <div class="card-body">
            <?php

            if(isset($_POST['save'])){
                $name= $_POST['name'];
                $email= $_POST['email'];
                $password= password_hash($_POST['password'], PASSWORD_DEFAULT) ;

                if($name !="" && $email!="" && $password!=""){
                    $query=" INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$password')";
                    $result=mysqli_query($con,$query);

                    if($result){
                        echo "<p class='text-success'>Data are Submitted</p>";
                        header('Refresh:2; URL=index.php');
                        // echo "<meta http-equiv=\"refresh\" content=\"0;URL=upload.php\">";
                    }
                    else{
                        echo "<p class='text-warning'>Data are not submitted</p>";
                        header('Refresh:2; URL=create.php');
                    }
                }else{
                    echo "<p class='text-danger'>Please fill all fields</p>";
                    header('Refresh:2; URL=create.php');
                }

                

            }
            ?>
            <form method="POST" action="" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Name</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="name" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputpssword1" class="form-label">Password</label>
                    <input type="password" class="form-control" id="exampleInputpssword1" name="password">
                </div>
                <button type="submit" class="btn btn-primary" name="save">Submit</button>
            </form>
        </div>
    </div>
</div>
<?php require('../includes/footer.php'); ?>

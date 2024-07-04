<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Title</title>
</head>

<body>

    <section>
        <div class="container w-25 max-auto py-5 my-5 shadow">
            <?php

            if (isset($_GET['msg'])) {
                $msg = $_GET['msg'];

                if ($msg == 'warning') {
                    echo "<p class='text-danger'>Fill up all fields</p>";
                    header('Refresh:2; URL=index.php');
                }
                if ($msg == 'error') {
                    echo "<p class='text-danger'>Email or pasword does not match, Try Again!</p>";
                    header('Refresh:2; URL=index.php');
                }
            }

            ?>
            <form action="auth/login.php" method="POST" enctype="multipart/form-data">
                <div class="text-center pb-5">
                    <h3>Login Account</h3>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" name="password" id="exampleInputPassword1">
                </div>
                <button type="submit" class="btn btn-primary" name="login">Submit</button>
                <p class="py-2">Don't have account <a href="register.php">Sign Up</a></p>
            </form>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>

</html>
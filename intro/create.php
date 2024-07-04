<?php require('../includes/header.php'); ?>

<?php require('../includes/navbar.php'); ?>


<div class="container mt-5">
    <div class="card mx-auto">
        <div class="card-header bg-white">
            <h5 class="card-title text-center mb-0">Add Intro</h5>
            <a class="btn btn-primary btn-sm " href="index.php" role="button"> Manage Intro</a>
        </div>
        <div class="card-body">
            <?php

            if (isset($_POST['save'])) {
                $title = $_POST['title'];
                $description = $_POST['description'];
                $image = $_POST['image'];

                if ($title != "" && $description != "" && $image != "") {
                    $query = " INSERT INTO intro (title, description, image) VALUES ('$title', '$description', '$image')";
                    $result = mysqli_query($con, $query);

                    if ($result) {
                        echo "<p class='text-success'>Data are Submitted</p>";
                        header('Refresh:2; URL=index.php');
                        // echo "<meta http-equiv=\"refresh\" content=\"0;URL=upload.php\">";
                    } else {
                        echo "<p class='text-warning'>Data are not submitted</p>";
                        header('Refresh:2; URL=create.php');
                    }
                } else {
                    echo "<p class='text-danger'>Please fill all fields</p>";
                    header('Refresh:2; URL=create.php');
                }
            }
            ?>
            <form method="POST" action="" enctype="multipart/form-data" class="w-50">
                <div class="mb-3">
                    <label for="exampleInputtitle" class="form-label">Title</label>
                    <input type="text" class="form-control" id="exampleInputtitle" name="title" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                    <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <!-- Imgge selecion -->
                <div class="mb-3">
                    <label for="exampleInputImage" class="form-label">Image</label>

                </div>



                <!-- Modal Body -->
                <!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
                <div class="modal fade" id="modalId" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-scrollable modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="modalTitleId">
                                    Image Gallery
                                </h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <!-- add block to fetch data -->
                                <style>
                                    [type=radio]:checked+img {
                                        outline: 2px solid #f00;
                                    }
                                </style>
                                <div class="row">
                                    <?php

                                    $select = "SELECT *FROM files";
                                    $result = mysqli_query($con, $select);
                                    $i = 1;
                                    while ($row = mysqli_fetch_array($result)) {
                                    ?>
                                        <label class="col-lg-3 col-md-4 col-sm-6">
                                            <input type="radio" name="image1" value="<?php echo '../uploads/' . $row['file_link']; ?>" style="opacity: 0;" />
                                            <img src="<?php echo "../uploads/" . $row['file_link']; ?>" alt="" height="100px;" width="100px;" style="margin-right:20px;">
                                        </label>
                                    <?php


                                    }

                                    ?>

                                </div>
                                <!-- add block to fetch data -->
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                    Close
                                </button>
                                <button type="button" class="btn btn-primary" data-bs-dismiss="modal" onclick="firstFunction() ">Save</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Optional: Place to the bottom of scripts -->
                <script>
                    const myModal = new bootstrap.Modal(
                        document.getElementById("modalId"),
                        options,
                    );
                </script>

                <div class="mb-3">
                    <input type="text" id="selectImage" class="form-" name="image" id="exampleInputpssword1">
                    <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#modalId">
                        Choose Image
                    </button>
                </div>

                <!-- Imgge selecion -->


                <div class="mb-3">
                    <button type="submit" class="btn btn-primary" name="save">Submit</button>
                </div>
        </div>
        </form>
    </div>
</div>
</div>
<script>
    function firstFunction() {
        var selectedOption1 = document.querySelector('input[name=image1]:checked').value;
        document.getElementById('selectImage').value = selectedOption1; // use .innerHTML if we want data on label
    }
</script>
<?php require('../includes/footer.php'); ?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = mysqli_real_escape_string($conn, $_POST["name"]);
    $phone = mysqli_real_escape_string($conn, $_POST["phone"]);
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $city = mysqli_real_escape_string($conn, $_POST["city"]);
    $migrate = mysqli_real_escape_string($conn, $_POST["migrate"]);

    // SQL query to insert data into the database
    $sql = "INSERT INTO model_reg(name, phone, email, city, migrate) VALUES ('$name', '$phone', '$email', '$city', '$migrate')";

    // Execute the query
    if (mysqli_query($con, $sql)) {
        echo "<script>alert('Record successfully saved. Our team will contact you soon.'); window.location.href = '/';</script>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($con);
    }

    // Close the database connection
    mysqli_close($con);
}

?>

<body>
    <!--<div id="myModal" class="modal fade" tabindex="-1">-->
    <!--    <div class="modal-dialog modal-lg modal-dialog-centered">-->
    <!--        <div class="modal-content">-->
    <!--            <div class="modal-header">-->
    <!--                <h5 class="modal-title text-white text-center d-block"><b>Fill the form and get a call from an-->
    <!--                        expert!</b>-->
    <!--                </h5>-->
    <!--                <button type="button" class="btn-close close_icon" data-bs-dismiss="modal" aria-label="Close"></button>-->
    <!--            </div>-->
    <!--            <div class="modal-body">-->
    <!--                <div class="bg-light p-3">-->
    <!--                    <form id="myForm" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">-->
    <!--                        <h5 class="mb-4"><b class="d-block text-center"><span-->
    <!--                                    class="text-danger">*</span>Required Fields</b></h6>-->
    <!--                        <div class="row form-group mb-3">-->
    <!--                            <div class="col-lg-4 col-sm-12">-->
    <!--                                <label>Name</label>-->
    <!--                            </div>-->
    <!--                            <div class="col-lg-8 col-sm-12">-->
    <!--                                <input type="name" name="name" class="form-control shadow" required>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                        <div class="row form-group mb-3">-->
    <!--                            <div class="col-lg-4 col-sm-12">-->
    <!--                                <label>Phone No</label>-->
    <!--                            </div>-->
    <!--                            <div class="col-lg-8 col-sm-12">-->
    <!--                                <input type="text" name="phone" class="form-control shadow" required>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                        <div class="row form-group mb-3">-->
    <!--                            <div class="col-lg-4 col-sm-12">-->
    <!--                                <label>Email Id</label>-->
    <!--                            </div>-->
    <!--                            <div class="col-lg-8 col-sm-12">-->
    <!--                                <input type="email" name="email" class="form-control shadow">-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                        <div class="row form-group mb-3">-->
    <!--                            <div class="col-lg-4 col-sm-12">-->
    <!--                                <label>City of Residence</label>-->
    <!--                            </div>-->
    <!--                            <div class="col-lg-8 col-sm-12">-->
    <!--                                <input type="text" name="city" class="form-control shadow">-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                        <div class="row form-group mb-3">-->
    <!--                            <div class="col-lg-4 col-sm-12">-->
    <!--                                <label>Which Country You Wish To Migrate To?</label>-->
    <!--                            </div>-->
    <!--                            <div class="col-lg-8 col-sm-12">-->
    <!--                                <input type="text" name="migrate" class="form-control shadow">-->
    <!--                            </div>-->
    <!--                        </div>-->

                            <!--<div class="form-check mt-3">-->
                            <!--    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"-->
                            <!--        required>-->
                            <!--    <label class="form-check-label" for="flexCheckDefault">-->
                            <!--        I agree to terms & Conditions-->
                            <!--    </label>-->
                            <!--</div>-->

    <!--                        <div class="mt-3">-->
    <!--                            <button class="button" type="submit">Submit</button>-->
                                <!--<button class="button" type="button" onclick="resetForm()">Reset</button>-->
    <!--                        </div>-->
    <!--                    </form>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</div>-->

    <script>
        function resetForm() {
            document.getElementById("myForm").reset();
        }
    </script>
</body>

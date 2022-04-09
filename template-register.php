<?php
/**
* Template Name: About Template.
 *
 * @package Warraich Traders
*/
get_header();
?>

<hr class="mt-2 mb-0">

<?php
    require "conn.php";

    if(isset($_POST['register'])) {
        // var_dump($_POST);
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $password = $_POST['password'];
        $cpassword = $_POST['cpassword'];

        if(strlen($password) >=8 && strlen($password) < 20 && strlen($cpassword) >=8 && strlen($cpassword) < 20) {
            if($password === $cpassword) {
                $sql = "INSERT INTO `users`(`fname`, `lname`, `email`,`phone`, `password`) 
                VALUES ('$fname','$lname','$email','$phone', md5('$password'))";

                $query = mysqli_query($conn, $sql) or die("Query Unsuccessfull");

                echo "<div class='alert alert-success alert-dismissible fade show m-3' role='alert'>
                    <strong>Data Inserted Successfully...</strong>
                    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                </div>";

            } else {
                echo "<div class='alert alert-danger alert-dismissible fade show m-3' role='alert'>
                    <strong>Password doesn't match...</strong>
                    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                </div>";
            }
        } else {
            echo "<div class='alert alert-warning alert-dismissible fade show m-3' role='alert'>
                <strong>Password must be between 8 and 20 characters...</strong>
                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
            </div>";
        }

    }
?>

    <!-- Section Start -->
    <section>
        <div class="container">
            <div class="logo text-center my-5">
                <a href="index.php" class="site-ancer">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png">
                </a>
            </div><!--logo-->
            <div class="row">
                <div class="col-md-5 p-3 m-auto" style="background-color: #f1f1f1;">
                    <form action="" method="post">
                        <label for="fname" class="form-label" style="font-size: 14px;">First Name</label>
                        <input type="text" class="form-control mb-3" name="fname" required>
                        <label for="lname" class="form-label" style="font-size: 14px;">Last Name</label>
                        <input type="text" class="form-control mb-3" name="lname" required>
                        <label for="email" class="form-label" style="font-size: 14px;">Email</label>
                        <input type="text" class="form-control mb-3" name="email" required>
                        <label for="phone" class="form-label" style="font-size: 14px;">Phone</label>
                        <input type="text" class="form-control mb-3" name="phone" required>
                        <label for="password" class="form-label" style="font-size: 14px;">Password</label>
                        <input type="password" class="form-control mb-3" name="password" required>
                        <label for="cpassword" class="form-label" style="font-size: 14px;">Confirm Password</label>
                        <input type="password" class="form-control" name="cpassword" required>
                        <button class="py-1 px-3 my-3 text-white" style="background: #008ec2;" type="submit" name="register">Register</button>
                    </form>
                </div><!--col-md-5-->
            </div><!--row-->
        </div><!--container-->
    </section>
    <!-- Section End -->

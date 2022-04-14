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
                    <?php echo get_theme_mod( 'register_code_setting', '' ); ?>
                </div><!--col-md-5-->
            </div><!--row-->
        </div><!--container-->
    </section>
    <!-- Section End -->

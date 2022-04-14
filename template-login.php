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
    require 'conn.php';

    // session_start();

    error_reporting(0);

    if(isset($_POST['login'])) {
        $email = $_POST['email'];
        $password = md5($_POST["password"]);
        $now = date_create()->format('Y-m-d H:i:s');

        $check_email_password = mysqli_query($conn, "SELECT * FROM `users` WHERE email = '$email' AND password = '$password'");

        if(mysqli_num_rows($check_email_password) > 0) {
            $row = mysqli_fetch_assoc($check_email_password);
            $_SESSION['user_id'] = $row['ID'];
            $_SESSION['fname'] = $row['fname'];
            $_SESSION['lname'] = $row['lname'];

            date_default_timezone_set('Asia/Karachi');
            $new = date("F-d-Y | h:i:s");

            $id = $_SESSION['user_id'];

            $update_user = "UPDATE `users` SET  `last_activity`='$new' WHERE `ID` = '$id'";
            $update_user_query = mysqli_query($conn, $update_user) or die("Query Failed");

            header("Location: dashboard/search-borrower.php");
        } else {
            echo " <div class='row m-3'>
                <div class='alert alert-danger alert-dismissible fade show' role='alert'>
                    <strong>Login details is incorrect. Please try again...</strong>.
                    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                </div>
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
                <div class="col-md-3 p-3 m-auto" style="background-color: #f1f1f1;">
                    <?php echo get_theme_mod( 'login_code_setting', '' ); ?>
                </div><!--col-md-3-->
            </div><!--row-->
        </div><!--container-->
    </section>
    <!-- Section End -->
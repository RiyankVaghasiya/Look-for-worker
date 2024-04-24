<?php
include "includes/db.php";
$db_user_email = "";
$demo = 1;
if (isset($_POST['login-btn'])) {
    $user_email = $_POST['user_email'];
    $user_password = $_POST['user_password'];

    $user_email = mysqli_real_escape_string($connection, $user_email);
    $user_password = mysqli_real_escape_string($connection, $user_password);

    $query = "SELECT * FROM users WHERE user_email = '{$user_email}'";
    $select_user_query = mysqli_query($connection, $query);
    if (!$select_user_query) {
        die("QUERY FAILED") . mysqli_error($connection);
    }
    while ($row = mysqli_fetch_assoc($select_user_query)) {
        $db_user_id = $row['user_id'];
        $db_user_email = $row['user_email'];
        $db_password = $row['user_password'];
    }
    if ($user_email === $db_user_email && $user_password === $db_password) {
        // echo "<meta http-equiv='refresh' content='0'>";
        header("location:./find-worker.php");
        exit();
    } else {
        //echo "user not found";
        // $warning_message = "Your email address or password is incorrect.";
        echo '<script>alert("Userid is not available")</script>';
        $demo = 2;
    }
}
?>
<div id="overlay" class="model">
    <form action="" method="post" enctype="multipart/form-data" id="user-login-form">
        <div class="login-container" id="login-box" data-backdrop="static" data-keyboard="false">
            <div class="close-div">
                <svg xmlns="http://www.w3.org/2000/svg" height="2rem" id="close" fill="white" style="
                border: 1px solid black;
                background-color: black;
                border-radius: 100%;
                outline: none;
              " class="close-btn" viewBox="0 0 512 512">
                    <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                    <path d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM175 175c9.4-9.4 24.6-9.4 33.9 0l47 47 47-47c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9l-47 47 47 47c9.4 9.4 9.4 24.6 0 33.9s-24.6 9.4-33.9 0l-47-47-47 47c-9.4 9.4-24.6 9.4-33.9 0s-9.4-24.6 0-33.9l47-47-47-47c-9.4-9.4-9.4-24.6 0-33.9z" />
                </svg>
            </div>
            <div class="login-info flex">
                <h6>Login/Sign up</h6>
                <div class="small-bold-text size red">
                    Note:- *this is for customer only
                </div>
                <div class="login-form flex">
                    <input type="email" name="user_email" class="login-email" id="email" placeholder="Enter email address" required />
                    <input type="password" name="user_password" class="login-email" id="pass" placeholder="Enter password" required />
                    <div class="warning" id="email-error"></div>
                </div>
                <div class="new-account flex">
                    <a href="#" id="create-new-account">Create a new account?</a>
                    <a class="forgot-pass" href="#">Forgot password?</a>
                </div>
                <div class="small-bold-text flex conditions" style="gap: 10px">
                    <input type="checkbox" name="conditions" id="conditions" required />
                    <label for="conditions" style="cursor: pointer">I accept terms and conditions of look for worker</label>
                </div>
                <input type="submit" name="login-btn" class="primary-btn login-btn" style="margin-top: 15px">
            </div>
        </div>
    </form>
</div>

<script>
    $(document).ready(function() {
        $('#user-login-form').submit(function(e) {
            e.preventDefault();

            // Perform AJAX request to login.php
            $.ajax({
                url: 'includes/login.php',
                type: 'POST',
                data: $(this).serialize(),
                success: function(data) {
                    if (data.success) {
                        // Close the popup if login is successful
                        $('#overlay').hideModal();

                    } else {
                        // Display an error message if login fails
                        if (<?php $demo == 2 ?>) {
                            $('.warning').text('Invalid username or password');
                        }

                    }
                },
                error: function(data) {
                    console.error('hello');
                }
            });
        });
    });
</script>
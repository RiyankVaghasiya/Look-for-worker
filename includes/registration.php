<?php include "db.php";
?>
<?php
if (isset($_POST['add_user'])) {
    $user_firstname = $_POST['user_firstname'];
    $user_lastname = $_POST['user_lastname'];
    $user_email = $_POST['user_email'];
    $user_password = $_POST['user_password'];
    $user_confirm_password = $_POST['user_confirm_password'];
    // $user_role = $_POST['user_role'];


    //add post to database
    $query = "INSERT INTO users(user_firstname,user_lastname,user_email,user_password,user_confirm_pass)
    VALUES('{$user_firstname}','{$user_lastname}','{$user_email}','{$user_password}','{$user_confirm_password}')";

    $add_user_query =  mysqli_query($connection, $query);
    if (!$add_user_query) {
        die("QUERY FAILED" . mysqli_error($connection));
    }
}
?>

<!-- registration form -->
<form action="" method="post" enctype="multipart/form-data" onsubmit="return validateRegister()">
    <div id="new-account-overlay" class="model">
        <div class="new-account-container" id="new-account-box">

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
                <h6>Register</h6>
                <div class="small-bold-text size red">
                    Note:- *this is for customer only
                </div>
                <!-- new account form -->

                <div class="login-form flex">
                    <input type="text" name="user_firstname" class="account-fname login-email" id="fname" placeholder="Firstname" required />
                    <input type="text" name="user_lastname" class="account-lname login-email" id="lname" placeholder="Lastname" required />
                    <input type="email" name="user_email" class="login-email" id="email" placeholder="Enter email address" required />
                    <input type="password" class="login-email" name="user_password" id="registration_pass" placeholder="Create password" required />
                    <input type="password" class="login-email" name="user_confirm_password" id="registration_confirm_pass" placeholder="Confirm password" required />
                </div>

                <div class="small-bold-text flex conditions" style="gap: 10px">
                    <input type="checkbox" name="new-account-condition" id="new-account-condition" required />
                    <label for="new-account-condition" style="cursor: pointer">I accept terms and conditions of look for worker</label>
                </div>
                <input type="submit" name="add_user" class="primary-btn login-btn" style="margin-top: 15px;">
            </div>
        </div>
    </div>
</form>

<script>
    function validateRegister() {

        var password = document.getElementById("registration_pass").value;
        var confirmPassword = document.getElementById("registration_confirm_pass").value;

        if (password != confirmPassword) {
            alert("Passwords do not match in confirm password");
            return false;
        }
        return true;

    }
</script>
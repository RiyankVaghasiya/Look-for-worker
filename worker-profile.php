<?php
include "includes/db.php";
?>
<?php
$db_worker_email = "";
if (isset($_POST['login-btn'])) {
  $worker_email = $_POST['worker_email'];
  $worker_password = $_POST['worker_password'];

  $worker_email = mysqli_real_escape_string($connection, $worker_email);
  $worker_password = mysqli_real_escape_string($connection, $worker_password);


  $query = "SELECT * FROM workers WHERE email = '{$worker_email}'";
  $select_user_query = mysqli_query($connection, $query);
  if (!$select_user_query) {
    die("QUERY FAILED") . mysqli_error($connection);
  }
  while ($row = mysqli_fetch_assoc($select_user_query)) {
    $db_worker_id = $row['worker_id'];
    $db_worker_email = $row['email'];
    $db_password = $row['pass'];
  }
  if ($worker_email === $db_worker_email && $worker_password === $db_password) {
    header("location:./admin/admin.php");
  } else {
    echo '<script>alert("Please enter valid email and password")</script>';
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Worker profile</title>
  <link rel="stylesheet" href="./assets/css/style.css?v=<?php echo time(); ?>" />
  <link rel="stylesheet" href="./assets/css/media-queries.css" />
</head>

<body>
  <nav class="navbar">
    <div class="container main-nav flex width">
      <a href="index.php" class="logo-image">
        <img src="./assets/image/logo.png" alt="look for worker logo" />
      </a>
      <div class="nav-links" id="nav-links">
        <ul class="flex">
          <li>
            <a href="index.php" class="hover-links">Home </a>
          </li>
          <li>
            <a href="worker-profile.php" class="hover-links">Worker profile
            </a>
          </li>
          <li>
            <a href="find-worker.php" class="hover-links">Find Worker</a>
          </li>
          <li><a href="support.php" class="hover-links"> Support</a></li>
          <li>
            <a href="./admin/admin.html" class="hover-links"> Admin </a>
          </li>

          <li>
            <a href="index.php#register-scroll" class="hover-links primary-btn">Register </a>
          </li>
        </ul>
      </div>
      <a href="#" class="nav-toogle hover-links" id="nav-toggle" onclick="addclass()">
        <img src="./assets/image/bars-solid.svg" alt="ham-icon" height="20px" />
      </a>
    </div>
  </nav>
  <!-- banner -->
  <div class="container">
    <div class="profile-main">
      <div class="box-shadow flex">
        <div class="profile-left">
          <div class="worker-image">
            <img src="./assets/image/photo-college.png" alt="worker image" />
          </div>
        </div>
        <div class="profile-right">
          <div class="login-main">
            <form action="" class="flex login-form" method="post" enctype="multipart/form-data">
              <h6>Login</h6>
              <input type="email" name="worker_email" id="profile-email" placeholder="E-mail address" required />
              <input type="password" placeholder="Password" id="password" name="worker_password" required />

              <img id="open" src="./assets/image/close-eye.png" alt="open-eye" />

              <a class="forgot-pass" href="#">Forgot password?</a>
              <input type="submit" name="login-btn" class="primary-btn login-btn" value="Login" />
            </form>

          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- footer -->
  <?php include "includes/footer.php"; ?>
  <script>
    let openeye = document.getElementById("open");
    let password = document.getElementById("password");

    openeye.onclick = function() {
      if (password.type == "password") {
        password.type = "text";
        openeye.src = "./assets/image/open-eye.png";
      } else {
        password.type = "password";
        openeye.src = "./assets/image/close-eye.png";
      }
    };
  </script>
</body>

</html>
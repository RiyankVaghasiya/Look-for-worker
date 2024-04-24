<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>My Website</title>
  <link rel="stylesheet" href="./assets/css/style.css?v=<?php echo time(); ?>" />
  <link rel="stylesheet" href="./assets/css/media-queries.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


</head>

<body class="body">
  <div class="wrap">
    <!-- top-banner -->
    <div class="top-banner">
      <div class="container top-banner-container">
        <div class="small-bold-text banner-text">
          📣 Are you looking for the skill worker?
        </div>
      </div>
    </div>
    <!-- navbar -->
    <?php include "includes/navbar.php"; ?>
    <!-- header -->
    <!-- login container -->
    <?php include "includes/login.php"; ?>
    <?php include "includes/header.php"; ?>


    <!-- new account section -->
    <?php include "includes/registration.php"; ?>


    <hr style="opacity: 0.5" />

    <!-- category section -->
    <?php include "includes/categories.php"; ?>
    <hr style="opacity: 0.5" />

    <!-- register section -->
    <?php include "includes/worker-register.php"; ?>

    <!-- subfooter -->
    <?php include "includes/footer.php"; ?>

  </div>
  <script src="./assets/js/min.js"></script>
</body>

</html>
<?php include "includes/db.php"; ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Find worker</title>
  <link rel="stylesheet" href="./assets/css/style.css?v=<?php echo time(); ?>" />
  <link rel="stylesheet" href="./assets/css/media-queries.css" />
</head>

<body>
  <nav class="navbar">
    <div class="container main-nav flex width worker-width">
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
  <div class="banner-image">
    <img src="./assets/image/jobboard-banner.jpg" alt="banner-image" />
  </div>
  <div class="worker-banner-text">
    <h2 style="font-weight: 500">Worker Board</h2>
    <div class="small-bold-text" style="font-size: 1.2rem">
      Choose best worker based on your need
    </div>
  </div>
  <!-- filter -->
  <div class="filter-wrap">
    <div class="worker-filter flex">
      <div class="filter-left">
        <ul class="flex">
          <li>
            <p class="filter-common">Search filters</p>
          </li>
          <li>
            <select class="filter-box">
              <option value="">Categories</option>
              <?php
              $query = "SELECT * FROM catagories WHERE parent_id = 0";
              $query_cat = mysqli_query($connection, $query);
              while ($row = mysqli_fetch_assoc($query_cat)) {
                $cat_id = $row['category_id'];
                $cat_type = $row['category_name'];
                echo "<option value ='{$cat_id}' class ='option-style'>{$cat_type}</option>";
              }
              ?>
            </select>

            <svg xmlns="http://www.w3.org/2000/svg" height="0.8rem" fill="#ff9502" class="worker-down-caret" viewBox="0 0 448 512">
              <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
              <path d="M201.4 342.6c12.5 12.5 32.8 12.5 45.3 0l160-160c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L224 274.7 86.6 137.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l160 160z" />
            </svg>
          </li>

          <li>
            <select type="text" class="filter-box" name="city" required>
              <option value="city">Select city</option>
              <option value="surat">Surat</option>
              <option value="ahemdabad">Ahemdabad</option>
              <option value="vadodara">Vadodara</option>
              <option value="bhavnagar">Bhavnagar</option>
              <option value="rajkot">Rajkot</option>
            </select>
            <svg xmlns="http://www.w3.org/2000/svg" height="0.8rem" fill="#ff9502" class="worker-down-caret" viewBox="0 0 448 512">
              <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
              <path d="M201.4 342.6c12.5 12.5 32.8 12.5 45.3 0l160-160c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L224 274.7 86.6 137.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l160 160z" />
            </svg>
          </li>
          <li>
            <select type="text" class="filter-box" name="budget" required>
              <option value="budget">Select Budget</option>
              <option value="250">250 rs/hour</option>
              <option value="300">300 rs/hour</option>
              <option value="400-500">400-500 rs/hour</option>
            </select>
            <svg xmlns="http://www.w3.org/2000/svg" height="0.8rem" fill="#ff9502" class="worker-down-caret" viewBox="0 0 448 512">
              <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
              <path d="M201.4 342.6c12.5 12.5 32.8 12.5 45.3 0l160-160c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L224 274.7 86.6 137.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l160 160z" />
            </svg>
          </li>
        </ul>
      </div>
      <div class="filter-right">
        <div class="search-input flex">
          <input type="text" name="search-input" id="search-input" placeholder="What are you looking for?" />
          <div class="search-btn primary-btn">Search</div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>
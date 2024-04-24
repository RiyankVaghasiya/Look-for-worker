<?php include "includes/db.php"; ?>
<?php
if (isset($_POST['add-worker'])) {
    $category = $_POST['category'];
    $sub_category = $_POST['sub-category'];
    $desired_period = $_POST['desired_period'];
    $hourly_pay = $_POST['hourly_pay'];
    $worker_details = $_POST['worker_details'];
    $fileName = $_FILES['file']['name'];
    $fileType = $_FILES['file']['type'];
    $fileContent = $_FILES['file']['tmp_name'];
    $fileSize = $_FILES['file']['size'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $aadhar = $_POST['aadhar_number'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    $work_experience = $_POST['work_experience'];
    $postal_code = $_POST['postal-code'];
    $city = $_POST['city'];
    $address = $_POST['address'];
    move_uploaded_file($fileContent, "./assets/image/$fileName");

    // $post_image = $_FILES['image']['name'];
    // $post_image_temp = $_FILES['image']['tmp_name'];



    // move_uploaded_file($post_image_temp, "../images/$post_image");

    //add post to database
    $query = "INSERT INTO workers(category , sub_category, desired_period, hourly_pay, worker_details ,file_name, file_type, attachments, file_size, first_name,last_name, phone , email, aadhar_number, pass ,confirm_password ,work_experience, postal_code, city ,worker_address)
     VALUES('{$category}','{$sub_category}','{$desired_period}','{$hourly_pay}','{$worker_details}','{$fileName}', '{$fileType}',
      '{$fileContent}', '{$fileSize}','{$firstname}','{$lastname}','{$phone}','{$email}','{$aadhar}','{$password}','{$confirm_password}','{$work_experience}','{$postal_code}','{$city}','{$address}')";

    $add_user_query =  mysqli_query($connection, $query);
    if (!$add_user_query) {
        die("QUERY FAILED" . mysqli_error($connection));
    }
}
?>

<section class="register-section" id="register-scroll">
    <div class="container">
        <div class="register-header">
            <h2 style="color: #ff9502">Register your profile here</h2>
        </div>
        <div class="register-form">
            <form action="" method="post" enctype="multipart/form-data" onsubmit="return validateForm()">
                <div class="first-row flex">
                    <div class="category first-row-common">
                        <div class="small-bold-text size">Category</div>
                        <select type="text" class="category-select-box" id="category-dropdown" name="category" required>
                            <option value="">Select Category</option>
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
                        <svg xmlns="http://www.w3.org/2000/svg" height="1rem" fill="grey" class="down-caret" viewBox="0 0 448 512">
                            <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                            <path d="M201.4 342.6c12.5 12.5 32.8 12.5 45.3 0l160-160c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L224 274.7 86.6 137.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l160 160z" />
                        </svg>
                    </div>
                    <div class="category Sub-category first-row-common">
                        <div class="small-bold-text size">Sub-category</div>
                        <select type="text" class="category-select-box" id="sub-category-dropdown" name="sub-category">
                            <option value="">Select sub category</option>
                        </select>
                        <svg xmlns="http://www.w3.org/2000/svg" height="1rem" fill="grey" class="down-caret" viewBox="0 0 448 512">
                            <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                            <path d="M201.4 342.6c12.5 12.5 32.8 12.5 45.3 0l160-160c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L224 274.7 86.6 137.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l160 160z" />
                        </svg>
                    </div>
                    <div class="desired-period first-row-common">
                        <div class="small-bold-text size">Time period</div>
                        <select type="text" class="period-select" placeholder="In hours" name="desired_period" required>
                            <option value="">Select hours</option>
                            <option value="flexible hour">Flexible</option>
                            <option value="1 hour">1 hour</option>
                            <option value="2 hour">2 hour</option>
                            <option value="more than 2">more than 2</option>
                        </select>
                        <svg xmlns="http://www.w3.org/2000/svg" height="1rem" fill="grey" class="down-caret absolute" viewBox="0 0 448 512">
                            <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                            <path d="M201.4 342.6c12.5 12.5 32.8 12.5 45.3 0l160-160c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L224 274.7 86.6 137.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l160 160z" />
                        </svg>
                    </div>
                    <div class="pay-rate first-row-common">
                        <div class="small-bold-text size">Hourly pay</div>
                        <input type="text" class="pay-select-box" placeholder="'x' Rupees/hour" name="hourly_pay" required />
                        <svg xmlns="http://www.w3.org/2000/svg" height="1em" fill="grey" class="absolute-pay" viewBox="0 0 320 512">
                            <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                            <path d="M0 64C0 46.3 14.3 32 32 32H96h16H288c17.7 0 32 14.3 32 32s-14.3 32-32 32H231.8c9.6 14.4 16.7 30.6 20.7 48H288c17.7 0 32 14.3 32 32s-14.3 32-32 32H252.4c-13.2 58.3-61.9 103.2-122.2 110.9L274.6 422c14.4 10.3 17.7 30.3 7.4 44.6s-30.3 17.7-44.6 7.4L13.4 314C2.1 306-2.7 291.5 1.5 278.2S18.1 256 32 256h80c32.8 0 61-19.7 73.3-48H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H185.3C173 115.7 144.8 96 112 96H96 32C14.3 96 0 81.7 0 64z" />
                        </svg>
                    </div>
                </div>
                <hr style="opacity: 0.5" />
                <div class="second-row flex">
                    <div class="other-details second-row-common">
                        <div class="small-bold-text size">Details about your work</div>
                        <textarea name="worker_details" id="desc" cols="30" rows="10" class="category-select-box" placeholder="More information about your work... "></textarea>
                    </div>
                    <div class="other-details second-row-common">
                        <div class="small-bold-text size">Images and documents</div>
                        <!-- <textarea name="" id="desc" cols="30" rows="10" class="category-select-box"></textarea> -->
                        <div>
                            <input type="file" id="desc" name="file" class="category-select-box uploader">
                        </div>
                    </div>
                </div>
                <hr style="opacity: 0.5" />
                <div class="third-row flex">
                    <div class="firstname">
                        <div class="small-bold-text size">First name</div>
                        <input type="text" class="third-row-select-box" placeholder="shailesh" name="firstname" required />
                    </div>
                    <div class="lastname">
                        <div class="small-bold-text size">Last name</div>
                        <input type="text" class="third-row-select-box" placeholder="patel" name="lastname" required />
                    </div>
                    <div class="phone">
                        <div class="small-bold-text size">Phone</div>
                        <input type="text" class="third-row-select-box" placeholder="9265353224" name="phone" required />
                    </div>
                    <div class="email">
                        <div class="small-bold-text size">E-mail</div>
                        <input type="email" class="third-row-select-box" placeholder="xyz@gmail.com" name="email" required />
                    </div>
                    <div class="aadhar">
                        <div class="small-bold-text size">Aadhar number</div>
                        <input type="text" class="third-row-select-box" placeholder="xxxx" name="aadhar_number" required />
                    </div>
                    <div class="password">
                        <div class="small-bold-text size">Create Password</div>
                        <input type="password" id="passwords" class="third-row-select-box" placeholder="Create password" name="password" required />
                    </div>
                    <div class="confirm_password">
                        <div class="small-bold-text size">Confirm Password</div>
                        <input type="password" id="confirm_pass" class="third-row-select-box" placeholder="Confirm password" name="confirm_password" required />
                    </div>
                    <div class="Work_experience">
                        <div class="small-bold-text size">Work Experience</div>
                        <input type="text" class="third-row-select-box" placeholder="In months" name="work_experience" required />
                    </div>
                    <div class="postal-code">
                        <div class="small-bold-text size">Postal code</div>
                        <input type="text" class="third-row-select-box" placeholder="1234" name="postal-code" required />
                    </div>
                    <div class="city" style="position: relative">
                        <div class="small-bold-text size">City</div>
                        <select type="text" class="category-select-box" name="city" required>
                            <option value="city">Select city</option>
                            <option value="surat">Surat</option>
                            <option value="ahemdabad">Ahemdabad</option>
                            <option value="vadodara">Vadodara</option>
                            <option value="bhavnagar">Bhavnagar</option>
                            <option value="rajkot">Rajkot</option>
                        </select>
                        <svg xmlns="http://www.w3.org/2000/svg" height="1rem" fill="grey" class="down-caret" viewBox="0 0 448 512">
                            <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                            <path d="M201.4 342.6c12.5 12.5 32.8 12.5 45.3 0l160-160c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L224 274.7 86.6 137.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l160 160z" />
                        </svg>
                    </div>
                    <div class="address">
                        <div class="small-bold-text size">Your address</div>
                        <input type="text" class="category-select-box" placeholder="street , house-number" name="address" required />
                    </div>
                </div>
                <div class="terms flex">
                    <div class="left-part terms flex">
                        <input type="checkbox" name="terms" id="terms" required />
                        <div class="small-bold-text">
                            <label for="terms" style="cursor: pointer">I accept terms and conditions of look for worker</label>
                        </div>
                    </div>
                    <input value="Validate my request" type="submit" name="add-worker" class="primary-btn add-worker" />
                </div>
            </form>
        </div>
    </div>
</section>
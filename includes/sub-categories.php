<?php include "db.php"; ?>

<option value="">Select sub category</option>
<?php
$category_id = $_POST["category_id"];
$query = "SELECT * FROM catagories WHERE parent_id = $category_id ";
$query_cat = mysqli_query($connection, $query);
while ($row = mysqli_fetch_assoc($query_cat)) {
    $cat_id = $row['category_id'];
    $cat_type = $row['category_name'];
    echo "<option value ='{$cat_type}' class ='option-style'>{$cat_type}</option>";
}
?>
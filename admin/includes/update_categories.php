<?php include "includes/admin_header.php" ?>

<form action="" method="post">
    <div class="form-group">
        <label for="cat-title">Edit Category</label>

<?php
if(isset($_GET['edit'])) {
    $cat_id = $_GET['edit'];

    $query = "SELECT * FROM categories WHERE id = $cat_id "; 
    $select_categories_id = mysqli_query($connect, $query);

    while ($row = mysqli_fetch_assoc($select_categories_id)) {
    $cat_id = $row['id'];
    $cat_title = $row['cat_title'];
    ?>

<input value="<?php if(isset($cat_title)) {echo $cat_title;} ?>" class="form-control" type="text" name="cat_title">

<?php }} ?>

    <?php //upadte query
        if(isset($_POST['update_category'])) {
        $the_cat_title = $_POST['cat_title'];
        $query = "UPDATE categories SET cat_title = '{$the_cat_title}' WHERE id = {$cat_id} ";
        $update_query = mysqli_query($connect, $query);
          if(!$update_query) {
        die('QUERY FAILED' . mysqli_error($connect));
    }                            
    }


    ?>


       
    </div>
    <div class="form-group">
        <input class="btn btn-primary" type="submit" name="update_category" value="Update Category">
    </div>
</form>
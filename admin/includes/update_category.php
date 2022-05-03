<form action="" method="POST">
    <div class="form-group">
        <label for="cat_title">Edit Category</label>
        <?php
        if (isset($_GET['edit_id'])) {
            $edit_id = $_GET['edit_id'];
            $query = "SELECT * FROM categories ";
            $query .=  "WHERE cat_id = {$edit_id}";
            $result = mysqli_query($connection, $query);
            while ($row = mysqli_fetch_assoc($result)) {
                $cat_id =  $row['cat_id'];
                $cat_title =  $row['cat_title'];
                echo "<input type='text' class='form-control' name='new_cat_title' value='$cat_title'>";
            }
        }


        if (isset($_POST['update_submit'])) {
            if (empty($_POST['new_cat_title'])) {
                echo "<em>Update category cannot be empty</em>";
            } else {

                $update_id = $_GET['edit_id'];
                $update_title = $_POST['new_cat_title'];
                $query = "UPDATE categories SET cat_title = '$update_title' WHERE cat_id = $update_id";
                $result = mysqli_query($connection, $query);
                if (!$result) {
                    echo "Query Failed " . mysqli_error($connection);
                }
            }
        }
        ?>
    </div>
    <div class="form-group">
        <input type="submit" class="btn btn-primary" name="update_submit" value="Update Category">
    </div>
</form>
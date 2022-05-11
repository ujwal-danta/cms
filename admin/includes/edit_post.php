<?php
$query = "SELECT * FROM posts";
$result = mysqli_query($connection, $query);
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $post_id = $row['post_id'];
        $post_category_id = $row['post_category_id'];
        $post_title = $row['post_title'];
        $post_author = $row['post_author'];
        $post_date = $row['post_date'];
        $post_image = $row['post_image'];
        $post_tags = $row['post_tags'];
        $post_comment_count = $row['post_comment_count'];
        $post_status = $row['post_status'];
        $post_content = $row['post_content'];
    }
}


?>








<form action="" method="POST" enctype="multipart/form-data">
    <div class="form-group">
        <label for="">Post Title</label>
        <input type="text" value=<?php echo "$post_title"; ?> class="form-control" name="post_title">
    </div>
    <div class="form-group">
        <label for="">Post Category Id</label>
        <input type="text" value=<?php echo "$post_category_id"; ?> class="form-control" name="post_category_id">
    </div>
    <div class="form-group">
        <label for="">Post Author</label>
        <input type="text" value=<?php echo "$post_author"; ?> class="form-control" name="post_author">
    </div>
    <div class="form-group">
        <label for="">Post Status</label>
        <input type="text" value=<?php echo "$post_status"; ?> class="form-control" name="post_status">
    </div>
    <div class="form-group">
        <label for="">Post image</label>
        <input type="file" class="form-control-file" name="post_image">
    </div>
    <div class="form-group">
        <label for="">Post Tags</label>
        <input type="text" value=<?php echo "$post_tags"; ?> class="form-control" name="post_tags">
    </div>
    <div class="form-group">
        <label for="">Post Content</label>
        <textarea class="form-control" rows="10" cols="30" name="post_content">
        <?php echo "$post_content"; ?>
        </textarea>
    </div>
    <input type="submit" class="btn btn-primary" name='add_post'>
</form>
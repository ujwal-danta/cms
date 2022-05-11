<?php
if (isset($_POST['add_post'])) {
    $post_title = $_POST['post_title'];
    $post_category_id = $_POST['post_category_id'];
    $post_author = $_POST['post_author'];
    $post_date = date("y-m-d");
    $filename = $_FILES["post_image"]["name"];
    $tempname = $_FILES["post_image"]["tmp_name"];
    $post_content = $_POST['post_content'];
    $post_tags = $_POST['post_tags'];
    $post_comment_count = 4;
    $post_status = $_POST['post_status'];

    move_uploaded_file($tempname, "../images/$filename");


    $query = "INSERT INTO posts (post_category_id,post_title,post_author,post_date,post_image,post_content,post_tags,post_comment_count,post_status)";
    $query .= "VALUES ( $post_category_id ,'$post_title','$post_author',now(),'$filename',' $post_content','$post_tags',' $post_comment_count',' $post_status')";
    $result = mysqli_query($connection, $query);
    confirm($result);
}




?>




<form action="" method="POST" enctype="multipart/form-data">
    <div class="form-group">
        <label for="">Post Title</label>
        <input type="text" class="form-control" name="post_title">
    </div>
    <div class="form-group">
        <label for="">Post Category Id</label>
        <input type="text" class="form-control" name="post_category_id">
    </div>
    <div class="form-group">
        <label for="">Post Author</label>
        <input type="text" class="form-control" name="post_author">
    </div>
    <div class="form-group">
        <label for="">Post Status</label>
        <input type="text" class="form-control" name="post_status">
    </div>
    <div class="form-group">
        <label for="">Post image</label>
        <input type="file" class="form-control-file" name="post_image">
    </div>
    <div class="form-group">
        <label for="">Post Tags</label>
        <input type="text" class="form-control" name="post_tags">
    </div>
    <div class="form-group">
        <label for="">Post Content</label>
        <textarea class="form-control" rows="10" name="post_content"></textarea>
    </div>
    <input type="submit" class="btn btn-primary" name='add_post'>
</form>
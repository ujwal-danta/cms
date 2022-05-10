<?php
if (isset($_POST['add_post']))

    echo "post added";

?>




<form action="" method="POST" enctype="multipart/form-data">
    <div class="form-group">
        <label for="">Post Title</label>
        <input type="text" class="form-control" name="post_title">
    </div>
    <div class="form-group">
        <label for="">Post Category</label>
        <input type="text" class="form-control" name="post_category">
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
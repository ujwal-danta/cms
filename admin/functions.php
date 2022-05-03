<?php

function insert_category()
{
    global $connection;
    if (isset($_POST['submit'])) {
        $cat_title = $_POST['cat_title'];
        if ($cat_title == "" || empty($cat_title)) {
            echo "<em>Category cannot be empty</em>";
        } else {
            $query = "INSERT INTO categories(cat_title)";
            $query .= "VALUES ('$cat_title')";
            $insert = mysqli_query($connection, $query);
            if (!$insert) {
                die("QUERY FAILED" . " " . mysqli_error($connection));
            }
        }
    }
}

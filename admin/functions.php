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


function find_all_categories()
{
    global $connection;
    $query = "SELECT * FROM categories";
    $result = mysqli_query($connection, $query);
    while ($row = mysqli_fetch_assoc($result)) {
        $cat_id =  $row['cat_id'];
        $cat_title =  $row['cat_title'];
        echo "<tr>";
        echo "<td>{$cat_id}</td>";
        echo "<td>{$cat_title}</td>";
        echo "<td><a href='categories.php?delete_id={$cat_id}'>DELETE</a></td>";
        echo "<td><a href='categories.php?edit_id={$cat_id}'>EDIT</a></td>";
        echo "<tr>";
    }
}

function delete_category()
{
    global $connection;
    if (isset($_GET['delete_id'])) {
        $delete_id = $_GET['delete_id'];
        $delete_query = "DELETE FROM categories WHERE cat_id = {$delete_id}";
        $delete = mysqli_query($connection, $delete_query);
        if (!$delete) {
            die("QUERY FAILED" . " " . mysqli_error($connection));
        }
    }
}

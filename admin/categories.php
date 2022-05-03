<!-- header -->
<?php include 'includes/admin_header.php' ?>





<div id="wrapper">

    <!-- Navigation -->
    <?php include 'includes/admin_navigation.php' ?>

    <div id="page-wrapper">

        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        WELCOME TO ADMIN
                        <small>Author Name</small>
                    </h1>
                    <div class="col-xs-6">


                        <?php
                        insert_category();
                        ?>


                        <?php
                        //DELETE
                        if (isset($_GET['delete_id'])) {
                            $delete_id = $_GET['delete_id'];
                            $delete_query = "DELETE FROM categories WHERE cat_id = {$delete_id}";
                            $delete = mysqli_query($connection, $delete_query);
                            if (!$delete) {
                                die("QUERY FAILED" . " " . mysqli_error($connection));
                            }
                        }


                        ?>
                        <form action="" method="POST">
                            <div class="form-group">
                                <label for="cat_title">Add Category</label>
                                <input type="text" class="form-control" name="cat_title">
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-primary" name="submit" value="Add Category">
                            </div>
                        </form>


                        <!-- UPDATE FORM -->
                        <?php
                        if (isset($_GET['edit_id']))
                            include 'includes/update_category.php'
                        ?>



                    </div>
                    <div class="col-xs-6">
                        <?php
                        $query = "SELECT * FROM categories";
                        $result = mysqli_query($connection, $query);
                        ?>




                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Category Name</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php
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
                                ?>
                            </tbody>
                        </table>
                    </div>


                </div>
            </div>
            <!-- /.row -->

        </div>
        <!-- /.container-fluid -->


    </div>
    <!-- /#page-wrapper -->

    <?php include('includes/admin_footer.php'); ?>
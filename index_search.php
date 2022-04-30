<!-- header -->
<?php include('./includes/header.php')  ?>

<!-- Navigation -->
<?php include('./includes/navigation.php')  ?>

<!-- db -->
<!-- <?php include('./includes/db.php')  ?> -->





<!-- Page Content -->
<div class="container">

    <div class="row">

        <!-- Blog Entries Column -->




        <div class="col-md-8">




            <?php


            $input = $_POST['input'];
            $query = "SELECT * FROM posts WHERE post_tags LIKE '%$input%' ";
            $result = mysqli_query($connection, $query);
            if (mysqli_num_rows($result)) {
                echo "<h1?> Results Found </h1>";
            } else {
                echo "<h1>Not Found</h1>";
            }
            while ($row = mysqli_fetch_assoc($result)) {
                $post_title = $row["post_title"];
                $post_author = $row["post_author"];
                $post_date = $row["post_date"];
                $post_content = $row["post_content"];
                $post_image = $row["post_image"];
            ?>


                <h1 class="page-header">
                    Page Heading
                    <small>Secondary Text</small>
                </h1>

                <!-- First Blog Post -->
                <h2>
                    <a href="#">
                        <?php echo $post_title ?>
                    </a>
                </h2>
                <p class="lead">
                    by <a href="index.php">
                        <?php echo $post_author ?>
                    </a>
                </p>
                <p><span class="glyphicon glyphicon-time"></span> <?php echo $post_date ?> </p>
                <hr>
                <img class="img-responsive" src="./images/<?php echo $post_image ?>" alt="not-found">
                <hr>
                <p> <?php echo  $post_content ?> </p>
                <a class="btn btn-primary" href="#">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>

                <hr>

            <?php   } ?>



        </div>





        <!-- Blog Sidebar Widgets Column -->
        <?php include('./includes/sidebar.php') ?>






    </div>
    <!-- /.row -->

    <hr>

    <?php include('./includes/footer.php') ?>
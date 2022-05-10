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


                    <?php
                    if (isset($_GET['source'])) {
                        $source = $_GET['source'];
                    } else {
                        $source = '';
                    }

                    switch ($source) {
                        case 'add_post':
                            include './includes/add_post.php';
                            break;
                        case '2':
                            echo "Request 2";
                            break;
                        default:
                            include './includes/get_all_posts.php';
                            break;
                    }

                    ?>






                </div>
            </div>
            <!-- /.row -->

        </div>
        <!-- /.container-fluid -->


    </div>
    <!-- /#page-wrapper -->

    <?php include('includes/admin_footer.php'); ?>
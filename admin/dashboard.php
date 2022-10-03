<?php 
include("../path.php");
?>
<?php include(ROOT_PATH . "/app/controllers/posts.php"); 
adminOnly();
?>
<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/69a2be8018.js" crossorigin="anonymous"></script>

    <!--- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Arima+Madurai:wght@100&family=Candal&family=Lora&family=Philosopher&display=swap" rel="stylesheet">
    
    <!-- Custom Styling -->
    <link rel="stylesheet" href="../assets/css/style.css">

    
    <!-- Admin Styling -->
    <link rel="stylesheet" href="../assets/css/admin.css">
    
    <title>Admin Section - Dashboard</title>
</head>

<body>

    <?php include(ROOT_PATH . "/app/includes/adminHeader.php"); ?>

    <!-- Admin Page Wrapper -->
    <div class="admin-wrapper">

        <!-- Left Sidebar -->
        <div class="left-sidebar">
            <ul>
                <li><a href="posts/postsIndex.php">Manage Posts</a></li>
                <li><a href="users/usersIndex.php">Manage Users</a></li>
                <li><a href="topics/topicsIndex.php">Manage Topics</a></li>
            </ul>

        </div>
        <!-- // Left Sidebar-->

        <!-- Admin Content -->
        <div class="admin-content">
            
            <div class="content">

                <h2 class="page-title">Dashboard</h2>

                <?php include(ROOT_PATH . "/app/includes/messages.php"); ?>
                
            </div>

        </div>
        <!-- //Admin Content -->


    </div>
    <!-- // Page Wrapper -->

   
    
    <!-- JQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" ></script>

    <!-- CKEditor -->
    <script src="https://cdn.ckeditor.com/ckeditor5/31.1.0/classic/ckeditor.js"></script>
   
    <!-- Custom Script -->
    <script src="../assets/js/scripts.js"></script>

</body>

</html>
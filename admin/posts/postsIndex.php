<?php 
include("../../path.php");
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
    <link rel="stylesheet" href="../../assets/css/style.css">

    
    <!-- Admin Styling -->
    <link rel="stylesheet" href="../../assets/css/admin.css">
    
    <title>Admin Section - Manage Posts</title>
</head>

<body>

    <?php include(ROOT_PATH . "/app/includes/adminHeader.php"); ?>

    <!-- Admin Page Wrapper -->
    <div class="admin-wrapper">

        <!-- Left Sidebar -->
        <?php include(ROOT_PATH . "/app/includes/adminSidebar.php"); ?>
        <!-- // Left Sidebar-->

        <!-- Admin Content -->
        <div class="admin-content">
            <div class="button-group">
                <a href="createPost.php" class="btn btn-big">Add Post</a>
                <a href="postsIndex.php" class="btn btn-big">Manage Post</a>
            </div>


            <div class="content">

                <h2 class="page-title">Manage Posts</h2>

                <?php include(ROOT_PATH . "/app/includes/messages.php"); ?>

                <table>
                    <thead>
                        <th>SN</th>
                        <th>Title</th>
                        <th colspan="3">Action</th>
                    </thead>
                    <tbody>
                    <?php foreach ($posts as $key => $post): ?>
                        <tr>
                            <td><?php echo $key +1; ?></td>
                            <td><?php echo $post['title']; ?></td>
                            <td>Bilal</td>
                            <td><a href="editPost.php?id=<?php echo $post['id']; ?>" class="edit">edit</a></td>
                            <td><a href="editPost.php?del_id=<?php echo $post['id']; ?>" class="delete">delete</a></td>
                            <?php if ($post['published']): ?>
                                <td><a href="editPost.php?published=0&p_id=<?php echo $post['id']; ?>" class="unpublish">unpublish</a></td>
                            <?php else: ?>
                                <td><a href="editPost.php?published=1&p_id=<?php echo $post['id']; ?>" class="publish">publish</a></td>
                            <?php endif; ?>
                            
                        </tr>
                    <?php endforeach; ?>
    
                    </tbody>
                </table>
            </div>

        </div>
        <!-- //Admin Content -->


    </div>
    <!-- // Page Wrapper -->

   
    
    <!-- JQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" ></script>
   
    <!-- Custom Script -->
    <script src="../../assets/js/scripts.js"></script>

</body>

</html>
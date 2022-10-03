<?php 
include("../../path.php");
?>
<?php include(ROOT_PATH . "/app/controllers/users.php"); 
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
    
    <title>Admin Section - Edit Users</title>
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
                <a href="createUser.php" class="btn btn-big">Add User</a>
                <a href="usersIndex.php" class="btn btn-big">Manage User</a>
            </div>


            <div class="content">

                <h2 class="page-title">Edit User</h2>
                <?php include(ROOT_PATH . "/app/helpers/formErrors.php"); ?>

                <form action="editUser.php" method="post">

                    <input type="hidden" name="id" value="<?php echo $id; ?>">

                    <div>
                     <label>Username</label>
                     <input type="text" name="username" value="<?php echo $username; ?>" class="text-input">
                    </div>
                    <div>
                         <label>Email</label>
                         <input type="email" name="email" value="<?php echo $email; ?>" class="text-input">
                    </div>
                    <div>
                         <label>Password</label>
                         <input type="password" name="password" value="<?php echo $password; ?>" class="text-input">
                    </div>
                    <div>
                         <label>Password Confirmation</label>
                         <input type="password" name="passwordConf" value="<?php echo $passwordConf; ?>" class="text-input">
                    </div>
                    <div>
                        <?php if (isset($admin) && $admin == 1): ?>
                            <label>
                                <input type="checkbox" name="admin" checked>
                                Admin
                            </label>
                        <?php else: ?>
                            <label>
                                <input type="checkbox" name="admin">
                                Admin
                            </label>
                        <?php endif; ?>

                    </div>

                    
                    <div>
                        <button type="submit" name="update-user" class="btn btn-big">Update User</button>
                    </div>
                </form>
                
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
    <script src="../../assets/js/scripts.js"></script>

</body>

</html>